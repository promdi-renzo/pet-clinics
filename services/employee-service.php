<?php


function getAllEmployees($mysqli)
{
    return mysqli_query($mysqli, "SELECT * FROM employee");
}
