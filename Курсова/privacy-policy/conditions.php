<?php include_once __DIR__ . '/../login-and-register/src/helpers.php' ?>
<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Achillelius - умови використання</title>
</head>
<body>
	<?php 
		if(!isset($_SESSION['user']['id'])){
			include_once __DIR__ . '/../header_login.php';
		}
		else include_once __DIR__ . '/../header_logout.php';
	?>
	<link rel="stylesheet" href="components/policy.css">
	
	<section id="mainContent">
		<div class="row mb-3">
			<div class="col">
				<div id="inputResult">
					<div class="row mb-4">
						<div class="col">
							<h4><strong>Умови використання</strong></h4>
							<div class="descr">
								Останнє оновлення: 30.05.2024
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col">
							<h5>1. Прийняття умов</h5>
							<div class="descr">
								Використовуючи наш вебсайт, ви погоджуєтесь дотримуватись цих Умов використання та всіх застосовних законів і регламентів. Якщо ви не погоджуєтесь з будь-якою з цих умов, ви не маєте права використовувати цей сайт.
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col">
							<h5>2. Опис послуг</h5>
							<div class="descr">
								Комунальне некомерційне підприємство "Achillelius, Українська національна клінічна лікарня" надає інформацію про свої послуги, новини, контактні дані та іншу відповідну інформацію через цей вебсайт.
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col">
							<h5>3. Права та обов'язки користувачів</h5>
							<div class="descr">
								Користувачі зобов'язані використовувати цей сайт відповідально і відповідно до законодавства України. Забороняється втручатись у роботу сайту або здійснювати будь-які дії, що можуть завдати шкоди іншим користувачам або адміністрації сайту.
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col">
							<h5>4. Обмеження відповідальності</h5>
							<div class="descr">
								Ми не несемо відповідальності за будь-які прямі чи непрямі збитки, що можуть виникнути у зв'язку з використанням цього сайту. Вся інформація надається "як є" без будь-яких гарантій.
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col">
							<h5>5. Захист інтелектуальної власності</h5>
							<div class="descr">
								Весь контент, розміщений на цьому сайті, включаючи тексти, зображення, логотипи та інші матеріали, є власністю Комунального некомерційного підприємства "Achillelius" або використовується з дозволу правовласників.
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col">
							<h5>6. Конфіденційність та захист даних</h5>
							<div class="descr">
								Ми дбаємо про захист ваших персональних даних і обробляємо їх відповідно до нашої Політики конфіденційності.
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col">
							<h5>7. Зміни в умовах використання</h5>
							<div class="descr">
								Ми залишаємо за собою право змінювати ці Умови використання в будь-який час. Зміни набувають чинності з моменту їх публікації на сайті.
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col">
							<h5>8. Юрисдикція та вирішення спорів</h5>
							<div class="descr">
								Ці Умови використання регулюються законодавством України. Всі спори, що виникають у зв'язку з використанням цього сайту, підлягають вирішенню в судах України.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php include_once __DIR__ . '/../footer.php'; ?>
</body>
</html>
