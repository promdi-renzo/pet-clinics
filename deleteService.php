<?php
session_start();
require('./includes/db-config.php');
require('./services/service-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$id = $_GET['id'];

deleteService($mysqli, $id);

header("Location:services.php");
