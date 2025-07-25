<?php
session_start();
ob_start();

include 'dbconnect.php';

?>
<?php

if (isset($_POST['btnsavefacultyinfo'])) {

  $empid = $_POST["empID"];
  $lname = $_POST["lname"];
  $fname = $_POST["fname"];
  $mname = $_POST["mname"];
  $address = $_POST["address"];
  $email = $_POST["email"];
  $cnumber = $_POST["cnumber"];
  $bdate = $_POST["bdate"];
  $gender = $_POST["gender"];
  $cstatus = $_POST["cstatus"];
  $position = $_POST["position"];
  $appdate = $_POST["appdate"];

  //if ($empid==null || $lname==null  || $fname==null || $mname==null || $address==null || $email==null
      //|| $cnumber==null || $bdate==null || $gender=="Gender" || $cstatus=="Position" || $position=="Civil Status" || $appdate==null) {
   
     //$message = "Please fillup all fields.";
     //echo "<script>alert('$message');window.location.href = '../facultyinfo.php'</script>";
     //$_SESSION['status']="Please fillup all fields.";
     //$_SESSION['status_code'] = "info";
     //header ('Location:../facultyinfo.php');
    
    //}else {
      # code...
    
    $sqlcheckempid = "SELECT `Employeeid` FROM `tbl_facultyinfo` WHERE `Employeeid`='$empid'";
    $result = $conn->query($sqlcheckempid);
    if ($result->num_rows > 0) {
      //echo "Employee ID is already used.";
      $_SESSION['status']= "Employee ID is already used.";
      $_SESSION['status_code'] = "info";
      //header ('Location:../facultyinfo.php');
      echo "<script>window.location.href = '../facultyinfo.php'</script>";
    } 
    else {
      $sqlinsert = "INSERT INTO `tbl_facultyinfo` VALUES ('$empid','$lname', '$fname', '$mname', '$address', '$email', '$cnumber', '$bdate', '$cstatus', '$gender', '$position', '$appdate')";

      if (mysqli_query($conn, $sqlinsert)) {
      //$message = "New record created successfully";
        //echo "<script>alert('$message');window.location.href = '../facultyinfo.php'</script>";
        $_SESSION['status']= "New record created successfully";
        $_SESSION['status_code'] = "success";
        //header ('Location:../facultyinfo.php');
        echo "<script>window.location.href = '../facultyinfo.php'</script>";
      } else {
        echo "Error: " . $sqlinsert . "<br>" . mysqli_error($conn);
      }
      
    }
  }
//}
$conn->close();