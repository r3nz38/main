<?php
session_start();
$mail = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

$pass = md5($pass."sdlknfiow324902");

$mysql = new mysqli('localhost','root','','19084_cars10');

$_SESSION["user"] = false;
$_SESSION["admin"]=false;
$result = $mysql->query("SELECT * FROM `user` WHERE `mail` = '$mail' AND `password` = '$pass'");

//var_dump($_SESSION);
$user = $result->fetch_assoc();
//$admin = false;
if(!$user){
    echo "not found user";
    exit();
}

else{

    $_SESSION["user"]=true;
    setcookie('user', $user['name'], time()+3600, "index.php");
    $nnn = $user['name'];
    $iii = $user['iduser'];

    $_SESSION['namee'] = $nnn;
    $_SESSION['idd'] = $iii;
    $mysql->close();
    Header("Location: index.php");


}

if($user['iduser']==4){
$_SESSION["admin"]=true;
}

?>
