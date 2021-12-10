<?php
session_start();
require_once('./includes/db-config.php');
require_once('./services/auth-service.php');
require_once('./services/employee-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$id = $_GET['id'];

deleteEmployee($mysqli, $id);

header("Location:employees.php");
