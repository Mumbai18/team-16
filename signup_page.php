<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cfg");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$email="";
$username="";
$contact="";
$quali="";
$percent="";
$hisamount="";
if(isset($_POST['email'])){
$email = $_POST['email'];
}
if(isset($_POST['username'])){
$username = $_POST['username'];
}
if(isset($_POST['contact'])){
$contact = $_POST['contact'];
}
if(isset($_POST['quali'])){
$quali = $_POST['quali'];
}
if(isset($_POST['percent'])){
$percent = $_POST['percent'];
}
if(isset($_POST['hisamount'])){
$hisamount = $_POST['hisamount'];
}

$sql = "INSERT INTO login (email, username, contact, quali, percent, hisamount) VALUES ('$email','$username','$contact','$quali', '$percent','$hisamount');
if(mysqli_query($link, $sql)){
    echo "You have successfully updated details, Go to <a href=\"login.html\">login.html</a>";
} else{
    echo "Sorry!!Unable to sign up please <a href=\"index.html\">try again</a>";
}
 
// Close connection
mysqli_close($link);
?>