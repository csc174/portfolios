<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="CSC174">
    <meta name="author" content="CJ, Mel, Kalila, Tarin">
    <title>CSC174</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/overrides.css" rel="stylesheet">
  </head>

  <body>
    <div class="jumbotron text-center">
      <h1>Welcome to Queens, NY</h1>
      <p>Click on a profile to learn more about them!</p>   
    </div>
<!--     <nav class="navbar navbar-inverse navbar-fixed-top">
      <ul class="nav navbar-nav">
        <li><a class="gov" id="cj-tab" href="#">CJ</a></li>
    		<li><a class="gov" id="mel-tab" href="#">Mel</a></li>
    		<li><a class="gov" id="kalila-tab" href="#">Kalila</a></li>
        <li><a class="gov" id="tarin-tab" href="#">Tarin</a></li>
      </ul>
    </nav>
 -->
    <?php include "includes/mel.php" ?>
    <?php include "includes/kalila.php" ?>
    <?php include "includes/tarin.php" ?>

<div class="container-fluid">
  <div class="row">

    <div id = "mel" class="col-md-4 media well">
        <div class = "media-left">
          <a href=""> 
            <img src="mel-headshot.jpg" class="img-circle media-object" alt="Cinque Terre" width="100" height="120">
          </a>
        </div>
        <div class = "media-body"> 
          <h2><a href="<?php include "includes/mel.php" ?>" > Mel Dookharan </a></h2>
          <h3> Class of 2019 </h3>
        </div>
    </div>

    <div id = "tarin" class="col-md-4 media well">
        <div class = "media-left">
          <a href="">
            <img src="mel-headshot.jpg" class="img-circle media-object" alt="Cinque Terre" width="100" height="120">
          </a>
        </div>
        <div class = "media-body"> 
          <h2><a href="<?php include "includes/tarin.php" ?>" > Tarin Rickett </a></h2>
          <h3> Class of 2018 </h3>
        </div>
    </div>

    <div id = "kalila" class="col-md-4 media well">
        <div class = "media-left">
            <img src="kalila-headshot.jpg" class="img-circle media-object" alt="Cinque Terre" width="100" height="120">
          </a>
        </div>
        <div class = "media-body"> 
          <h2><a href="<?php include "includes/kalila.php" ?>" > Kalila Shapiro </a></h>
          <h3> Class of 2018 </h3>
        </div>
      </div>
    </div>
  </div>



    <footer>
      <p>Copyright © 2017</p> 
    </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/tabs.js"></script>

  </body>
</html>

