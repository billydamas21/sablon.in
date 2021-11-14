<?php require '../backend/LoginProccess.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sablon.in</title>
    <link rel="stylesheet" href="../../assets/manual/libraries/bootstrap/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/manual/styles/main.css" />
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="#">
                <img src="../../assets/manual/images/sablonin.png" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="Home.php">Home</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    <!-- Login -->
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <br>
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang !</h1>
                                        <br>
                                    </div>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="user">
                                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                            <input type="text" class="form-control form-control-user" name="username" id="username" aria-describedby="emailHelp" placeholder="Username" value="<?php echo $username; ?>" required>
                                            <span class="help-block text-danger"><?php echo $username_err; ?></span>
                                        </div>
                                        <div class=" form-group mb-3 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password" required>
                                            <span class="help-block text-danger"><?php echo $password_err; ?></span>
                                        </div>
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Login">
                                            Login</button>
                                        <br><br>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/manual/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="../../assets/manual/libraries/bootstrap/js/bootstrap.js"></script>
</body>

</html>