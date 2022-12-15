<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["mem_data"])) {

    $memData = $_POST["mem_data"];
    $mem_id = $memData["id"];
    $key_pos = 0;
    $cell_values = "";

    foreach ($memData as $key => $value) {
        $key_pos++;
        if ($key_pos != count($memData)) {
            $cell_values .= $key . "='" . protect($value) . "', ";
        } else {
            $cell_values .= $key . "='" . protect($value) . "'";
        }
    }

    $mem_update = "UPDATE IGNORE hpq_mem SET $cell_values WHERE id = $mem_id";

    mysqli_query($conn, $mem_update);

    if (mysqli_affected_rows($conn) > 0) {

        $returnArray = array("error" => false, "response_code" => "0", "response" => "Data updated");

        echo json_encode($returnArray);
    } else if (mysqli_error($conn)){

        $returnArray = array("error" => true, "response_code" => "2", "response" => mysqli_error($conn));

        echo json_encode($returnArray);
    } else {

        $returnArray = array("error" => false, "response_code" => "1", "response" => "No changes made");

        echo json_encode($returnArray);
    }
}