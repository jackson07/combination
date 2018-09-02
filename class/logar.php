<?php

//inicie uma seção
session_start();

 $usuario = filter_input(INPUT_POST, 'usuario');
 $senha = filter_input(INPUT_POST, 'senha');

include 'conection.php';

$query = "SELECT * FROM acesso WHERE login = '$usuario' and password = '$senha'";
$result = mysqli_query($link, $query);
while ($fetch = $result->fetch_assoc()) {
     $_SESSION['login'] = $fetch['login'];      
    } 

if(mysqli_num_rows($result) > 0) {
    $_SESSION['login'] = $usuario;
    $query = "SELECT * FROM acesso WHERE login = '$usuario' and password = '$senha'";
    $result = mysqli_query($link, $query);    
    while ($fetch = $result->fetch_assoc()) {
     $_SESSION['login'] = $fetch['login'];      
    } 	
   echo "<script type='text/javascript'>"
    . "location.href='../cad_ins.php'; </script>";
 } else {
    unset($_SESSION['login']);
    echo "<script type='text/javascript'>"
   . "location.href='../../index.html'; </script>";    
}

  
    