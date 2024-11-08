<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail = $_POST['email'];
    $pass = $_POST['password'];
}

$email = "c@gmail.com";
$password = "123";

if ($email == $mail && $password == $pass) {
    session_start();
    $_SESSION['user'] = $mail;
    header('location:home.php');
} else { ?>
    <h1>USER NOT FOUND!</h1>
<?php
}
?>