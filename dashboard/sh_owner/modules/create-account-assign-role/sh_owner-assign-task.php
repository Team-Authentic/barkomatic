<?php 
require "../../resources/config.php";

// POST METHOD - REGISTER
if(isset($_POST['action']) && $_POST['action'] == 'sh_owner_assign_role') {
    AssRoleCreateAccount($con);
}

function AssRoleCreateAccount($con) {
    $nar = CheckInput($_POST['name_assign_role']);
    $email = CheckInput($_POST['email_assign_role']);
    $rtsr = CheckInput($_POST['role_type_assign_role']);
    $dar = CheckInput($_POST['description_assign_role']);
    $uar = CheckInput(sha1($_POST['username_assign_role']));
    $par = CheckInput(sha1($_POST['password_assign_role']));
    $pcar = CheckInput(sha1($_POST['password_confirmation_assign_role']));

    if($par != $pcar){
        echo 'Password did not match!';
        exit();
    }else{
        $stmt_sql_select_query = $con->prepare("SELECT email FROM tbl_ship_employee_info WHERE email=?");
        $stmt_sql_select_query->bind_param('s', $email);
        $stmt_sql_select_query->execute();
        $result = $stmt_sql_select_query->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);

        if($row['email'] == $email){
            echo 'The email is already exist.';
        } else {
            $stmt_sql_insert_query_1 = $con->prepare("INSERT INTO tbl_ship_employee_info (name,email) VALUES (?,?)");
            $stmt_sql_insert_query_1->bind_param('ss', $nar,$email);
            $stmt_sql_insert_query_1->execute();

            $stmt_sql_insert_query_2 = $con->prepare("INSERT INTO tbl_ship_employee_role (role_type,description) VALUES (?,?)");
            $stmt_sql_insert_query_2->bind_param('ss', $rtsr,$dar);
            $stmt_sql_insert_query_2->execute();

            $stmt_sql_insert_query_3 = $con->prepare("INSERT INTO tbl_ship_employee_account (username,password) VALUES (?,?)");
            $stmt_sql_insert_query_3->bind_param('ss', $uar,$par);
            $stmt_sql_insert_query_3->execute();
            
            echo 'Successfully created an account.';
            $stmt_sql_select_query->close();
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