<?php
require_once __DIR__ . '/../login-and-register/src/helpers.php';

checkAuth();
?>

<!DOCTYPE html>
<html lang="ua" data-theme="light">
<?php include_once __DIR__ . '/components/head2.php'?>




<body>



<div class="card">
    <h2 class="ForHeader">Виберіть необхідного лікаря</h2>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Терапевт</h3>
        <p class="ForP">Лікар, який займається діагностикою та лікуванням широкого спектру захворювань внутрішніх органів.</p>
        <input type="text" id="id" name="id" value="1" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Педіатр</h3>
        <p class="ForP">Лікар, який спеціалізується на лікуванні дітей.</p>
        <input type="text" id="id" name="id" value="2" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Хірург</h3>
        <p class="ForP">Лікар, який займається оперативним лікуванням захворювань.</p>
        <input type="text" id="id" name="id" value="3" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Кардіолог</h3>
        <p class="ForP">Лікар, який спеціалізується на захворюваннях серця та судин.</p>
        <input type="text" id="id" name="id" value="4" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Невролог</h3>
        <p class="ForP">Лікар, який лікує захворювання нервової системи.</p>
        <input type="text" id="id" name="id" value="5" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Гастроентеролог</h3>
        <p class="ForP">Лікар, який спеціалізується на захворюваннях шлунково-кишкового тракту.</p>
        <input type="text" id="id" name="id" value="6" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Ендокринолог</h3>
        <p class="ForP">Лікар, який займається діагностикою та лікуванням захворювань ендокринної системи (гормональні порушення).</p>
        <input type="text" id="id" name="id" value="7" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Дерматолог</h3>
        <p class="ForP">Лікар, який спеціалізується на захворюваннях шкіри, волосся та нігтів.</p>
        <input type="text" id="id" name="id" value="8" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Офтальмолог</h3>
        <p class="ForP">Лікар, який лікує захворювання очей.</p>
        <input type="text" id="id" name="id" value="9" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Оториноларинголог (ЛОР)</h3>
        <p class="ForP">Лікар, який спеціалізується на захворюваннях вуха, горла та носа.</p>
        <input type="text" id="id" name="id" value="10" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Пульмонолог</h3>
        <p class="ForP">Лікар, який лікує захворювання дихальної системи.</p>
        <input type="text" id="id" name="id" value="11" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Ревматолог</h3>
        <p class="ForP">Лікар, який спеціалізується на захворюваннях суглобів та сполучної тканини.</p>
        <input type="text" id="id" name="id" value="12" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Нефролог</h3>
        <p class="ForP">Лікар, який займається захворюваннями нирок.</p>
        <input type="text" id="id" name="id" value="13" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Уролог</h3>
        <p class="ForP">Лікар, який лікує захворювання сечовидільної системи та чоловічої статевої системи.</p>
        <input type="text" id="id" name="id" value="14" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Гінеколог</h3>
        <p class="ForP">Лікар, який спеціалізується на жіночій репродуктивній системі.</p>
        <input type="text" id="id" name="id" value="15" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Психіатр</h3>
        <p class="ForP">Лікар, який спеціалізується на діагностиці та лікуванні психічних захворювань.</p>
        <input type="text" id="id" name="id" value="16" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Онколог</h3>
        <p class="ForP">Лікар, який займається діагностикою та лікуванням ракових захворювань.</p>
        <input type="text" id="id" name="id" value="17" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Інфекціоніст</h3>
        <p class="ForP">Лікар, який спеціалізується на інфекційних захворюваннях.</p>
        <input type="text" id="id" name="id" value="18" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Травматолог</h3>
        <p class="ForP">Лікар, який лікує травми та пошкодження опорно-рухового апарату.</p>
        <input type="text" id="id" name="id" value="19" hidden>
        <button type="submit">Вибрати</button>
    </form>

    <form class="doctor" action="doctor.php" method="post">
        <h3 class="ForHeader">Алерголог</h3>
        <p class="ForP">Лікар, який спеціалізується на алергіях та імунних порушеннях.</p>
        <input type="text" id="id" name="id" value="20" hidden>
        <button type="submit">Вибрати</button>
    </form>

</div>

<?php include __DIR__ . '/../footer.php'; ?>

</body>
</html>