<?php
session_start();
require_once('./includes/meta.php');
require_once('./includes/db-config.php');
require_once('./services/auth-service.php');
require_once('./services/service-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$id = $_GET['id'];

$result = getService($mysqli, $id);
$name = '';
$cost = '';


while ($res = mysqli_fetch_array($result)) {
    $name = $res['name'];
    $cost = $res['cost'];
}

?>

<body>
    <?php
    require('./component/header.php');

    ?>

    <div class="edit-service-view">
        <div class="edit-service">
            <h1>Edit <span>Service</span></h1>

            <form action="editService.php" class="edit-service__form" method="POST" enctype="multipart/form-data">
                <div class="edit-service__input">
                    <label for="id">ID</label>
                    <?php
                    echo '<input type="text" name="id" id="id" value="' . $id . '" readonly>';
                    ?>
                </div>
                <div class="edit-service__input">
                    <label for="name">Name</label>
                    <?php
                    echo '<input type="text" name="name" id="name" value="' . $name . '">'
                    ?>
                </div>
                <div class="edit-service__input">
                    <label for="cost">Cost</label>
                    <?php
                    echo '<input type="text"  name="cost" id="cost" value="' . $cost . '">'
                    ?>
                </div>

                <button type="submit" name="Submit">Edit Service</button>
            </form>
        </div>
    </div>
</body>

</html>