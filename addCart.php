<?php
session_start();
require_once('./includes/meta.php');
require_once('./services/auth-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}
require_once('./includes/db-config.php');
require_once('./services/service-service.php');

array_push($_SESSION['s'], $_GET['service']);
array_push($_SESSION['p'], $_GET['pet']);

// header("Location:transactions.php");
