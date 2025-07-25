<!DOCTYPE html>
    <?php
            require 'sql/dbconnect.php';
            include 'includes/header.php';
            
    ?>
    <html lang="en">
            <head>
                    <style>
                    .table {
                            width: 100%;
                            margin-bottom: 20px;
                    }      
                   
                    .table-striped tbody > tr:nth-child(odd) > td,
                    .table-striped tbody > tr:nth-child(odd) > th {
                            background-color: #f9f9f9;
                    }
                   
                    @media print{
                            #print {
                                    display:none;
                            }
                    }
                    @media print {
                            #PrintButton {
                                    display: none;
                            }
                    }
                   
                    @page {
                            size: auto;   /* auto is the initial value */
                            margin: 0;  /* this affects the margin in the printer settings */
                    }
            </style>
            </head>
    <body>
            <div class="container text-center">
                <h2>Lamhako Integrated School</h2>
                <h3>Tboli, South Cotabato</h3>
                <h1>List of Faculty Members</h1>
                
                <b>Date Prepared:</b>
                <?php
                        $date = date("Y-m-d", strtotime("+6 HOURS"));
                        echo $date;
                ?>
                <br /><br />
            </div>
            <table class="table table-striped">
                    <thead>
                            <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Gender</th>
                                    <th>Date of Appointment</th>
                                    <th>Contact No.</th>
                            </tr>
                    </thead>
                    <tbody>
                            <?php
                                    require 'sql/dbconnect.php';
                                   
                                    $query = $conn->query("SELECT * FROM `tbl_facultyinfo`");
                                    while($fetch = $query->fetch_array()){
                                           
                            ?>
                           
                            <tr>
                                    <td style="text-align:left;"><?php echo $fetch['EmployeeID']?></td>
                                    <td style="text-align:left;"><?php echo $fetch['lname']." ".$fetch['fname']." ".$fetch['mname']?> </td>
                                    <td style="text-align:left;"><?php echo $fetch['position']?></td>
                                    <td style="text-align:left;"><?php echo $fetch['gender']?></td>
                                    <td style="text-align:left;"><?php echo $fetch['appdate']?></td>
                                    <td style="text-align:left;"><?php echo $fetch['cnumber']?></td>
                            </tr>
                           
                            <?php
                                    }
                            ?>
                    </tbody>    
            </table>
                                <!--<center><button id="btnprint" onclick="PrintPage()"><i class="fa-solid fa-print"></i> </button></center>-->

            <?php
            include 'includes/footer.php';
            include 'includes/Alertinfo.php';
            ?>
    </body>
    <script type="text/javascript">
            function PrintPage() {
                    window.print();
            }

            window.addEventListener('DOMContentLoaded', (event) => {
                PrintPage()
                setTimeout(function(){ window.close() },750)
        });
    </script>

</html>
