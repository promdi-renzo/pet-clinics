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
    date_default_timezone_set('Asia/Singapore');
    $date = date('m/d/Y h:i:s a', time());

    $stmt = $mysqli->prepare("INSERT INTO `consult`(`title`, `comment`, `dateCreated`, `idpet`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $title, $comment, $date, $idpet);
    $stmt->execute();
}
