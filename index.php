<!doctype html>
<html lang="en">
     <?php
  $text = 'Ahoj'; 
  $text2 = 'Jiřinko';
  $cislo = 5;
  $cislo = $cislo + 5;
  $pole2 = ['jmeno' => 'Jiřina', 'prijmeni' => 'Čepičková'];
  $projectName = 'ProjectJ';
  $counter = 1;
  $numbers = [0, 1, 1, 2, 3, 5, 8];
  $pageName = 'Home';
  
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"><?php echo $projectName?>-<?php echo $pageName ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
     
        <h1><?php echo $text?> <?php echo $pole2['jmeno'].' '.$pole2['prijmeni']?></h1>

       
        <p class="lead">Jsem z toho jelen.<br> Uplně.</p>
         
      </div>

    </main><!-- /.container -->
    
    <div class="container">
        <!-- new block from ukol 2 -->
        <div class="row">
          <div class="col-md-12">
            <normal>Počítadlo přístupů: <?php echo $counter ?></normal>
          </div>
        </div>
    </div>
    <div class="container">
        <!-- new block from ukol 2.3 -->
        <div class="row">
          <div class="col-md-6">
            <normal><?php var_dump($numbers) ?></normal>
          </div>
        <!-- ukol 2.home2 -->
 <?php
  $a = 4;
  $b = 6;
  $area = $a * $b;  
  $stranaA = 6;
  $stranaB = 6;
  $uhelBeta = 60;
  $stranaC = $stranaB * cos($uhelBeta);
  $obvod = $stranaA + $stranaB + $stranaC;

  
          ?>
          <div class="col-md-6">
            <h5>Obdélník o stranách a:<?php echo $a ?>, b:<?php echo $b ?> má obsah <?php echo $area ?>.</h5>
          </div>
         </div> 
        <!-- ukol 2.home3 -->
          <div class="row">
          <div class="col-md-4">
            <h4>Trojúhelník podle věty ssu</h4>
            <h5>vstupní parametry:</h5>
            <table border="2">
              <tr> <td><h6>Parametr</h6></td> <td><h6>Hodnota</h6></td> </tr>
              <tr> <td>strana A</td> <td><?php echo $stranaA ?></td> </tr>
              <tr> <td>strana B</td> <td><?php echo $stranaB ?></td> </tr>
              <tr> <td>úhel Beta</td> <td><?php echo $uhelBeta ?>°</td> </tr>
            </table>
            <h5>vlastnosti trojúhelníku:</h5>
            <table border="2">
              <tr> <td><h6>Parametr</h6></td> <td><h6>Hodnota</h6></td> </tr>
              <tr> <td>strana A</td> <td><?php echo $stranaA ?></td> </tr>
              <tr> <td>strana B</td> <td><?php echo $stranaB ?></td> </tr>
              <tr> <td>strana C</td> <td><?php echo $stranaC ?></td> </tr>
              <tr> <td>úhel Alfa</td> <td><?php echo $uhelBeta ?>°</td> </tr>
              <tr> <td>úhel Beta</td> <td><?php echo $uhelBeta ?>°</td> </tr>
              <tr> <td>úhel Gama</td> <td><?php echo $uhelBeta ?>°</td> </tr>
              <tr> <td>obvod</td> <td><?php echo $obvod ?></td> </tr>
              <tr> <td>obsah</td> <td><?php  ?></td> </tr>
            </table>
          </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
