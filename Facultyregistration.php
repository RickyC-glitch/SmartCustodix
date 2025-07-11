<?php
// Database connection
$servername = "localhost";
$username = "Syntrickz";
$password = "Jerckz27";
$dbname = "lis_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables for form processing
$errors = [];
$success = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $EmployeeID = isset($_POST['EmployeeID']) ? mysqli_real_escape_string($conn, trim($_POST['EmployeeID'])) : '';
    $lname = isset($_POST['lname']) ? mysqli_real_escape_string($conn, trim($_POST['lname'])) : '';
    $fname = isset($_POST['fname']) ? mysqli_real_escape_string($conn, trim($_POST['fname'])) : '';
    $mname = isset($_POST['mname']) ? mysqli_real_escape_string($conn, trim($_POST['mname'])) : '';
    $addressa = isset($_POST['addressa']) ? mysqli_real_escape_string($conn, trim($_POST['addressa'])) : '';
    $emailadd = isset($_POST['emailadd']) ? mysqli_real_escape_string($conn, trim($_POST['emailadd'])) : '';
    $cnumber = isset($_POST['cnumber']) ? mysqli_real_escape_string($conn, trim($_POST['cnumber'])) : '';
    $bdate = isset($_POST['bdate']) ? mysqli_real_escape_string($conn, trim($_POST['bdate'])) : '';
    $cstatus = isset($_POST['cstatus']) ? mysqli_real_escape_string($conn, trim($_POST['cstatus'])) : '';
    $gender = isset($_POST['gender']) ? mysqli_real_escape_string($conn, trim($_POST['gender'])) : '';
    $position = isset($_POST['position']) ? mysqli_real_escape_string($conn, trim($_POST['position'])) : '';
    $appdate = isset($_POST['appdate']) ? mysqli_real_escape_string($conn, trim($_POST['appdate'])) : '';

    // Server-side validation
    if (empty($EmployeeID)) {
        $errors[] = "Employee ID is required.";
    }
    if (empty($lname)) {
        $errors[] = "Last Name is required.";
    }
    if (empty($fname)) {
        $errors[] = "First Name is required.";
    }
    if (!empty($emailadd) && !filter_var($emailadd, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // If no errors, insert into database
    if (empty($errors)) {
        $sql = "INSERT INTO tbl_facultyinfo (EmployeeID, lname, fname, mname, addressa, emailadd, cnumber, bdate, cstatus, gender, position, appdate) 
                VALUES ('$EmployeeID', '$lname', '$fname', '$mname', '$addressa', '$emailadd', '$cnumber', '$bdate', '$cstatus', '$gender', '$position', '$appdate')";
        
        if ($conn->query($sql) === TRUE) {
            $success = "Registration successful!";
           
        } else {
            $errors[] = "Error: " . $conn->error;
        }
    }
    
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty Registration</title>
  <link rel="icon" type="image/x-icon" href="images/LIS logo.png"> 
  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
      padding: 20px;
    }
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      animation: fadeIn 0.5s ease-in;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .logo {
      display: block;
      margin: 0 auto 20px;
      max-width: 150px;
    }
    .accordion-button {
      font-weight: bold;
    }
    .form-label {
      font-weight: 500;
    }
    @media (max-width: 576px) {
      .form-container {
        padding: 15px;
      }
    }
  </style>
</head>
<body>

  

  <div class="form-container">
    
    <h2 class="text-center mb-4">Faculty Registration</h2>
    
    <!-- Display success or error messages -->
    <?php if (!empty($success)): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo htmlspecialchars($success); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
    <?php if (!empty($errors)): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
          <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <form class="needs-validation" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
      <div class="accordion" id="registrationAccordion">

      
        <!-- Personal Registration Section -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingPersonal">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePersonal" aria-expanded="false" aria-controls="collapsePersonal">
              <i class="fas fa-user me-2"></i> Personal Information
            </button>
          </h2>
          <div id="collapsePersonal" class="accordion-collapse collapse show" data-bs-parent="#registrationAccordion">
            <div class="accordion-body">
              <div class="mb-3 form-floating">
                <input type="text" class="form-control" placeholder="First Name" id="fname" name="fname" value="<?php echo isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : ''; ?>" required>
                <label for="floatingTextarea">First Name</label>
                <div class="invalid-feedback">Please enter your first name.</div>
              </div>

            <div class="mb-3 form-floating">
                
                <input type="text" class="form-control" placeholder="Last Name" id="lname" name="lname" value="<?php echo isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : ''; ?>" required>
                <label for="floatingTextarea">Last Name</label>
                <div class="invalid-feedback">Please enter your last name.</div>
              </div>
              <div class="mb-3 form-floating">
             
                <input type="text" class="form-control" placeholder="Middle Name" id="mname" name="mname" value="<?php echo isset($_POST['mname']) ? htmlspecialchars($_POST['mname']) : ''; ?>">
                <label for="floatingTextarea">Middle Name</label>
              </div>
              <div class="mb-3 form-floating">
               <input type="date" class="form-control" placeholder="Birth date" id="bdate" name="bdate" value="<?php echo isset($_POST['bdate']) ? htmlspecialchars($_POST['bdate']) : ''; ?>">
               <label for="floatingTextarea">Birth Date</label>     
              </div>
              <div class="mb-3 form-floating">              
                <select class="form-select" placeholder="Gender" id="gender" name="gender">
                  <option value="">Select Gender</option>
                  <option value="Male" <?php echo isset($_POST['gender']) && $_POST['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                  <option value="Female" <?php echo isset($_POST['gender']) && $_POST['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                </select>
                <label for="floatingTextarea">Gender</label>                
              </div>
              <div class="mb-3 form-floating">
                <select class="form-select" placeholder="Civil Status" id="cstatus" name="cstatus">
                  <option value="">Select Civil Status</option>
                  <option value="Single" <?php echo isset($_POST['cstatus']) && $_POST['cstatus'] == 'Single' ? 'selected' : ''; ?>>Single</option>
                  <option value="Married" <?php echo isset($_POST['cstatus']) && $_POST['cstatus'] == 'Married' ? 'selected' : ''; ?>>Married</option>
                  <option value="Divorced" <?php echo isset($_POST['cstatus']) && $_POST['cstatus'] == 'Divorced' ? 'selected' : ''; ?>>Divorced</option>
                  <option value="Widowed" <?php echo isset($_POST['cstatus']) && $_POST['cstatus'] == 'Widowed' ? 'selected' : ''; ?>>Widowed</option>
                </select>
                <label for="floatingTextarea">Civil Status</label>
              </div>

            </div>
          </div>
        </div>

        <!-- Contact Information Section -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingContact">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContact" aria-expanded="false" aria-controls="collapseContact">
              <i class="fas fa-envelope me-2"></i> Contact Information
            </button>
          </h2>
          <div id="collapseContact" class="accordion-collapse collapse" data-bs-parent="#registrationAccordion">
            <div class="accordion-body">
              <div class="mb-3 form-floating">
                <textarea class="form-control" placeholder="Address" id="addressa" name="addressa" rows="3"><?php echo isset($_POST['addressa']) ? htmlspecialchars($_POST['addressa']) : ''; ?></textarea>
                <label for="floatingTextarea">Address</label>
              </div>
              <div class="mb-3 form-floating">
                
                <input type="email" class="form-control" placeholder="Email Address" id="emailadd" name="emailadd" value="<?php echo isset($_POST['emailadd']) ? htmlspecialchars($_POST['emailadd']) : ''; ?>">
                <label for="floatingTextarea">Email Address</label>
                <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>
              <div class="mb-3 form-floating">
                <input type="tel" class="form-control" placeholder="Contact Number" id="cnumber" name="cnumber" value="<?php echo isset($_POST['cnumber']) ? htmlspecialchars($_POST['cnumber']) : ''; ?>">
                <label for="floatingTextarea">Contact Number</label>
              </div>
            </div>
          </div>
        </div>

        <!-- Employment Details Section -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingEmployment">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmployment" aria-expanded="false" aria-controls="collapseEmployment">
              <i class="fas fa-briefcase me-2"></i> Employment Details
            </button>
          </h2>
          <div id="collapseEmployment" class="accordion-collapse collapse" data-bs-parent="#registrationAccordion">
            <div class="accordion-body">
              <div class="mb-3 form-floating">
                
                <input type="text" class="form-control" placeholder="Employee ID" id="EmployeeID" name="EmployeeID" value="<?php echo isset($_POST['EmployeeID']) ? htmlspecialchars($_POST['EmployeeID']) : ''; ?>" required>
                <label for="floatingTextarea">Employee ID</label>
                <div class="invalid-feedback">Please enter your Employee ID.</div>
              </div>
              <div class="mb-3 form-floating">
                            
                <select class="form-select" placeholder="Position" id="position" name="position">
                  <option value="">Select Position</option>
                  <option value="Teacher I" <?php echo isset($_POST['position']) && $_POST['position'] == 'Teacher I' ? 'selected' : ''; ?>>Teacher I</option>
                  <option value="Teacher II" <?php echo isset($_POST['position']) && $_POST['position'] == 'Teacher II' ? 'selected' : ''; ?>>Teacher II</option>
                  <option value="teacher III" <?php echo isset($_POST['position']) && $_POST['position'] == 'Teacher III' ? 'selected' : ''; ?>>Teacher III</option>
                  <option value="Master Teacher I" <?php echo isset($_POST['position']) && $_POST['position'] == 'Master Teacher I' ? 'selected' : ''; ?>>Master Teacher I</option>
                </select>
                <label for="floatingTextarea">Position</label>
              </div>
              <div class="mb-3 form-floating">
               
                <input type="date" class="form-control" placeholder="Appointment date" id="appdate" name="appdate" value="<?php echo isset($_POST['appdate']) ? htmlspecialchars($_POST['appdate']) : ''; ?>">
                <label for="floatingTextarea">Appointment date</label>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="d-flex justify-content-end my-2 ">
        <button type="submit" class="btn btn-primary mx-2">Submit</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
      </div>
      
    </form>
    <div class="text-center mt-3">
      <a href="index.php" class="text-muted">Already have an account? Login Here</a>
    </div>
  </div>

  <!-- Bootstrap 5.3 JS Bundle (includes Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script>
    // Bootstrap form validation
    (function () {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>


</body>
</html>