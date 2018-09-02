<?php
$user = 'root';
$password = '';
$db = 'amate';
$host = 'localhost';
$port = 3306;
//$link = mysqli_connect($host, $user, $password) or die(mysqli_error());
//$link = new PDO( "mysqli:" . "host=$host;" . "dbname=$db",$user, $password);
$link = new mysqli($host, $user, $password, $db);
$link->set_charset("utf8");
// mysqli_set_charset($link,"utf8");