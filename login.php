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
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <title>Not Found</title>
    </head>

    <body class="bg-info-subtle">
        <!-- NAV BAR -->
        <nav class="bg-primary-subtle p-2 mb-2">
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <button class="btn btn-danger">
                        <a class="link-light text-decoration-none" aria-current="page" href="code.php">Back</a>
                    </button>
                </li>
            </ul>
        </nav>

        <container class="text-center">
            <h1>USER NOT FOUND!</h1>
        </container>
    </body>

    </html>
<?php
}
?>