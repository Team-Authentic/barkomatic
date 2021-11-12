
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
    <div class="container register rounded border shadow-lg mt-0 pt-0">
        <div class="row">
            <div class="col-md-12 register-left">
                <a href="index.php">
                    <img src="img/core-img/logoq.png" alt="" width="200" class="mt-0 mb-0" style="width: 150px;">
                </a>
                <h3 class="mb-5">Welcome</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Passenger</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Shipping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#staff" role="tab" aria-controls="staff" aria-selected="true">Staff</a>
                    </li>
                </ul>
                </ul>
                <div class="tab-content container" id="myTabContent">
                    <!-- Login as Passenger Start -->
                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading"><i class="fa fa-lock"></i> Login as <sup class="font-weight-bold lead">Passenger</sup></h3>
                        <div class="alert alert-success lead ml-5 p-2" role="alert" id="alert">
                            <span id="res-icon"></span>
                            <span id="res-message"></span>
                        </div>
                        <div class="row register-form container">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <form id="login-form-passenger">
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-user small"></i></span></div>
                                                </div>
                                                <input type="email" name="email-passenger" id="email-passenger" class="form-control" placeholder="Email *" value="" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-asterisk small"></i></span></div>
                                                </div>
                                                <input type="password" name="password-passenger" id="password-passenger" class="form-control" placeholder="Password *" value="" required>
                                            </div>
                                            <input type="submit" name="login" id="login-passenger" class="btnRegister float-left mt-3 btn btn-sm text-white" value="Login">
                                            <a href="forgot.html" class="">
                                                <input type="button" id="forgot-pass-passenger" class="btnRegister float-left mt-3 btn btn-sm bg-transparent text-dark" value="Forgot password?">
                                            </a>
                                        </form>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-sm-12 text-center">
                                            <p class="lead"><a href="signup.php"><small>Not have an account yet?</small></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Login as Passenger End -->
                     <!-- Login as Shipping Owner Start -->
                     <div class="tab-pane fade-out active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading"><i class="fa fa-lock"></i> Login as <sup class="font-weight-bold lead">Shipping Owner</sup></h3>
                        <div class="alert alert-success lead ml-5 p-2" role="alert" id="alert">
                            <span id="res-icon-showner"></span>
                            <span id="res-message-showner"></span>
                        </div>
                        <div class="row register-form container">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <form id="login-showner-form">
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-user small"></i></span></div>
                                                </div>
                                                <input type="email" name="email_sh_owner" id="email_sh_owner" class="form-control" placeholder="Email *" value="" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-asterisk small"></i></span></div>
                                                </div>
                                                <input type="password" name="password_sh_owner" id="password_sh_owner" class="form-control" placeholder="Password *" value="" required>
                                            </div>
                                            <input type="submit" name="login-showner-btn" id="login-showner-btn" class="btnRegister float-left mt-3 btn btn-sm text-white" value="Login">
                                            <a href="forgot.html" class="">
                                                <input type="button" id="forgot-pass-sh-owner" class="btnRegister float-left mt-3 btn btn-sm bg-transparent text-dark" value="Forgot password?">
                                            </a>
                                        </form>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-sm-12 text-center">
                                            <p class="lead"><a href="signup.php"><small>Not have an account yet?</small></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Login as Shipping Owner End -->
                     <!-- Login as Staff Start -->
                     <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab">
                        <h3 class="register-heading"><i class="fa fa-lock"></i> Login as <sup class="font-weight-bold lead">Staff</sup></h3>
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
                                                <input type="button" id="forgot-pass-sh-owner" class="btnRegister float-left mt-3 btn btn-sm bg-transparent text-dark" value="Forgot password?">
                                            </a>
                                        </form>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-sm-12 text-center">
                                            <p class="lead"><a href="signup.php"><small>Not have an account yet?</small></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Login as Staff End -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/default-assets/pricing/jquery-1.10.2.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/default-assets/login/login_sh_owner.js"></script>
    <script src="js/default-assets/login/login_passenger.js"></script>
</body>

</html>