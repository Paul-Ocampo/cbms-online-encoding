<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST)) {

    $hpq_id = $_POST["hpq_id"];

    $queryStr = "DELETE FROM hpq_main WHERE hpq_id = '$hpq_id'";

    mysqli_query($conn, $queryStr);

    if (mysqli_affected_rows($conn) > 0) {

        $returnArray = array("error" => false, "response_code" => "0", "response" => "Data deleted");

        echo json_encode($returnArray);
    } else if (mysqli_error($conn)){

        $returnArray = array("error" => true, "response_code" => "2", "response" => mysqli_error($conn));

        echo json_encode($returnArray);
    } else {

        $returnArray = array("error" => false, "response_code" => "1", "response" => "No changes made");

        echo json_encode($returnArray);
    }
}
