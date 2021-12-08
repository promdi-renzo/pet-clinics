<?php

function getAllHistory($mysqli)
{
    return mysqli_query($mysqli, "SELECT * FROM history");
}

function getPetHistory($mysqli, $id)
{
    return mysqli_query($mysqli, "SELECT * FROM history WHERE idpet=$id");
}

function addHistory($mysqli, $title, $comment, $idpet)
{
    $date = date_default_timezone_get();
    return mysqli_query(
        $mysqli,
        "INSERT INTO `history`(`title`, `comment`, `dateCreated`, `idpet`) VALUES ('$title','$comment','$date',$idpet)"
    );
}
