<?php
session_start();
ob_start();

require_once 'dbconnect.php';


if (isset($_POST['btnupdatefacultyinfo'])) {

  $empid = $_POST["update_empID"];
  $lname = $_POST["update_lname"];
  $fname = $_POST["update_fname"];
  $mname = $_POST["update_mname"];
  $address = $_POST["update_address"];
  $email = $_POST["update_email"];
  $cnumber = $_POST["update_cnumber"];
  $bdate = $_POST["update_bdate"];
  $gender = $_POST["update_gender"];
  $cstatus = $_POST["update_cstatus"];
  $position = $_POST["update_position"];
  $appdate = $_POST["update_appdate"];
    
    $sqlupdate = "UPDATE `tbl_facultyinfo` SET `lname`='$lname', `fname`='$fname', `mname`='$mname', `addressa`='$address', `emailadd`='$email', `cnumber`='$cnumber', `bdate`='$bdate', `cstatus`='$cstatus', `gender`='$gender', `position`='$position', `appdate`='$appdate' WHERE `EmployeeID`='$empid'";

    if (mysqli_query($conn, $sqlupdate)) {
     //$message = "Successfully updated.";
     //echo "<script>alert('$message');window.location.href = '../facultyinfo.php'</script>";
     //echo "Update Successfully.";
      //header ('Location:../facultyinfo.php');
      $_SESSION['status']="Update Successfully.";
      $_SESSION['status_code'] = "info";
      echo "<script>window.location.href = '../facultyinfo.php'</script>";
      // ('Location:../facultyinfo.php');
     } else {
     echo "Error: " . $sqlupdate . "<br>" . mysqli_error($conn);
     }  
  } 

$conn->close();
?>