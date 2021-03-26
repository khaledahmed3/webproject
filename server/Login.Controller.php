<?php
require_once "DatabaseConnection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($link, "SELECT * FROM `users` WHERE username='$username' and password='$password'");

if ($result->num_rows > 0) {
    foreach ($result as $key => $value) {
        session_start();
        $_SESSION['user'] = $value;
        header("Location: /authentication/welcome.html");
    }
} else {
    header("Location: /authentication");
}
