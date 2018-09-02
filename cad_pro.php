<?php include 'class/verifica.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <script src="./assets/js/require.min.js"></script>
	  
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
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
    <!-- Dashboard Core -->
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
    <script src="./assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->    
				
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
			  <button style="float: right" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Adicionar produtos</button>
			  <div class="page-header">
              <h1 class="page-title">
                Produtos
              </h1>				
            </div>
            <div class="row row-cards">
              <div class="col-lg-4">
                <div class="row">
                  <div class="col-md-6 col-lg-12">
                    <div class="card">
					  <form action="cad_pro.php" method="post">
                      <div class="card-body">						  
                      <div class="form-group">
                        <label class="form-label">Categorias do produto</label>
                        <div class="selectgroup selectgroup-pills">
                          <label class="selectgroup-item">
                            <input type="checkbox" name="Calcinha" value="Calcinha" class="selectgroup-input" >
                            <span class="selectgroup-button">Calcinha</span>
                          </label>                                
                        </div>
                      </div>
        			<div class="form-group">
                        <label class="form-label">Sexo</label>
                        <div class="selectgroup selectgroup-pills">  
							<label class="selectgroup-item">
                            <input type="checkbox" name="Feminino" value="Feminino" class="selectgroup-input" >
                            <span class="selectgroup-button"><i class="fa fa-female"></i> Feminino</span>
                          </label>
                                                </div>
                      </div>
			  <div class="form-group">
                        <label class="form-label">Tamanhos disponíveis</label>
                        <div class="selectgroup selectgroup-pills">  
							<label class="selectgroup-item">
                            <input type="checkbox" name="P"  class="selectgroup-input" >
                            <span class="selectgroup-button">P</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="checkbox" name="M"  class="selectgroup-input">
                            <span class="selectgroup-button">M</span>
                          </label>							
                        </div>
                      </div>		 			 					
                      </div>
					  <div class="modal-footer">
					  <a href="cad_pro.php"><button style="float: left" class="btn btn-instagram">Limpar filtro</button></a>
					  <input type="submit" class="btn btn-info" value="Filtrar">
					  </div>
					 </form>
                    </div>
                  </div>                
                </div>
              </div>				
              <div class="col-lg-8">
                <div class="card">
				<div  class="input-icon mb-0">
				   <input name="consulta" id="txt_consulta" style="border: none; background-color: whitesmoke; margin: 2%; width: 96%; " type="text" class="form-control" placeholder="Pesquisar">
				 </div>					 
                  <table id="tabela" class="table card-table table-vcenter">
					  <?php

						if(isset($_POST['Calcinha'])){
							$Calcinha = " and categorias like '%Calcinha%' ";
						}else{
						 $Calcinha = "";	
						}

						if(isset($_POST['Sutia'])){
						 $Sutia = "and categorias like '%Sutia%' ";
						}else{
						 $Sutia = "";	
						}		
							
	
					    $query = "SELECT * from produto where id > 0 $sexo $tamanhos $categorias";
						$result = $link->query($query);
						while ($fetch = $result->fetch_assoc()) {
						foreach ($fetch as $field => $value) {}
						$id = $fetch['id'];
						$nome = $fetch['nome'];
						$val_var = $fetch['val_var'];
						$val_rev = $fetch['val_rev'];
						
						$query2 = "SELECT * from foto where id_pro = $id order by id limit 1";
						$result2 = $link->query($query2);
						while ($fetch2 = $result2->fetch_assoc()) {					
						$foto = $fetch2['foto'];
						}
						?>
					 <tr>
                      <td>
						  <span class="avatar"  style="border: 2px solid #aaa; height: 50px; width: 50px; background-image: url(img/ropas/<?php echo $foto ?>)"></span>
					  </td>
                      <td>
                        <?php echo $nome ?>
                      </td>                     
                      <td class="text-right">
                        <strong><?php echo $val_var ?></strong>
                      </td>
					   <td class="text-right">
                        <strong><?php echo $val_rev ?></strong>
                      </td>
						<td class="text-right">
						<a href="edi_pro.php?nome=<?php echo $nome ?>"><button class="btn btn-info">Visualizar</button></a>
						</td>
                    </tr>
				 <?php } ?>
                  </table>
					<script>
					 $('input#txt_consulta').quicksearch('table#tabela tbody tr');
					</script>
                </div>
              </div>
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
		  <form action="class/class_cad_pro.php" method="post">
		  <div class="col-lg-12">
		  <div style="float: left" class="col-lg-6">
			  <div class="form-group">
                          <label class="form-label">Nome</label>
                          <input type="text" class="form-control" name="nome" placeholder="Título">
                        </div>
			  <div class="form-group">
                        <label class="form-label">Categorias do produto</label>
                        <div class="selectgroup selectgroup-pills">
                          <label class="selectgroup-item">
                            <input type="checkbox" name="Calcinha" value="Calcinha" class="selectgroup-input" >
                            <span class="selectgroup-button">Calcinha</span>
                          </label>                                         
                        </div>
                      </div>
        			<div class="form-group">
                        <label class="form-label">Sexo</label>
                        <div class="selectgroup selectgroup-pills">  
							<label class="selectgroup-item">
                            <input type="checkbox" name="Feminino" value="Feminino" class="selectgroup-input" >
                            <span class="selectgroup-button"><i class="fa fa-female"></i> Feminino</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="checkbox" name="Mascolino" value="Mascolino" class="selectgroup-input">
                            <span class="selectgroup-button"><i class="fa fa-male"></i> Mascolino</span>
                          </label>
                        </div>
                      </div>
			  <div class="form-group">
                        <label class="form-label">Tamanhos disponíveis</label>
                        <div class="selectgroup selectgroup-pills">  
							<label class="selectgroup-item">
                            <input type="checkbox" name="P"  class="selectgroup-input" >
                            <span class="selectgroup-button">P</span>
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
                          <input id='preco' type="text" name="Varejo" placeholder="Valor de varejo" class="form-control" data-mask="000.000.000.000.000,00" data-mask-reverse="true" autocomplete="off" maxlength="22">	
                        </div><br>
						 <div class="input-group">
				  			<span class="input-group-prepend">
                            <span class="input-group-text">Desconto revendedor</span>
                          </span>
                          <input id='porc' type="text" class="form-control" name="revendedor" placeholder="Desconto de revendedor">	 </div>
				  <div class="form-group">
					  <Br>
					  <label class="form-label">Detalhes <span class="form-label-small">Máximo 255 caracteres</span></label>
					  <textarea class="form-control" name="detalhes" rows="6" placeholder=""></textarea>
                  </div>
		 	 </div>
		</div>
      </div>
      <div class="modal-footer">
		   <input type="submit" class="btn btn-success" value="Adicionar">
      </div>
	</form>
    </div>
  </div>
</div>
	  
	  
  </body>
</html>