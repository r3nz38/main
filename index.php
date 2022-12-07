<?php
$_SESSION["user"] = false;
session_start();
$nname = $_SESSION['namee'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>D.work.corp</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
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
    <hr>
    <div class="mainphoto">
        <a href="index.php" class="smena"></a>
    </div>
    <div class="znaki">
        <div class="merc">
            <img src="img/bmw.png" width="160" height="100">
            <div class="price1"><p>От 4999 руб/сут...</p></div>
        </div>
        <div class="audi">
            <img src="img/aaudi.png" width="180" height="150">
            <div class="price2"><p>От 6999 руб/сут...</p></div>
        </div>
        <div class="bmw">
            <img src="img/mmmmm.png" width="200" height="155">
            <div class="price3"><p>От 8999 руб/сут...</p></div>
        </div>
    </div>
    <div class="tovars">
        <a href="audi.php"> <div class="first"><img src="img/auddi.PNG" WIDTH="300" HEIGHT="550" alt="audi">
            <div class="con"><span>Ауди (Audi), немецкая компания, специализирующаяся на выпуске легковых
                автомобилей. Входит в концерн «Фольксваген». Штаб-квартира находится в Ингольдштадте.
                Компания «Ауди» была основана в 1909 Августом Хорьхом.</span></div>
        </div></a>
        <a href="bmw.php"><div class="second"><img src="img/bmq.PNG" WIDTH="300" HEIGHT="550" alt="bmw">
            <div class="con2"><span>BMW. Один из крупнейших производителей автомобилей в Германии и Евросоюзе,
                всемирно известный бренд и символ немецкой промышленности, качества и надежности.
                Полное наименование компании: Bayerische Motorenwerke AG</span></div>
        </div></a>
        <a href="mercedes.php"><div class="third"><img src="img/m3.PNG" WIDTH="290" HEIGHT="550" alt="merc">
            <div class="con3"><span>Mercedes-Benz - производитель легковых автомобилей
                премиального класса, грузовых автомобилей, автобусов и других транспортных средств, входящая в
                состав немецкого концерна «Daimler AG». Является одним из самых узнаваемых автомобильных брендов
                во всём мире. Штаб-квартира  в Штутгарте, Баден-Вюртемберг, Германия.</span></div>
        </div></a>
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