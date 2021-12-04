<?php
require('./includes/db-config.php');
require('./services/service-service.php');

$id = $_GET['id'];

deleteService($mysqli, $id);

header("Location:services.php");
