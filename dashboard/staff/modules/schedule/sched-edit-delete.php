<?php
require "../../resources/config.php";

// POST METHOD - Edit
if(isset($_POST['action']) && $_POST['action'] == 'sched-edit-frm') {
    EditSchedule($con);
}

// POST METHOD - Delete
if(isset($_POST['action']) && $_POST['action'] == 'sched-delete-frm') {
    DeleteSchedule($con);
}

function EditSchedule($con) {
    $sched_edit_id = CheckInput($_POST['sched-edit-id']);
    $d = CheckInput($_POST['event-start-date']);
    $dt = CheckInput($_POST['depart-time']);
    $spl1 = CheckInput($_POST['sched-port-loc-1']);
    $spl2 = CheckInput($_POST['sched-port-loc-2']);

    $stmt_sql_update_query = $con->prepare("UPDATE tbl_ship_schedule SET date=?,time=?,port_location_1=?,port_location_2=? WHERE id=?");
    if($stmt_sql_update_query) {
        mysqli_stmt_bind_param($stmt_sql_update_query,'ssssi',$d,$dt,$spl1,$spl2,$sched_edit_id);
        if(mysqli_stmt_execute($stmt_sql_update_query)) {
            echo 'Save successfully.';
            mysqli_stmt_close($stmt_sql_update_query);
        } else {
            exit();
        }
    }
    
}

function DeleteSchedule($con) {
    $sched_delete_id = CheckInput($_POST['sched_delete_id']);

    $stmt_sql_delete_query = $con->prepare("DELETE FROM tbl_ship_schedule WHERE id=?");
    if($stmt_sql_delete_query) {
        mysqli_stmt_bind_param($stmt_sql_delete_query,'i',$sched_delete_id);
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