<?php
require "../../resources/config.php";

// POST METHOD - Edit
if(isset($_POST['action']) && $_POST['action'] == 'accomodation-type-edit-frm') {
    EditAccomodationType($con);
}

// POST METHOD - Delete
if(isset($_POST['action']) && $_POST['action'] == 'accomodation-type-delete-frm') {
    DeleteAccomodationType($con);
}

function EditAccomodationType($con) {
    $aei = CheckInput($_POST['accomodation_edit_id']);
    $an = CheckInput($_POST['accomodation_name']);
    $st = CheckInput($_POST['seat_type']);
    $ar = CheckInput($_POST['aircon']);
    $p = CheckInput($_POST['price']);

    $stmt_sql_update_query = $con->prepare("UPDATE tbl_ship_accomodation_type SET accomodation_name=?,seat_type=?,aircon=?,price=? WHERE id=?");
    if($stmt_sql_update_query) {
        mysqli_stmt_bind_param($stmt_sql_update_query,'sssdi',$an,$st,$ar,$p,$aei);
        if(mysqli_stmt_execute($stmt_sql_update_query)) {
            echo 'Save successfully.';
            mysqli_stmt_close($stmt_sql_update_query);
        } else {
            exit();
        }
    }
    
}

function DeleteAccomodationType($con) {
    $accomodation_type_delete_id = CheckInput($_POST['accomodation-type-delete_id']);

    $stmt_sql_delete_query = $con->prepare("DELETE FROM tbl_ship_accomodation_type WHERE id=?");
    if($stmt_sql_delete_query) {
        mysqli_stmt_bind_param($stmt_sql_delete_query,'i',$accomodation_type_delete_id);
        if(mysqli_stmt_execute($stmt_sql_delete_query)) {
            echo 'Deleted successfully.';
            mysqli_stmt_close($stmt_sql_delete_query);
        } else {
            exit();
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