<?php
session_start();
require_once('./services/auth-service.php');
require_once('./includes/meta.php');

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