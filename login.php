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
    include_once "./index.php"
    ?>
    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
        <h1 class="text-center">
            Log In Form
        </h1>
        <form method="POST" action="./loginTask.php">
            <div class="mb-3 ">
                <label for="uname" class="form-label">Username</label>
                <input type="text" class="form-control" name="uname" id="exampleInputText1">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">

            </div>
            <input type="hidden" name="action" value="add">
            <button type="submit" class="btn btn-primary">LogIn</button>
        </form>
    </div>

</body>

</html>