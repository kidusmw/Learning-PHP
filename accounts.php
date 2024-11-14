<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $userName = $_POST['username'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $zip = $_POST['zip'];
    $section = $_POST['section'];
    $department = $_POST['department'];
    $idText = explode('/', $_POST['id']);
    $fileName = $_FILES['file']['name'];
    $filePath = $_FILES['file']['tmp_name'];
}

$id = $idText[1];
$accounts = compact('firstName', 'lastName', 'userName', 'city', 'gender', 'zip', 'section', 'department', 'id', 'fileName');

$key = array_keys($accounts);

move_uploaded_file($filePath, './uploads/' . $fileName);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>User Profile</title>
</head>

<body class="bg-light">
    <!-- NAV BAR -->
    <nav class="bg-primary-subtle p-2">
        <ul class="nav nav-pills justify-content-end">
            <li class="nav-item">
                <button class="btn btn-danger">
                    <a class="link-light text-decoration-none" aria-current="page" href="logout.php">Log out</a>
                </button>
            </li>
        </ul>
    </nav>
    <!-- CARD PROFILE -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">

                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">User Profile<h2>
                                <!-- IMAGE HOLDER -->
                                <div class="text-center mb-4">
                                    <img src="<?php echo './uploads/' . $fileName; ?>" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                                </div>
                                <!-- LIST -->
                                <ul class="list-group list-group-flush">
                                    <?php foreach ($accounts as $key => $value) { ?>
                                        <li class="list-group-item fs-6 fw-light">
                                            <?php echo ucfirst($key); ?>: <?php echo $value; ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>