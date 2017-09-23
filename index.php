<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="CSC174">
    <meta name="author" content="CJ, Mel, Kalila, Tarin">
    <title>CSC174 Assignment 4</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/overrides.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <ul class="nav navbar-nav">
        <li><a class ="gov" href="index.php">Home </a></li>
        <li><a class="gov" id="mel-tab" href="includes/mel.php">Mel</a></li>
        <li><a class="gov" id="kalila-tab" href="includes/kalila.php">Kalila</a></li>
        <li><a class="gov" id="tarin-tab" href="includes/tarin.php">Tarin</a></li>
      </ul>
    </nav>

<!--     <div class="jumbotron text-center">
      <h1>Welcome to Queens, NY</h1>  
    </div>
 -->
<div class= "welcome">
  <h1> Welcome to Queens, NY</h1>
  <h2> Click on a person to learn more about them!</h2>
</div>

<div class="container-fluid">
  <div class="row">
    <div id = "mel" class="col-md-4 media well">
        <div class = "media-left">
          <a href="includes/mel.php">
            <img src="mel-headshot.jpg" class="img-circle media-object" alt="Cinque Terre" width="100" height="120">
          </a>
        </div>
        <div class = "media-body"> 
          <h2> Mel Dookharan </h2>
          <h3> Class of 2019 </h3>
        </div>
    </div>

    <div id = "tarin" class="col-md-4 media well">
        <div class = "media-left">
          <a href="includes/tarin.php">
            <img src="tarin-headshot.jpg" class="img-circle media-object" alt="Cinque Terre" width="100" height="120">
          </a>
        </div>
        <div class = "media-body"> 
          <h2>Tarin Rickett </h2>
          <h3> Class of 2018 </h3>
        </div>
    </div>

    <div id = "kalila" class="col-md-4 media well">
        <div class = "media-left">
          <a href="includes/kalila.php">
            <img src="kalila-headshot.jpg" class="img-circle media-object" alt="Cinque Terre" width="100" height="120">
          </a>
        </div>
        <div class = "media-body"> 
          <h2> Kalila Shapiro </h2>
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

