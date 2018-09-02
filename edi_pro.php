<?php include 'class/verifica.php';
$nome = filter_input(INPUT_GET,'nome');

$query = "SELECT * from produto where nome = '$nome'";

$result = $link->query($query);
while ($fetch = $result->fetch_assoc()) {
	foreach ($fetch as $field => $value) {}
	$id = $fetch['id'];
	$nome = $fetch['nome'];
	$val_var = $fetch['val_var'];
	$val_rev = $fetch['val_rev'];
	$detalhes = $fetch['detalhes'];
	$categorias = $fetch['categorias'];
	$sexo = $fetch['sexo'];
	$tamanho = $fetch['tamanho'];
	
	//categoria
	if (substr_count($categorias, 'Pijama') > 0) {
    $Pijama = "checked";
		}else{
	$Pijama = "";	
	}
	if (substr_count($categorias, 'Cueca') > 0) {
    $Cueca = "checked";
		}else{
	$Cueca = "";	
	}
	if (substr_count($categorias, 'Body') > 0) {
    $Body = "checked";
		}else{
	$Body = "";	
	}
	if (substr_count($categorias, 'Sutia') > 0) {
    $Sutia = "checked";
		}else{
	$Sutia = "";	
	}
	if (substr_count($categorias, 'Calcinha') > 0) {
    $Calcinha = "checked";
		}else{
	$Calcinha = "";	
	}
	
	//sexo 
if (substr_count($sexo, 'Feminino') > 0) {
    $Feminino = "checked";
		}else{
	$Feminino = "";	
	}

	if (substr_count($sexo, 'Mascolino') > 0) {
    $Mascolino = "checked";
		}else{
	$Mascolino = "";	
	}

	//tamanhos
	if (substr_count($tamanho, 'P') > 0) {
    $P = "checked";
		}else{
	$P = "";	
	}

	if (substr_count($tamanho, 'M') > 0) {
    $M = "checked";
		}else{
	$M = "";	
	}

	if (substr_count($tamanho, 'G') > 0) {
    $G = "checked";
		}else{
	$G = "";	
	}

	if (substr_count($tamanho, 'GG') > 0) {
    $GG = "checked";
		}else{
	$GG = "";	
	}

}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.png" />
    <title>Combination</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="./assets/js/require.min.js"></script>
	  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	  
       <!-- Dashboard Core -->
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
    <script src="./assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="https://www.geradordecep.com.br/assets/js/jquery-1.2.6.pack.js"></script>
    <script src="https://www.geradordecep.com.br/assets/js/jquery.maskedinput-1.1.4.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#preco").mask("R$99,99");
		});
		
		$(document).ready(function(){
			$("#porc").mask("99%");
		});
	</script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
      <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
         <div class="container">
            <div class="row align-items-center">             
            	<?php include 'menu.html' ?>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
          <div class="container">
			  <button style="float: right" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Adicionar unidades</button>
			  <div class="page-header">
              <a href="cad_pro.php"><button class="btn btn-info">Voltar</button></a>			
            </div>
			<form action="class/class_edi_pro.php" method="post">
            <div class="row row-cards">
				
					<input type="hidden" name="id" value="<?php echo $id ?>">
				<div class="card">
                      <div class="card-body">	
				<div style="float: left" class="col-lg-6">
			  <div class="form-group">
                          <label class="form-label">Nome</label>
                          <input type="text" value="<?php echo $nome ?>" class="form-control" name="nome" placeholder="Título">
                        </div>
			  <div class="form-group">
                        <label class="form-label">Categorias do produto</label>
                        <div class="selectgroup selectgroup-pills">
                          <label class="selectgroup-item">
                            <input type="checkbox" name="Calcinha"  <?php echo $Calcinha ?> class="selectgroup-input" >
                            <span class="selectgroup-button">Calcinha</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="checkbox" name="Sutia"  <?php echo $Sutia ?> class="selectgroup-input">
                            <span class="selectgroup-button">Sutiã</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="checkbox" name="Body"  <?php echo $Body ?> class="selectgroup-input">
                            <span class="selectgroup-button">Body</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="checkbox" name="Cueca"  <?php echo $Cueca ?> class="selectgroup-input">
                            <span class="selectgroup-button">Cueca</span>
                          </label>
                          <label class="selectgroup-item">
							 
                            <input type="checkbox" name="Pijama"  <?php echo $Pijama ?>  class="selectgroup-input">
                            <span class="selectgroup-button">Pijama</span>
                          </label>                          
                        </div>
                      </div>
        			<div class="form-group">
                        <label class="form-label">Sexo</label>
                        <div class="selectgroup selectgroup-pills">  
							<label class="selectgroup-item">
                            <input type="checkbox" name="Feminino" <?php echo $Feminino ?> value="Feminino" class="selectgroup-input" >
                            <span class="selectgroup-button"><i class="fa fa-female"></i> Feminino</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="checkbox" name="Mascolino" <?php echo $Mascolino ?> value="Mascolino" class="selectgroup-input">
                            <span class="selectgroup-button"><i class="fa fa-male"></i> Mascolino</span>
                          </label>
                        </div>
                      </div>
			  		<div class="form-group">
                        <label class="form-label">Tamanhos disponíveis</label>
                        <div class="selectgroup selectgroup-pills">  
							<label class="selectgroup-item">								
                            <input type="checkbox" name="P" <?php echo $P ?>  class="selectgroup-input" >
                            <span class="selectgroup-button">P</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="checkbox" name="M" <?php echo $M ?>  class="selectgroup-input">
                            <span class="selectgroup-button">M</span>
                          </label>
							<label class="selectgroup-item">
                            <input type="checkbox" name="G" <?php echo $G ?>  class="selectgroup-input" >
                            <span class="selectgroup-button">G</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="checkbox" name="GG" <?php echo $GG ?>  class="selectgroup-input">
                            <span class="selectgroup-button">GG</span>
                          </label>
                        </div>
					  </div>			  		
		 			 </div>
					<div style="float: right" class="col-lg-6">
			  		 <label class="form-label">Preços</label>
			   		 <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text">Preço de varejo</span>
                          </span>
                          <input id='preco' type="text" name="Varejo" value="<?php echo $val_var ?>" placeholder="Valor de varejo" class="form-control"  autocomplete="off" maxlength="22">	
                        </div><br>
						 <div class="input-group">
				  			<span class="input-group-prepend">
                            <span class="input-group-text">Desconto revendedor</span>
                          </span>
                          <input  type="text" class="form-control" id="porc" name="revendedor" value="<?php echo $val_rev ?>" placeholder="Desconto de revendedor">
						</div>
				  		<div class="form-group">
					   <Br>
					  <label class="form-label">Detalhes <span class="form-label-small">Máximo 255 caracteres</span></label>
					  <textarea class="form-control" name="detalhes" rows="6" placeholder=""><?php echo $detalhes ?></textarea>
                  </div>
		 	   </div>
			</div>
			<div class="card-footer text-right">
			  <button type="submit" class="btn btn-success">Salvar alterações</button>
			</div>				  
		 </div>
		</form>	
				<?php 
	$query = "SELECT * from foto where id_pro = $id";

