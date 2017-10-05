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
  <link type="text/css" rel="stylesheet" href="css/overrides.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<nav class="blue-grey darken-2">
  <div class="nav-wrapper container">
   <a href="#!" class="brand-logo">Home</a>
   <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
   <ul class="right hide-on-med-and-down">
     <li><a href="includes/tarin.php">Tarin</a></li>
     <li><a href="includes/kalila.php">Kalila</a></li>
     <li><a href="includes/mel.php">Mel</a></li>
   </ul>
   <ul class="side-nav" id="mobile-demo">
     <li><a href="includes/tarin.php">Tarin</a></li>
     <li><a href="includes/kalila.php">Kalila</a></li>
     <li><a href="includes/mel.php">Mel</a></li>
   </ul>
  </div>
</nav>

<div id="welcome" class="section blue-grey lighten-4 name-header">
  <h1 class="container name">Welcome to Queens, NY</h1>
</div>

<div id="mel-preview" class="section">
  <div class = "container">
    <div class = "row">
      <div class = "col s3">
        <img class="materialboxed" width="200" src="images/mel-headshot.jpg">
      </div>
      <div class = "col s9">
        <h3 class="teal-text text-accent-4"> Melanie Dookharan </h3>
        <h4> <strong>Postion:</strong> Design Artist </h4>
        <h4> <strong> Email: </strong> mdookhar@u.rochester.edu </h4>
          <a class="btn" href="includes/mel.php"> Resume</a>
          <a class="btn" href="https://www.linkedin.com/in/melaniedookharan/" > LinkedIn</a>
          <a class="btn" href="http://www.melanie-dookharan.com"> Portfolio</a>
      </div>
    </div>
  </div>
</div>

<div id="tarin-preview" class="section">
  <div class = "container">
    <div class = "row">
      <div class = "col s3">
        <img class="materialboxed" width="200" src="images/tarin-headshot.jpg">
      </div>
      <div class = "col s9">
        <h3 class ="red-text text-accent-2"> Tarin Rickett </h3>
        <h4> <strong>Postion:</strong> Code Monkey </h4>
        <h4> <strong> Email: </strong> trickett@u.rochester.edu </h4>
        <span style="display: inline">
          <a class="red lighten-2 btn" href="includes/tarin.php"> Resume</a>
          <a class="red lighten-2 btn" href="https://www.linkedin.com/in/tarinrickett" > LinkedIn</a>
          <a class="red lighten-2 btn" href="http://www.tarinrickett.com" > Portfolio</a>
        </span>
      </div>
    </div>
  </div>
</div>

<div id="kalila-preview" class = "section">
  <div class = "container">
    <div class = "row">
      <div class = "col s3">
        <img class="materialboxed" width="200" src="images/kalila-headshot.jpg">
      </div>
      <div class = "col s9">
        <h3 class="amber-text text-accent-3"> Kalila Shapiro </h3>
        <h4> <strong>Postion:</strong> Information Architect </h4>
        <h4> <strong> Email: </strong> kshapiro@u.rochester.edu </h4>
        <span style="display: inline">
          <a class="amber darken-1 btn" href="includes/kalila.php"> Resume</a>
          <a class="amber darken-1 btn"> LinkedIn</a>
          <a class="amber darken-1 btn"> Portfolio</a>
        </span>
      </div>
    </div>
  </div>
</div>

  <footer>
    <p>Copyright © 2017</p>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/mobile-nav.js"></script>
  </footer>

</body>
</html>
