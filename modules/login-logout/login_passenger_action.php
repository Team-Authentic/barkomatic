<?php
require "../../resources/config.php";

// POST login
if(isset($_POST['action']) && $_POST['action'] == 'login_passenger') {
    session_start();
    ShippingOnwer($con);
}

function ShippingOnwer($con) {
    $email = $_POST['email-passenger'];
    $password = sha1($_POST['password-passenger']);
    $stmt_sql_login_query = $con->prepare("SELECT * FROM passenger WHERE email=? AND password=?");
    $stmt_sql_login_query->bind_param('ss', $email,$password);
    $stmt_sql_login_query->execute();
    $owner = $stmt_sql_login_query->fetch();
    $stmt_sql_login_query->close();

    //$owner_name = $owner['shipping_name'];
    if($owner != NULL){
        //$_SESSION['shipping_name'] = $owner_name;
        //$_SESSION['password'] = $password;
        // userLogs($username,$password,$con);
        // rememberMe($username,$password);
        echo "Login Successfully!";
    }else{
        echo 'Login failed! Please check your username and password!';
        exit();
    }
}