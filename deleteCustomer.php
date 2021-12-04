<?php
session_start();
require('./includes/db-config.php');
require('./services/customer-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}

$id = $_GET['id'];

deleteCustomer($mysqli, $id);

header("Location:customers.php");
