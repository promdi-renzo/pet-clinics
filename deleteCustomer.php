<?php
require('./includes/db-config.php');
require('./services/customer-service.php');

$id = $_GET['id'];

deleteCustomer($mysqli, $id);

header("Location:customers.php");
