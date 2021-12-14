<?php
session_start();
require_once('./services/auth-service.php');
require_once('./includes/db-config.php');
require_once('./services/service-service.php');
require_once('./services/pet-service.php');
require_once('./includes/meta.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$services = getAllServices($mysqli);
?>

<body>
    <?php
    require('./component/header.php')
    ?>
    <div class="transac-view">
        <div class="transac">
            <div class="container a">
                <div class="add-cart">
                    <h1>Add <span>To Cart</span></h1>
                    <form action="addCart.php" class="add-cart__form" method="GET">
                        <div class="add-cart__input">
                            <label for="pet">Pet</label>
                            <select name="pet" id="pet">
                                <?php
                                $services = getAllPets($mysqli);
                                while ($res = mysqli_fetch_array($services)) {
                                    echo "<option value=" . $res['idpet'] . ">" . $res['name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="add-cart__input">
                            <label for="service">Service</label>
                            <select name="service" id="service">
                                <?php
                                $services = getAllServices($mysqli);
                                while ($res = mysqli_fetch_array($services)) {
                                    echo "<option value=" . $res['idservice'] . ">" . $res['name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="Submit">Add To Cart</button>
                    </form>
                </div>
                <!-- <?php
                        while ($res = mysqli_fetch_array($services)) {

                            echo '<div class="service">';
                            echo '<div class="pic">';
                            echo '<p>' . $res['name'] . '</p>';
                            echo '<img src="' . $res['picpath'] . '" alt="" width="100%" height="100%">';
                            echo '</div>';
                            echo "<a href='addCart.php?id=" . $res['idservice'] . "'>" . $res['cost'] . " Php</a>";
                            echo '</div>';
                        }
                        ?> -->
            </div>
            <div class="container b">
                <div class="cart-container">
                    <?php

                    // for($x = 0; $x < $_SESSION['s']; $x++){
                    //     $s = getService($mysqli, $x);
                    //     $p = getPet($mysqli, $x);
                    // }
                    // foreach ($_SESSION['cart'] as $item) {
                    //     $s = getService($mysqli, $item);
                    //     while ($res = mysqli_fetch_array($s)) {

                    //         echo '<div class="cart-item">';
                    //         echo '<h1>Name: ' . $res['name'] . ' </h1>';
                    //         echo '<p>Cost: ' . $res['cost'] . ' PHP</p>';
                    //         echo '</div>';
                    //     }
                    // }
                    ?>

                </div>
                <div class="cart-action">
                    <p><a href="deleteCart.php">Delete</a></p>
                    <p><a href="addTransac.php">Buy</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>