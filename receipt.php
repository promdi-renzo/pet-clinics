<?php
session_start();
require_once('./includes/meta.php');
require_once('./services/auth-service.php');
require_once('./services/transac-service.php');
require('./includes/db-config.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}



?>

<?php
require('./component/header.php');
?>
<table class="employees__table">
    <thead>
        <tr>
            <th>ID</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $receipt = getTransacLine($mysqli, 11);
        var_dump($receipt);
        // while ($res = mysqli_fetch_array($receipt)) {
        //     $id = $res['idtransaction'];
        //     echo "<tr>";
        //     echo "<td>" . $res['idtransaction'] . "</td>";
        //     echo "</tr>";
        // }
        // while ($res = mysqli_fetch_array($employee)) {
        //     echo "<tr>";
        //     echo "<td><img width = '50px' height = '50px' src='" . $res['picpath'] . "'></td>";
        //     echo "<td>" . $res['idemployee'] . "</td>";
        //     echo "<td>" . $res['fname'] . "</td>";
        //     echo "<td>" . $res['lname'] . "</td>";
        //     echo "<td>" . $res['username'] . "</td>";
        //     echo "<td><a href='edit-employee.php?id=" . $res['idemployee'] . "'>Edit</a> | <a href='deleteEmployee.php?id=" . $res['idemployee'] . "'>Delete</a></td>";
        //     echo "</tr>";
        // }
        // 
        ?>
    </tbody>
</table>