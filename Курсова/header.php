<?php
require_once __DIR__ . '/login-and-register/src/helpers.php';

if (!isset($_SESSION['user']['id'])) {
	$user = 'Вхід';
	$link = '\kyrsova\Курсова\login-and-register\login.php';
}
else {
	$user = 'Вихід';
	$link = '\kyrsova\Курсова\login-and-register\src\actions\logout.php';
}

?>

<!DOCTYPE html>
<html lang="ua">
	<div class="showHeader">
		<nav>
			<ul>
				<img src="\kyrsova\Курсова\Images\MainIcon.png" id="LogoHospital" alt="Logo icon"> 
				<li><a class="ArrowButton" href="<?php echo $link?>"><?php echo $user ?></a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\index.php">Головна</a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\aboutus.php">Про нас</a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\services.php">Послуги</a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\alldoctors.php">Лікарі</a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\appointment\chose.php">Запис до лікаря</a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\account\home.php">Кабінет</a></li>
			</ul>
		</nav>
	</div>

	<div class="hideHeader">
		<nav>
			<ul>
				<img src="\kyrsova\Курсова\Images\MainIcon.png" id="LogoHospital" alt="Logo icon"> 
				<li><a class="ArrowButton" href="\kyrsova\Курсова\account\home.php">Мій кабінет</a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\index.php">Головна</a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\aboutus.php">Про нас</a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\services.php">Послуги</a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\alldoctors.php">Лікарі</a></li>
				<li><a class="ArrowButton" href="\kyrsova\Курсова\appointment\chose.php">Запис до лікаря</a></li>
			</ul>
		</nav>
	</div>
</html>


<link rel="stylesheet" href="\kyrsova\Курсова\styles.css">
<link rel="stylesheet" href="\kyrsova\Курсова\main_page_styles.css">
<link rel="stylesheet" href="\kyrsova\Курсова\doctor_styles.css">