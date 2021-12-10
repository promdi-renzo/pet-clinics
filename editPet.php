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
    require('./services/pet-service.php');

    if (isset($_POST['Submit'])) {
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $breed = mysqli_real_escape_string($mysqli, $_POST['breed']);
        $cust = mysqli_real_escape_string($mysqli, $_POST['cust']);
        $age = mysqli_real_escape_string($mysqli, $_POST['age']);

        if (!(empty($id) || empty($name) || empty($breed) || empty($cust) || empty($age))) {
            updatePet($mysqli, $id, $name, $age, $breed, $cust);
        }
        header("Location:pets.php");
    }
    ?>
</body>

</html>