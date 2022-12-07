<?php
$_SESSION["user"] = false;
$_SESSION["admin"] = false;
session_start();
$nname = $_SESSION['namee'];
$server = "localhost";
$login = "root";
$pass = "";
$name_db = "19084_cars10";

$link =mysqli_connect($server, $login, $pass, $name_db);
$result = mysqli_query($link,"SELECT * from `car_park` ");
$result = mysqli_fetch_all($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="dobav.css">
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


    <div class="rightside">
        <form action="exportend.php" method="post">
            <h1>Экспорт</h1>
            <p>Модель автомобиля</p>
            <select class="inputbox" name="model" required>
                <option value="">--Выберите марку автомобиля--</option>
                <?php
                foreach ($result as $results){
                    ?>
                    <option><?=$results[2];?></option>
                    <?php
                }
                ?>
            </select>
            <p></p>
            <div class="infodown">
            </div>
            <a href="index.php"><button type="submit" class="btn-15">Экспорт"</button></a>
        </form>
    </div>
</div>
</body>
</html>