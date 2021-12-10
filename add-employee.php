<?php
session_start();
require_once('./includes/meta.php');
require_once('./includes/db-config.php');
require_once('./services/auth-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}
?>

<body>
    <?php
    require('./component/header.php')
    ?>

    <div class="add-employee-view">
        <div class="add-employee">
            <h1>Add <span>Employee</span></h1>
            <form action="addEmployee.php" class="add-employee__form" method="POST" enctype="multipart/form-data">
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
                <button type="submit" name="Submit">Add Employee</button>
            </form>
        </div>
    </div>

</body>

</html>