<!DOCTYPE html>
<html lang="en">
<head>
  <title>EduCon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">
 
</head>
<body>

<nav class="navbar  navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Main.php">EduCon!</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
      <?php
      if(isset($_SESSION['User_name']))
        echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span> '.'Hello Admin!'.$_SESSION['User_name'].'</a></li>
       <li><a href="Logout.php"><span class="glyphicon glyphicon-off"></span> Sign Out</a></li>';
      else{
       echo '<li><a href="SignUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';}
        ?>
      </ul>
    </div>
  </div>
</nav>