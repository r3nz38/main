<?php
$mail = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$dateB = filter_var(trim($_POST['datebr']),FILTER_SANITIZE_STRING);
$tele = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);
$passport = filter_var(trim($_POST['passport']),FILTER_SANITIZE_STRING);
$DrLic = filter_var(trim($_POST['DriLic']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
//if(mb_strlen($name)<5 || mb_strlen($name)>90 {
//    echo "error";
//    exit();
//}
//else if

$pass = md5($pass."sdlknfiow324902");

$mysql = new mysqli('localhost','root','','19084_cars10');
$mysql->query("INSERT INTO `user` (`mail`,`name`,`passport`,`driver_license`,`date_birth`,`password`,`phone`)
VALUES('$mail','$name','$passport','$DrLic','$dateB','$pass','$tele')");

$mysql->close();

header('Location: log2.php');
?>
