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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <ul class="nav navbar-nav">
        <li><a class="gov" id="cj-tab" href="#">CJ</a></li>
    		<li><a class="gov" id="mel-tab" href="#">Mel</a></li>
    		<li><a class="gov" id="kalila-tab" href="#">Kalila</a></li>
        <li><a class="gov" id="tarin-tab" href="#">Tarin</a></li>
      </ul>
    </nav>

    <?php include "includes/cj.php" ?>
    <?php include "includes/mel.php" ?>
    <?php include "includes/kalila.php" ?>
    <?php include "includes/tarin.php" ?>

    <footer>
      <p>Copyright © 2017</p> 
    </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/tabs.js"></script>

  </body>
</html>

