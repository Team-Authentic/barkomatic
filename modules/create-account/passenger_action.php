<?php
require "../../resources/config.php";

// POST METHOD - REGISTER
if(isset($_POST['action']) && $_POST['action'] == 'register') {
    RegisterUser($con);
}

function RegisterUser($con) {
    $name = CheckInput($_POST['fname']);
    $lname = CheckInput($_POST['lname']);
    $pass = CheckInput(sha1($_POST['pass']));
    $cpass = CheckInput(sha1($_POST['cpass']));
    $email = CheckInput($_POST['email']);
    $telephone = CheckInput($_POST['tel']);
    $answer = CheckInput($_POST['answer']);
    $gender = $_POST['gender'];
    $uname = CheckInput($_POST['uname']);
    $created_at = date('Y-m-d');
    if($pass != $cpass){
        echo 'Password did not match!';
        exit();
    }else{
        $stmt_sql_select_query = $con->prepare("SELECT email,username FROM passenger WHERE email=? OR username=?");
        $stmt_sql_select_query->bind_param('ss', $email,$uname);
        $stmt_sql_select_query->execute();
        $result = $stmt_sql_select_query->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($row['email'] == $email){
            echo 'The email is already exist! Please try another.';
        }else if($row['username'] == $uname){
            echo 'The username is already exist! Please try another.';
        }else{
            $stmt_sql_insert_query = $con->prepare("INSERT INTO passenger (first_name,last_name,email,phone,password,security_question,gender,username,created_at) VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt_sql_insert_query->bind_param('sssisssss', $name,$lname,$email,$telephone,$pass,$answer,$gender,$uname,$created_at);
            $stmt_sql_insert_query->execute();
            $stmt_sql_select_query->close();
            echo 'Registered Successfully.';
        }
    }
}

// REMOVE SPECIAL CHARS - to avoid sql injection
function CheckInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}