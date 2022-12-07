<?php
session_start();
$_SESSION["user"]=false;
echo "ddd";

header('Location: '."log2.php");
?>