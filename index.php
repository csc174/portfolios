<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="CSC174" name="description">
  <meta content="CJ, Mel, Kalila, Tarin" name="author">
  <title>CSC174 Assignment 4</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">Home</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="tarin.php">Tarin</a></li>
        <li><a href="kalila.php">Kalila</a></li>
        <li><a href="mel.php">Mel</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div id="mel-home" class="col s12 m4">
        <div class="card">
            <div class="card-image">
              <img src="images/mel-headshot.jpg">
              <span class="card-title"> Melanie Dookharan </span>
            </div>
            <div class="card-content">
              <p> Short About Me</p>
            </div>
            <div class="card-action">
              <a href="includes/mel.php">Learn More</a>
            </div>
          </div>
      </div>
      <div id ="tarin-home" class="col s12 m4"></div>
        <div class="card">
          <div class="card-image">
            <img src="images/tarin-headshot.jpg">
            <span class="card-title"> Tarin Rickett </span>
          </div>
          <div class="card-content">
            <p> Short About Me</p>
          </div>
          <div class="card-action">
            <a href="includes/mel.php">Learn More</a>
          </div>
        </div>
      <div id= "kalila-home" class="col s12 m4 ">
        <div class="card">
            <div class="card-image">
              <img src="images/kalila-headshot.jpg">
              <span class="card-title">Kalila Shapiro</span>
            </div>
            <div class="card-content">
              <p>Short About Me</p>
            </div>
            <div class="card-action">
              <a href="includes/kalila.php">Learn More</a>
            </div>
          </div>
      </div>
    </div>





  </div>

  <footer>
    <p>Copyright © 2017</p>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </footer>

</body>
</html>
