<!DOCTYPE html>
<html lang="en">

<?php
require('./includes/meta.php');
require('./includes/db-config.php');
require('./services/employee-service.php');

$id = $_GET['id'];

$result = getEmployee($mysqli, $id);
$fname = '';
$lname = '';
$username = '';

while ($res = mysqli_fetch_array($result)) {
    $fname = $res['fname'];
    $lname = $res['lname'];
    $username = $res['username'];
}

?>

<body>
    <?php
    require('./component/header.php');

    ?>

    <div class="edit-employee-view">
        <div class="edit-employee">
            <h1>Edit <span>Employee</span></h1>

            <form action="editEmployee.php" class="edit-employee__form" method="POST" enctype="multipart/form-data">
                <div class="edit-employee__input">
                    <label for="id">ID</label>
                    <?php
                    echo '<input type="text" name="id" id="id" value="' . $id . '" readonly>';
                    ?>
                </div>
                <div class="edit-employee__input">
                    <label for="fname">First Name</label>
                    <?php
                    echo '<input type="text" name="fname" id="fname" value="' . $fname . '">'
                    ?>
                </div>
                <div class="edit-employee__input">
                    <label for="lname">Last Name</label>
                    <?php
                    echo '<input type="text"  name="lname" id="lname" value="' . $lname . '">'
                    ?>
                </div>
                <div class="edit-employee__input">
                    <label for="usn">Username</label>
                    <?php
                    echo '<input type="text" name="usn" id="usn" value="' . $username . '">'
                    ?>
                </div>
                <button type="submit" name="Submit">Edit Employee</button>
            </form>
        </div>
    </div>

</body>

</html>