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
    <title>Document</title>
    <title>LIS ASRS</title>
    <link rel="icon" type="image/x-icon" href="images/lamhako logo.png">
</head>

<body>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#txtsearch").keyup(function() {
                var input = $(this).val();
                //alert(input);   
                if (input != "") {
                    $.ajax({
                        url: "sql/filterusers.php",
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
                        url: "sql/showalluser.php",
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
    <div class="container-md container-fluid shadow-lg text-center">
        <img src="images/banner2.jpg">
        <h3 class="card-header text-center bg-dark text-light"><i class="fa-solid fa-users"></i> USERS INFORMATION</h3>
    </div>
    <!--header-->

    <div class="container-md container-fluid shadow-lg">
        <div class="row ">

            <div class="col-3 shadow-lg bg-light text-white my-4">
                
                    <ul class="nav flex-column">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="main.php"> <i class="fa-sharp fa-solid fa-house"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-key"></i> Password Reset Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-user-tie"></i> Account Request</a>
                        </li>
                    </ul>

               

            </div>
            <div class="col-md-9 text-center">

                <div class="main">
                    <!-- Actual search box -->
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" id="txtsearch" name="txtsearch" autocomplete="off"
                            placeholder="Search">

                    </div>

                </div>
                
            </div>

            <div id="searchresult"></div>
        </div>


    </div>
    <?php
    include 'includes/footer.php';
    include 'includes/Alertinfo.php';
    ?>
</body>

</html>