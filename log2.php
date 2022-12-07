<?php
$_SESSION["user"] = false;
session_start();
$nname = $_SESSION['namee'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet" type="text/css" href="log.css">
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
  <hr class="mainhr">

  <div class="h">

    <div class="login-box">
      <h2>Авторизация</h2>
      <form method="post" action="log.php">
        <div class="user-box">
          <input type="email" id="email" name="mail" required="">
          <label>Почта</label>
        </div>
        <div class="user-box">
          <input type="password" name="pass" required="">
          <label>Пароль</label>
        </div>
        <button type="submit">Авторизоваться</button>
        <a  href="regg.php">Нет аккаунта? Зарегистрироваться</a>
      </form>

    </div>
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