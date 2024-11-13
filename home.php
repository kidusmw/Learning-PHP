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

        <section class="border border-3 border-primary  m-4 p-4">

            <h1 class="text-bold my-auto">Finish up setting up your account</h1>

            <form action="accounts.php" class="row g-3 needs-validation" method="post" enctype="multipart/form-data">

                <!-- FIRST NAME -->
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">First name</label>
                    <input type="text" class="form-control" name="fname" required>
                </div>

                <!-- LAST NAME -->
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip02" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="lname" required>
                </div>

                <!-- USERNAME -->
                <div class="col-md-4 position-relative">
                    <label for="validationTooltipUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                </div>

                <!-- GENDER -->
                <label for="Gender">Gender</label>
                <select class="form-select" aria-label="Default select example"
                    name="gender">
                    <option selected value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="NaN">Prefer Not to say</option>
                </select>

                <!-- SECTION -->
                <label for="Section">Section</label>
                <select class="form-select" aria-label="Default select example" name="section">
                    <option selected value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>

                <!-- DEPARTMENT -->
                <label for="Gender">Department</label>
                <select class="form-select" aria-label="Default select example" name="department">
                    <option selected value="Accounting">Accounting</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Management">Management</option>
                </select>

                <!-- CITY -->
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" required>
                </div>

                <!-- ZIP -->
                <div class="col-md-3 position-relative">
                    <label for="validationTooltip05" class="form-label">Zip</label>
                    <input type="text" class="form-control" name="zip" required>
                </div>

                <!-- ID -->
                <div class="col-md-3 position-relative">
                    <label for="validationTooltip05" class="form-label">ID</label>
                    <input type="text" class="form-control" name="id" required>
                </div>

                <!-- IMAGE -->
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="file" id="formFile">
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit" value="upload">Submit</button>
                </div>

            </form>

        </section>
    </body>

    </html>

<?php
} else {
    header('location:code.php');
}

?>