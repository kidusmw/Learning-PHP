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

            <form action="accounts.php" method="post">
                <!-- NAME -->
                <div class="mb-3">
                    <label for="nameText" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameText" name="name" required>
                </div>

                <!-- GENDER -->
                <select class="form-select mb-3" name="gender" required>
                    <option selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="N/A">Prefer not to say</option>
                </select>

                <!-- SECTION -->
                <select class="form-select mb-3" name="section" required>
                    <option selected>Section</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>

                <!-- DEPARTMENT -->
                <select class="form-select mb-3" name="department" required>
                    <option selected>Department</option>
                    <option value="Accounting">Accounting</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Computer Science">Computer Science</option>
                </select>

                <!-- ID -->
                <div class="mb-3">
                    <label for="numberText" class="form-label">ID</label>
                    <input type="text" pattern="^[0-9]+$" name="id" id="numberText" class="form-control" required>
                </div>

                <!-- SUBMIT -->
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