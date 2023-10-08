<?php
$localhost = "192.168.0.3306";
$db = "stis3-27";
$user = "aj=99E;ee7F";
$password = "n!f7{CeT7C7g";
$link = mysqli_connect($localhost, $user, $password) or
trigger_error(mysql_error(),E_USER_ERROR);
mysqli_query($link, "SET NAMES utf8;") or die(mysql_error());
mysqli_query($link, "SET CHARACTER SET utf8;") or die(mysql_error());
//Выбор базы данных на сервере localhost
mysqli_select_db($link, $db);
?>