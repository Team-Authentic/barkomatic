<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Barkomatic - Login</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <link rel="stylesheet" href="css/default-assets/signup-custom.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body class="bg-light">
    <div class="container register rounded border shadow-lg">
      
        <div class="row">
            <div class="col-md-3 register-left">
                <a href="index.php">
                    <img src="img/core-img/logoq.png" alt="" width="600">
                </a>
                <h3>Welcome</h3>
                <a href="signup.php"><input type="submit" name="" value="Register"></a>
                <br>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content container" id="myTabContent">
                    <!-- Apply as a Company Start -->
                    <div class="tab-pane fade-out active show container" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading"><i class="fa fa-lock"></i> Login</h3>
                        <div class="alert alert-success lead ml-5 p-2" role="alert" id="alert">
                            <span id="res-icon"></span>
                            <span id="res-message"></span>
                        </div>
                        <div class="row register-form container">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <form id="login-form">
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-user small"></i></span></div>
                                                </div>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email *" value="" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-asterisk small"></i></span></div>
                                                </div>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Password *" value="" required>
                                            </div>
                                            <input type="submit" name="login" id="login" class="btnRegister float-left mt-3 btn btn-sm text-white" value="Login">
                                            <a href="forgot.html" class="">
                                                <input type="button" class="btnRegister float-left mt-3 btn btn-sm bg-transparent text-dark" value="Forgot password?">
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Apply as a Company End -->
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/default-assets/login/login.js"></script>
</body>

</html>