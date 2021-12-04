<?php
require('./includes/meta.php');
require('./includes/db-config.php');
require('./services/auth-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}
?>

<body>
    <?php
    if (isset($_POST['Submit'])) {
        $username = mysqli_real_escape_string($mysqli, $_POST['usn']);
        $password = mysqli_real_escape_string($mysqli, $_POST['psw']);

        if (auth($mysqli, $username, $password)) {
            header("Location:employees.php");
        } else {
            header("Location:index.php");
        }
    }
    ?>
</body>

</html>