<?php
require_once __DIR__ . '/../login-and-register/src/helpers.php';

checkAuth();

$id = $_POST['id'] ?? null;
$specialty = findSpecialty($id);
$name = findName($id);
$posluga1 = findPosluga($id, 1);
$posluga2 = findPosluga($id, 2);
$posluga3 = findPosluga($id, 3);

$picture = 'img/Doctor'.$id.'.png';


?>

<!DOCTYPE html>
<html lang="ua" data-theme="light">
<?php include_once __DIR__ . '/components/head2.php'?>
<body>
    <div class="card">
        <h2 class="ForHeader">Запис до лікаря</h2>

        <div class="doctor">
            <div class="picture_block">
                <?php echo '<img class="image" src="'.$picture.'">';?>
            </div>
            <h3 class="ForHeader"><?php echo $specialty['specialty']?></h3>
            <h3 class="ForHeader"><?php echo $name['name']?></h3>
        </div>
        
        <div class="doctor">
			
			<h3 class="ForHeader">Нажимайте на підходящий вам час</h3>
			
			<hr class="TableLine">
			<div class="anotation">
				<div class="time green">Час вільний</div>
				<div class="time red">Час зайнятий</div>
			</div>
			<hr class="TableLine">
			
            <h3 class="ForHeader">Розклад</h3>
            <input type="hidden" id="scheduleId" value="<?php echo $id?>">
            <div class="schedule">
                <div class="header"> 
                    <div class="day">Понеділок</div>
                    <div class="day">Вівторок</div>
                    <div class="day">Середа</div>
                    <div class="day">Четвер</div>
                    <div class="day">П'ятниця</div>
                </div>
                <div class="times" id="times">
                <!-- JavaScript генерує елементи -->
                </div>
            </div>
			<hr class="TableLine">
			<h3 class="ForHeader">Оберіть послугу</h3>
			<p><input type="radio" name="Act" value="1" checked ></input> <?php echo $posluga1['posluga1']?> </p>
			<p><input type="radio" name="Act" value="2" ></input> <?php echo $posluga2['posluga2']?> </p>
			<p><input type="radio" name="Act" value="3" ></input> <?php echo $posluga3['posluga3']?> </p>
        </div>
		
	</div>
    <script src="script.js"></script>
</body>
</html>