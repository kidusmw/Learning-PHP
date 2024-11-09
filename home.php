<?php

session_start();
if (isset($_SESSION['user'])) { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>

    <body class="bg-info-subtle">

        <nav class="bg-primary-subtle p-2">
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <button class="btn btn-danger">
                        <a class="link-light text-decoration-none" aria-current="page" href="logout.php">Log out</a>
                    </button>
                </li>
            </ul>
        </nav>

        <section class="border border-3 border-primary d-flex justify-content-around m-4 p-4">

            <h1 class="text-bold my-auto">Finish up setting up your account</h1>

            <form action="#" method="post">
                <div class="mb-3">
                    <label for="nameText" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameText" name="name" required>
                </div>

                <select class="form-select mb-3" required>
                    <option selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="none">Prefer not to say</option>
                </select>

                <select class="form-select mb-3" required>
                    <option selected>Section</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>

                <select class="form-select mb-3" required>
                    <option selected>Department</option>
                    <option value="1">Accounting</option>
                    <option value="2">Marketing</option>
                    <option value="3">Computer Science</option>
                </select>

                <div class="mb-3">
                    <label for="numberText" class="form-label">ID</label>
                    <input type="text" pattern="^[0-9]+$" name="id" id="numberText" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </section>
    </body>

    </html>

<?php
} else {
    header('location:code.php');
}

?>