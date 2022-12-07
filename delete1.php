<?php
$mysql = new mysqli('localhost','root','','19084_cars10');

$model = filter_var(trim($_POST['model']),FILTER_SANITIZE_STRING);


$mysql->query("DELETE FROM `car_park` WHERE model='".$model."'");
$mysql->close();
header('Location: sucadm.html');
?>