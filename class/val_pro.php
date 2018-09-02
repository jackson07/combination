<?php
  //envio o charset para evitar problemas com acentos
  header("Content-Type: text/html; charset=UTF-8");

include 'conection.php';

$nome = filter_input(INPUT_GET, 'nome');

$val_cod = "nao";
$query = "SELECT * FROM produto WHERE nome = '$nome'";
$result = $link->query($query);
while ($fetch = $result->fetch_assoc()) {
$val_cod = $fetch['nome'];
}

if($val_cod <> "nao" ) {//se retornar algum resultado    
	echo "
	<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
	<a href='edi_pro.php?nome=$nome'><button type='button' class='btn btn-danger'>Ver produto <b>$nome</b> cadastrado</button></a>
	";	
  } else {
    echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-success" value="Adicionar">';
  }
