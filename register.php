
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect("localhost", "root", "", "educon");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$email="";
$password="";
$role="";

echo "hello";
if(isset($_POST['email'])){
$email = $_POST['email'];
echo $email;
}
if(isset($_POST['password'])){
$password = $_POST['password'];
}
if(isset($_POST['role'])){
$role = $_POST['role'];
}
echo $role;

 if($role=="Student"){
        $query = "INSERT INTO `student` ( email, password, role) VALUES ('$email','$password','$role')";

        $res=mysqli_query($conn,$query);
        if($res){
           $_SESSION['role']= $role;
          
        }
        else 
          echo "Failed!";
    }
    else  if($role=="Volunteer"){
        $query = "INSERT INTO `volunteer` ( email, password, role) VALUES ('$email','$password','$role')";
        $res=mysqli_query($conn,$query);
        if($res){
           $_SESSION['role']= $role;
          
        }
        else 
          echo "Failed!";
    }
     else if($role=="Admin"){
        $query = "INSERT INTO `admin` ( email, password, role) VALUES ('$email','$password','$role')";
         echo $query;
        $res=mysqli_query($conn,$query);

        if($res){
           $_SESSION['role']= $role;
          
        }
        else 
          echo "Failed!";
    }
     else if($role=="Donor"){
        $query = "INSERT INTO `donor` ( email, password, role) VALUES ('$email','$password','$role')";
        $res=mysqli_query($conn,$query);
        if($res)
           $_SESSION['role']= $role;          
        else 
          echo "Failed!";
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


echo $query;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
     div{
      overflow: hidden;
    }
  </style>
</head>
<body style = "background : url(cfg2.jpg) no-repeat; background-size: 100% 200%;">
	
<br><br><br><br><br><br>
<div class="row" style="color:white;">
	<div class="col-xs-4"><span></span></div>
	<div class="col-xs-4">
		<h3>Sign-up</h3>
	</div>
</div>
<div class="row">
	

<div class="col-xs-4">
	<span></span>
</div>
<div class="col-xs-4">
<form method="POST">

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
<br>
    <div class="form-group">
      <div class="container">
        <button type="submit" class="btn btn-primary btn-md">Register</button>
        
     </div> 
   </div>
  </form>
 
 <div class="container-fluid">
  <p style="color : white">Already have an account? <a href="login1.html" style="font-size: 20px;">Log In</a></p>
</div>

</div>
</div>

	<br>



</body>
</html>