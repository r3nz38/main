<?php
session_start();
$n = $_SESSION['namee'];
$i = $_SESSION['idd'];
$marka = $_SESSION['marka'];
$model = $_SESSION['model'];
$price = $_SESSION['price'];
echo $n;
echo $i;
$mysql = new mysqli('localhost','root','','19084_cars10');
$cardN = filter_var(trim($_POST['cardnumber']),FILTER_SANITIZE_STRING);
$CardNm = filter_var(trim($_POST['cardname']),FILTER_SANITIZE_STRING);
$CVV = filter_var(trim($_POST['cvv']),FILTER_SANITIZE_STRING);
$CardD1 = filter_var(trim($_POST['carddata']),FILTER_SANITIZE_STRING);
$CardD2 = filter_var(trim($_POST['carddata2']),FILTER_SANITIZE_STRING);
$CardD = $CardD1.'/'.$CardD2;

$mysql->query("INSERT INTO `zakaz` (`card_name`,`user_iduser`,`cardnum`,`datenum`,`cvv`,`name_user`,`marka`,`model`,`price`)
VALUES('$CardNm','$i','$cardN','$CardD','$CVV','$n','$marka','$model','$price')");
$mysql->close();

header('Location: succes.html');

?>