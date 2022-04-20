<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        a {
            text-decoration: none;
        }
    </style>

    <title>TODO - Home </title>
</head>

<body>
    <div class="topbar sticky-top">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="./todoShow.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <h5>TODO APPLICATION</h5>
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./index.php" class="nav-link px-2 link-dark">Home</a></li>
                    <li><a href="./add.php" class="nav-link px-2 link-dark">Add</a></li>

                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2 link"><a href="./login.php">Login</a></button>
                    <button type="button" class="btn btn-primary"><a href="./signup.php" style="color:white">Sign Up</a></button>
                    <button type="button" class="btn btn-danger"><a href="./logout.php" style="color:white">Logout</a></button>
                </div>
            </header>
        </div>
    </div>


</body>

</html>