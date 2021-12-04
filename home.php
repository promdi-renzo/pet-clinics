<?php
session_start();
require('./services/auth-service.php');
require('./includes/meta.php');

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