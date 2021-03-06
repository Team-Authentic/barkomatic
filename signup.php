<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Barkomatic - Signup</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/default-assets/signup-custom.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body class="register mt-10 p-0">
    <div class="alert alert-success lead" role="alert" id="alert">
        <span id="res-icon"></span>
        <span id="res-message"></span>
    </div>
    <div class="container-fluid rounded">
        <div class="row">
            <div class="col-md-3 register-left">
                <a href="index.php">
                    <img src="img/core-img/logoq.png" alt="" width="600">
                </a>
                <h3>Welcome</h3>
                <a href="login.php"> <input type="button" value="Login"></a>
                <br>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Passenger</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Shipping</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- Apply as a Passenger Start -->
                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form id="register-form">
                            <h3 class="register-heading display-6">Apply as Passenger.</h3>
                            <div class="row register-form container-fluid">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mi" id="mi" class="form-control" placeholder="MI *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="" disabled selected>Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="" disabled selected>Select</option>
                                            <option value="Adult">Adult</option>
                                            <option value="Minor">Minor</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="uname" id="uname" class="form-control" placeholder="Username *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="password" id="password" class="form-control" placeholder="Password *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm Password *" value="" required>
                                    </div>
                                    <a href="index.php"><input type="button" class="btnRegister text-center float-left mt-auto bg-light text-dark border border-dark" value="Back"></a>
                                    <input type="submit" name="register" class="btnRegister mt-auto" value="Register" id="register">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Apply as a Passenger End -->

                    <!-- Apply as a Company Start -->
                    <div class="tab-pane fade-out active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form id="signup-form">
                            <h3 class="register-heading display-6">Apply as Shipping Line Owner.</h3>
                            <div class="row register-form container-fluid">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="scn" id="scn" class="form-control" placeholder="Shipping Company Name *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email-shipping" class="form-control" placeholder="Email *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="uname" id="uname-shipping" class="form-control" placeholder="Username *" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group ">
                                        <input type="password" name="pass" id="pass-shipping" class="form-control " placeholder="Password *" required>
                                    </div>
                                    <div class="form-group ">
                                        <input type="password" name="cpass" id="cpass-shipping" class="form-control " placeholder="Confirm Password *" required>
                                    </div>
                                    <a href="index.php"><input type="button" class="btnRegister text-center float-left mt-auto bg-light text-dark border border-dark" value="Back"></a>
                                    <input type="submit" class="btnRegister text-center mt-auto" name="signup" id="signup" value="Signup">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Apply as a Company End -->
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/default-assets/pricing/jquery-1.10.2.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/default-assets/apply/signup.js"></script>
</body>

</html>