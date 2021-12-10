<?php
session_start();
require_once('./includes/meta.php');
require_once('./services/auth-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}
?>

<body>
    <?php
    require('./component/header.php');
    ?>
    <?php
    require('./includes/db-config.php');
    require('./services/customer-service.php');

    if (isset($_POST['Submit'])) {
        $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
        $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
        $num = mysqli_real_escape_string($mysqli, $_POST['num']);
        $loc = mysqli_real_escape_string($mysqli, $_POST['loc']);
        $file = $_FILES['file'];

        if (!(empty($fname) || empty($lname) || empty($num) || empty($loc))) {
            $target_dir = "./uploads/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
            $path =  htmlspecialchars($target_dir . basename($_FILES["file"]["name"]));

            addCustomer($mysqli, $fname, $lname, $path, $num, $loc);
        }

        header("Location:customers.php");
    }
    ?>
</body>

</html>