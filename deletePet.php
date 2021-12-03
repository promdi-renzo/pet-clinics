<?php
require('./includes/db-config.php');
require('./services/pet-service.php');

$id = $_GET['id'];

deletePet($mysqli, $id);

header("Location:pets.php");