$result = $link->query($query);
while ($fetch = $result->fetch_assoc()) {
	foreach ($fetch as $field => $value) {}
	
	$foto = $fetch['foto'];
	$categoria = $fetch['categoria'];
	$quantidade = $fetch['quantidade'];
	$valor = $fetch['valor'];
	
	?>
			 <div class="col-sm-6 col-lg-4">
                <div class="card p-3">
                  <a href="javascript:void(0)" class="mb-3">
                    <img src="img/ropas/<?php echo $foto ?>"  class="rounded">
                  </a>
                  <div class="d-flex align-items-center px-2">
					  <?php if($categoria == 'cor'){
							$style = "background-color:$valor";
							}else{
							$style = "background-image: url(img/ropas/estampa/$valor)";
							}?>
                    <div class="avatar avatar-md mr-3" style="<?php echo $style ?>"></div>
                    <div>						
                      <div>
						  <b class="text-info"><?php if($categoria == 'cor'){
							echo "Produto sem estampa";
							}else{
							echo "Produto estampado";
							}?></b>
						 </div> 
						<smal><?php echo $quantidade ?> unidades restantes</smal>
                    </div>                    
                  </div>
                </div>
              </div>
	<?php } ?>
             
            </div>
          </div>
        </div>
      </div>     
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2018 <a href=".">Amate</a>. Feito por <a href="https://codecalm.net" target="_blank">Persysten.</a> Todos os direitos reservados.
            </div>
          </div>
        </div>
      </footer>
    </div>
	  
	  
	  
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div style="max-width: 500px;" class="modal-dialog" role="document">
    <div  class="modal-content">
      <div  class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar unidades</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
		  <form enctype="multipart/form-data" action="class/upl_img.php" method="post">
			  <input type="hidden" name="id_pro" value="<?php echo $id ?>" >
			  <input type="hidden" name="nome" value="<?php echo $nome ?>" >
			  <div style="background-color: whitesmoke; padding: 10px; border-radius: 5px;" class="form-group">
				  <script>
				  function abrir(el) {
				  var display = document.getElementById(el).style.display;
					document.getElementById(el).style.display = 'block';  
				}

				function fechar(el) {
				  var display = document.getElementById(el).style.display;
					document.getElementById(el).style.display = 'none';
				}
				  </script>
					<label class="form-label">Tipo</label>
					 <div class="selectgroup w-100">
					  <label class="selectgroup-item">
						<input onclick="abrir('semestampa'),fechar('comestampa')" checked="" type="radio" name="tipo" value="cor" class="selectgroup-input">
						<span class="selectgroup-button selectgroup-button-icon"><i class="fa fa-window-maximize"></i> Sem estampa</span>
					  </label>
					 <label class="selectgroup-item">						
						<input onclick="fechar('semestampa'),abrir('comestampa')" type="radio" name="tipo" value="estampa" class="selectgroup-input" >
						<span class="selectgroup-button selectgroup-button-icon"><i class="fa fa-photo"></i> Com estampa</span>
					 </label>
					</div> 
				  <br>	
					<div id="semestampa" class="form-group" style="display:block">
					  <label class="form-label">Cor do produto</label>
					  <input type="color" style="height: 50px;" class="form-control" name="cor" placeholder="Título">
					</div>
					<div id="comestampa" class="form-group" style="display:none">
						<label class="form-label">Estampa do produto</label>
					    <input type="file" class="form-control" name="estampa">					 
					</div>			  
			   </div>
			<div class="form-group">	
				<label class="form-label">Quantidade disponível</label>
				   <input type="number" name="quantidade" placeholder="Cor/estampa" class="form-control">
			  </div>
			 	 <h3 style="text-align: center">Fotos</h3>
			  
			   <div class="form-group">				   
				   <input type="file" name="foto"  class="form-control">
			  </div>
			  <div class="form-group">				   
				   <input type="file" name="foto1"  class="form-control">
			  </div>
			   <div class="form-group">				   
				   <input type="file" name="foto2"  class="form-control">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<input type="submit" class="btn btn-primary" value="Adicionar">
			  </div>
			</form>
			</div>
		  </div>
		</div>
  </body>
</html>