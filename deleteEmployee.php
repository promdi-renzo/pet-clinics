<?php
session_start();
require('./includes/db-config.php');
require('./services/employee-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$id = $_GET['id'];

deleteEmployee($mysqli, $id);

header("Location:employees.php");
