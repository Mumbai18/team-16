<?php
session_start();
require_once('connect.php');
if(!empty($_POST)){
 $username=mysqli_real_escape_string($conn,$_POST['name']);
 $password=md5($_POST['password']);
 $role=$_POST['role'];
 if($role=="Student"){
$query="SELECT * FROM `student` WHERE email like '$username' &&  password LIKE '$password'";
$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
$first = mysqli_fetch_array($res);
$query="SELECT * FROM `student` WHERE email like '$username'";
$r=mysqli_query($conn,$query);
$f=mysqli_fetch_array($r);
 
if($count==1){
  $_SESSION['role']=$f['role'];
  $_SESSION['Username']= $username;
   
}
else 
  echo "WRONG CREDENTIALS!";
}
else if($role=="Donor"){
$query="SELECT * FROM `donor` WHERE email like '$username' &&  password LIKE '$password'";
$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
$first = mysqli_fetch_array($res);
$query="SELECT * FROM `donor` WHERE email like '$username'";
$r=mysqli_query($conn,$query);
$f=mysqli_fetch_array($r);
 
if($count==1){
  $_SESSION['role']=$f['role'];
  $_SESSION['Username']= $username;
  
}
else 
  echo "WRONG CREDENTIALS!";
}
else if($role=="Volunteer"){
$query="SELECT * FROM `volunteers` WHERE email like '$username' &&  password LIKE '$password'";
$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
$first = mysqli_fetch_array($res);
$query="SELECT * FROM `volunteers` WHERE email like '$username'";
$r=mysqli_query($conn,$query);
$f=mysqli_fetch_array($r);
 
if($count>=1){
  $_SESSION['role']=$f['role'];
  $_SESSION['Username']= $username;
  
}
else 
  echo "WRONG CREDENTIALS!";
}
else if($role=="Admin"){
$query="SELECT * FROM `admin` WHERE email like '$username' &&  password LIKE '$password'";
$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
$first = mysqli_fetch_array($res);
$query="SELECT * FROM `admin` WHERE email like '$username'";
$r=mysqli_query($conn,$query);
$f=mysqli_fetch_array($r);
 
if($count==1){
  $_SESSION['role']=$f['role'];
  $_SESSION['Username']= $username;
}
else 
  echo "WRONG CREDENTIALS!";
}

              if($_SESSION['role']=='Admin'){
               header("Location: Admin.php");
              }
              else if($_SESSION['role']=='Student'){
 header("Location: Student.php");

              }
               else if($_SESSION['role']=='Donor'){
               header("Location: Donors.php");
               }

      }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ShopHere</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/LoginSignUp.css">
</head>
<body>

<div class="col-md-6">
    <div id="logbox">
      <form id="signup" method="post">
        <h1>Login To <i>EduCon!</i></h1>
        <!--<input name="user[email]" type="email" placeholder="enter your email" class="input pass"/>-->

        <input name="name" type="text" placeholder="What's your username?" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="input pass"/>
        <input name="password" type="password" placeholder="enter your password" required="required" class="input pass"/>
         <select name="role" class="input pass">
  <option value="Admin">Admin</option>
  <option value="Donor">Donor</option>
  <option value="Volunteer">Volunteer</option>
  <option value="Student">student</option>
</select>
        <input type="submit" value="Sign me in!" class="inputButton"/>
        <div class="text-center"">
                    <a href="SignUp.php" id="">create an account</a> - <a href="#" id="">forgot password</a>
                </div>
      </form>
    </div>
    </div>
  </div>

  </body>
</html>