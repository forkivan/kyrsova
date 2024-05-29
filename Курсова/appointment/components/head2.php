<header>
    <meta charset="UTF-8">
    <title>Achillelius - Запис на прийом</title>
</header>

<?php 
    if(!isset($_SESSION['user']['id'])){
        include_once __DIR__ . '/../../header_login.php';
    }
    else include_once __DIR__ . '/../../header_logout.php';
?>
    <link rel="stylesheet" href="../login-and-register/assets/pico.classless.jade.css">
    <link rel="stylesheet" href="components/chose.css">
	