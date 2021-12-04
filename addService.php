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
    require('./services/service-service.php');

    if (isset($_POST['Submit'])) {
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $cost = mysqli_real_escape_string($mysqli, $_POST['cost']);
        $file = $_FILES['file'];

        if (!(empty($name) || empty($cost))) {
            $target_dir = "./uploads/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
            $path =  htmlspecialchars($target_dir . basename($_FILES["file"]["name"]));
            addService($mysqli, $name, $cost, $path);
        }

        header("Location:services.php");
    }
    ?>
</body>

</html>