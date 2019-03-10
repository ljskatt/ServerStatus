<?php

$host = 'localhost';
$user = '';
$pass = '';
$data = '';
$sSetting['refresh'] = "10000";

$my_con = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($my_con, $data) or die(mysqli_error());
//Template options: "default" and "dark"
$template = "./templates/default/";
$index = $template . "index.php";
?>