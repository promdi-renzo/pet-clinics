<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require('./includes/meta.php');
require('./includes/db-config.php');
require('./services/customer-service.php');
require('./includes/db-config.php');
if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$result = getAllCustomers($mysqli);
?>

<body>
    <?php
    require('./component/header.php')
    ?>

    <div class="add-pet-view">
        <div class="add-pet">
            <h1>Add <span>Pet</span></h1>
            <form action="addPet.php" class="add-pet__form" method="POST" enctype="multipart/form-data">
                <div class="add-pet__input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="add-pet__input">
                    <label for="age">Age</label>
                    <input type="text" name="age" id="age">
                </div>
                <div class="add-pet__input">
                    <label for="breed">Breed</label>
                    <input type="text" name="breed" id="breed">
                </div>
                <div class="add-pet__input">
                    <label for="cust">Customer</label>
                    <select name="cust" id="cust">
                        <?php
                        while ($res = mysqli_fetch_array($result)) {
                            echo "<option value=" . $res['idcustomer'] . ">" . $res['fname'] . " " . $res['lname'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="add-pet__input">
                    <label for="file">Picture</label>
                    <input type="file" name="file" id="file">
                </div>
                <button type="submit" name="Submit">Add Pet</button>
            </form>
        </div>
    </div>

</body>

</html>