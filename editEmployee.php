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
    require('./services/employee-service.php');

    if (isset($_POST['Submit'])) {
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
        $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
        $usn = mysqli_real_escape_string($mysqli, $_POST['usn']);

        if (empty($fname) || empty($lname) || empty($usn)) {
            header("Location:employees.php");
        } else {

            updateEmployee($mysqli, $id,  $fname, $lname, $usn);
            header("Location:employees.php");
        }
    }
    ?>
</body>

</html>