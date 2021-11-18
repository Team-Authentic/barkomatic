<?php
require "../../resources/config.php";

// POST METHOD - ADD
if(isset($_POST['action']) && $_POST['action'] == 'accomodation-type-frm') {
    AddAccomodationType($con);
}

function AddAccomodationType($con) {
    $an = CheckInput($_POST['accomodation_name']);
    $atst = CheckInput($_POST['accomodation-type-seat-type']);
    $ata = CheckInput($_POST['accomodation-type-aircon']);
    $atp = CheckInput($_POST['accomodation-type-price']);

    $stmt_sql_insert_query = $con->prepare("INSERT INTO tbl_ship_accomodation_type (accomodation_name,seat_type,aircon,price) VALUES (?,?,?,?)");
    $stmt_sql_insert_query->bind_param('sssd',$an,$atst,$ata,$atp);
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
