<?php

function buyTransac($mysqli, $services)
{
    $mysqli->autocommit(FALSE);
    $mysqli->begin_transaction();
    date_default_timezone_set('Asia/Singapore');
    $date = date('m/d/Y h:i:s a', time());

    mysqli_query($mysqli, "INSERT INTO `transaction`(`dateCreated`) VALUES ('$date')");
    $last_id = mysqli_insert_id($mysqli);
    $stmt = $mysqli->prepare("INSERT INTO `transactionline`(`idtransaction`, `idservice`) VALUES (?,?)");

    foreach ($services as $s) {
        $stmt->bind_param("ii", $last_id, $s);
        $stmt->execute();
    }

    $mysqli->commit();
    $mysqli->autocommit(TRUE);
}


function getTransacLine($mysqli, $id)
{
    return mysqli_query($mysqli, "SELECT * FROM transactionline WHERE idtransaction=$id");
}
