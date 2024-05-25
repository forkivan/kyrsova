<!DOCTYPE html>
<html lang="ua" data-theme="light">
<?php include_once __DIR__ . '/components/head3.php'?>
<?php
    checkAuth();
    $user = currentUser();
?>
<body>

<div class="card home">
        <h1 class="ForHeader">Привіт, <?php echo htmlspecialchars($user['name']); ?>!</h1>
        <div class="ForHeader">
            <p>Ваш email: <?php echo htmlspecialchars($user['email']); ?></p>
            <form action="/kyrsova/Курсова/login-and-register/src/actions/logout.php" method="post">
                <button role="button">Вийти з облікового запису</button>
            </form>
        </div>

        <div class="ForHeader">
            <h2>Змінити пароль</h2>
            <form action="change_password.php" method="post">
                <div>
                    <label for="current_password">Поточний пароль:</label>
                    <input type="password" name="current_password" id="current_password" required>
                </div>
                <div>
                    <label for="new_password">Новий пароль:</label>
                    <input type="password" name="new_password" id="new_password" required>
                </div>
                <div>
                    <label for="confirm_password">Підтвердіть новий пароль:</label>
                    <input type="password" name="confirm_password" id="confirm_password" required>
                </div>
                <button type="submit">Змінити пароль</button>
            </form>
        </div>
    </div>

</body>
</html>