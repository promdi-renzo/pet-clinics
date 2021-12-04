<!DOCTYPE html>
<html lang="en">

<?php
require('./includes/meta.php');
require('./includes/db-config.php');
?>

<body>
    <?php
    require('./component/header.php')
    ?>

    <div class="add-service-view">
        <div class="add-service">
            <h1>Add <span>Service</span></h1>
            <form action="addService.php" class="add-service__form" method="POST" enctype="multipart/form-data">
                <div class="add-service__input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="add-service__input">
                    <label for="cost">Cost</label>
                    <input type="text" name="cost" id="cost">
                </div>
                <div class="add-service__input">
                    <label for="file">Picture</label>
                    <input type="file" name="file" id="file">
                </div>
                <button type="submit" name="Submit">Add Service</button>
            </form>
        </div>
    </div>

</body>

</html>