<?php
session_start();
include 'includes/header.php';
include 'sql/dbconnect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIS ASRS</title>
    <link rel="icon" type="image/x-icon" href="images/lamhako logo.png">
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

    <script type="text/javascript">
        $(document).ready(function() {
            $("#txtsearch").keyup(function() {
                var input = $(this).val();
                //alert(input);   
                if (input != "") {
                    $.ajax({
                        url: "sql/loadfacultyinfo.php",
                        method: "POST",
                        data: {
                            input: input
                        },

                        success: function(data) {
                            $("#searchresult").html(data);
                            ("#searchresult").css("dislay", "block");
                        }

                    });
                } else {
                    //$("#searchresult").css("dislay", "none");
                    $.ajax({
                        url: "sql/showallinfo.php",
                        method: "POST",
                        data: {
                            input: input
                        },

                        success: function(data) {
                            $("#searchresult").html(data);
                            ("#searchresult").css("dislay", "block");
                        }

                    });

                }
            });
        });
    </script>
    <!--header-->
    <div class="container-fluid shadow-lg text-center">
        
        <h3 class="card-header text-center bg-dark text-light"><i class="fa-solid fa-users"></i> FACULTY INFORMATION</h3>
    </div>
    <!--header-->

    <div class="container-fluid shadow-lg">
        <!--navbar-->
        <nav class="navbar bg-primary" >
            <div class="container-fluid justify-content-center gap-3 ">

                
                <a class="navbar-brand text-light" href="#" id="btnnew" name="btnnew "
                    data-bs-toggle="modal" data-bs-target="#modteacherreg">
                    <i class="fa-sharp fa-solid fa-user-plus"></i>  New   
                </a>

                <a class="navbar-brand text-light" href="printfaculty.php" id="btnprint" name="btnprint">
                <i class="fa-solid fa-print"></i> Print
                </a>

                <a class="navbar-brand text-light" href="main.php">
                    <i class="fa-sharp fa-solid fa-house"></i> Home 
                </a>

                             
                
            </div>

        </nav>
        <!--navbar-->
        <div class="row ">
            <div class="col-md-12 text-center">

                <div class="main">
                    <!-- Actual search box -->
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" id="txtsearch" name="txtsearch" autocomplete="off"
                            placeholder="Search">

                    </div>

                </div>
            </div>


        </div>
        <div id="searchresult"></div>
        <!-- modal register -->
        <div class="modal fade" id="modteacherreg" tabindex="-1" aria-labelledby="modteacherreg" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-primary " id="modteacherreg"><i class="fa-solid fa-users"></i> Faculty Registration
                        </h1>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="divalert"></div>
                    <div class="modal-body">


                        <form method="post" action="Sql/insertfaculty.php">
                            <div class="input-group flex-nowrap my-2 ">
                                <span class="input-group-text" id="empID"><i class="fa-solid fa-barcode"></i></span>
                                <input type="text" name="empID" class="form-control" placeholder="Employee ID"
                                    aria-label="empID" aria-describedby="empID" required="true">

                            </div>
                            <div class="input-group flex-nowrap my-2 gap-1">
                                <span class="input-group-text" id="name"><i class="fa-solid fa-user"></i></span>
                                <input type="text" name="lname" class="form-control" placeholder="Last Name"
                                    aria-label="lname" aria-describedby="lname" required="true">
                                <input type="text" name="fname" class="form-control" placeholder="First Name"
                                    aria-label="fname" aria-describedby="fname" required="true">
                                <input type="text" name="mname" class="form-control" placeholder="Middle Name"
                                    aria-label="mname" aria-describedby="mname" required="true">
                            </div>
                            <div class="input-group flex-nowrap my-2 gap-1">
                                <span class="input-group-text" id="address"><i
                                        class="fa-solid fa-location-dot"></i></span>
                                <input type="text" name="address" class="form-control" placeholder="Address"
                                    aria-label="address" aria-describedby="address" required="true">
                            </div>
                            <div class="input-group flex-nowrap my-2 gap-1">
                                <span class="input-group-text" id="email"><i class="fa-solid fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control me-2" placeholder="E-mail Address"
                                    aria-label="email" aria-describedby="email" required="true">
                                <span class="input-group-text" id="cnumber"><i class="fa-solid fa-phone"></i></span>
                                <input type="text" name="cnumber" class="form-control" placeholder="Contact Number"
                                    aria-label="cnumber" aria-describedby="cnumber" required="true">

                            </div>

                            <div class="dates input-group flex-nowrap my-2 gap-1">
                                <span class="input-group-text" id="bdate"><i
                                        class="fa-solid fa-calendar-days"></i></span>
                                <input type="text" class="form-control" id="bdate" name="bdate" placeholder="Birthdate" autocomplete="off" readonly required="true">
                                <span class="input-group-text" id="appdate"><i
                                        class="fa-solid fa-calendar-days"></i></span>
                                <input type="text" class="form-control" id="appdate" name="appdate" placeholder="Date of Appointment" autocomplete="off" readonly required="true">

                            </div>

                            <div class="input-group flex-nowrap my-2 gap-1">

                                <span class="input-group-text" id="gender"><i class="fa-solid fa-venus-mars"></i></span>
                                <select class="form-select me-2" id="gender" name="gender" required="true">
                                    <option selected>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                                <span class="input-group-text" id="position"><i class="fa-solid fa-user-tie"></i></span>
                                <select class="form-select me-2" id="position" name="position" required="true">
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
                                <select class="form-select me-2" id="cstatus" name="cstatus" required="true">
                                    <option selected>Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Legally Separated">Legally Separated</option>
                                </select>
                            </div>





                            <div class="input-group flex-nowrap my-1 gap-1 justify-content-end">

                                <div class="d-flex flex-row mx-3">
                                    <button type="submit" class="btn btn-success me-1" id="btnsavefacultyinfo"
                                        name="btnsavefacultyinfo" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save
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
    <!--modal register-->

    <!--modal update-->
    <div class="modal fade" id="modalupdatefaculty" tabindex="-1" aria-labelledby="modalupdatefaculty"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h1 class="modal-title fs-5 text-primary " id="modupdatefacultylabel"><i class="fa-solid fa-pen-to-square"></i>  Update Faculty Information
                    </h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="divalert"></div>
                <div class="modal-body">

                    <div id="alertmsg">

                    </div>
                    <form method="post" action="Sql/updatefacultyinfo.php">
                        <div class="input-group flex-nowrap my-2 gap-1">
                            <span class="input-group-text" id="empID"><i class="fa-solid fa-barcode"></i></span>
                            <input type="text" id="update_empID" name="update_empID" class="form-control" placeholder="Employee ID"
                                aria-label="update_empID" aria-describedby="update_empID" readonly required="true">
                        </div>
                        <div class="input-group flex-nowrap my-2 gap-1">
                            <span class="input-group-text" id="name"><i class="fa-solid fa-user"></i></span>
                            <input type="text" id="update_lname" name="update_lname" class="form-control" placeholder="Last Name"
                                aria-label="update_lname" aria-describedby="update_lname" required="true">
                            <input type="text" id="update_fname" name="update_fname" class="form-control" placeholder="First Name"
                                aria-label="update_fname" aria-describedby="update_fname" required="true">
                            <input type="text" id="update_mname" name="update_mname" class="form-control" placeholder="Middle Name"
                                aria-label="update_mname" aria-describedby="update_mname" required="true">
                        </div>
                        <div class="input-group flex-nowrap my-2 gap-1">
                            <span class="input-group-text" id="address"><i
                                    class="fa-solid fa-location-dot"></i></span>
                            <input type="text" id="update_address" name="update_address" class="form-control" placeholder="Address"
                                aria-label="update_address" aria-describedby="update_address" required="true">
                        </div>
                        <div class="input-group flex-nowrap my-2 gap-1">
                            <span class="input-group-text" id="email"><i class="fa-solid fa-envelope"></i></span>
                            <input type="text" id="update_email" name="update_email" class="form-control me-2" placeholder="E-mail Address"
                                aria-label="update_email" aria-describedby="update_email" required="true">
                            <span class="input-group-text" id="cnumber"><i class="fa-solid fa-phone"></i></span>
                            <input type="text" id="update_cnumber" name="update_cnumber" class="form-control" placeholder="Contact Number"
                                aria-label="update_cnumber" aria-describedby="update_cnumber" required="true">

                        </div>

                        <div class="dates input-group flex-nowrap my-2 gap-1">
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

                <div class="input-group flex-nowrap my-1 gap-1 justify-content-end">

                    <div class="d-flex flex-row mx-3">
                        <button type="submit" class="btn btn-success me-1" id="btnupdatefacultyinfo"
                            name="btnupdatefacultyinfo" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Save Changes
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

    <!--MOdal update-->

    <!--modal delete-->
    <div class="modal fade" id="modaldeletefaculty" tabindex="-1" aria-labelledby="modaldeletefaculty"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h1 class="modal-title fs-5 text-primary text-danger" id="moddeletefacultylabel"><i class="fa-solid fa-trash"></i> Do you want to delete this information?
                    </h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="divalert"></div>
                <div class="modal-body">

                    <div id="alertmsg">

                    </div>
                    <form method="post" action="Sql/deletefacultyinfo.php">
                        <div class="input-group flex-nowrap my-2 gap-1">
                            <span class="input-group-text" id="empID"><i class="fa-solid fa-barcode"></i></span>
                            <input type="text" id="del_empID" name="del_empID" class="form-control" placeholder="Employee ID"
                                aria-label="del_empID" aria-describedby="del_empID" readonly>
                        </div>
                        <div class="input-group flex-nowrap my-2 gap-1">
                            <span class="input-group-text" id="name"><i class="fa-solid fa-user"></i></span>
                            <input type="text" id="del_lname" name="del_lname" class="form-control" placeholder="Last Name"
                                aria-label="del_lname" aria-describedby="del_lname" readonly>
                            <input type="text" id="del_fname" name="del_fname" class="form-control" placeholder="First Name"
                                aria-label="del_fname" aria-describedby="del_fname" readonly>
                            <input type="text" id="del_mname" name="del" class="form-control" placeholder="Middle Name"
                                aria-label="del_mname" aria-describedby="del_mname" readonly>
                        </div>
                        <div class="input-group flex-nowrap my-2 gap-1">
                            <span class="input-group-text" id="address"><i
                                    class="fa-solid fa-location-dot"></i></span>
                            <input type="text" id="del_address" name="del_address" class="form-control" placeholder="Address"
                                aria-label="del_address" aria-describedby="del_address" readonly>
                        </div>
                        <div class="input-group flex-nowrap my-2 gap-1">
                            <span class="input-group-text" id="email"><i class="fa-solid fa-envelope"></i></span>
                            <input type="text" id="del_email" name="del_email" class="form-control me-2" placeholder="E-mail Address"
                                aria-label="del_email" aria-describedby="del_email" readonly>
                            <span class="input-group-text" id="cnumber"><i class="fa-solid fa-phone"></i></span>
                            <input type="text" id="del_cnumber" name="del_cnumber" class="form-control" placeholder="Contact Number"
                                aria-label="del_cnumber" aria-describedby="del_cnumber" readonly>

                        </div>

                        <div class="dates input-group flex-nowrap my-2 gap-1">
                            <span class="input-group-text" id="bdate"><i
                                    class="fa-solid fa-calendar-days"></i></span>
                            <input type="text" class="form-control" id="del_bdate" name="del_bdate" placeholder="Birthdate" autocomplete="off" readonly>
                            <span class="input-group-text" id="appdate"><i
                                    class="fa-solid fa-calendar-days"></i></span>
                            <input type="text" class="form-control" id="del_appdate" name="del_appdate" placeholder="Date of Appointment" autocomplete="off" readonly>

                        </div>

                        <div class="input-group flex-nowrap my-2 gap-1">

                            <span class="input-group-text" id="gender"><i class="fa-solid fa-venus-mars"></i></span>
                            <select class="form-select me-2" id="del_gender" name="del_gender" readonly>
                                <option selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>

                            <span class="input-group-text" id="position"><i class="fa-solid fa-user-tie"></i></span>
                            <select class="form-select me-2" id="del_position" name="del_position" readonly>
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
                            <select class="form-select me-2" id="del_cstatus" name="del_cstatus" readonly>
                                <option selected>Civil Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Legally Separated">Legally Separated</option>
                            </select>
                        </div>



                </div>

                <div class="input-group flex-nowrap my-1 gap-1 justify-content-end">

                    <div class="d-flex flex-row  mx-3">
                        <button type="submit" class="btn btn-success me-1" id="btndeletefacultyinfo"
                            name="btndeletefacultyinfo" class="btn btn-primary"><i class="fa-solid fa-check"></i> Yes
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> No
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

    <!--MOdal delete-->

    </div>



    <?php
    include 'includes/footer.php';
    include 'includes/Alertinfo.php';
    ?>

    <script>
        $(function() {

            $('.dates #bdate').datepicker({
                'format': 'mm-dd-yyyy',
                'autoclose': true,
                'clearBtn': true,
            });


        });
    </script>

    <script>
        $(function() {

            $('.dates #appdate').datepicker({
                'format': 'mm-dd-yyyy',
                'autoclose': true,
                'clearBtn': true,
            });


        });
    </script>





    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "sql/showallinfo.php",
                //context: document.body,
                success: function(data) {
                    //alert("done");
                    $("#searchresult").html(data);
                    ("#searchresult").css("dislay", "block");
                }
            });
        });

        $(document).ready(function() {
            $("#txtsearch").keyup(function() {
                var input = $(this).val();
                //alert(input);   
                if (input != "") {
                    $.ajax({
                        url: "sql/loadfacultyinfo.php",
                        method: "POST",
                        data: {
                            input: input
                        },

                        success: function(data) {
                            $("#searchresult").html(data);
                            ("#searchresult").css("dislay", "block");
                        }

                    });
                } else {
                    //$("#searchresult").css("dislay", "none");
                    $.ajax({
                        url: "sql/showallinfo.php",
                        method: "POST",
                        data: {
                            input: input
                        },

                        success: function(data) {
                            $("#searchresult").html(data);
                            ("#searchresult").css("dislay", "block");
                        }

                    });

                }
            });
        });
    </script>

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