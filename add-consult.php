<?php
session_start();
require_once('./includes/meta.php');
require_once('./includes/db-config.php');
require_once('./services/pet-service.php');
require_once('./services/auth-service.php');

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
                    <select name="title" id="title">
                        <option value="ubo"> Ubo </option>;
                        <option value="sipon"> Sipon </option>;
                        <option value="lagnat"> Lagnat </option>;
                    </select>
                </div>
                <div class="add-consult__input">
                    <label for="comment">Comment</label>
                    <input type="text" name="comment" id="comment">
                </div>
                <div class="add-consult__input">
                    <label for="pet">Pet</label>
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