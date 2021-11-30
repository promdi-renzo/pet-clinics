<!DOCTYPE html>
<html lang="en">

<?php
require('./includes/meta.php');
include('./includes/db-config.php');

$result = mysqli_query($mysqli, "SELECT * FROM employee");
?>

<body>
    <?php
    require('./component/header.php')
    ?>
    <div class="employees-view">
        <div class="employees">
            <div class="employees__head">
                <h1>Employees</h1>
                <a href="#">Add employee</a>
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
                    while ($res = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $res['picpath'] . "</td>";
                        echo "<td>" . $res['idemployee'] . "</td>";
                        echo "<td>" . $res['fname'] . "</td>";
                        echo "<td>" . $res['lname'] . "</td>";
                        echo "<td>" . $res['username'] . "</td>";
                        echo '<td><a href="#">Edit</a> <a href="#">Delete</a></td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>