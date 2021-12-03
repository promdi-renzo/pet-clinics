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
    require('./services/pet-service.php');

    if (isset($_POST['Submit'])) {
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $age = mysqli_real_escape_string($mysqli, $_POST['age']);
        $breed = mysqli_real_escape_string($mysqli, $_POST['breed']);
        $idcustomer = mysqli_real_escape_string($mysqli, $_POST['cust']);
        $file = $_FILES['file'];

        if (!(empty($name) || empty($age) || empty($breed) || empty($idcustomer))) {
            $target_dir = "./uploads/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
            $path =  htmlspecialchars($target_dir . basename($_FILES["file"]["name"]));

            addPet($mysqli, $name, $age, $breed, $idcustomer, $path);
        }

        header("Location:pets.php");
    }
    ?>
</body>

</html>