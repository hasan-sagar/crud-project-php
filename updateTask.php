<?php
// include_once "config.php";
// $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// $getId = $_GET['id'] ?? '';

// if (!$connection) {
//     throw new Exception("connection failed");
// } else {
//     $action = $_POST['action'] ?? '';
//     if (!$action) {
//         header("Location:index.php");
//     } else {
//         $title = $_POST['title'];
//         $date = $_POST['time'];
//         if ($title && $date) {
//             $query = "UPDATE addtodo SET title = '$title', date = '$date' WHERE id = $getId";
//             mysqli_query($connection, $query);
//         }
//         header('location:todoShow.php');
//     }
// }
include_once "config.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$id = $_GET['id'] ?? '';

if (!$connection) {
    throw new Exception("connection failed");
} else {
    $action = $_POST['action'] ?? '';
    $title = $_POST['title'];
    $date = $_POST['time'];
    if ($title && $date) {
        $query = "UPDATE addtodo SET title = '$title', date = '$date' WHERE id ={ $id}";
        $con = mysqli_query($connection, $query);
        header('location:todoShow.php');
    }
}
