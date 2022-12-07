<?php
$_SESSION["user"] = false;
$_SESSION["admin"] = false;
session_start();
$server = "localhost";
$login = "root";
$pass = "";
$name_db = "19084_cars10";

$link =mysqli_connect($server, $login, $pass, $name_db);

if ($link ==false){
    echo "error";
}
//if (isset($_POST['b1'])) {
//    switch ($_POST['b1']) {
//        case '1':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 1 and type_car = 'Седан'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '2':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 2 and type_car = 'Седан'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '3':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 3 and type_car = 'Седан'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '4':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 4 and type_car = 'Седан'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '5':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 5 and type_car = 'Седан'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '6':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 6 and type_car = 'Купе'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '7':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 7 and type_car = 'Купе'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '8':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 8 and type_car = 'Купе'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '9':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 9 and type_car = 'Купе'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '10':
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 10 and type_car = 'Купе'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '11':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 11 and type_car = 'Внедорожник'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '12':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 12 and type_car = 'Внедорожник'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '13':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 13 and type_car = 'Внедорожник'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '14':
//
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 14 and type_car = 'Внедорожник'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//        case '15':
//            $result = mysqli_query($link,"SELECT * from `car_park` where `idcar_park` = 15 and type_car = 'Внедорожник'");
//            $car_park1= mysqli_fetch_assoc($result);
//
//            break;
//    }
//}
//$iN_ORDER=[];
//    foreach( $result as $id)
//    {
//        $result = $id['idtovar'];
//        $data =$conn->prepare("SELECT * FROM tovar where idcar_park='".$val."'");
//
//        $data ->execute();
//        array_push($iN_ORDER,$data ->fetch());
//    }
//
//
//}


$val = implode(',', $_POST);
$result = mysqli_query($link,"SELECT * from `car_park`  where idcar_park='".$val."'");
$result = mysqli_fetch_all($result);

$nname = $_SESSION['namee'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="zakaz.css">
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
    <script type="text/javascript" src="card.js"></script>
    <hr class="mainhr">
    <?php
    foreach ($result as $car_park1){
        ?>
        <div class="tovar1">
            <div class="photo"><img src='<?= $car_park1[9];?>' width="640" height="360" style="border-radius: 10px; object-fit: cover"></div>
            <div class="rightside">
                <form action="1.php" method="post">
                    <h1>Оплата</h1>
                    <h2>Информация об оплате</h2>
                    <p>Имя владельца карты</p>

                    <input type="text" class="inputbox" name="cardname" maxlength="20" required />

                    <p>Номер карты</p>

                    <input type="number" class="inputbox" name="cardnumber" maxlength="16" id="card_number"  required />

                    <p>Платежная система</p>
                    <select class="inputbox" name="card_type" id="card_type" required>
                        <option value="">--Выберите платежную систему--</option>
                        <option value="Visa">Visa</option>
                        <option value="RuPay">RuPay</option>
                        <option value="MasterCard">MasterCard</option>
                    </select>
                    <div class="expcvv">

                        <p class="expcvv_text">Дата</p>

                        <input type="number" class="inputbox" name="carddata" id="exp_date" pattern=".{2,2}" maxlength="2" max="12" min="1"  required />

                        <p>/</p>

                        <input type="number" class="inputbox" name="carddata2" id="exp_date" maxlength="2" max="35" min="22" required />

                        <p class="expcvv_text2">CVV</p>

                        <input type="password" class="inputbox" name="cvv" id="cvv" maxlength="3" required />

                    </div>
                    <p></p>
                    <div class="infodown">
                        <div class="price">
                            <p> К оплате: <?= $car_park1[3];?> ₽</p>
                        </div>

                    </div>

                    <button type="submit" class="btn-15">Оплатить</button>

                </form>
            </div>
            <div class="opisanie">
                <div class="infoup">
                    <p><?= $car_park1[1];?> <?= $car_park1[2] ?></p>
                    <div class="left">
                        <div class="opi">
                            <p><?= $car_park1[5];?> </p>
                        </div>
                        <div class="xar">
                            <p>л.с.</p>
                            <p>Привод</p>
                            <p>Вес(кг)</p>
                        </div>
                    </div>
                    <div class="right">
                        <p><?= $car_park1[6];?></p>
                        <p><?= $car_park1[7];?></p>
                        <p><?= $car_park1[8];?></p>
                    </div>
                </div>

            </div>
        </div>
        <?php
        $_SESSION['marka'] = $car_park1[1];
        $_SESSION['model'] = $car_park1[2];
        $_SESSION['price'] = $car_park1[3];
    }
    ?>
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