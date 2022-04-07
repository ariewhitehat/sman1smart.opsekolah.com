<?php
session_start();
include_once('config.php');

$databases = new databases();

if (isset($_SESSION['is_signin'])) {
    header('location:dasboard.php');
}

if (isset($_COOKIE['whitehat_email'])) {
    $databases->resignin($_COOKIE['whitehat_email']);
    header('location:whitehat/');
}

if (isset($_POST['signin'])) {
    $username = $_POST['whitehat_email'];
    $password = $_POST['whitehat_password'];

    if (isset($_POST['remember'])) {
        $remember = TRUE;
    } else {
        $remember = FALSE;
    }

    if ($databases->signin($username, $password, $remember)) {
        header('location:dasboard.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel - SMAN 1 SMART</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
</head>

<body class="bg-dark">
    <main>
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <!-- <div class="col col-lg-2"></div> -->
                <div class="col-md-auto">
                    <div class="card">
                        <div class="card-header pt-3">
                            <div class="text-center">
                                <img src="../assets/img/Logo.png" width="80">
                                <h1 class="h4">Control Panel administrator</h1>
                                <p class="lead">SMAN 1 Sumber Marga Telang</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" class="need-validation" novalidate>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="whitehat_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="whitehat_password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rememberme">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary" name="signin">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="col col-lg-2"></div> -->
            </div>
        </div>
        </div>
    </main>

</body>

</html>