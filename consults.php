<?php
session_start();
require_once('./includes/meta.php');
require_once('./includes/db-config.php');
require_once('./services/auth-service.php');
require_once('./services/pet-service.php');
require_once('./services/consult-service.php');


if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$petId = $_GET['id'];

$pet = getPet($mysqli, $petId);
$name;
$age;
$breed;

while ($res = mysqli_fetch_array($pet)) {
    $name = $res['name'];
    $age = $res['age'];
    $breed = $res['breed'];
}

$consults = getPetConsults($mysqli, $petId);

?>

<body>
    <?php
    require('./component/header.php')
    ?>
    <div class="history-view">
        <div class="history">
            <div class="history__header">
                <div class="history__header-pic">
                    <img src="https://picsum.photos/id/1/200/300" alt="">
                </div>
                <div class="history__header-details">
                    <?php
                    echo "<h3>Pet ID: $petId</h3>";
                    echo "<h3>Name: $age</h3>";
                    echo "<h3>Age: $age</h3>";
                    echo "<h3>Breed: $breed</h1>";
                    ?>
                </div>
            </div>

            <div class="history__body">
                <?php
                while ($res = mysqli_fetch_array($consults)) {
                    echo '<div class="history__body-content">';
                    echo '<h1>' . $res['title'] . '</h1>';
                    echo '<div class="history__body-content__main">';
                    echo '<p>' . $res['comment'] . '</p>';
                    echo '</div>';
                    echo '<div class="history__body-content__date">';
                    echo '<p>Date: ' . $res['dateCreated'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }

                ?>



            </div>
        </div>
    </div>
</body>

</html>