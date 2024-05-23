<?php
require_once __DIR__ . '/../login-and-register/src/helpers.php';

checkAuth();

$id = $_POST['id'] ?? null;
$specialty = findSpecialty($id);
$name = findName($id);

if($id == 1){
    $picture = 'img/Doctor1.png';
}
if($id == 2){
    $picture = 'img/Doctor2.png';
}
if($id == 3){
    $picture = 'img/Doctor3.png';
}
if($id == 4){
    $picture = 'img/Doctor4.png';
}
if($id == 5){
    $picture = 'img/Doctor5.png';
}
if($id == 6){
    $picture = 'img/Doctor6.png';
}
if($id == 7){
    $picture = 'img/Doctor7.png';
}
if($id == 8){
    $picture = 'img/Doctor8.png';
}
if($id == 9){
    $picture = 'img/Doctor9.png';
}
if($id == 10){
    $picture = 'img/Doctor10.png';
}
if($id == 11){
    $picture = 'img/Doctor11.png';
}
if($id == 12){
    $picture = 'img/Doctor12.png';
}
if($id == 13){
    $picture = 'img/Doctor13.png';
}
if($id == 14){
    $picture = 'img/Doctor14.png';
}
if($id == 15){
    $picture = 'img/Doctor15.png';
}
if($id == 16){
    $picture = 'img/Doctor16.png';
}
if($id == 17){
    $picture = 'img/Doctor17.png';
}
if($id == 18){
    $picture = 'img/Doctor18.png';
}
if($id == 19){
    $picture = 'img/Doctor19.png';
}
if($id == 20){
    $picture = 'img/Doctor20.png';
}


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
        <h3 class="ForHeader">Педіатр</h3>
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
            <!-- Ці елементи будуть заповнені динамічно за допомогою JavaScript -->
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>