<!DOCTYPE html>
<html lang="en">

<?php
require('./includes/meta.php');
require('./includes/db-config.php');
require('./services/customer-service.php');

$id = $_GET['id'];

$result = getCustomer($mysqli, $id);
$fname = '';
$lname = '';
$num = '';
$loc = '';

while ($res = mysqli_fetch_array($result)) {
    $fname = $res['fname'];
    $lname = $res['lname'];
    $num = $res['num'];
    $loc = $res['loc'];
}

?>

<body>
    <?php
    require('./component/header.php');

    ?>

    <div class="edit-customer-view">
        <div class="edit-customer">
            <h1>Edit <span>Customer</span></h1>

            <form action="editCustomer.php" class="edit-customer__form" method="POST" enctype="multipart/form-data">
                <div class="edit-customer__input">
                    <label for="id">ID</label>
                    <?php
                    echo '<input type="text" name="id" id="id" value="' . $id . '" readonly>';
                    ?>
                </div>
                <div class="edit-customer__input">
                    <label for="fname">First Name</label>
                    <?php
                    echo '<input type="text" name="fname" id="fname" value="' . $fname . '">'
                    ?>
                </div>
                <div class="edit-customer__input">
                    <label for="lname">Last Name</label>
                    <?php
                    echo '<input type="text"  name="lname" id="lname" value="' . $lname . '">'
                    ?>
                </div>
                <div class="edit-customer__input">
                    <label for="num">CP #</label>
                    <?php
                    echo '<input type="text" name="num" id="num" value="' . $num . '">'
                    ?>
                </div>
                <div class="edit-customer__input">
                    <label for="loc">Location</label>
                    <?php
                    echo '<input type="text" name="loc" id="loc" value="' . $loc . '">'
                    ?>
                </div>
                <button type="submit" name="Submit">Edit Customer</button>
            </form>
        </div>
    </div>
</body>

</html>