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
	<link href="css/materialize.min.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link href="css/overrides.css" rel="stylesheet" type="text/css">
  <!--Let browser know website is optimized for mobile-->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>

<body>
	<nav class="blue-grey darken-2">
		<div class="nav-wrapper container">
			<a class="brand-logo" href="#!">Home</a> <a class="button-collapse" data-activates="mobile-demo" href="#"><i class="material-icons">menu</i></a>

			<ul class="right hide-on-med-and-down">
				<li>
					<a href="includes/tarin.php">Tarin</a>
				</li>

				<li>
					<a href="includes/kalila.php">Kalila</a>
				</li>

				<li>
					<a href="includes/mel.php">Mel</a>
				</li>
			</ul>

			<ul class="side-nav" id="mobile-demo">
				<li>
					<a href="includes/tarin.php">Tarin</a>
				</li>

				<li>
					<a href="includes/kalila.php">Kalila</a>
				</li>

				<li>
					<a href="includes/mel.php">Mel</a>
				</li>
			</ul>
		</div>
	</nav>


	<div class="section blue-grey lighten-4 name-header" id="welcome">
		<h1 class="name">Welcome to Queens, NY</h1>
	</div>


	<div class="section" id="mel-preview">
		<div class="container">
			<div class="row">
				<div class="col m3 s12"><img class="materialboxed" src="images/mel-headshot.jpg">
				</div>

				<div class="col m9 s12">
					<h3 class="teal-text text-accent-4">Melanie Dookharan</h3>
					<h4><strong>Postion:</strong> Design Artist</h4>
					<h4><strong>Email:</strong> mdookhar@u.rochester.edu</h4>
          <div class="row">
  		      <a class="btn responsive-btn" href="includes/mel.php">Resume</a>
            <a class="btn responsive-btn" href="https://www.linkedin.com/in/melaniedookharan/">LinkedIn</a>
            <a class="btn responsive-btn" href="http://www.melanie-dookharan.com">Portfolio</a>
          </div>
				</div>
			</div>
		</div>
	</div>


	<div class="section" id="tarin-preview">
		<div class="container">
			<div class="row">
				<div class="col m3 s12"><img class="materialboxed" src="images/tarin-headshot.jpg">
				</div>

				<div class="col m9 s12">
					<h3 class="red-text text-accent-2">Tarin Rickett</h3>
					<h4><strong>Postion:</strong> Code Monkey</h4>
					<h4><strong>Email:</strong> trickett@u.rochester.edu</h4>
					<div class="row">
            <a class="red lighten-2 btn responsive-btn" href="includes/tarin.php">Resume</a>
            <a class="red lighten-2 btn responsive-btn" href="https://www.linkedin.com/in/tarinrickett">LinkedIn</a>
            <a class="red lighten-2 btn responsive-btn" href="http://www.tarinrickett.com">Portfolio</a>
          </div>
				</div>
			</div>
		</div>
	</div>


	<div class="section" id="kalila-preview">
		<div class="container">
			<div class="row">
				<div class="col m3 s12"><img class="materialboxed" src="images/kalila-headshot.jpg">
				</div>

				<div class="col m9 s12">
					<h3 class="amber-text text-accent-3">Kalila Shapiro</h3>
					<h4><strong>Postion:</strong> Information Architect</h4>
					<h4><strong>Email:</strong> kshapiro@u.rochester.edu</h4>
          <div class="row">
  					<a class="amber darken-1 btn responsive-btn" href="includes/kalila.php">Resume</a>
            <a class="amber darken-1 btn responsive-btn">LinkedIn</a>
            <a class="amber darken-1 btn responsive-btn">Portfolio</a>
          </div>
				</div>
			</div>
		</div>
	</div>


	<footer>
		<p>Copyright © 2017</p>
		<!--Import jQuery before materialize.js-->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript">
		</script>
		<script src="js/materialize.min.js" type="text/javascript">
		</script>
		<script src="js/mobile-nav.js" type="text/javascript">
		</script>
	</footer>
</body>
</html>
