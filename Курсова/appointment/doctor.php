<?php
require_once __DIR__ . '/../login-and-register/src/helpers.php';

checkAuth();

$id = $_POST['id'] ?? null;
$specialty = findSpecialty($id);
$name = findName($id);

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