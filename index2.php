<!doctype html>
<html lang="en">
  
  <?php
  $name = 'Kuba'; 
  require_once 'functions.php';
  require_once 'templates.php';
  
?>
  <?=headerJira ($title)
  ?>

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
          <h6 class="display-3"><?php if ($name == 'Jiřina' ) {
                                          echo 'čauky mňauky';
} else {
  echo 'Lekce 4';
}
 
 ?></h6>
          
        </div>
      </div>
<?php
$handle = fopen("colours.txt", "r");
$colors = [];
if ($handle) {
    while (!feof($handle)) {
        $colors[] = fgets($handle);
    }
    fclose($handle);
} else {
  echo "Error: File not loaded!";
}
      

?>
       <div class="row">
          
    <?php foreach ($colors as $value) { 
         ?>
       
          <div class="col-md-4">
             <?=$value ?> 
          </div>
        <?php }?>
       </div>
        
        <div class="container">
          
          <form method="GET" action="/lekce-2/index2.php">
  1. Číslo:<br>
  <input type="text" name="number1"><br>
  2. Číslo:<br>
  <input type="text" name="number2">
  <input type="submit" value="Zobrazit větší">
          </form>
          <?php 
          if (array_key_exists('number1', $_GET)){
            ?>
          <h4> <?=isHigher($_GET['number1'], $_GET['number2'])?></h4>
         <?php }
          ?>
         

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
