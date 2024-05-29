<?php
require_once __DIR__ . '/src/helpers.php';

checkGuest();
?>

<!DOCTYPE html>
<html lang="ua" data-theme="light">
<?php require_once __DIR__ . '/components/head.php'; ?>
<body>

<form class="card" action="src/actions/register.php" method="post" enctype="multipart/form-data">
    <h2 class="ForHeader">Реєстрація</h2>

    <label for="name">
        Ім`я
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Иван"
            value="<?php echo old('name') ?>"
            <?php echo validationErrorAttr('name'); ?>
        >
        <?php if(hasValidationError('name')): ?>
            <small><?php echo validationErrorMessage('name'); ?></small>
        <?php endif; ?>
    </label>

    <label for="email">
        E-mail
        <input
            type="text"
            id="email"
            name="email"
            placeholder="ivan@areaweb.su"
            value="<?php echo old('email') ?>"
            <?php echo validationErrorAttr('email'); ?>
        >
        <?php if(hasValidationError('email')): ?>
            <small><?php echo validationErrorMessage('email'); ?></small>
        <?php endif; ?>
    </label>


    <div class="grid">
        <label for="password">
            Пароль
            <input
                type="password"
                id="password"
                name="password"
                placeholder="******"
                <?php echo validationErrorAttr('password'); ?>
            >
            <?php if(hasValidationError('password')): ?>
                <small><?php echo validationErrorMessage('password'); ?></small>
            <?php endif; ?>
        </label>

        <label for="password_confirmation">
            Підтвердження
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="******"
            >
        </label>
    </div>

    <fieldset>
        <label for="terms">
            <input
                type="checkbox"
                id="terms"
                name="terms"
            >
            Я приймаю всі умови користування
        </label>
    </fieldset>

    <button
        type="submit"
        id="submit"
        disabled
    >Продовжити</button>
</form>

<p>У мене вже є <a href="/kyrsova/Курсова/login-and-register/login.php">акаунт</a></p>

<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>