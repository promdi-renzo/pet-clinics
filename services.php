<?php
session_start();
require_once('./includes/meta.php');
require_once('./services/auth-service.php');
require_once('./services/service-service.php');
require_once('./includes/db-config.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$result = getAllServices($mysqli);
?>

<body>
    <?php
    require('./component/header.php')
    ?>
    <div class="services-view">
        <div class="services">
            <div class="services__head">
                <h1>Services</h1>
                <a href="add-service.php">Add Services</a>
            </div>
            <table class="services__table">
                <thead>
                    <tr>
                        <th>Pic</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Cost</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($res = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td><img width = '50px' height = '50px' src='" . $res['picpath'] . "'></td>";
                        echo "<td>" . $res['idservice'] . "</td>";
                        echo "<td>" . $res['name'] . "</td>";
                        echo "<td>" . $res['cost'] . "</td>";
                        echo "<td><a href='edit-service.php?id=" . $res['idservice'] . "'>Edit</a> | <a href='deleteService.php?id=" . $res['idservice'] . "'>Delete</a></td>";
                        // echo "<td><a href='edit-employee.php?id=" . $res['idemployee'] . "'>Edit</a> | <a href='deleteEmployee.php?id=" . $res['idemployee'] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>