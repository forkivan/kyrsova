<?php
require_once __DIR__ . '/src/helpers.php';

checkAuth();

$user = currentUser();
?>

<!DOCTYPE html>
<html lang="ua" data-theme="light">
<?php include_once __DIR__ . '/components/head.php'?>
<body>

<div class="card home">
    <h1>Привет, <?php echo $user['name'] ?>!</h1>
    <form action="src/actions/logout.php" method="post">
        <button role="button">Вийти з облікового запису</button>
    </form>
</div>

<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>