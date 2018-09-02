<?php
session_start();
if ($_SESSION['login'] == '') {
    unset($_SESSION ['login']);
    header('location:login.html');
}

include 'class/conection.php';



