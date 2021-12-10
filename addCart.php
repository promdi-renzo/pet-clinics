<?php
session_start();
require_once('./includes/meta.php');
require_once('./services/auth-service.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}
require_once('./includes/db-config.php');
require_once('./services/service-service.php');

array_push($_SESSION['cart'], $_GET['id']);
var_dump($_SESSION['cart']);

header("Location:transactions.php");
