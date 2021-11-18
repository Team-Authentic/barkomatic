<?php
require "../../resources/config.php";

// POST METHOD - REGISTER
if(isset($_POST['action']) && $_POST['action'] == 'add-schedule-frm') {
    AddPortLocation($con);
}

function AddPortLocation($con) {
    $dt = date('h:i A', strtotime($_POST['depart-time']));
    $d = date('m-d-Y', strtotime($_POST['event-start-date']));
    $spl1 = CheckInput($_POST['sched-port-loc-1']);
    $spl2 = CheckInput($_POST['sched-port-loc-2']);

    $stmt_sql_insert_query = $con->prepare("INSERT INTO tbl_ship_schedule (date,time,port_location_1,port_location_2) VALUES (?,?,?,?)");
    $stmt_sql_insert_query->bind_param('ssss', $d,$dt,$spl1,$spl2);
    $stmt_sql_insert_query->execute();
    $stmt_sql_insert_query->close();
    echo 'Added Successfully.';
}

// REMOVE SPECIAL CHARS - to avoid sql injection
function CheckInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}