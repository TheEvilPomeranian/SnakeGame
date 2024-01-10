<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "SnakeGame";

$connect = mysqli_connect($host, $user, $password, $database);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}