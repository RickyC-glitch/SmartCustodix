<?php
//session_start();
ob_start();

include 'dbconnect.php';

//Loading modal for update
if (isset($_POST['checking_btndelete'])) {
    $empID = $_POST['empid'];
    $result_array=[];
    //echo $return=$empID;
    $sqlselect = "SELECT * FROM `tbl_facultyinfo` WHERE `employeeID` ='$empID'";
    $result = mysqli_query($conn, $sqlselect);

    if (mysqli_num_rows($result) > 0) { 

        foreach ($result as $row){
            //echo $return='';
            array_push($result_array, $row);
            header('Content-type:application/json');
            echo json_encode($result_array);
        }
        
    }else{
        echo $return='No record found.';
    }   
}
?>
