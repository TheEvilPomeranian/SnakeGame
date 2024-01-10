<?php
require_once __DIR__ . '/validationHelpers.php';
$username = $_POST["username"];
$userPassword = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];
ClearValidation();
if(empty($username)){
    SetValidationError("name", "Empty Username");
    redirect("/pages/registration.php");
}
if(empty($userPassword)){
    SetValidationError("password", "Empty Password");
    redirect("/pages/registration.php");
}
if(empty($confirmPassword)){
    SetValidationError("confirm_password", "Empty confirm password");
    redirect("/pages/registration.php");
}
if($userPassword != $confirmPassword){
    SetValidationError("confirm_password", "Incorrect confirm password");
    redirect("/pages/registration.php");
}

require_once '../src/connection.php';
$sql = "SELECT COUNT(*) FROM Users WHERE name = '$username'";
$answ = mysqli_query($connect, $sql);
$count = mysqli_fetch_array($answ)[0];
if($count == 0){
    $salt = bin2hex(random_bytes(16));
    $hashedPassword = GeneratePasswordHash($userPassword, $salt);
    $query =  "INSERT INTO Users (name, password_hash, sault) VALUES ('$username','$hashedPassword','$salt')";
    $result = mysqli_query($connect, $query);
    if ($result){
        $_SESSION["user"]["name"] = $username; 
    redirect("/index.php");
    } else{
        echo $query;
    }
}
else{
    SetValidationError("name", "Name already taken");
    redirect("/pages/registration.php");
}
?>