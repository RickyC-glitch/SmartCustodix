<?php
require_once 'dbconnect.php';


$sqlselect = "SELECT * FROM `tbl_facultyinfo` ";
$result = mysqli_query($conn, $sqlselect);

if (mysqli_num_rows($result) > 0) { ?>
    <div class="container-scroll table-responsive">
        <table class="table table-border table-striped table-hover mt-4">
        <thead class=" text-primary text-center" style="background-color: #e3f2fd;" >
                <tr>
                    <th>Employee ID</th>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Address</th>
                    <th>E-mail</th>
                    <th>Contact #</th>
                    <th>Birth date</th>
                    <th>Civil Status</th>
                    <th>Gender</th>
                    <th>Position</th>
                    <th>Appointment Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $empid = $row['EmployeeID'];
                    $lname = $row['lname'];
                    $fname = $row['fname'];
                    $mname = $row['mname'];
                    $addressa = $row['addressa'];
                    $emailadd = $row['emailadd'];
                    $cnumber = $row['cnumber'];
                    $bdate = $row['bdate'];
                    $cstatus = $row['cstatus'];
                    $gender = $row['gender'];
                    $position = $row['position'];
                    $appdate = $row['appdate'];

                ?>
                    <tr>
                        <td class="emp_id"><?php echo $empid; ?></td>
                        <td><?php echo $lname; ?></td>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $mname; ?></td>
                        <td><?php echo $addressa; ?></td>
                        <td><?php echo $emailadd; ?></td>
                        <td><?php echo $cnumber; ?></td>
                        <td><?php echo $bdate; ?></td>
                        <td><?php echo $cstatus; ?></td>
                        <td><?php echo $gender; ?></td>
                        <td><?php echo $position; ?></td>
                        <td><?php echo $appdate; ?></td>
                        <td>
                            <div class="btn-group gap-2">
                            <button  type="button" class="btnedit btn btn-success " id="btnedit"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btndelete btn btn-danger" id="btndelete"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<?php


} else {
    echo "<h6 class='text-danger text-center mt-3'> No data found </h6> ";
};

?>


<script type='text/javascript'>
        $(document).ready(function(){
            $('.btnedit').click(function(e){
                e.preventDefault();
                var eid=$(this).closest('tr').find('.emp_id').text();
               
                //alert(eid);
                
                $.ajax({
                    url: 'sql/loadupdatefacultyinfo.php',
                    type:'POST',
                    data: {
                        'checking_btnedit': true,
                        'empid': eid,
                    },
                    success: function(response){
                      //$ ('.modal-body').html(response);
                       //$('#modalupdatefaculty').modal('show');
                       //console.log(response);
                       $.each(response, function (key, value){
                            //console.log(value['fname']);
                            $('#update_empID').val(value['EmployeeID']);
                            $('#update_lname').val(value['lname']);
                            $('#update_fname').val(value['fname']);
                            $('#update_mname').val(value['mname']);
                            $('#update_address').val(value['addressa']);
                            $('#update_email').val(value['emailadd']);
                            $('#update_cnumber').val(value['cnumber']);
                            $('#update_bdate').val(value['bdate']);
                            $('#update_cstatus').val(value['cstatus']);
                            $('#update_gender').val(value['gender']);
                            $('#update_appdate').val(value['appdate']);
                            $('#update_position').val(value['position']);
                       });
                       $('#modalupdatefaculty').modal('show');
                    }
                });
            });
        });
</script>
<script type='text/javascript'>
        $(document).ready(function(){
            $('.btndelete').click(function(e){
                e.preventDefault();
                var eid=$(this).closest('tr').find('.emp_id').text();
               
                //alert(eid);
                
                $.ajax({
                    url: 'sql/loaddeletefacultyinfo.php',
                    type:'POST',
                    data: {
                        'checking_btndelete': true,
                        'empid': eid,
                    },
                    success: function(response){
                      //$ ('.modal-body').html(response);
                       //$('#modalupdatefaculty').modal('show');
                       //console.log(response);
                       $.each(response, function (key, value){
                            //console.log(value['fname']);
                            $('#del_empID').val(value['EmployeeID']);
                            $('#del_lname').val(value['lname']);
                            $('#del_fname').val(value['fname']);
                            $('#del_mname').val(value['mname']);
                            $('#del_address').val(value['addressa']);
                            $('#del_email').val(value['emailadd']);
                            $('#del_cnumber').val(value['cnumber']);
                            $('#del_bdate').val(value['bdate']);
                            $('#del_cstatus').val(value['cstatus']);
                            $('#del_gender').val(value['gender']);
                            $('#del_appdate').val(value['appdate']);
                            $('#del_position').val(value['position']);
                       });
                       $('#modaldeletefaculty').modal('show');
                    }
                });
            });
        });
</script>


