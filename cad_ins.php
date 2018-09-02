<?php include 'class/verifica.php';

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
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-06 16:27:42 +0200 -->
    <title>AMATE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="./assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>   
    <!-- c3.js Charts Plugin -->
    <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="./assets/plugins/input-mask/plugin.js"></script>
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
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-profile">
                  <div class="card-header" style="background-image: url(img/ropas.jpg);"></div>
                  <div class="card-body text-center">
                    <img class="card-profile-img" src="demo/faces/male/16.jpg">
                    <h3 class="mb-3">Amate</h3>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="media">
                      
                      <div class="media-body">
                        

    <style>
      #map {
        height: 300px; 
        width: 100%;
       }
    </style>  
						  <h4> Localização</h4>
    <div id="map"></div>
    <script>
		function initMap() {
		  var uluru = {lat: -25.344, lng: 131.036};
		  var map = new google.maps.Map(
			  document.getElementById('map'), {zoom: 15, center: uluru});
		  var marker = new google.maps.Marker({position: uluru, map: map});
		}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABLgVz31Ul41lZ7yMWsMv4E6O_EM0JeVY&callback=initMap">
    </script>
						  
 
                      </div>
                    </div>
                  </div>
                </div>                
              </div>
				<?php
					$query = "SELECT * from institucional";
					$result = $link->query($query);
					while ($fetch = $result->fetch_assoc()) {
						foreach ($fetch as $field => $value) {}
						
						$cnpj = $fetch['cnpj'];
						$email = $fetch['email'];
						$endereco = $fetch['endereco'];
						$cidade = $fetch['cidade'];
						$estado = $fetch['estado'];
						$cep = $fetch['cep'];
						$tel1 = $fetch['tel1'];
						$tel2 = $fetch['tel2'];
						$facebook = $fetch['facebook'];
						$whatsapp = $fetch['whatsapp'];
						$sobre = $fetch['sobre'];
					}
				
				
				?>
              <div class="col-lg-8">                
                <form action="class/class_cad_ins.php" method="post" class="card">
                  <div class="card-body">
                    <h3 class="card-title">Editar informações</h3>
                    <div class="row">                      
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">CNPJ</label>
                          <input type="text" name="cnpj" value="<?php echo $cnpj ?>" class="form-control" placeholder="" value="">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-9">
                        <div class="form-group">
                          <label class="form-label">Email</label>
                          <input type="email" name="email" value="<?php echo $email ?>" class="form-control" placeholder="">
                        </div>
                      </div>                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Endereço</label>
                          <input type="text" name="endereco" value="<?php echo $endereco ?>" class="form-control" placeholder="" value="">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Cidade</label>
                          <input type="text" name="cidade" value="<?php echo $cidade ?>" class="form-control" placeholder="" value="">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-5">
                        <div class="form-group">
                          <label class="form-label">Estado</label>
                          <input type="text" name="estado" value="<?php echo $estado ?>" class="form-control" placeholder="">
                        </div>
                      </div>
                       <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">CEP</label>
                          <input type="text" name="cep" value="<?php echo $cep ?>" class="form-control" placeholder="">
                        </div>
                      </div>
						<div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Telefone principal</label>
                          <input type="text" name="tel1" value="<?php echo $tel1 ?>" class="form-control" placeholder="" value="">
                        </div>
                      </div>
						<div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Telefone secundário</label>
                          <input type="text" name="tel2" value="<?php echo $tel2 ?>" class="form-control" placeholder="" value="">
                        </div>
                      </div>
						<div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Link do Facebook</label>
                          <input type="text" name="facebook" value="<?php echo $facebook ?>" class="form-control" placeholder="" value="">
                        </div>
                      </div>
						<div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Número do Whatsapp</label>
                          <input type="text" name="whatsapp" value="<?php echo $whatsapp ?>" class="form-control" placeholder="" value="">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <label class="form-label">Sobre</label>
                          <textarea rows="5" name="sobre" class="form-control" placeholder="Características" value=""><?php echo $sobre ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                  </div>
                </form>
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
  </body>
</html>