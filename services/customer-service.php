<?php

function getAllCustomers($mysqli)
{
    return mysqli_query($mysqli, "SELECT * FROM customer");
}

function getCustomer($mysqli, $id)
{
    return mysqli_query($mysqli, "SELECT * FROM customer WHERE idcustomer=$id");
}

function addCustomer($mysqli, $fname, $lname, $picpath, $num, $loc)
{
    return mysqli_query(
        $mysqli,
        "INSERT INTO `customer`(`fname`, `lname`, `picpath`, `num`, `loc`) VALUES ('$fname','$lname','$picpath','$num','$loc')"
    );
}

function deleteCustomer($mysqli, $id)
{
    return mysqli_query(
        $mysqli,
        "DELETE FROM customer WHERE idcustomer=$id"
    );
}

function updateCustomer($mysqli, $id,  $fname, $lname, $num, $loc)
{
    return mysqli_query(
        $mysqli,
        "UPDATE `customer` SET `fname`='$fname',`lname`='$lname',`num`='$num',`loc`='$loc' WHERE idcustomer=$id"
    );
}
