<?php

session_start();

require_once __DIR__ . '/config.php';

function redirect(string $path)
{
    header("Location: $path");
    die();
}

function setValidationError(string $fieldName, string $message): void
{
    $_SESSION['validation'][$fieldName] = $message;
}

function hasValidationError(string $fieldName): bool
{
    return isset($_SESSION['validation'][$fieldName]);
}

function validationErrorAttr(string $fieldName): string
{
    return isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"' : '';
}

function validationErrorMessage(string $fieldName): string
{
    $message = $_SESSION['validation'][$fieldName] ?? '';
    unset($_SESSION['validation'][$fieldName]);
    return $message;
}

function setOldValue(string $key, mixed $value): void
{
    $_SESSION['old'][$key] = $value;
}

function old(string $key)
{
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}

function setMessage(string $key, string $message): void
{
    $_SESSION['message'][$key] = $message;
}

function hasMessage(string $key): bool
{
    return isset($_SESSION['message'][$key]);
}

function getMessage(string $key): string
{
    $message = $_SESSION['message'][$key] ?? '';
    unset($_SESSION['message'][$key]);
    return $message;
}

function getPDO(): PDO
{
    try {
        return new \PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    } catch (\PDOException $e) {
        die("Connection error: {$e->getMessage()}");
    }
}

