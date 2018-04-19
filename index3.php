<!doctype html>
<html lang="en">
  
  <?php
  $name = 'Jiřina'; 
  $number = 5;
  $a = 1;
  $soucet = 0;
  $soucin = 1;
  $iterator = 1;
  
  while ($iterator <= $number) {
    $soucet = $soucet + $iterator;
    $soucin = $soucin * $iterator;
    
    $iterator = $iterator + 1;
  //$iterator++;
  //$iterator +=1
 
  
  
  }
  
  $Jirina = ['Čeština' => 2, 'Matematika' => 3, 'Ekonomie' => 1, 'Technologie' => 1, 'Praxe' => 1];
  $student = ['Čepičková', 'Kulich', 'Kloboučník', 'Slamák', 'Holý'];
    
  session_start();
    
      
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Jirinka</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Jirinka</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lekce-1/about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">
            <?php if ($name == 'Jiřina' ) {
                     echo 'čauky mňauky ';
                   } else {
                     echo 'Dobrý den';
                    } 
                  if (array_key_exists('accessed', $_SESSION)) {
                    if (array_key_exists('jmeno', $_GET)) {
                    echo . GET ['jmeno'];      
                  } else {
                      echo 'Řekni mi své jméno';}
                    
                    echo 'Neznámý!';
                    $_SESSION['accessed'] = 1;
                  }
                    
            
            ?></h1>
          
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <table border="2">
              <tr> <td>proměnná</td> <td><?php echo $number ?></td> </tr>
              <tr> <td>součet</td> <td><?php echo $soucet  ?></td> </tr>
              <tr> <td>součin</td> <td><?php echo $soucin ?></td> </tr>
            </table>
          </div>
          
          <div class="col-md-4">
            <h5>Hodnocení předmětů</h5>
             <table border="2">
               <?php foreach ($Jirina as $key => $value) { ?>   
               <table border="2">
                 <tr> <td style="width:100px"><?=$key ?> <!-- toto je skrácený zápis je to ekvivaletn následujícího echa --> </td> 
                      <td style="width:100px" align="center"> <?php echo $value ?></td> </tr>
               <?php }?>
               </table>
              
          </div>
         
          <div class="col-md-4">
            <h5>Soupis studentů</h5>
            <table border="2">
               <?php foreach ($student as $value) { ?>   
               <table border="2">
                 <tr> <td style="width:100px"> </td> <td style="width:100px" align="center"> <?php echo $value ?></td> </tr>
               <?php }?>
               </table>
          </div>
        </div>
      
        <p class="lead">
          <form action="/index3.php" method="GET">
     <input >
            
        
        <div class="container">
          <!-- my new container with form -->
          
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="form-group">
    <label for="testselect">Test</label>
    <select class="form-control" id="testselect">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <button type="button" class="btn btn-success">Submit</button>
</form>
         </div> 

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
