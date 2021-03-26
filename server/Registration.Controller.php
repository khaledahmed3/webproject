<?php
require_once "DatabaseConnection.php";

$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($link, "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')");
header("Location: /authentication");
