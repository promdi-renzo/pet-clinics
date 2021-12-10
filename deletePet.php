<?php
session_start();
require_once('./includes/db-config.php');
require_once('./services/auth-service.php');
require_once('./services/pet-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$id = $_GET['id'];

deletePet($mysqli, $id);

header("Location:pets.php");
