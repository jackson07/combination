<?php

define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );

include 'conection.php';
include 'glob/libs/uploads/class.upload.php';

$tipo = filter_input(INPUT_POST,'tipo');
$cor = filter_input(INPUT_POST,'cor');
$id_pro = filter_input(INPUT_POST,'id_pro');
$nome = filter_input(INPUT_POST,'nome');
$quantidade = filter_input(INPUT_POST,'quantidade');

if($tipo == 'cor'){
	$value = $cor;
}elseif($tipo == 'estampa'){
	
$sucesso = false;
if (isset($_FILES['estampa'])) {
    $value = md5(date('YmdHis'));	
    $handle = new upload($_FILES['estampa'], 'pt_BR');
    if ($handle->uploaded) {
      $handle->file_new_name_body   = $value;
      $handle->image_resize         = true;
      $handle->image_x              = 640;
      $handle->image_ratio_y        = true;
      $handle->process(ABSPATH.'img/ropas/estampa/');	  
      if ($handle->processed) {
        $value = $handle->file_dst_name;
        $sucesso = true;
        $handle->clean();		 
      } else {
        $msgError = $handle->error;
        $sucesso = false;
      }		 
   }	
}

}


if ($validacao == "ok"){
$query = "INSERT INTO foto (id_pro,quantidade,foto,categoria,valor) values ('$id_pro','$quantidade' ,'$foto2','$tipo','$value')";
$result = $link->query($query);
}

 echo "<script type='text/javascript'>location.href='../edi_pro.php?nome=$nome';</script>";
mysqli_close($link);