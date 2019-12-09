<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>home</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet"type="text/css"href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
        rel="stylesheet">
        <script src="jquery.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <!-- <body oncontextmenu ="return false" onkeydown ="return false" onmousedown = "return false" > -->
    <body>
    <div class= "row">
    <div class ="col-md-4 col-sm-12"><center><img src ="gov.png" alt="gov"></div></center>
    <div class ="col-md-4 col-sm-12"><div id = "jee"><center>Joint Entrance Examination</center></div></div>
    <div class ="col-md-4 col-sm-12"><center><img src ="nta.png" alt="nta"></center></div>
    </div>
    
    <nav class="navbar ">
      <div class="container-fluid">
        <div class="navbar-header"style ="background-color:mediumpurple;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background-color:white">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" style="background-color:mediumpurple" ></span>
            <span class="icon-bar" style="background-color:mediumpurple"></span>
            <span class="icon-bar" style="background-color:mediumpurple"></span>
          </button>
          <a class="navbar-brand" href="index.php" style = "color:white;">JEE MAIN</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <!-- <li class="navl"><a href="contact.php" style = "color:white;">CONTACT</a></li> -->
          <li><a href="fullresult.php" style = "color:white;">RANK LIST</a></li>
          <li><a href="marks.php" style = "color:white;">MARKS</a></li>
          <li><a href="login.php" style = "color:white;">MY RESULT</a></li>
          <li><a href="admit.php" style = "color:white;">ADMIT CARD</a></li>
          <li><a href="signup.php" style = "color:white;">SIGNUP</a></li>
            <li class="active"><a href="index.php" style = "color:white;">HOME</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap.min.js">
  </script>