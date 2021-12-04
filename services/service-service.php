<?php

function getAllServices($mysqli)
{
    return mysqli_query($mysqli, "SELECT * FROM service");
}

function getService($mysqli, $id)
{
    return mysqli_query($mysqli, "SELECT * FROM service WHERE idservice=$id");
}

function addService($mysqli, $name, $cost, $picpath)
{
    return mysqli_query(
        $mysqli,
        "INSERT INTO `service`(`name`, `cost`, `picpath`) VALUES ('$name','$cost','$picpath')"
    );
}

function deleteService($mysqli, $id)
{
    return mysqli_query(
        $mysqli,
        "DELETE FROM service WHERE idservice=$id"
    );
}

function updateService($mysqli, $id, $name, $cost)
{
    return mysqli_query(
        $mysqli,
        "UPDATE `service` SET `name`='$name', `cost`='$cost' WHERE idservice=$id"
    );
}
