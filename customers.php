<?php
session_start();
require_once('./includes/meta.php');
require_once('./services/auth-service.php');
require_once('./services/customer-service.php');
require_once('./includes/db-config.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$result = getAllCustomers($mysqli);
?>

<body>
    <?php
    require('./component/header.php')
    ?>
    <div class="customers-view">
        <div class="customers">
            <div class="customers__head">
                <h1>Customers</h1>
                <a href="add-customer.php">Add customers</a>
            </div>
            <table class="customers__table">
                <thead>
                    <tr>
                        <th>Pic</th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>CP #</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                while ($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td><img width = '50px' height = '50px' src='" . $res['picpath'] . "'></td>";
                    echo "<td>" . $res['idcustomer'] . "</td>";
                    echo "<td>" . $res['fname'] . "</td>";
                    echo "<td>" . $res['lname'] . "</td>";
                    echo "<td>" . $res['num'] . "</td>";
                    echo "<td>" . $res['loc'] . "</td>";
                    echo "<td><a href='edit-customer.php?id=" . $res['idcustomer'] . "'>Edit</a> | <a href='deleteCustomer.php?id=" . $res['idcustomer'] . "'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>