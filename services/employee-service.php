<?php


function getAllEmployees($mysqli)
{
    return mysqli_query($mysqli, "SELECT * FROM employee");
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
