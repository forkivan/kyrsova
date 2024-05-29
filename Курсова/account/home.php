<?php 
include_once __DIR__ . '/../login-and-register/src/helpers.php';
checkAuth();
?>

<!DOCTYPE html>
<html lang="ua" data-theme="light">
<?php include_once __DIR__ . '/components/head3.php'?>
<?php
    $user = currentUser();
    $appointments = getUserAppointments($user['id']);
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancel_appointment'])) {
        $appointmentId = $_POST['appointment_id'];
        cancelAppointment($appointmentId, $user['id']);
        header("Location: /kyrsova/Курсова/account/home.php");
        exit;
    }
    if(!isset($_SESSION['user']['id'])){
        include_once __DIR__ . '/../../header_login.php';
    }
    else include_once __DIR__ . '/../../header_logout.php';
?>
<body>

<div class="card home">
    <h1 class="ForHeader">Привіт, <?php echo htmlspecialchars($user['name']); ?>!</h1>
    <div class="ForHeader">
        <p>Ваш email: <?php echo htmlspecialchars($user['email']); ?></p>
        <form action="/kyrsova/Курсова/login-and-register/src/actions/logout.php" method="post">
            <button role="button">Вийти з облікового запису</button>
        </form>
        <h2>Ваші записи до лікарів</h2>
        <?php if ($appointments): ?>
            <ul class="appointments-list">
                <?php foreach ($appointments as $appointment): ?>
                    <li>
                        <p>Лікар: <?php echo htmlspecialchars($appointment['doctor_name']); ?></p>
                        <p>Дата: <?php echo htmlspecialchars($appointment['appointment_date']); ?></p>
                        <p>Час: <?php echo htmlspecialchars($appointment['appointment_time']); ?></p>
                        <form action="/kyrsova/Курсова/account/home.php" method="post">
                            <input type="hidden" name="appointment_id" value="<?php echo $appointment['id']; ?>">
                            <button class="cancel" type="submit" name="cancel_appointment">Відмінити запис</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>У вас немає записів до лікарів.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>