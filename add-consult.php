<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require('./includes/meta.php');
require('./includes/db-config.php');
require('./services/pet-service.php');
require('./includes/db-config.php');
if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$result = getAllPets($mysqli);
?>

<body>
    <?php
    require('./component/header.php')
    ?>

    <div class="add-consult-view">
        <div class="add-consult">
            <h1>Add <span>Consult</span></h1>
            <form action="addConsult.php" class="add-consult__form" method="POST">
                <div class="add-consult__input">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="add-consult__input">
                    <label for="content">Content</label>
                    <input type="text" name="content" id="content">
                </div>
                <div class="add-consult__input">
                    <label for="pet">Customer</label>
                    <select name="pet" id="pet">
                        <?php
                        while ($res = mysqli_fetch_array($result)) {
                            echo "<option value=" . $res['idpet'] . ">" . $res['name'] . "|" . $res['age'] .  "|" . $res['breed'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="Submit">Add Consult</button>
            </form>
        </div>
    </div>

</body>

</html>