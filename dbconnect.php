
<?php
//session_start();

$servername = "localhost";
$username = "Syntrickz";
$password = "Jerckz27";
$dbname = "LIS_db";

// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
//if (!$conn) {
  //die("Connection failed: " . mysqli_connect_error());
//}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>