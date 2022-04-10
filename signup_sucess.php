<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php
    if ($query ?? '') {
        echo "<div class='form  col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto'>
    <h3>You are registered successfully.</h3><br />
    <p>Click To Login Now</p>
    <button type='submit' class='btn btn-primary'>
    <a href='./login.php' style='color:white;text-decoration: none;'>Login</a>
    </button>
</div>";
    } else {
        echo "<div class='form  col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto'>
    <h3>Required fields are missing.</h3><br />
    <button type='submit' class='btn btn-primary'>
    <a href='./signup.php' style='color:white;text-decoration: none;'>Signup</a>
    </button>
</div>";
    }
    ?>
</body>

</html>