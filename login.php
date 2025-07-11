<?php
session_start();
ob_start();

include 'dbconnect.php';
//include 'includes/alertinfo.php';

if (isset($_POST['btnlogin'])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  
    $sqlcheckempid = "SELECT * FROM `tbl_userinfo` WHERE `username`='$username' AND `password`='$password'";
    $result = $conn->query($sqlcheckempid);
    if ($result->num_rows > 0) {
     
      
      header ('Location:main.php');
    } 
    else {
        $_SESSION['status']="Username and password did not match. Please try again.";
        $_SESSION['status_code'] = "error";
        
        echo "<script>window.location.href = 'index.php'</script>";
        
      
      
    }
  
}
$conn->close();