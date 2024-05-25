<?php
require_once __DIR__ . '/../login-and-register/src/helpers.php';

checkAuth();

$user = currentUser();
?>

<!DOCTYPE html>
<html lang="ua" data-theme="light">
<?php include_once __DIR__ . '/components/head3.php'?>
<body>

<div class="card home">
    <h1>Привет, <?php echo $user['name'] ?>!</h1>
    <div class="ForHeader">
        <form action="/kyrsova/Курсова/login-and-register/src/actions/logout.php" method="post">
            <button role="button">Вийти з облікового запису</button>
        </form>
    </div>
</div>

</body>
</html>