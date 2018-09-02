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

$categorias = "$Calcinha $Sutia $Body $Cueca $Pijama";


// sexo
if(isset($_POST['Mascolino'])){
 $Mascolino = "Mascolino;";
}else{
 $Mascolino = "";	
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

