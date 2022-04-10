<?php
session_start();
include_once "config.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    throw new Exception("connection failed");
} else {
    $action = $_POST['action'] ?? '';
    if (!$action) {
        header("Location:index.php");
        die();
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $password = md5($pass);
        if ($username && $email && $password) {

            $query    = "INSERT into `registration` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
            mysqli_query($connection, $query);
            // header("Location:index.php?added=true");
            include_once './signup_sucess.php';
        }
    }
}
