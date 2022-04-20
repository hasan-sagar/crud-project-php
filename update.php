<?php
//$query = "UPDATE addtodo SET title = '$title', date = '$date' WHERE id ={ $id}";
include_once "config.php";
$id = $_GET['id'] ?? '';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    throw new Exception("Error Connection");
} else {
    $action = $_POST['action'] ?? '';
    $title = $_POST['title'] ?? '';
    $time = $_POST['time'] ?? '';
    if ($title && $time) {
        $updatequery = "UPDATE addtodo SET title = '$title', date = '$time' WHERE id = $id";
        $con = mysqli_query($connection, $updatequery);
        header("Location:todoShow.php");
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TODO - login</title>
    <style>
        input {
            width: 40%;
            height: 50px;
        }
    </style>
</head>

<body>
    <?php
    include_once "./index.php";
    ?>
    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
        <h1 class="text-center">
            Update Form
        </h1>
        <form method="POST">
            <div class="mb-3 ">
                <label for="title" class="form-label">Update Task Title</label>
                <input type="text" class="form-control" id="exampleInputText1" name="title">
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Update Task Time</label>
                <input type="date" class="form-control" id="exampleInputText1" name="time">
            </div>
            <input type="hidden" name="action" value="add">
            <button type="submit" class="btn btn-primary" onclick="return confirm('Update Todo?')">Update Tasks</button>

        </form>

</body>

</html>