<?php
require_once 'dbconnect.php';


$sqlselect = "SELECT * FROM `view_userinfo`";
$result = mysqli_query($conn, $sqlselect);

if (mysqli_num_rows($result) > 0) { ?>
    <div class="container-scroll table-responsive">
        <table class="table table-border table-striped table-hover mt-4">
        <thead class=" text-primary text-center" style="background-color: #e3f2fd;" >
                <tr>
                    <th>Employee ID</th>
                    <th>User Level</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Position</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $empid = $row['EmployeeID'];
                    $ulevel = $row['Userlevel'];
                    $uname = $row['username'];
                    $password = $row['password'];
                    $lname = $row['lname'];
                    $fname = $row['fname'];
                    $mname = $row['mname'];
                    $position = $row['position'];
                    $cnumber = $row['cnumber'];
                    

                ?>
                    <tr>
                        <td class="emp_id"><?php echo $empid; ?></td>
                        <td><?php echo $ulevel; ?></td>
                        <td><?php echo $uname; ?></td>
                        <td><?php echo $password; ?></td>
                        <td><?php echo $lname; ?></td>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $mname; ?></td>
                        <td><?php echo $position; ?></td>
                        <td><?php echo $cnumber; ?></td>
                        
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