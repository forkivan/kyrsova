<?php

require_once __DIR__ . '/../helpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setOldValue('email', $email);
    setValidationError('email', 'Неправильний формат електронної пошти');
    setMessage('error', 'Помилка валідації');
    redirect('/kyrsova/Курсова/login-and-register/login.php');
}

$user = findUser($email);

if (!$user) {
    setMessage('error', "Користувач $email не знайдений");
    redirect('/kyrsova/Курсова/login-and-register/login.php');
}

if (!password_verify($password, $user['password'])) {
    setMessage('error', 'Невірний пароль');
    redirect('/kyrsova/Курсова/login-and-register/login.php');
}

$_SESSION['user']['id'] = $user['id'];

redirect('/kyrsova/Курсова/account/home.php');