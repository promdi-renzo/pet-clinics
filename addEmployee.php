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
        $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
        $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
        $usn = mysqli_real_escape_string($mysqli, $_POST['usn']);
        $psw = mysqli_real_escape_string($mysqli, $_POST['psw']);
        $file = $_FILES['file'];

        if (empty($fname) || empty($lname) || empty($usn) || empty($psw) || empty($file)) {
            if (empty($fname)) {
                echo "<font color='red'>fname field is empty.</font><br/>";
            }

            if (empty($lname)) {
                echo "<font color='red'>lname field is empty.</font><br/>";
            }
            if (empty($usn)) {
                echo "<font color='red'>usn field is empty.</font><br/>";
            }

            if (empty($psw)) {
                echo "<font color='red'>psw field is empty.</font><br/>";
            }

            if (empty($file)) {
                echo "<font color='red'>file field is empty.</font><br/>";
            }
            var_dump($file);
            echo "<h1>" . $name . "</h1>";
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            $target_dir = "./uploads/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
            $path =  htmlspecialchars($target_dir . basename($_FILES["file"]["name"]));

            addEmployee($mysqli, $fname, $lname, $path, $usn, $psw);
            header("Location:employees.php");
        }
    }
    ?>
</body>

</html>