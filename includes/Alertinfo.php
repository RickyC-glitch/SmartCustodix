//<?php
//include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweet-alert.js"></script>
</head>

<body>

    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {

    ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['status'];?>",
                //text: "You clicked the button!",
                icon: "<?php echo $_SESSION['status_code'];?>",
                button: "OK",
            });
        </script>
    <?php
    unset($_SESSION['status']);
    }
    ?>

    
</body>

</html>