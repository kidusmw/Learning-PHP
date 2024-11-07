<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail = $_SERVER['email'];
    $pass = $_SERVER['password'];
}

$email = "c@gmail.com";
$password = "123";

if ($email == $mail && $password == $pass) {
    session_start();
    header('locate:home.php');
} else {
    echo "Account Not Found !";
}
