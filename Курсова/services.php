<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widtd=device-width, initial-scale=1.0">
	<title>Achillelius - послуги</title>
</head>
<body>
	<?php 
		if(!isset($_SESSION['user']['id'])){
			include_once __DIR__ . '/header_login.php';
		}
		else include_once __DIR__ . '/header_logout.php';
	?>
	
	<div class="ServicesSection">
		<center><h1 class="GreenHeader">Послуги лікарні</h1></center>
		<table>
			<tr>
				<th>Ім'я</th>
				<th>Спеціальність</th>
				<th>Послуга</th>
				<th>Вартість</th>
			</tr>
			<tr>
				<td rowspan="3">Іванов Олександр Сергійович</td>
				<td rowspan="3">Терапевт</td>
				<td>Консультація терапевта</td>
				<td>300 грн</td>
			</tr>
			<tr>
				<td>Діагностика здоров'я</td>
				<td>500 грн</td>
			</tr>
			<tr>
				<td>Лікування хвороб</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Петров Андрій Вадимович</td>
				<td rowspan="3">Педіатр</td>
				<td>Консультація педіатра</td>
				<td>350 грн</td>
			</tr>
			<tr>
				<td>Плановий огляд</td>
				<td>450 грн</td>
			</tr>
			<tr>
				<td>Вакцинація дітей</td>
				<td>300 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Сидоров Дмитро Олегович</td>
				<td rowspan="3">Хірург</td>
				<td>Консультація хірурга</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td>Операційне втручання</td>
				<td>1500 грн</td>
			</tr>
			<tr>
				<td>Післяопераційний догляд</td>
				<td>600 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Ковальчук Михайло Іванович</td>
				<td rowspan="3">Кардіолог</td>
				<td>Консультація кардіолога</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td>Електрокардіограма</td>
				<td>300 грн</td>
			</tr>
			<tr>
				<td>Лікування аритмії</td>
				<td>500 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Литвиненко Павло Андрійович</td>
				<td rowspan="3">Невролог</td>
				<td>Консультація невролога</td>
				<td>350 грн</td>
			</tr>
			<tr>
				<td>Електроенцефалографія</td>
				<td>450 грн</td>
			</tr>
			<tr>
				<td>Лікування мігрені</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Кравець Юрій Іванович</td>
				<td rowspan="3">Гастроентеролог</td>
				<td>Консультація гастроентеролога</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td>Ендоскопія</td>
				<td>1000 грн</td>
			</tr>
			<tr>
				<td>Лікування гастриту</td>
				<td>450 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Шевченко Віктор Петрович</td>
				<td rowspan="3">Ендокринолог</td>
				<td>Консультація ендокринолога</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td>Тест на глюкозу</td>
				<td>200 грн</td>
			</tr>
			<tr>
				<td>Лікування діабету</td>
				<td>500 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Олійник Олена Миколаївна</td>
				<td rowspan="3">Дерматолог</td>
				<td>Консультація дерматолога</td>
				<td>300 грн</td>
			</tr>
			<tr>
				<td>Дерматоскопія</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td>Лікування акне</td>
				<td>350 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Морозов Олексій Сергійович</td>
				<td rowspan="3">Офтальмолог</td>
				<td>Консультація офтальмолога</td>
				<td>350 грн</td>
			</tr>
			<tr>
				<td>Перевірка зору</td>
				<td>300 грн</td>
			</tr>
			<tr>
				<td>Лікування катаракти</td>
				<td>1500 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Савченко Анна Вікторівна</td>
				<td rowspan="3">Оториноларинголог</td>
				<td>Консультація отоларинголога</td>
				<td>350 грн</td>
			</tr>
			<tr>
				<td>Аудіометрія</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td>Лікування синуситу</td>
				<td>500 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Гончаренко Іван Вікторович</td>
				<td rowspan="3">Пульмонолог</td>
				<td>Консультація пульмонолога</td>
				<td>350 грн</td>
			</tr>
			<tr>
				<td>Спірометрія</td>
				<td>300 грн</td>
			</tr>
			<tr>
				<td>Лікування астми</td>
				<td>450 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Ткаченко Сергій Вадимович</td>
				<td rowspan="3">Ревматолог</td>
				<td>Консультація ревматолога</td>
				<td>350 грн</td>
			</tr>
			<tr>
				<td>Аналіз крові</td>
				<td>200 грн</td>
			</tr>
			<tr>
				<td>Лікування артриту</td>
				<td>500 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Бойко Василь Дмитрович</td>
				<td rowspan="3">Нефролог</td>
				<td>Консультація нефролога</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td>Аналіз сечі</td>
				<td>150 грн</td>
			</tr>
			<tr>
				<td>Лікування ниркових хвороб</td>
				<td>500 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Карпенко Наталія Сергіївна</td>
				<td rowspan="3">Уролог</td>
				<td>Консультація уролога</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td>УЗД сечового міхура</td>
				<td>300 грн</td>
			</tr>
			<tr>
				<td>Лікування простатиту</td>
				<td>450 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Лисенко Ігор Юрійович</td>
				<td rowspan="3">Гінеколог</td>
				<td>Консультація гінеколога</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td>УЗД малого тазу</td>
				<td>350 грн</td>
			</tr>
			<tr>
				<td>Лікування ендометріозу</td>
				<td>500 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Мельник Євген Петрович</td>
				<td rowspan="3">Психіатр</td>
				<td>Консультація психіатра</td>
				<td>500 грн</td>
			</tr>
			<tr>
				<td>Психіатрична оцінка</td>
				<td>600 грн</td>
			</tr>
			<tr>
				<td>Лікування депресії</td>
				<td>550 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Дорошенко Артем Петрович</td>
				<td rowspan="3">Онколог</td>
				<td>Консультація онколога</td>
				<td>600 грн</td>
			</tr>
			<tr>
				<td>Біопсія</td>
				<td>1500 грн</td>
			</tr>
			<tr>
				<td>Лікування раку</td>
				<td>2000 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Козлов Олег Васильович</td>
				<td rowspan="3">Інфекціоніст</td>
				<td>Консультація інфекціоніста</td>
				<td>400 грн</td>
			</tr>
			<tr>
				<td>ПЛР-тестування</td>
				<td>800 грн</td>
			</tr>
			<tr>
				<td>Лікування вірусних інфекцій</td>
				<td>500 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Грищук Олександр Андрійович</td>
				<td rowspan="3">Травматолог</td>
				<td>Консультація травматолога</td>
				<td>350 грн</td>
			</tr>
			<tr>
				<td>Рентген</td>
				<td>300 грн</td>
			</tr>
			<tr>
				<td>Лікування переломів</td>
				<td>700 грн</td>
			</tr>
			<tr>
				<td rowspan="3">Чорна Марія Яківна</td>
				<td rowspan="3">Алерголог</td>
				<td>Консультація алерголога</td>
				<td>350 грн</td>
			</tr>
			<tr>
				<td>Алерготести</td>
				<td>500 грн</td>
			</tr>
			<tr>
				<td>Лікування алергії</td>
				<td>450 грн</td>
			</tr>
		</table>
		
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>

<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="services_styles.css">