<?php
require_once __DIR__ . '/../login-and-register/src/helpers.php';

checkAuth();

$id = isset($_GET['id']) ? intval($_GET['id']) : 1;
$dayTime = isset($_GET['dayTime']) ? $_GET['dayTime'] : '';
$posluga = isset($_GET['posluga']) ? intval($_GET['posluga']) : 1;

$userId = $_SESSION['user']['id'];

$pdo = getPDO();
$stmt = $pdo->prepare("SELECT posluga1, posluga2, posluga3 FROM likar WHERE id = :id");
$stmt->execute(['id' => $id]);
$likar = $stmt->fetch(PDO::FETCH_ASSOC);

$poslugaText = '';
if ($posluga === 1) {
    $poslugaText = $likar['posluga1'];
} elseif ($posluga === 2) {
    $poslugaText = $likar['posluga2'];
} elseif ($posluga === 3) {
    $poslugaText = $likar['posluga3'];
}

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
<?php include_once __DIR__ . '/components/head2.php' ?>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($dayTime) {
            $updateResult = updateSchedule($id, $dayTime, $userId, $posluga);
            if ($updateResult === true) {
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
            } elseif ($updateResult === "Цей час вже зайнятий") {
                ?>
                <div class="card">
                    <h1 class="ForHeader">Цей час вже зайнятий.</h1>
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
        }
    } else {
        ?>
        <div class="card">
            <h1 class="ForHeader">Підтвердження</h1>
            <p class="ForHeader">Ви впевнені, що хочете забронювати у <?php echo htmlspecialchars($dayName); ?> о
                <?php echo htmlspecialchars($time); ?>?</p>
            <p class="ForHeader">Послуга: <?php echo htmlspecialchars($poslugaText); ?></p>
            <div class="ForButtonConfirm">
                <form class="ForFormConfirm" method="post">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                    <input type="hidden" name="dayTime" value="<?php echo htmlspecialchars($dayTime); ?>">
                    <input type="hidden" name="posluga" value="<?php echo htmlspecialchars($posluga); ?>">
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