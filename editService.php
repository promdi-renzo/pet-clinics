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
    require('./services/service-service.php');

    if (isset($_POST['Submit'])) {
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $cost = mysqli_real_escape_string($mysqli, $_POST['cost']);

        if (!(empty($id) || empty($name) || empty($cost))) {
            updateService($mysqli, $id, $name, $cost);
        }
        header("Location:services.php");
    }
    ?>
</body>

</html>