<!DOCTYPE html>
<html lang="en">

<?php
require('./includes/meta.php');
require('./services/employee-service.php');
require('./includes/db-config.php');
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
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>