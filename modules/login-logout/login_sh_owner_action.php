<?php
require "../../resources/config.php";

if(isset($_POST['action']) && $_POST['action'] == 'login-showner-btn') {
    session_start();
    ShippingOnwer($con);
}

function ShippingOnwer($con) {
    $email = $_POST['email_sh_owner'];
    $pass = sha1($_POST['password_sh_owner']);
    if($stmt = mysqli_prepare($con, "SELECT shipping_name,profile_image,username,password FROM shipping_owner WHERE email=?")) {
        mysqli_stmt_bind_param($stmt, 's', $email);
        if(mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $shipping_name, $profile_image, $username,$password);
                if(mysqli_stmt_fetch($stmt)) {
                    if($pass == $password) {
                        $_SESSION['shipping_name'] = $shipping_name;
                        $_SESSION['profile_image'] = $profile_image;
                        $_SESSION['username'] = $username;
                        echo "Login Successfully!";
                    } else {
                        echo "Login failed! Please check your email and password.";
                    }
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
}