<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Walter Werner</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    
    <!--Icon-->

    <link href="img/logo2.png" type="image/x-icon" rel="shortcut icon">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="index.php">
                   <img src="img/logo-movil.png" alt="logo" class="logo" width="150">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="servicios.php">Servicios</a>
                    </li>
                    <li>
                        <a href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br>
<br>
   <!--contact-->
         <script type="text/javascript"></script>
         <div class="container-fluid">
              <div class="row">
              
                <div class="col-sm-5 col-sm-offset-1">
                  
                  <h2>Contactanos</h2>
                  <br>
                  <form class="form-horizontal" action="#" method="POST">
                    <div class="form-group">
                          <div class="col-xs-3">
                              <input class="form-control" id="firstName" name="nombre" placeholder="Nombre" required="" type="text">
                          </div>
                          <div class="col-xs-3">
                              <input class="form-control" id="middleName" name="apellido" placeholder="Apellido" required="" type="text">
                          </div>
                          <div class="col-xs-4">
                              <input class="form-control" id="lastName" name="asunto" placeholder="Asunto" required="" type="text">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-5">
                              <input class="form-control" name="email" placeholder="Correo electronico" required="" type="email">
                          </div>
                          <div class="col-xs-5">
                              <input class="form-control" name="telefono" placeholder="Telefono" required="" type="number">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-10">
                              <textarea class="form-control" rows="3" placeholder="Escribe Un Mensaje" name="mensaje"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-10">
                            <button class="btn btn-primary pull-right">Enviar</button>
                          </div>
                      </div>  
                  </form>
                  <hr>
                  <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                      <p>Administradores de la web</p>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                    <table class="table">
                        <tr>
                        <td><strong>Nombre:</strong></td>
                        <td><strong>Email:</strong></td>
                        <td><strong>Telefono:</strong></td>
                        </tr>

                        <tr>
                          <td>Cristobal</td><td>xxxxxxxxxxx@gmail.com</td><td>+569123456789</td>
                        </tr>

                        <tr>
                          <td>David</td><td>davidxdxd77@gmail.com</td><td>+56985605689</td>
                        </tr>

                        <tr>
                          <td>Walter</td><td>xxxxxxxxxxx@gmail.com</td><td>+569123456789</td>
                        </tr>
                    </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <h2>Dirección</h2>
                      <address>
                        <strong>Lautaro, Chile</strong><br>
                        Bilbao #<br>
                        Galería Plaza, Lautaro<br>
                        <abbr title="Phone">P:</abbr> 01234 567 890
                      </address>
                    </div>
                    <div class="col-xs-6">
                          <h2>Horarios</h2>
                          <address>
                            <strong>Lunes - Sabado</strong><br>
                            Mañana: <br>
                            XX:XX - 13:00<br>
                            <br>
                            Tarde:<br>
                            15:00 - 19:00<br>
                          </address>
                    </div><!--/col-6-->
                  </div><!--/row-->
                </div><!--/col-5-->
                <div class="col-sm-6 map">
                  <div class="google-map-canvas" id="map-canvas">
                     <iframe 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d780.2501808102485!2d-72.434896264418!3d-38.53375149758601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966b31372bd24de1%3A0x470d0ea5c2a9ac27!2sBilbao%2C+Regi%C3%B3n+IX%2C+Chile%2C+Lautaro%2C+IX+Regi%C3%B3n!5e0!3m2!1ses-419!2scl!4v1436552146893" class="maps" frameborder="0" style="border:0" allowfullscreen>   
                     </iframe>
                  </div>
                </div>
              </div>
            </div>
   <!-- /.contact -->

        <hr>

        <!-- Footer -->
        <div class="container">
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Walter Werner 2015</p>
                </div>
                <div class="col-lg-12">
                    <p>Web creada por <a href="#">David Rojas</a></p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
        </div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

      <!--Google Maps-->
    <script src="js/maps.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
