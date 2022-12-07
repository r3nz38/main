<?php
$_SESSION["user"] = false;
$_SESSION["admin"] = false;
session_start();
$nname = $_SESSION['namee'];
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
            <form action="dobav1.php" method="post">
                <h1>Добавление</h1>
                <p>Тип автомобиля</p>
                <select class="inputbox" name="type" required>
                    <option value="">--Выберите тип автомобиля--</option>
                    <option value="Седан">Седан</option>
                    <option value="Купе">Купе</option>
                    <option value="Внедорожник">Внедорожник</option>
                </select>
                <p>Марка автомобиля</p>
                <select class="inputbox" name="marka" required>
                    <option value="">--Выберите марку автомобиля--</option>
                    <option value="BMW">BMW</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Audi">Audi</option>
                </select>
                <p>Модель автомобиля</p>
                <input type="text" class="inputbox" name="model" required />
                <p>Цена автомобиля</p>
                <input type="text" class="inputbox" name="price" required />
                <p>Описание автомобиля</p>
                <input type="text" class="inputbox" name="opisanie" required />
                <p>Лошадиные силы автомобиля</p>
                <input type="text" class="inputbox" name="LS" required />
                <p>Привод автомобиля</p>
                <select class="inputbox" name="privod" required>
                    <option value="">--Выберите марку автомобиля--</option>
                    <option value="1">Полный</option>
                    <option value="2">Задний</option>
                    <option value="3">Передний</option>
                </select>
                <p>Вес автомобиля</p>
                <input type="text" class="inputbox" name="ves" required />
                <p>Картинка</p>
                <input type="file" class="inputbox" name="img" required />
                <p></p>
                <div class="infodown">
                </div>
                <a href="index.php"><button type="submit" class="btn-15">Добавить</button></a>
            </form>
            <form action="export.php" method="post">
                <button type="submit" class="btn-15" >Экспорт</button>
            </form>
        </div>
</div>
</body>
</html>