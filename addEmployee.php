<?php
session_start();
require_once('./includes/meta.php');
require_once('./services/auth-service.php');

// if (empty($_SESSION['username'])) {
//     redirectUnauthorized();
// }
?>

<body>
    <?php
    require('./component/header.php');
    ?>
    <?php
    require_once('./includes/db-config.php');
    require_once('./services/employee-service.php');

    if (isset($_POST['Submit'])) {
        $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
        $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
        $usn = mysqli_real_escape_string($mysqli, $_POST['usn']);
        $psw = mysqli_real_escape_string($mysqli, $_POST['psw']);
        $file = $_FILES['file'];

        if (!(empty($fname) || empty($lname) || empty($usn) || empty($psw) || empty($file))) {
            $target_dir = "./uploads/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
            $path =  htmlspecialchars($target_dir . basename($_FILES["file"]["name"]));

            $hashed = password_hash($psw, PASSWORD_DEFAULT);
            addEmployee($mysqli, $fname, $lname, $path, $usn, $hashed);
        }

        header("Location:employees.php");
    }
    ?>
</body>

</html>