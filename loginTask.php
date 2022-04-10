<?php
include_once "config.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
session_start();

if (!$connection) {
    throw new Exception("connection failed");
} else {
    $action = $_POST['action'] ?? '';
    if (!$action) {
        header("Location:index.php");
        die();
    } else {
        $username = $_POST['uname'];
        $password = $_POST['password'];
        if ($username && $password) {
            $query   = "SELECT * FROM `registration` WHERE username='$username'
            AND password='" . md5($password) . "'";
            $result = mysqli_query($connection, $query);
            // $rows = mysqli_num_rows($result);
            // if ($rows == 1) {
            //     $_SESSION['username'] = $username;
            //     header("Location: ./add.php");
            // } else {
            //     echo "<div class='form'>
            //           <h3>Incorrect Username/password.</h3><br/>
            //           <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
            //           </div>";
            // }
            include_once './login_sucess.php';
        }
    }
}
