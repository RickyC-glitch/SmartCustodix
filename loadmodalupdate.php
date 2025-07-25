<?php
require_once 'sql/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LIS ASRS</title>
        <link href="images/lamhako logo.jpg" rel="icon">
        <link rel="stylesheet" href="css/bootstrap.css">
        
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/custom.style.css">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css" >
        <link rel="stylesheet" href="css/bootstrap.min.css">

        
    
    </head>

    <body>
            
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                var tooltipList = tooltipTriggerList.map(function(element) {
                    return new bootstrap.Tooltip(element);
                });
            });
        </script>

        <!-- modal update  -->
        <div class="modal fade" id="modalupdatefaculty" tabindex="-1" aria-labelledby="modalupdatefaculty"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-primary " id="modalupdatefaculty">Update Faculty Information
                                </h1>

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                    
                            <div class="modal-body">

                                <div id="alertmsg">

                                </div>

                                <form method="post" action="sql/updatefacultyinfo.php">
                                    <div class="input-group flex-nowrap my-2 gap-1">
                                            <span class="input-group-text" id="empID"><i class="fa-solid fa-barcode"></i></span>
                                            <input type="text" id="update_empID" name="update_empID" class="form-control" placeholder="Employee ID"
                                                aria-label="update_empID" aria-describedby="update_empID" readonly>
                                        </div>
                                        <div class="input-group flex-nowrap my-2 gap-1">
                                            <span class="input-group-text" id="name"><i class="fa-solid fa-user"></i></span>
                                            <input type="text" id="update_lname" name="update_lname" class="form-control" placeholder="Last Name"
                                                aria-label="update_lname" aria-describedby="update_lname">
                                            <input type="text" id="update_fname" name="update_fname" class="form-control" placeholder="First Name"
                                                aria-label="update_fname" aria-describedby="update_fname">
                                            <input type="text" id="update_mname" name="update_mname" class="form-control" placeholder="Middle Name"
                                                aria-label="update_mname" aria-describedby="update_mname">
                                        </div>
                                        <div class="input-group flex-nowrap my-2 gap-1">
                                            <span class="input-group-text" id="address"><i
                                                    class="fa-solid fa-location-dot"></i></span>
                                            <input type="text" id="update_address" name="update_address" class="form-control" placeholder="Address"
                                                aria-label="update_address" aria-describedby="update_address">
                                        </div>
                                        <div class="input-group flex-nowrap my-2 gap-1">
                                            <span class="input-group-text" id="email"><i class="fa-solid fa-envelope"></i></span>
                                            <input type="text" id="update_email" name="update_email" class="form-control me-2" placeholder="E-mail Address"
                                                aria-label="update_email" aria-describedby="update_email">
                                            <span class="input-group-text" id="cnumber"><i class="fa-solid fa-phone"></i></span>
                                            <input type="text" id="update_cnumber" name="update_cnumber" class="form-control" placeholder="Contact Number"
                                                aria-label="update_cnumber" aria-describedby="update_cnumber">
                                            
                                        </div>

                                        <div class="dates input-group flex-nowrap my-2 gap-1" >
                                            <span class="input-group-text" id="bdate"><i
                                            class="fa-solid fa-calendar-days"></i></span>
                                            <input type="text" class="form-control" id="update_bdate" name="update_bdate" placeholder="Birthdate" autocomplete="off" readonly>
                                            <span class="input-group-text" id="appdate"><i
                                            class="fa-solid fa-calendar-days"></i></span>
                                            <input type="text" class="form-control" id="update_appdate" name="update_appdate" placeholder="Date of Appointment" autocomplete="off" readonly>
                                        
                                        </div>

                                        <div class="input-group flex-nowrap my-2 gap-1">

                                            <span class="input-group-text" id="gender"><i class="fa-solid fa-venus-mars"></i></span>
                                            <select class="form-select me-2" id="update_gender" name="update_gender">
                                                <option selected>Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            
                                            <span class="input-group-text" id="position"><i class="fa-solid fa-user-tie"></i></span>
                                            <select class="form-select me-2" id="update_position" name="update_position">
                                                <option selected>Positon</option>
                                                <option value="Teacher I">Teacher I</option>
                                                <option value="Teacher II">Teacher II</option>
                                                <option value="Teacher III">Teacher III</option>
                                                <option value="Mater Teacher I">Mater Teacher I</option>
                                                <option value="Mater Teacher II">Mater Teacher II</option>
                                                <option value="Principal I">Principal I</option>
                                                <option value="Principal II">Principal II</option>
                                            </select>
                                            <span class="input-group-text" id="cstatus"><i class="fa-solid fa-users"></i></span>
                                            <select class="form-select me-2" id="update_cstatus" name="update_cstatus">
                                                <option selected>Civil Status</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widowed">Widowed</option>
                                                <option value="Legally Separated">Legally Separated</option>
                                            </select>
                                        </div>

                                    

                                    </div>

                                    <div class="input-group flex-nowrap my-1 gap-1">

                                        <div class="d-flex flex-row justify-content-start  mx-3">
                                            <button type="submit" class="btn btn-success me-1" id="btnupdatefacultyinfo" name="btnupdatefacultyinfo" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Save Changes
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Close
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <hr class="my-2">

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

        </div>


        
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.js"></script>
        

        <script>

        $(function() {

        $('.dates #update_bdate').datepicker({
            'format': 'mm-dd-yyyy',
            'autoclose': true,
            'clearBtn': true,
        });


        });
        </script>

    <script>

        $(function() {

        $('.dates #update_appdate').datepicker({
            'format': 'mm-dd-yyyy',
            'autoclose': true,
            'clearBtn': true,
        });


        });
    </script>

    </body>

</html>