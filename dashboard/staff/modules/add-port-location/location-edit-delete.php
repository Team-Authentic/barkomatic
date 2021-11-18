<?php
require "../../resources/config.php";

// POST METHOD - Edit
if(isset($_POST['action']) && $_POST['action'] == 'location-edit-frm') {
    EditPortLocation($con);
}

// POST METHOD - Delete
if(isset($_POST['action']) && $_POST['action'] == 'location-delete-frm') {
    DeletePortLocation($con);
}

function EditPortLocation($con) {
    $edit_id = CheckInput($_POST['edit_id']);
    $pl1 = CheckInput($_POST['port-edit-location-1']);
    $pl2 = CheckInput($_POST['port-edit-location-2']);

    $stmt_sql_update_query = $con->prepare("UPDATE tbl_ship_port SET port_location_from=?,port_location_to=? WHERE id=?");
    if($stmt_sql_update_query) {
        mysqli_stmt_bind_param($stmt_sql_update_query,'ssi',$pl1,$pl2,$edit_id);
        if(mysqli_stmt_execute($stmt_sql_update_query)) {
            echo 'Save successfully.';
            mysqli_stmt_close($stmt_sql_update_query);
        } else {
            exit();
        }
    }
    
}

function DeletePortLocation($con) {
    $delete_id = CheckInput($_POST['delete_id']);

    $stmt_sql_delete_query = $con->prepare("DELETE FROM tbl_ship_port WHERE id=?");
    if($stmt_sql_delete_query) {
        mysqli_stmt_bind_param($stmt_sql_delete_query,'i',$delete_id);
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