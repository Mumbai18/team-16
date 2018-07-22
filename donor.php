<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "educon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT email, username, contact,amountneeded,quali,percent,hisamount FROM studentper";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Email: ". $row["email"]. " - Name: ". $row["username"]. " - Contact: ". $row["contact"]. "- AmountNeeded: ". $row["amountneeded"]. "- Qualification: ". $row["quali"]. "- Percentage: ". $row["percent"]. "- HisAmount: ". $row["hisamount"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>