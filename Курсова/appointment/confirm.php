<?php
require_once __DIR__ . '/../login-and-register/src/helpers.php';

checkAuth();

$id = isset($_GET['id']) ? intval($_GET['id']) : 1;
$dayTime = isset($_GET['dayTime']) ? $_GET['dayTime'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($dayTime && updateSchedule($id, $dayTime)) {
        echo "Запис успішно оновлено.";
        
        ?>
        <form action="doctor.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit">Повернутись</button>
        </form>
        <?php
    } else {
        echo "Сталася помилка при оновленні запису.";
    }
} else {
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Підтвердження</title>
</head>
<body>
    <h1>Підтвердження</h1>
    <p>Ви впевнені, що хочете забронювати цей час?</p>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
        <input type="hidden" name="dayTime" value="<?php echo htmlspecialchars($dayTime); ?>">
        <button type="submit">Так</button>
    </form>
    <form action="doctor.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit">Відмінити</button>
    </form>

</body>
</html>
<?php
}
?>