<?php
$_SESSION["user"] = false;
$_SESSION["admin"] = false;
session_start();
$server = "localhost";
$login = "root";
$pass = "";
$name_db = "19084_cars10";

$link =mysqli_connect($server, $login, $pass, $name_db);
$model = filter_var(trim($_POST['model']),FILTER_SANITIZE_STRING);

$result = mysqli_query($link,"SELECT * from `car_park`  where  model='".$model."'");
$result = mysqli_fetch_all($result);
$exp = print_r($result, true);
file_put_contents('test.doc', $exp);
header('Location: sucadm.html');
?>
