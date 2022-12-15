<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (count($_POST) > 0) {

    $form_id = protect($_POST["formID"]);

    $query = mysqli_query($conn, "SELECT * FROM hpq_mem WHERE form_id = $form_id");

    $returnArr = array();

    while ($row = mysqli_fetch_assoc($query)) {

        $returnArr[] = $row;
    }

    echo json_encode($returnArr);
}
