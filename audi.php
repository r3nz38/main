<?php
$_SESSION["user"] = false;
session_start();
$nname = $_SESSION['namee'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="audi/stleaudi.css">
</head>
<body>
<body>
<div class="main">
    <div class="topbar">
        <div class="logo">
            <div class="logotip">
                <a href="index.php"> <img src="img/leftlog.png" width="250" height="140"></a>
            </div>
        </div>

        <div class="menu">
            <div class="centerlog">
                <img src="img/centerlog.png" width="120" height="100">
            </div>
            <div class="underbar">
                <div class="vne">
                    <a href="Vnedorogi.php">Внедорожники</a>
                </div>
                <div class="sedan">
                    <a href="Sedani.php">Седаны</a>
                </div>
                <div class="kype">
                    <a href="kupe.php">Купе</a>
                </div>
            </div>
        </div>
        <div class="profile">
            <?php
            if($_SESSION["user"]==true) {
                if($_SESSION["admin"]==true) {echo
                '<a href="admin.php"><img class="profileClass" src="img/ic.png" width="55" height="55"><p class="profileP">',$nname,'</p></a>
                <a class = "exit" href="exit.php"><img src="img/avt.jpg" width="60" height="68"></a>';
                }
                else { echo
                '<img class="profileClass" src="img/ic.png" width="55" height="55"><p class="profileP">',$nname,'</p>
                        <a class = "exit" href="exit.php"><img src="img/avt.jpg" width="60" height="68"></a>';
                }
            }
            else {
                echo
                '<a class="profileClass" title="Войти" href="log2.php"><img src="img/anon.png" width="55" height="55"><p class="profileP">Аккаунт</p></a>';
            }

            ?>
        </div>
    </div>
    <hr class="mainhr">

    <div class="bigblock">
        <div class="photoo"></div>
        <div class="bigitext"><p>
            Миллионам человек во всем мире сегодня хорошо знаком слоган марки «Vorsprung durch Technik». С немецкого на русский язык это можно перевести как «Превосходство высоких технологий». И на самом деле технические инновации, прогрессивные решения, стремление к смелым экспериментам и индивидуальный подход к каждому клиенту служат ориентирами для Audi. Ярким воплощением технологического превосходства марки является легендарный полный привод quattro, который в качестве опции доступен сегодня практически на всех моделях. Он не только дарит совершенно иные ощущения от управления автомобилем, но и повышает безопасность вождения, дает чувство уверенности на дороге и позволяет управлять автомобилем в спортивном стиле.

            Приверженность спорту является еще одной важной составляющей философии марки. Многочисленные победы в классическом ралли, на кольцевых гонках, в чемпионате DTM, в гонках на выносливость и в новейшем состязании электрических болидов «Формула E» дали инженерам и конструкторам бесценный опыт, который сегодня воплощается в серийных моделях. Изысканный дизайн в сочетании со спортивным стилем и отточенными на трассах технологиями — еще одна отличительная особенность автомобилей Audi. Впрочем, из почти трех десятков актуальных моделей Audi как минимум семь можно без натяжки назвать спорткарами. За разработку и создание этих спортивных моделей с индексами R и RS отвечает специальное подразделение Audi Sport GmbH.

            Многочисленные независимые исследования, проводимые по всему миру, год от года демонстрируют неизменный успех Audi. Как и первые места во всевозможных рейтингах безопасности, на конкурсах потребительских симпатий и предпочтений. Как Audi удалось добиться признания в самых разных странах: в США и Великобритании, в Польше и Испании, в России и Китае?
            </p></div>
    </div>

    <div class="downbar">
        <div class="year"><p>©2022 | D.Work.corporation</p></div>
        <div class="downtext">
            <p>Телефон: +79025490577<br>
                Почта: Dwork@mail.ru<br>
                Адрес: г.Иркутск, Ленина 5А</p>
        </div>

    </div>
</div>
</body>
</html>