<?php include_once __DIR__ . '/../login-and-register/src/helpers.php' ?>
<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Achillelius - про лікарню</title>
</head>
<body>
	<?php 
		if(!isset($_SESSION['user']['id'])){
			include_once __DIR__ . '/../header_login.php';
		}
		else include_once __DIR__ . '/../header_logout.php';
	?>
	<link rel="stylesheet" href="components/aboutus.css">
	
	<section class="BlockForContent">
		<div class="InfoBlock">
			<div class="TextContent">
				<h1 class="GreenHeader">Загальна інформація</h1>
				<p>
					Комунальне некомерційне підприємство "Achillelius, Українська національна клінічна лікарня" є передовою багатопрофільною медичною установою, призначеною для надання високоспеціалізованої медичної допомоги на третинному рівні.
				</p>
			</div>
			<div class="ImageContent">
				<img src="img/PageIllustration.jpg" alt="Hospital illustration">
			</div>
		</div>
		
		<div class="InfoBlock">
			<div class="TextContent">
				<h1 class="GreenHeader">Місія та цінності</h1>
				<p>
					Головна місія нашої клініки полягає в забезпеченні якості та доступності медичних послуг. Ми прагнемо забезпечити кожного пацієнта високоякісною медичною допомогою, використовуючи сучасні методи діагностики та лікування. Наша команда працює наполегливо, щоб забезпечити оптимальні умови лікування та відновлення здоров'я кожного пацієнта.
				</p>
			</div>
			<div class="ImageContent">
				<img src="img/MissionIllustration.jpg" alt="Hospital illustration">
			</div>
		</div>
		
		<div class="InfoBlock">
			<div class="TextContent">
				<h1 class="GreenHeader">Наші послуги</h1>
				<ul>
					<li>Діагностика: Широкий спектр сучасних діагностичних досліджень, включаючи лабораторні аналізи, ультразвукові дослідження, МРТ та КТ.</li>
					<li>Лікування: Висококваліфікована медична допомога у різних галузях, таких як кардіологія, онкологія, неврологія, ортопедія та інші.</li>
					<li>Хірургія: Виконання складних хірургічних втручань за допомогою сучасного обладнання та технологій.</li>
					<li>Реабілітація: Програми відновлення та реабілітації для пацієнтів після хірургічних втручань та важких захворювань.</li>
				</ul>
			</div>
			<div class="ImageContent">
				<img src="img/RoomImage.jpg" alt="Hospital illustration">
			</div>
		</div>
		
		<div class="InfoBlock">
			<div class="TextContent">
				<h1 class="GreenHeader">Наша команда</h1>
				<p>
					Наш медичний персонал складається з досвідчених лікарів, медсестер та іншого медичного персоналу, які мають високу кваліфікацію та багаторічний досвід роботи. Кожен член нашої команди проходить регулярне підвищення кваліфікації та навчання, щоб бути в курсі новітніх медичних досягнень.
				</p>
			</div>
			<div class="ImageContent">
				<img src="img/Workers.jpg" alt="Hospital illustration">
			</div>
		</div>
		
		<div class="InfoBlock">
			<div class="TextContent">
				<h1 class="GreenHeader">Історія лікарні</h1>
				<p>
					Наша лікарня була заснована у 1995 році і з того часу стала одним з провідних медичних закладів країни. Протягом своєї історії ми постійно розширюємо спектр послуг та модернізуємо обладнання, щоб відповідати найвищим стандартам медичної допомоги.
				</p>
			</div>
			<div class="ImageContent">
				<img src="img/History.jpg" alt="Hospital illustration">
			</div>
		</div>
	</div>
	
	<?php include_once __DIR__ . '/../footer.php'; ?>
</body>
</html>
