<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require('./includes/meta.php');
require('./includes/db-config.php');
if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}
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
                    <label for="num">CP #</label>
                    <input type="text" name="num" id="num">
                </div>
                <div class="add-customer__input">
                    <label for="loc">Location</label>
                    <input type="text" name="loc" id="loc">
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