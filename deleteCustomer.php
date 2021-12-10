<?php
session_start();
require_once('./includes/db-config.php');
require_once('./services/customer-service.php');
require_once('./services/auth-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$id = $_GET['id'];

deleteCustomer($mysqli, $id);

header("Location:customers.php");
