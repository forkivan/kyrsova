<?php
require_once __DIR__ . '/../login-and-register/src/helpers.php';

checkAuth();

$id = isset($_GET['id']) ? intval($_GET['id']) : 1;
$dayTime = isset($_GET['dayTime']) ? $_GET['dayTime'] : '';
$userId = $_SESSION['user']['id'];

// Визначаємо день і час
$daysMap = [
    'Mon' => 'Понеділок',
    'Tue' => 'Вівторок',
    'Wed' => 'Середа',
    'Thu' => 'Четвер',
    'Fri' => 'П\'ятниця'
];

$day = substr($dayTime, 0, 3);
$timeIndex = substr($dayTime, 3);

$times = ["12:00", "13:00", "14:00", "15:00", "16:00"];
$time = isset($times[$timeIndex - 1]) ? $times[$timeIndex - 1] : '';

$dayName = isset($daysMap[$day]) ? $daysMap[$day] : '';

?>
<!DOCTYPE html>
<html lang="ua" data-theme="light">
<?php include_once __DIR__ . '/components/head2.php'?>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($dayTime && updateSchedule($id, $dayTime, $userId)) {           
?>
            <div class="card">
                <h1 class="ForHeader">Запис успішно оновлено.</h1>
                <div class="ForButtonConfirm">
                    <form action="doctor.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit">Повернутись</button>
                    </form>
                </div>
            </div>
            <?php
        } else {
            echo "Сталася помилка при оновленні запису.";
        }
    } else {
?>
        <div class="card">
            <h1 class="ForHeader">Підтвердження</h1>
            <p class="ForHeader">Ви впевнені, що хочете забронювати у <?php echo htmlspecialchars($dayName); ?> о <?php echo htmlspecialchars($time); ?>?</p>
            <div class="ForButtonConfirm">
                <form class="ForFormConfirm" method="post">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                    <input type="hidden" name="dayTime" value="<?php echo htmlspecialchars($dayTime); ?>">
                    <button type="submit">Так</button>
                </form>
                <form class="ForFormConfirm" action="doctor.php" method="post">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                    <button type="submit">Відмінити</button>
                </form>
            </div>
        </div>
<?php
    }
?>
</body>
</html>
