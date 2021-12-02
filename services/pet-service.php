<?php

function getAllPets($mysqli)
{
    return mysqli_query($mysqli, "SELECT * FROM pet");
}

function getPet($mysqli, $id)
{
    return mysqli_query($mysqli, "SELECT * FROM pet WHERE idpet=$id");
}

function addPet($mysqli, $name, $age, $breed, $idcustomer, $picpath)
{
    return mysqli_query(
        $mysqli,
        "INSERT INTO `pet`(`name`, `age`, `breed`, `idcustomer`, `picpath`) VALUES ('$name','$age','$breed','$idcustomer','$picpath')"
    );
}

function deletePet($mysqli, $id)
{
    return mysqli_query(
        $mysqli,
        "DELETE FROM pet WHERE idpet=$id"
    );
}

function updatePet($mysqli, $id, $name, $age, $breed, $idcustomer, $picpath)
{
    return mysqli_query(
        $mysqli,
        "UPDATE `pet` SET `name`='$name',`age`='$age',`breed`='$breed',`idcustomer`='$idcustomer',`picpath`='$picpath' WHERE idpet=$id"
    );
}