function getSchedule(int $id)
{   
    $pdo = getPDO();
    $stmt = $pdo->prepare("SELECT Mon1, Mon2, Mon3, Mon4, Mon5, Tue1, Tue2, Tue3, Tue4, Tue5, Wed1, Wed2, Wed3, Wed4, Wed5, Thu1, Thu2, Thu3, Thu4, Thu5, Fri1, Fri2, Fri3, Fri4, Fri5 FROM likar WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function addAppointment($userId, $likarId, $date, $time, $dayOfWeek) {
    $pdo = getPDO();

    $stmt = $pdo->prepare("
        INSERT INTO appointments (user_id, likar_id, appointment_date, appointment_time, day_of_week) 
        VALUES (:user_id, :likar_id, :appointment_date, :appointment_time, :day_of_week)
    ");
    return $stmt->execute([
        'user_id' => $userId,
        'likar_id' => $likarId,
        'appointment_date' => $date,
        'appointment_time' => $time,
        'day_of_week' => $dayOfWeek
    ]);
}

function updateSchedule($id, $dayTime, $userId, $posluga) {
    $pdo = getPDO();

    $day = substr($dayTime, 0, 3);
    $timeIndex = substr($dayTime, 3);

    $date = date('Y-m-d'); 
    $times = ["12:00", "13:00", "14:00", "15:00", "16:00"];
    $time = isset($times[$timeIndex - 1]) ? $times[$timeIndex - 1] : '';

    $poslugaColumn = '';
    if ($posluga === 1) {
        $poslugaColumn = 'posluga1';
    } elseif ($posluga === 2) {
        $poslugaColumn = 'posluga2';
    } elseif ($posluga === 3) {
        $poslugaColumn = 'posluga3';
    }

    $lockName = "likar_{$id}_{$day}_{$timeIndex}";

    try {
        $pdo->beginTransaction();

        if (!acquireLock($lockName)) {
            $pdo->rollBack();
            return "Цей час вже зайнятий";
        }

        $stmt = $pdo->prepare("SELECT ${day}${timeIndex} FROM likar WHERE id = :id FOR UPDATE");
        $stmt->execute(['id' => $id]);
        $isBooked = $stmt->fetchColumn();

        if ($isBooked) {
            releaseLock($lockName);
            $pdo->rollBack();
            return "Цей час вже зайнятий";
        }

        $stmt = $pdo->prepare("SELECT ${poslugaColumn} FROM likar WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $poslugaText = $stmt->fetchColumn();

        $stmt = $pdo->prepare("UPDATE likar SET ${day}${timeIndex} = 1 WHERE id = :id");
        $stmt->execute(['id' => $id]);

        $stmt = $pdo->prepare("
            INSERT INTO appointments (user_id, likar_id, appointment_date, appointment_time, day_of_week, posluga) 
            VALUES (:user_id, :likar_id, :appointment_date, :appointment_time, :day_of_week, :posluga)
        ");
        $stmt->execute([
            'user_id' => $userId,
            'likar_id' => $id,
            'appointment_date' => $date,
            'appointment_time' => $time,
            'day_of_week' => $day,
            'posluga' => $poslugaText
        ]);

        $pdo->commit();
        releaseLock($lockName);
        return true;
    } catch (Exception $e) {
        $pdo->rollBack();
        releaseLock($lockName);
        error_log("Error updating schedule: " . $e->getMessage());
        return false;
    }
}



// принцип mutex
function acquireLock($name) {
    $pdo = getPDO();
    $stmt = $pdo->prepare("SELECT is_locked FROM locks WHERE name = :name FOR UPDATE");
    $stmt->execute(['name' => $name]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        if ($row['is_locked']) {
            return false;
        }
        $stmt = $pdo->prepare("UPDATE locks SET is_locked = TRUE, locked_at = NOW() WHERE name = :name");
    } else {
        $stmt = $pdo->prepare("INSERT INTO locks (name, is_locked) VALUES (:name, TRUE)");
    }
    return $stmt->execute(['name' => $name]);
}
function releaseLock($name) {
    $pdo = getPDO();
    $stmt = $pdo->prepare("UPDATE locks SET is_locked = FALSE WHERE name = :name");
    return $stmt->execute(['name' => $name]);
}






function getUserAppointments($userId) {
    $pdo = getPDO();
    $stmt = $pdo->prepare("SELECT a.id, a.appointment_date, a.appointment_time, a.day_of_week, a.posluga, l.name as doctor_name 
                           FROM appointments a 
                           JOIN likar l ON a.likar_id = l.id 
                           WHERE a.user_id = :user_id");
    $stmt->execute(['user_id' => $userId]);
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
}

function cancelAppointment($appointmentId, $userId) {
    $pdo = getPDO();

    try {
        $pdo->beginTransaction();

        $stmt = $pdo->prepare("SELECT * FROM appointments WHERE id = :id AND user_id = :user_id");
        $stmt->execute(['id' => $appointmentId, 'user_id' => $userId]);
        $appointment = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($appointment) {
            $day = $appointment['day_of_week'];
            $time = array_search($appointment['appointment_time'], ["12:00", "13:00", "14:00", "15:00", "16:00"]) + 1;

            $stmt = $pdo->prepare("UPDATE likar SET ${day}${time} = NULL WHERE id = :id");
            $stmt->execute(['id' => $appointment['likar_id']]);

            $stmt = $pdo->prepare("DELETE FROM appointments WHERE id = :id");
            $stmt->execute(['id' => $appointmentId]);

            $pdo->commit();
            return true;
        } else {
            throw new Exception("Appointment not found or you do not have permission to cancel it.");
        }
    } catch (Exception $e) {
        $pdo->rollBack();
        error_log("Error cancelling appointment: " . $e->getMessage());
        return false;
    }
}


function getRandomNumberExcluding($exclude) {
    do {
        $randomNumber = random_int(1, 20);
    } while (in_array($randomNumber, $exclude));
    return $randomNumber;
}



function findUser(string $email)
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function findSpecialty(int $id)
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT specialty FROM likar WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function findName(int $id)
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT name FROM likar WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function findPosluga(int $id, int $poslugaNumber)
{
    $pdo = getPDO();

    $poslugaColumn = 'posluga' . $poslugaNumber;
    
    $stmt = $pdo->prepare("SELECT $poslugaColumn FROM likar WHERE id = :id");
    $stmt->execute(['id' => $id]);

    return $stmt->fetch(\PDO::FETCH_ASSOC);
}



function currentUser()
{
    $pdo = getPDO();

    if (!isset($_SESSION['user'])) {
        return false;
    }

    $userId = $_SESSION['user']['id'] ?? null;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $userId]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function logout(): void
{
    unset($_SESSION['user']['id']);
    redirect('/kyrsova/Курсова/');
}

function checkAuth(): void
{
    if (!isset($_SESSION['user']['id'])) {
        redirect('/kyrsova/Курсова/login-and-register/login.php');
    }
}

function checkGuest(): void
{
    if (isset($_SESSION['user']['id'])) {
        redirect('/kyrsova/Курсова/account/home.php');
    }
}