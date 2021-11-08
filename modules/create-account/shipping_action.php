<?php
require "../../resources/config.php";

// POST METHOD - REGISTER
if(isset($_POST['action']) && $_POST['action'] == 'signup') {
    SignupShipping($con);
}

function SignupShipping($con) {
    $scn = CheckInput($_POST['scn']);
    $email = CheckInput($_POST['email']);
    $tel = CheckInput($_POST['tel']);
    $pass = CheckInput(sha1($_POST['pass']));
    $cpass = CheckInput(sha1($_POST['cpass']));
    $answer = CheckInput($_POST['answer']);
    $uname = CheckInput($_POST['uname']);
    $created_at = date('Y-m-d');
    if($pass != $cpass){
        echo 'Password did not match!';
        exit();
    }else{
        $stmt_sql_select_query = $con->prepare("SELECT shipping_name,email,phone,username FROM shipping WHERE shipping_name=? OR email=? OR phone=? OR username=?");
        $stmt_sql_select_query->bind_param('ssis', $scn,$email,$tel,$uname);
        $stmt_sql_select_query->execute();
        $result = $stmt_sql_select_query->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($row['shipping_name'] == $scn){
            echo 'The shipping name is already exist! Please try another.';
        }else if($row['email'] == $email){
            echo 'The email is already exist! Please try another.';
        }else if($row['phone'] == $tel) {
            echo 'The mobile number is already exist! Please try another.';
        }else {
            $stmt_sql_insert_query = $con->prepare("INSERT INTO shipping (shipping_name,email,phone,password,securty_question,username,created_at) VALUES (?,?,?,?,?,?,?)");
            $stmt_sql_insert_query->bind_param('ssissss', $scn,$email,$tel,$pass,$answer,$uname,$created_at);
            $stmt_sql_insert_query->execute();
            $stmt_sql_select_query->close();
            echo 'Signup Successfully.';
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