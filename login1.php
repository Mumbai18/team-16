<?php
session_start();
require_once('connect.php');
if(!empty($_POST)){
 $username=mysqli_real_escape_string($conn,$_POST['name']);
 $password=md5($_POST['password']);
 $role=$_POST['role'];
 if($role=="Student"){
$query="SELECT * FROM `students` WHERE Username like '$username' &&  Password LIKE '$password'";
$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
$first = mysqli_fetch_array($res);
$query="SELECT * FROM `students` WHERE Username like '$username'";
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
$query="SELECT * FROM `donors` WHERE Username like '$username' &&  Password LIKE '$password'";
$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
$first = mysqli_fetch_array($res);
$query="SELECT * FROM `donors` WHERE Username like '$username'";
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
$query="SELECT * FROM `volunteers` WHERE Username like '$username' &&  Password LIKE '$password'";
$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
$first = mysqli_fetch_array($res);
$query="SELECT * FROM `volunteers` WHERE Username like '$username'";
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
$query="SELECT * FROM `admin` WHERE Username like '$username' &&  Password LIKE '$password'";
$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
$first = mysqli_fetch_array($res);
$query="SELECT * FROM `admin` WHERE Username like '$username'";
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
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <style type="text/css">
     div{
      overflow: hidden;
    
</style>
</head>
<body style = "background: url(cfg2.jpg) no-repeat; background-size: 100% 200%;">
<br><br><br><br><br><br>
<div class="row" style="color:white;">
	<div class="col-xs-4"><span></span></div>
	<div class="col-xs-4">
		<h3>Log-in</h3>
	</div>
</div>
<div class="row">
	

<div class="col-xs-4">
	<span></span>
</div>
<div class="col-xs-4">
<form method="POST" >

    <div class="form-group">
      
      <input type="email" class="form-control"  placeholder="Email Address" name="email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" required >
    </div>


    <div class="form-group">
      
      <input type="password" class="form-control"  placeholder="Password" name="password" required pattern="^[a-zA-Z]\w{3,14}$" >
    </div>
    <select name="role" class="input pass">
  <option value="Admin">Admin</option>
  <option value="Donor">Donor</option>
  <option value="Volunteer">Volunteer</option>
  <option value="Student">student</option>
</select>

    <div class="form-group">
      <div class="container">
        <button type="submit" class="btn btn-primary btn-md">Login</button>
        
     </div> 
   </div>
  </form>
 
 <div class="container-fluid">
  <p style ="color : white">Do not have an account? <a href="register.html">Sign-up</a></p>
</div>

</div>
</div>

	<br>



</body>
</html>