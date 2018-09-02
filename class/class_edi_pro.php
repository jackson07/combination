<?php

include 'conection.php';

//dados
$id = filter_input(INPUT_POST,'id');
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
 $M = "M;";
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

$query = "UPDATE produto SET nome = '$nome', val_var = '$Varejo', val_rev = '$revendedor', detalhes = '$detalhes' ,categorias = '$categorias', sexo = '$sexo', tamanho  = '$tamanhos' where id = '$id' ";
if (mysqli_query($link, $query)) {
    echo "<script type='text/javascript'>"
    . "location.href='../edi_pro.php?nome=$nome'; </script>";
} else {
    echo "<script type='text/javascript'>"
    . "alert('Há algo errado!');";    

}
mysqli_close($link);

