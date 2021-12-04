<?php
session_start();
require('./includes/meta.php');
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
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
        $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
        $num = mysqli_real_escape_string($mysqli, $_POST['num']);
        $loc = mysqli_real_escape_string($mysqli, $_POST['loc']);

        if (!(empty($fname) || empty($lname) || empty($num) || empty($num) || empty($id))) {
            updateCustomer($mysqli, $id,  $fname, $lname, $num, $loc);
        }
        header("Location:customers.php");
    }
    ?>
</body>

</html>