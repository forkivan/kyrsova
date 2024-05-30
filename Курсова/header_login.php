<!DOCTYPE html>
<html lang="ua">
<head>
    <link rel="stylesheet" href="\kyrsova\Курсова\styles.css">
    <link rel="stylesheet" href="\kyrsova\Курсова\main_page_styles.css">
    <link rel="stylesheet" href="\kyrsova\Курсова\doctor_styles.css">
    <link rel="stylesheet" href="\kyrsova\Курсова\header.css">
</head>
<body>
    <div class="showHeader">
        <nav>
            <ul>
                <img src="\kyrsova\Курсова\Images\MainIcon.png" id="LogoHospital" alt="Logo icon"> 
                <li><a class="ArrowButton" href="\kyrsova\Курсова\login-and-register\login.php">Вхід</a></li>
                <li><a class="ArrowButton" href="\kyrsova\Курсова\index.php">Головна</a></li>
                <li><a class="ArrowButton" href="\kyrsova\Курсова\aboutus\aboutus.php">Про нас</a></li>
                <li><a class="ArrowButton" href="\kyrsova\Курсова\appointment\chose.php">Запис до лікаря</a></li>
                <li><a class="ArrowButton" href="\kyrsova\Курсова\account\home.php">Кабінет</a></li>
            </ul>
        </nav>
    </div>

    <div class="hideHeader">
        <div id="menuToggle">Меню</div>
        <nav>
            <ul>
                <img src="\kyrsova\Курсова\Images\MainIcon.png" id="LogoHospital" alt="Logo icon"> 
                <li><a class="ArrowButton" href="\kyrsova\Курсова\login-and-register\login.php">Вхід</a></li>
                <li><a class="ArrowButton" href="\kyrsova\Курсова\index.php">Головна</a></li>
                <li><a class="ArrowButton" href="\kyrsova\Курсова\aboutus\aboutus.php">Про нас</a></li>
                <li><a class="ArrowButton" href="\kyrsova\Курсова\appointment\chose.php">Запис до лікаря</a></li>
                <li><a class="ArrowButton" href="\kyrsova\Курсова\account\home.php">Кабінет</a></li>
            </ul>
        </nav>
    </div>

    <script>
        document.getElementById('menuToggle').addEventListener('click', function() {
            var navUl = document.querySelector('.hideHeader nav ul');
            navUl.classList.toggle('show');
        });
    </script>
</body>
</html>
