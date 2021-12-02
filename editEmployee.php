<!DOCTYPE html>
<html lang="en">

<?php
require('./includes/meta.php');
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

        echo $id;
        echo $fname;
        echo $lname;
        echo $usn;

        if (empty($fname) || empty($lname) || empty($usn)) {
            if (empty($fname)) {
                echo "<font color='red'>fname field is empty.</font><br/>";
            }

            if (empty($lname)) {
                echo "<font color='red'>lname field is empty.</font><br/>";
            }
            if (empty($usn)) {
                echo "<font color='red'>usn field is empty.</font><br/>";
            }

            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {

            updateEmployee($mysqli, $id,  $fname, $lname, $usn);
            header("Location:employees.php");
        }
    }
    ?>
</body>

</html>