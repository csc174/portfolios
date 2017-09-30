<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="CSC174" name="description">
  <meta content="CJ, Mel, Kalila, Tarin" name="author">
  <title>CSC174 Assignment 4</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/overrides.css" rel="stylesheet">
</head>

<body class="home">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <ul class="nav navbar-nav">
      <li>
        <a class="gov" href="index.php">Home</a>
      </li>
      <li>
        <a class="gov" href="includes/mel.php" id="mel-tab">Mel</a>
      </li>
      <li>
        <a class="gov" href="includes/kalila.php" id="kalila-tab">Kalila</a>
      </li>
      <li>
        <a class="gov" href="includes/tarin.php" id="tarin-tab">Tarin</a>
      </li>
    </ul>
  </nav>

  <div class="welcome">
    <h1>Welcome to Queens, NY</h1>
    <h2>Click on a person to learn more about them!</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 media well" id="mel">
        <div class="media-left">
          <a href="includes/mel.php"><img alt="Cinque Terre" class="img-circle media-object" height="120" src="mel-headshot.jpg" width="100"></a>
        </div>
        <div class="media-body">
          <h2>Mel Dookharan</h2>
          <h3>Class of 2019</h3>
        </div>
      </div>
      <div class="col-md-4 media well" id="tarin">
        <div class="media-left">
          <a href="includes/tarin.php"><img alt="Cinque Terre" class="img-circle media-object" height="120" src="tarin-headshot.jpg" width="100"></a>
        </div>
        <div class="media-body">
          <h2>Tarin Rickett</h2>
          <h3>Class of 2018</h3>
        </div>
      </div>
      <div class="col-md-4 media well" id="kalila">
        <div class="media-left">
          <a href="includes/kalila.php"><img alt="Cinque Terre" class="img-circle media-object" height="120" src="kalila-headshot.jpg" width="100"></a>
        </div>
        <div class="media-body">
          <h2>Kalila Shapiro</h2>
          <h3>Class of 2018</h3>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p>Copyright © 2017</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
</body>
</html>