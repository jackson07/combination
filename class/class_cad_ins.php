<?php

include 'conection.php';


$cnpj = filter_input(INPUT_POST,'cnpj');
$email = filter_input(INPUT_POST,'email');
$endereco = filter_input(INPUT_POST,'endereco');
$cidade = filter_input(INPUT_POST,'cidade');
$estado = filter_input(INPUT_POST,'estado');
$cep = filter_input(INPUT_POST,'cep');
$tel1 = filter_input(INPUT_POST,'tel1');
$tel2 = filter_input(INPUT_POST,'tel2');
$facebook = filter_input(INPUT_POST,'facebook');
$whatsapp = filter_input(INPUT_POST,'whatsapp');
$sobre = filter_input(INPUT_POST,'sobre');


$query = "UPDATE institucional SET cnpj = '$cnpj', email = '$email', endereco = '$endereco',
cidade = '$cidade', estado = '$estado', cep = '$cep', tel1 = '$tel1', tel2 = '$tel2', facebook = '$facebook', whatsapp = '$whatsapp', sobre = '$sobre'";
        
if (mysqli_query($link, $query)) {
    echo "<script type='text/javascript'>"
    . "location.href='../cad_ins.php'; </script>";
} else {
    echo "<script type='text/javascript'>"
    . "alert('Há algo errado!');";    

}
mysqli_close($link);
