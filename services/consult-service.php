<?php

function getAllConsults($mysqli)
{
    return mysqli_query($mysqli, "SELECT * FROM consult");
}

function getPetConsults($mysqli, $id)
{
    return mysqli_query($mysqli, "SELECT * FROM consult WHERE idpet=$id");
}

function addConsult($mysqli, $title, $comment, $idpet)
{
    $date = date_default_timezone_get();
    return mysqli_query(
        $mysqli,
        "INSERT INTO `consult`(`title`, `comment`, `dateCreated`, `idpet`) VALUES ('$title','$comment','$date',$idpet)"
    );
}
