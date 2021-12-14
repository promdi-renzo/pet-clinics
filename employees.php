<?php
session_start();
require_once('./includes/meta.php');
require_once('./services/auth-service.php');
require_once('./services/employee-service.php');
require_once('./includes/db-config.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}
$employee = getAllEmployees($mysqli);


?>

<body>
    <?php
    require('./component/header.php')
    ?>
    <div class="employees-view">
        <div class="employees">
            <div class="employees__head">
                <h1>Employees</h1>
                <a href="add-employee.php">Add employee</a>
            </div>
            <table class="employees__table">
                <thead>
                    <tr>
                        <th>Pic</th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($res = mysqli_fetch_array($employee)) {
                        echo "<tr>";
                        echo "<td><img width = '50px' height = '50px' src='" . $res['picpath'] . "'></td>";
                        echo "<td>" . $res['idemployee'] . "</td>";
                        echo "<td>" . $res['fname'] . "</td>";
                        echo "<td>" . $res['lname'] . "</td>";
                        echo "<td>" . $res['username'] . "</td>";
                        echo "<td><a href='edit-employee.php?id=" . $res['idemployee'] . "'>Edit</a> | <a href='deleteEmployee.php?id=" . $res['idemployee'] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>