<?php

session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header('location:code.php');
}
echo $user

?>
<a href="logout.php">Log out</a>