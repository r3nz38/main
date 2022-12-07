<?php
$mysql = new mysqli('localhost','root','','19084_cars10');

$marka = filter_var(trim($_POST['marka']),FILTER_SANITIZE_STRING);
$model = filter_var(trim($_POST['model']),FILTER_SANITIZE_STRING);
$price = filter_var(trim($_POST['price']),FILTER_SANITIZE_STRING);
$type = filter_var(trim($_POST['type']),FILTER_SANITIZE_STRING);
$opisanie = filter_var(trim($_POST['opisanie']),FILTER_SANITIZE_STRING);
$LS = filter_var(trim($_POST['LS']),FILTER_SANITIZE_STRING);
$privod = filter_var(trim($_POST['privod']),FILTER_SANITIZE_STRING);
$ves = filter_var(trim($_POST['ves']),FILTER_SANITIZE_STRING);
$img1 = filter_var(trim($_POST['img']),FILTER_SANITIZE_STRING);
$img = 'img/cars/'.$img1;

$mysql->query("INSERT INTO `car_park` (`marka`, `model`, `price`, `type_car`, `opisanie`, `LS`, `privod`, `ves`, `img`) 
VALUES ('$marka', '$model', '$price', '$type', '$opisanie', '$LS', '$privod', '$ves', '$img')");
$mysql->close();
header('Location: sucadm.html');
?>