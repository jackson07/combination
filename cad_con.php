
<!doctype html>
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
    <title>Store components - tabler.github.io - a responsive, flat and full featured admin template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="./assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
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
            <div class="page-header">
              <h1 class="page-title">
                Contas cadastradas
              </h1>
            </div>
            <div class="row row-cards">
              <div class="col-lg-3">
                <div class="row">
                  <div class="col-md-6 col-lg-12">
                    <div class="card">
                      <div class="card-body">                                    
                      <div class="form-group">
                        <label class="form-label">Sexo</label>
                        <div class="selectgroup selectgroup-pills">
                          <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
                            <span class="selectgroup-button selectgroup-button-icon"><i class="fa fa-male"></i></span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="2" class="selectgroup-input">
                            <span class="selectgroup-button selectgroup-button-icon"><i class="fa fa-female"></i></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Categorias</label>
                        <div class="selectgroup selectgroup-pills">
                          <label class="selectgroup-item">
                            <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">Varejo</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                            <span class="selectgroup-button">Revendedor</span>
                          </label>                          
                        </div>
                      </div>	
                      </div>
                    </div>
                  </div>                
                </div>
              </div>
              <div class="col-lg-9">
                <div class="card">
					<table class="table">
					  <thead class="thead-light">
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">First</th>
						  <th scope="col">Last</th>
						  <th scope="col">Handle</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <th scope="row">1</th>
						  <td>Mark</td>
						  <td>Otto</td>
						  <td>@mdo</td>
						</tr>
						<tr>
						  <th scope="row">2</th>
						  <td>Jacob</td>
						  <td>Thornton</td>
						  <td>@fat</td>
						</tr>
						<tr>
						  <th scope="row">3</th>
						  <td>Larry</td>
						  <td>the Bird</td>
						  <td>@twitter</td>
						</tr>
					  </tbody>
					</table>
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
  </body>
</html>