<!DOCTYPE html>
<html lang="en">

<?php
require('./includes/meta.php');
include('./includes/db-config.php');
?>

<body>
    <?php
    require('./component/header.php')
    ?>

    <div class="add-employee-view">
        <div class="add-employee">
            <h1>Add <span>Employee</span></h1>
            <form action="" class="add-employee__form">
                <div class="add-employee__input">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                </div>
                <div class="add-employee__input">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                </div>
                <div class="add-employee__input">
                    <label for="usn">Username</label>
                    <input type="text" name="usn" id="usn">
                </div>
                <div class="add-employee__input">
                    <label for="psw">Password</label>
                    <input type="password" name="psw" id="psw">
                </div>
                <div class="add-employee__input">
                    <label for="file">Picture</label>
                    <input type="file" name="file" id="file">
                </div>
                <button type="submit">Add Employee</button>
            </form>
        </div>
    </div>

</body>

</html>