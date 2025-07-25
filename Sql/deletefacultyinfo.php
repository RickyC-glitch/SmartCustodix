<?php
session_start();
ob_start();

require_once 'dbconnect.php';


if (isset($_POST['btndeletefacultyinfo'])) {

  $empid = $_POST["del_empID"];
  $lname = $_POST["del_lname"];
  $fname = $_POST["del_fname"];
  $mname = $_POST["del_mname"];
  $address = $_POST["del_address"];
  $email = $_POST["del_email"];
  $cnumber = $_POST["del_cnumber"];
  $bdate = $_POST["del_bdate"];
  $gender = $_POST["del_gender"];
  $cstatus = $_POST["del_cstatus"];
  $position = $_POST["del_position"];
  $appdate = $_POST["del_appdate"];
    
    $sqlupdate = "DELETE FROM `tbl_facultyinfo` WHERE `EmployeeID`='$empid'";

    if (mysqli_query($conn, $sqlupdate)) {
     //$message = "Successfully updated.";
     //echo "<script>alert('$message');window.location.href = '../facultyinfo.php'</script>";
     //echo "Update Successfully.";
      //header ('Location:../facultyinfo.php');
      $_SESSION['status']="Deleted Successfully.";
      $_SESSION['status_code'] = "info";
      echo "<script>window.location.href = '../facultyinfo.php'</script>";
      // ('Location:../facultyinfo.php');
     } else {
     echo "Error: " . $sqlupdate . "<br>" . mysqli_error($conn);
     }  
  } 

$conn->close();
?>