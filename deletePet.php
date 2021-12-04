<?php
session_start();
require('./includes/db-config.php');
require('./services/pet-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$id = $_GET['id'];

deletePet($mysqli, $id);

header("Location:pets.php");
