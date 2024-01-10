<?php
session_start();

// Удаление всех данных сессии
session_unset();
session_destroy();

// Перенаправление на страницу входа или на другую страницу
header("Location: /pages/login.php");
exit();
?>