<?php


function getAllEmployees($mysqli)
{
    return mysqli_query($mysqli, "SELECT * FROM employee");
}

function getEmployee($mysqli, $id)
{
    return mysqli_query($mysqli, "SELECT * FROM employee WHERE idemployee=$id");
}

function addEmployee($mysqli, $fname, $lname, $picpath, $username, $password)
{
    return mysqli_query(
        $mysqli,
        "INSERT INTO `employee`(`fname`, `lname`, `picpath`, `username`, `password`, `employeecol`) VALUES ('$fname','$lname','$picpath','$username','$password','[value-7]')"
    );
}

function deleteEmployee($mysqli, $id)
{
    return mysqli_query(
        $mysqli,
        "DELETE FROM employee WHERE idemployee=$id"
    );
}


function updateEmployee($mysqli, $id,  $fname, $lname, $username)
{
    return mysqli_query(
        $mysqli,
        "UPDATE `employee` SET `fname`='$fname',`lname`='$lname',`username`='$username' WHERE idemployee=$id"
    );
}
