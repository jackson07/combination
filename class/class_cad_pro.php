<?php

include 'conection.php';

//dados
$nome = filter_input(INPUT_POST,'nome');
$Varejo = filter_input(INPUT_POST,'Varejo');
$revendedor = filter_input(INPUT_POST,'revendedor');
$detalhes = filter_input(INPUT_POST,'detalhes');


// categorias
if(isset($_POST['Calcinha'])){
	$Calcinha = "Calcinha;";
}else{
 $Calcinha = "";	
}

if(isset($_POST['Sutia'])){
 $Sutia = "Sutia;";
}else{
 $Sutia = "";	
}

if(isset($_POST['Body'])){
 $Body = "Body;";
}else{
 $Body = "";	
}

if(isset($_POST['Cueca'])){
 $Cueca = "Cueca;";
}else{
 $Cueca = "";	
}

if(isset($_POST['Pijama'])){
 $Pijama = "Pijama;";
}else{
 $Pijama = "";	
}

$categorias = "$Calcinha $Sutia $Body $Cueca $Pijama";


// sexo
if(isset($_POST['Mascolino'])){
 $Mascolino = "Mascolino;";
}else{
 $Mascolino = "";	
}

if(isset($_POST['Feminino'])){
 $Feminino = "Feminino;";
}else{
 $Feminino = "";	
}

$sexo = "$Feminino $Mascolino";


// tamanhos 

if(isset($_POST['P'])){
 $P = "P;";
}else{
 $P = "";	
}
if(isset($_POST['M'])){
 $Mascolino = "M;";
}else{
 $M = "";	
}
if(isset($_POST['G'])){
 $G = "G;";
}else{
 $G = "";	
}
if(isset($_POST['GG'])){
 $GG = "GG;";
}else{
 $GG = "";	
}

$tamanhos = "$P $M $G $GG";

$query = "INSERT INTO produto (nome,val_var,val_rev,detalhes,categorias,sexo,tamanho) values ('$nome','$Varejo','$revendedor','$detalhes','$categorias','$sexo','$tamanhos')";
if (mysqli_query($link, $query)) {
    echo "<script type='text/javascript'>"
    . "location.href='../edi_pro.php?nome=$nome'; </script>";
} else {
    echo "<script type='text/javascript'>"
    . "alert('Há algo errado!');";    

}
mysqli_close($link);

