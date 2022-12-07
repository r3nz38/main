<?php
$_SESSION["user"] = false;
session_start();
$server = "localhost";
$login = "root";
$pass = "";
$name_db = "19084_cars10";

$link =mysqli_connect($server, $login, $pass, $name_db);

if ($link ==false){
    echo "error";
}
$result = mysqli_query($link,"SELECT * from `car_park` where  type_car = 'Седан'");
$result = mysqli_fetch_all($result);

//$result2 = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 2 and type_car = 'Седан'");
//$car_park2= mysqli_fetch_assoc($result2);
//$result3 = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 3 and type_car = 'Седан'");
//$car_park3= mysqli_fetch_assoc($result3);
//$result4 = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 4 and type_car = 'Седан'");
//$car_park4= mysqli_fetch_assoc($result4);
//$result5 = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 5 and type_car = 'Седан'");
//$car_park5= mysqli_fetch_assoc($result5);
$nname = $_SESSION['namee'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="page3/styles3.css">
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
        <div class="profile" >
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
    <?php
    foreach ($result as $results){
        ?>
        <div class="tovar1">
            <div class="photo"><img src='<?= $results['9'];?>' width="384" height="216" style="border-radius: 10px"></div>
            <div class="opisanie">
                <div class="infoup">
                    <p><?= $results[1];?> <?= $results[2]; ?></p>
                    <div class="left">
                        <div class="opi">
                            <p><?= $results[5];?> </p>
                        </div>
                        <div class="xar">
                            <p>л.с.</p>
                            <p>Привод</p>
                            <p>Вес(кг)</p>
                        </div>
                    </div>
                    <div class="right">
                        <p><?= $results[6];?></p>
                        <p><?= $results[7];?></p>
                        <p><?= $results[8];?></p>
                    </div>
                </div>
                <div class="infodown">
                    <div class="price">
                        <p><?= $results[3];?> руб/cут.</p>
                    </div>
                    <form action="zakaz.php" method="post">
                        <div class="baton"><button type="submit" value="<?= $val = $results[0];?>" name="b1">Заказать</button></div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
<!--    <div class="tovar1">-->
<!--        <div class="photo"><img src='--><?php //echo $car_park1['img'];?><!--' width="300" height="200" style="border-radius: 10px"></div>-->
<!--        <div class="opisanie">-->
<!--            <div class="infoup">-->
<!--                <p>--><?php //echo $car_park1['marka'];?><!-- --><?php //echo $car_park1['model'] ?><!--</p>-->
<!--                <div class="left">-->
<!--                    <div class="opi">-->
<!--                        <p>--><?php //echo $car_park1['opisanie'];?><!-- </p>-->
<!--                    </div>-->
<!--                    <div class="xar">-->
<!--                        <p>л.с.</p>-->
<!--                        <p>Привод</p>-->
<!--                        <p>Вес(кг)</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="right">-->
<!--                    <p>--><?php //echo $car_park1['LS'];?><!--</p>-->
<!--                    <p>--><?php //echo $car_park1['privod'];?><!--</p>-->
<!--                    <p>--><?php //echo $car_park1['ves'];?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="infodown">-->
<!--                <div class="price">-->
<!--                    <p>--><?php //echo $car_park1['price'];?><!-- руб/cут.</p>-->
<!--                </div>-->
<!--                <form action="zakaz.php" method="post">-->
<!--                <div class="baton"><button type="submit" value="1" name="b1">Заказать</button></div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="tovar2">-->
<!--        <div class="photo"><img src='--><?php //echo $car_park2['img'];?><!--' width="300" height="200" style="border-radius: 10px"></div>-->
<!--        <div class="opisanie">-->
<!--            <div class="infoup">-->
<!--                <p>--><?php //echo $car_park2['marka'];?><!-- --><?php //echo $car_park2['model'] ?><!--</p>-->
<!--                <div class="left">-->
<!--                    <div class="opi">-->
<!--                        <p>--><?php //echo $car_park2['opisanie'];?><!--</p>-->
<!--                    </div>-->
<!--                    <div class="xar">-->
<!--                        <p>л.с.</p>-->
<!--                        <p>Привод</p>-->
<!--                        <p>Вес(кг)</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="right">-->
<!--                    <p>--><?php //echo $car_park2['LS'];?><!--</p>-->
<!--                    <p>--><?php //echo $car_park2['privod'];?><!--</p>-->
<!--                    <p>--><?php //echo $car_park2['ves'];?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="infodown">-->
<!--                <div class="price">-->
<!--                    <p>--><?php //echo $car_park2['price'];?><!-- руб/cут.</p>-->
<!--                </div>-->
<!--                <form action="zakaz.php" method="post">-->
<!--                    <div class="baton"><button type="submit" value="2" name="b1">Заказать</button></div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="tovar3">-->
<!--        <div class="photo"><img src='--><?php //echo $car_park3['img'];?><!--' width="300" height="200" style="border-radius: 10px"></div>-->
<!--        <div class="opisanie">-->
<!--            <div class="infoup">-->
<!--                <p>--><?php //echo $car_park3['marka'];?><!-- --><?php //echo $car_park3['model'] ?><!--</p>-->
<!--                <div class="left">-->
<!--                    <div class="opi">-->
<!--                        <p>--><?php //echo $car_park3['opisanie'];?><!--</p>-->
<!--                    </div>-->
<!--                    <div class="xar">-->
<!--                        <p>л.с.</p>-->
<!--                        <p>Привод</p>-->
<!--                        <p>Вес(кг)</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="right">-->
<!--                    <p>--><?php //echo $car_park3['LS'];?><!--</p>-->
<!--                    <p>--><?php //echo $car_park3['privod'];?><!--</p>-->
<!--                    <p>--><?php //echo $car_park3['ves'];?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="infodown">-->
<!--                <div class="price">-->
<!--                    <p>--><?php //echo $car_park3['price'];?><!-- руб/cут.</p>-->
<!--                </div>-->
<!--                <form action="zakaz.php" method="post">-->
<!--                    <div class="baton"><button type="submit" value="3" name="b1">Заказать</button></div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="tovar4">-->
<!--        <div class="photo"><img src='--><?php //echo $car_park4['img'];?><!--' width="300" height="200" style="border-radius: 10px"></div>-->
<!--        <div class="opisanie">-->
<!--            <div class="infoup">-->
<!--                <p>--><?php //echo $car_park4['marka'];?><!-- --><?php //echo $car_park4['model'] ?><!--</p>-->
<!--                <div class="left">-->
<!--                    <div class="opi">-->
<!--                        <p>--><?php //echo $car_park4['opisanie'];?><!--</p>-->
<!--                    </div>-->
<!--                    <div class="xar">-->
<!--                        <p>л.с.</p>-->
<!--                        <p>Привод</p>-->
<!--                        <p>Вес(кг)</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="right">-->
<!--                    <p>--><?php //echo $car_park4['LS'];?><!--</p>-->
<!--                    <p>--><?php //echo $car_park4['privod'];?><!--</p>-->
<!--                    <p>--><?php //echo $car_park4['ves'];?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="infodown">-->
<!--                <div class="price">-->
<!--                    <p>--><?php //echo $car_park4['price'];?><!-- руб/cут.</p>-->
<!--                </div>-->
<!--                <form action="zakaz.php" method="post">-->
<!--                    <div class="baton"><button type="submit" value="4" name="b1">Заказать</button></div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="tovar5">-->
<!--        <div class="photo"><img src='--><?php //echo $car_park5['img'];?><!--' width="300" height="200" style="border-radius: 10px"></div>-->
<!--        <div class="opisanie">-->
<!--            <div class="infoup">-->
<!--                <p>--><?php //echo $car_park5['marka'];?><!-- --><?php //echo $car_park5['model'] ?><!--</p>-->
<!--                <div class="left">-->
<!--                    <div class="opi">-->
<!--                        <p>--><?php //echo $car_park5['opisanie'];?><!--</p>-->
<!--                    </div>-->
<!--                    <div class="xar">-->
<!--                        <p>л.с.</p>-->
<!--                        <p>Привод</p>-->
<!--                        <p>Вес(кг)</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="right">-->
<!--                    <p>--><?php //echo $car_park5['LS'];?><!--</p>-->
<!--                    <p>--><?php //echo $car_park5['privod'];?><!--</p>-->
<!--                    <p>--><?php //echo $car_park5['ves'];?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="infodown">-->
<!--                <div class="price">-->
<!--                    <p>--><?php //echo $car_park5['price'];?><!-- руб/cут.</p>-->
<!--                </div>-->
<!--                <form action="zakaz.php" method="post">-->
<!--                    <div class="baton"><button type="submit" value="5" name="b1">Заказать</button></div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

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