<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["brgy_data"])) {

    $formData = $_POST["brgy_data"];
    $_id = $formData["id"];
    $key_pos = 0;
    $cell_values = "";

    foreach ($formData as $key => $value) {
        $key_pos++;
        if ($key_pos != count($formData)) {
            $cell_values .= $key . "='" . protect($value) . "', ";
        } else {
            $cell_values .= $key . "='" . protect($value) . "'";
        }
    }

    $query = "UPDATE brgy_data SET $cell_values WHERE id = $_id";

    mysqli_query($conn, $query);

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
