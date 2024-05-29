<header>
    <meta charset="UTF-8">
    <title>Achillelius - Мій кабінет</title>
</header>
    
<?php 
    if(!isset($_SESSION['user']['id'])){
        include_once __DIR__ . '/../../header_login.php';
    }
    else include_once __DIR__ . '/../../header_logout.php';
?>

<link rel="stylesheet" href="\kyrsova\Курсова\login-and-register\assets\pico.classless.jade.css">
<link rel="stylesheet" href="\kyrsova\Курсова\account\components\acc.css">
