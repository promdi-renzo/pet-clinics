<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require('./includes/meta.php');
require('./services/auth-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}
?>

<body>
    <?php
    require('./component/header.php')
    ?>


</body>

</html>