<?php
session_start();
require_once('./includes/meta.php');
require_once('./services/auth-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}
require_once('./includes/db-config.php');
require_once('./services/consult-service.php');

if (isset($_POST['Submit'])) {
    $title = mysqli_real_escape_string($mysqli, $_POST['title']);
    $comment = mysqli_real_escape_string($mysqli, $_POST['comment']);
    $pet = mysqli_real_escape_string($mysqli, $_POST['pet']);

    if (!(empty($title) || empty($comment) || empty($pet))) {

        addConsult($mysqli, $title, $comment, $pet);
    }

    header("Location:pets.php");
}
