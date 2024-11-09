<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $section = $_POST['section'];
    $department = $_POST['department'];
    $idText = explode('/', $_POST['id']);
}

$id = $idText[1];
$accounts = compact('name', 'gender', 'section', 'department', 'id');

$key = array_keys($accounts);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Accounts Page</title>
</head>

<body>
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

    <table class="table table-striped-columns">
        <!-- HEADER ROW -->
        <tr>
            <?php
            foreach ($key as $k) { ?>
                <th scope="col"><?php echo $k ?></th>
            <?php }
            ?>
        </tr>
        <!-- DATA ROW -->
        <?php
        foreach ($accounts as $account) { ?>
            <td><?php echo $account ?></td>
        <?php }
        ?>
    </table>
</body>

</html>