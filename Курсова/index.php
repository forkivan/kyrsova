<!DOCTYPE html>

<html lang="ua">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Achillelius - Українська національна клінічна лікарня</title>
</head>
<body>
	<?php include 'header.php'; ?>
	
	<section>
		<div id="MainLogo">
			<h1>Achillelius</h1>
			<h2>Українська національна клінічна лікарня</h2>
		</div>
	</section>
	
	<section>
		<div class="BlockForContent">
			<div class="Card">
				<img src="Images/CardIcon1.png" class="CardIcon" alt="Testing icon">
				<h2 class = "CardTitle">Записатись на прийом</h2> 
				<p class = "CardText">Забезпечте собі першочергове медичне обслуговування, записавшись на прийом у нашу клініку. Наші досвідчені лікарі готові надати вам кваліфіковану медичну допомогу та забезпечити індивідуальний підхід до вашого стану здоров'я.</p>
				<button class="ButtonMoreInformation">Детальніше</button>
			</div>
			<div class="Card">
				<img src="Images/CardIcon2.png" class="CardIcon" alt="Testing icon">
				<h2 class = "CardTitle">Онлайн консультація</h2> 
				<p class = "CardText">Отримайте професійну медичну консультацію безпосередньо зручно з вашого дому. Наші лікарі доступні для онлайн обговорень, щоб відповісти на ваші питання та надати необхідні рекомендації з підтримки вашого здоров'я.</p>
				<button class="ButtonMoreInformation">Детальніше</button>
			</div>
			<div class="Card">
				<img src="Images/CardIcon3.png" class="CardIcon" alt="Testing icon">
				<h2 class = "CardTitle">Найкращі фахівці в країні</h2> 
				<p class = "CardText">У нашій клініці працюють найкращі медичні фахівці країни, які мають великий досвід у своїй області. За вами - досвідчена та уважна медична допомога, яка гарантує найвищий стандарт якості та результативність лікування.</p>
				<button class="ButtonMoreInformation">Детальніше</button>
			</div>
			<div class="Card">
				<img src="Images/CardIcon4.png" class="CardIcon" alt="Testing icon">
				<h2 class = "CardTitle">Дешеві послуги</h2> 
				<p class = "CardText">Ми розуміємо важливість доступної медичної допомоги, тому пропонуємо широкий спектр послуг за доступними цінами. Наша мета - зробити лікування доступним для всіх пацієнтів без втрати якості.</p>
				<button class="ButtonMoreInformation">Детальніше</button>
			</div>
			<div class="Card">
				<img src="Images/CardIcon5.png" class="CardIcon" alt="Testing icon">
				<h2 class = "CardTitle">Підтримка відомих заходів</h2> 
				<p class = "CardText">Наша клініка активно підтримує відомі заходи з медичного дослідження та розвитку. Ми беремо участь у проведенні конференцій, семінарів та медичних заходів, щоб бути в курсі останніх досягнень у галузі медицини та забезпечити нашим пацієнтам найкращі інноваційні методи лікування.</p>
				<button class="ButtonMoreInformation">Детальніше</button>
			</div>
		</div>
	</section>
	
	<section class="BlockForContent">
		<div id="AboutUs">
			<h1 class="GreenHeader">Про лікарню</h1>
			<p>
				Комунальне некомерційне підприємство "Achillelius, Українська національна клінічна лікарня" є передовою багатопрофільною медичною установою, призначеною для надання високоспеціалізованої медичної допомоги на третинному рівні. Головна місія нашої клініки полягає в забезпеченні якості та доступності медичних послуг для всіх наших пацієнтів. Наша команда медичних фахівців працює наполегливо, щоб забезпечити оптимальні умови лікування та відновлення здоров'я кожного пацієнта. Відкриваючи двері нашої лікарні, ми зобов'язані забезпечити вам не лише професійну медичну допомогу, але й надійну та затишну атмосферу, де ваше благополуччя є нашим пріоритетом.
			</p>
			<button class="ButtonMoreInformation" onclick="window.location.href='aboutus.php'">Детальніше</button>
		</div>
		<img src="Images/PageIllustration.jpg" id="HospitalIllustration" alt="Hospital illustration">
	</section>
	
	<section id="WorkerSection">
		<h1 class="GreenHeader">Лікарі</h1>
		<div class="BlockForContent">
			<div class="DoctorsRectangle">
				<img src="Images/DemoWomenPerson1.jpg" class="PersonIcon" alt="Testing icon">
				<h2 class = "CardTitle">Олександра Михайлівна Петренко</h2> 
				<p class = "CardText">Лікар-хірург вищої категорії</p>
				<button class="ButtonMoreInformation">Детальніше</button>
			</div>
			<div class="DoctorsRectangle">
				<img src="Images/DemoMenPerson1.jpg" class="PersonIcon" alt="Testing icon">
				<h2 class = "CardTitle">Ігор Володимирович Ковальов</h2> 
				<p class = "CardText">Лікар-пульмонолог</p>
				<button class="ButtonMoreInformation">Детальніше</button>
			</div>
			<div class="DoctorsRectangle">
				<img src="Images/DemoWomenPerson2.jpg" class="PersonIcon" alt="Testing icon">
				<h2 class = "CardTitle">Анна Сергіївна Лисенко</h2> 
				<p class = "CardText">Лікар-фармацевт</p>
				<button class="ButtonMoreInformation">Детальніше</button>
			</div>
		</div>
		<button id="ButtonSearchDoctor" onclick="window.location.href='appointment/chose.php'">Шукати лікаря</button>
	</section>
	
	<?php include 'footer.php'; ?>
</body>
</html>

