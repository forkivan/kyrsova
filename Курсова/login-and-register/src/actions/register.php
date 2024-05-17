<?php

require_once __DIR__ . '/../helpers.php';


$avatarPath = null;
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;

// Виконуємо валідацію отриманих даних із форми

if (empty($name)) {
    setValidationError('name', 'Неправильне ім`я');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setValidationError('email', 'Вказано неправильну пошту');
}

if (empty($password)) {
    setValidationError('password', 'Пароль порожній');
}

if ($password !== $passwordConfirmation) {
    setValidationError('password', 'Паролі не співпадають');
}

// Якщо список з помилками валідації не порожній, то виконуємо редирект назад на форму

if (!empty($_SESSION['validation'])) {
    setOldValue('name', $name);
    setOldValue('email', $email);
    redirect('/kyrsova/Курсова/login-and-register/register.php');
}


$pdo = getPDO();

$query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";

$params = [
    'name' => $name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT)
];

$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/kyrsova/Курсова/login-and-register/login.php');
