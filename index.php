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
    </nav> -->

    <?php include "includes/cj.php" ?>
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
          <h2> Melanie Dookharan </h2>
          <h3> Class of 2019 </h3>
        </div>
        <p> Hi! My name is <strong>Melanie Dookharan</strong> and I'm currently a junior at the University of Rochester, majoring in Computer Science with a minor in Business. I'm particularly interested in UX/UI design and applications in Human Computer Interactions. I self learned Adobe Photoshop and Illustrator in 6th grade for a project, and have longed for a career where I can focus on design since then. After taking computer science courses for a little over a year, I am proficient in Python, Java, HTML, and CSS. I'm excited to combine my skills for a long-term career. Eventually, I hope to exclusively work on websites and mobile interfaces, but focus on the research and design side of it. </p> 
    </div>

    <div id = "tarin" class="col-md-4 media well">
        <div class = "media-left">
          <a href="">
            <img src="mel-headshot.jpg" class="img-circle media-object" alt="Cinque Terre" width="100" height="120">
          </a>
        </div>
        <div class = "media-body"> 
          <h2> Tarin Rickett </h2>
          <h3> Class of 2019 </h3>
        </div>
        <p> Hi! My name is <strong>Melanie Dookharan</strong> and I'm currently a junior at the University of Rochester, majoring in Computer Science with a minor in Business. I'm particularly interested in UX/UI design and applications in Human Computer Interactions. I self learned Adobe Photoshop and Illustrator in 6th grade for a project, and have longed for a career where I can focus on design since then. After taking computer science courses for a little over a year, I am proficient in Python, Java, HTML, and CSS. I'm excited to combine my skills for a long-term career. Eventually, I hope to exclusively work on websites and mobile interfaces, but focus on the research and design side of it. </p> 
    </div>

    <div id = "kalila" class="col-md-4 media well">
        <div class = "media-left">
          <a href="">
            <img src="mel-headshot.jpg" class="img-circle media-object" alt="Cinque Terre" width="100" height="120">
          </a>
        </div>
        <div class = "media-body"> 
          <h2> Kalila Shapiro </h2>
          <h3> Class of 2019 </h3>
        </div>
        <p> Hi! My name is <strong>Melanie Dookharan</strong> and I'm currently a junior at the University of Rochester, majoring in Computer Science with a minor in Business. I'm particularly interested in UX/UI design and applications in Human Computer Interactions. I self learned Adobe Photoshop and Illustrator in 6th grade for a project, and have longed for a career where I can focus on design since then. After taking computer science courses for a little over a year, I am proficient in Python, Java, HTML, and CSS. I'm excited to combine my skills for a long-term career. Eventually, I hope to exclusively work on websites and mobile interfaces, but focus on the research and design side of it. </p> 
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

