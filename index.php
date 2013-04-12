
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Concesionarias Radios - CL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Listado Farmacias de Turno, Copyleft - Compartir es Bueno">
    <meta name="author" content="José Damián Garrido Muñoz">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/concesionarias.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/concesionarias-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="assets/ico/favicon.png" />
  </head>

  <body id="top" data-spy="scroll" data-target=".bs-docs-sidebar">

    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/">Directorio concesionarias radios Chile</a>
          <div class="nav-collapse collapse">

            <ul class="nav">
              <!--
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              
              -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Regiones <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/?r=15">Arica y Parinacota</a></li>
                  <li><a href="/?r=1">Tarapacá</a></li>
                  <li><a href="/?r=2">Antofagasta</a></li>
                  <li><a href="/?r=3">Atacama</a></li>
                  <li><a href="/?r=4">Coquimbo</a></li>
                  <li><a href="/?r=5">Valparaíso</a></li>
                  <li><a href="/?r=13">Metropolitana de Santiago</a></li>
                  <li><a href="/?r=6">Del Libertador Gral. Bernardo O’Higgins</a></li>
                  <li><a href="/?r=7">Del Maule</a></li>
                  <li><a href="/?r=8">Del Biobío</a></li>
                  <li><a href="/?r=9">De la Araucanía</a></li>
                  <li><a href="/?r=14">De los Ríos</a></li>
                  <li><a href="/?r=10">De los Lagos</a></li>
                  <li><a href="/?r=11">Aysén del Gral. Carlos Ibáñez del Campo</a></li>
                  <li><a href="/?r=12">Magallanes y de la Antártica Chilena</a></li>
                </ul>
              </li>
              <li><a href="#acerca">Acerca</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <?php
      include('666.php');
      ?>
      <div class="row">
        <div class="span3 bs-docs-sidebar">
          <ul class="nav nav-list bs-docs-sidenav">
            <?php
            echo $menu;
            ?>
          </ul>
        </div>
        <div class="span9">
          <div class="page-header">
            <h1>Región <?php echo $n_region ?></h1>
          </div>
            <?php
            echo $ficha;
            ?>
            <div class="row" id="acerca">
              <h3>Acerca</h3>
              <p>Los datos que aquí se presentan fueron obtenidos desde el <a href="http://datos.gob.cl/datasets/ver/1926">Portal de Datos Públicos del Estado</a> con fecha 11 de Abril del 2013 y se entregan tal como vienen.</p>
              <h3>Fork me</h3>
              <p><a href="https://github.com/jdgarrido/concesionarias-radios">Deseas mejorar esto? lets go!!!</a></p>
            </div>
        </div>
      </div>


      <hr>

      <footer>
        <p>&copy; 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?php include_once("ganalytics.php") ?>
  </body>
</html>
