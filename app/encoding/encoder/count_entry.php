<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

function count_entry($q) {
    global $conn;
    $query = mysqli_query($conn, $q);
    $num = mysqli_num_rows($query);
    if ($num > 0) {
        return $num;
    } else {
        return 0;
    }
}
function count_fams() {
    global $conn, $form_id;
    $queryString = "SELECT MAX(nucfam) AS numfam FROM hpq_mem WHERE form_id = $form_id";
    $query = mysqli_query($conn, $queryString);
    $num = mysqli_num_rows($query);

    if ($num > 0) {

        $row = mysqli_fetch_array($query);

        return $row["numfam"];
    } else {

        return 0;
    }
}

if (isset($_POST["formID"])) {

    $returnData = array(
        "families" => count_fams(),
        "members" => count_entry("SELECT id FROM hpq_mem WHERE form_id = $form_id"),
        "deceased" => count_entry("SELECT id FROM hpq_death WHERE form_id = $form_id"),
        "ofw" => count_entry("SELECT id FROM hpq_mem WHERE form_id = $form_id AND ofwind = 1"),
        "pregnant" => count_entry("SELECT id FROM hpq_mem WHERE form_id = $form_id AND sdg_pregind = 1"),
        "uniparent" => count_entry("SELECT id FROM hpq_mem WHERE form_id = $form_id AND uniparind = 1"),
        "pwd" => count_entry("SELECT id FROM hpq_mem WHERE form_id = $form_id AND pwdind = 1"),
    );

    echo json_encode($returnData);
}
