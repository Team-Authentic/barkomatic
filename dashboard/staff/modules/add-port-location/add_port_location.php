<?php
require "../../resources/config.php";

// POST METHOD - REGISTER
if(isset($_POST['action']) && $_POST['action'] == 'port_location_form') {
    AddPortLocation($con);
}

function AddPortLocation($con) {
    $pl1 = CheckInput($_POST['port_location_1']);
    $pl2 = CheckInput($_POST['port_location_2']);

    $stmt_sql_insert_query = $con->prepare("INSERT INTO tbl_ship_port (port_location_from,port_location_to) VALUES (?,?)");
    $stmt_sql_insert_query->bind_param('ss', $pl1,$pl2);
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