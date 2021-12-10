<?php
session_start();
require_once('./includes/db-config.php');
require_once('./services/auth-service.php');
require_once('./services/service-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$id = $_GET['id'];

deleteService($mysqli, $id);

header("Location:services.php");
