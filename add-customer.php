<!DOCTYPE html>
<html lang="en">

<?php
require('./includes/meta.php');
require('./includes/db-config.php');
?>

<body>
    <?php
    require('./component/header.php')
    ?>

    <div class="add-customer-view">
        <div class="add-customer">
            <h1>Add <span>Customer</span></h1>
            <form action="addCustomer.php" class="add-customer__form" method="POST" enctype="multipart/form-data">
                <div class="add-customer__input">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                </div>
                <div class="add-customer__input">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                </div>
                <div class="add-customer__input">
                    <label for="usn">Username</label>
                    <input type="text" name="usn" id="usn">
                </div>
                <div class="add-customer__input">
                    <label for="psw">Password</label>
                    <input type="password" name="psw" id="psw">
                </div>
                <div class="add-customer__input">
                    <label for="file">Picture</label>
                    <input type="file" name="file" id="file">
                </div>
                <button type="submit" name="Submit">Add Customer</button>
            </form>
        </div>
    </div>

</body>

</html>