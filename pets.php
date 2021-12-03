<!DOCTYPE html>
<html lang="en">

<?php
require('./includes/meta.php');
require('./services/pet-service.php');
require('./includes/db-config.php');

$result = getAllPets($mysqli);
?>

<body>
    <?php
    require('./component/header.php')
    ?>

    <div class="pets-view">
        <div class="pets">
            <div class="pets__head">
                <h1>Pets</h1>
                <a href="add-pet.php">Add pet</a>
            </div>
            <table class="pets__table">
                <thead>
                    <tr>
                        <th>Pic</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Breed</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($res = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td><img width = '50px' height = '50px' src='" . $res['picpath'] . "'></td>";
                        echo "<td>" . $res['idpet'] . "</td>";
                        echo "<td>" . $res['name'] . "</td>";
                        echo "<td>" . $res['age'] . "</td>";
                        echo "<td>" . $res['breed'] . "</td>";
                        echo "<td><a href='deletePet.php?id=" . $res['idpet'] . "'>Delete</a></td>";
                        // echo "<td><a href='edit-employee.php?id=" . $res['idemployee'] . "'>Edit</a> | <a href='deletePet.php?id=" . $res['idemployee'] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>