<?php
require('employee-service.php');

function redirectUnauthorized()
{
    header("Location:index.php");
}

function redirectAuthorized()
{
    header("Location:home.php");
}

function auth($mysqli, $username, $password)
{
    $results = getEmployeeByUsername($mysqli, $username);
    foreach ($results as $r) {

        if ($r['username'] == $username) {
            if (password_verify($password, $r['password'])) {
                session_start();
                var_dump($r['password']);
                $_SESSION['username'] = $r['username'];
                return true;
            }
        }
    }

    return false;
}
