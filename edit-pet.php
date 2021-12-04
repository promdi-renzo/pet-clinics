<?php
session_start();
require('./includes/meta.php');
require('./includes/db-config.php');
require('./services/pet-service.php');
require('./services/customer-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$id = $_GET['id'];

$result = getPet($mysqli, $id);
$name = '';
$age = '';
$breed = '';
$cust = '';

while ($res = mysqli_fetch_array($result)) {
    $name = $res['name'];
    $age = $res['age'];
    $breed = $res['breed'];
    $cust = $res['idpet'];
}

?>

<body>
    <?php
    require('./component/header.php');

    ?>

    <div class="edit-pet-view">
        <div class="edit-pet">
            <h1>Edit <span>Pet</span></h1>

            <form action="editPet.php" class="edit-pet__form" method="POST" enctype="multipart/form-data">
                <div class="edit-pet__input">
                    <label for="id">ID</label>
                    <?php
                    echo '<input type="text" name="id" id="id" value="' . $id . '" readonly>';
                    ?>
                </div>
                <div class="edit-pet__input">
                    <label for="name">Name</label>
                    <?php
                    echo '<input type="text" name="name" id="name" value="' . $name . '">'
                    ?>
                </div>
                <div class="edit-pet__input">
                    <label for="age">Age</label>
                    <?php
                    echo '<input type="text"  name="age" id="age" value="' . $age . '">'
                    ?>
                </div>
                <div class="edit-pet__input">
                    <label for="breed">Breed</label>
                    <?php
                    echo '<input type="text"  name="breed" id="breed" value="' . $breed . '">'
                    ?>
                </div>
                <div class="edit-pet__input">
                    <label for="cust">Customer</label>
                    <select name="cust" id="cust">
                        <?php
                        $result = getAllCustomers($mysqli);
                        while ($res = mysqli_fetch_array($result)) {
                            echo "<option value=" . $res['idcustomer'] . ">" . $res['fname'] . " " . $res['lname'] . "</option>";
                        }
                        ?>
                    </select>

                </div>
                <button type="submit" name="Submit">Edit Pet</button>
            </form>
        </div>
    </div>
</body>

</html>