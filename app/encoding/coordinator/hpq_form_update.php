<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["form_data"])) {

    $formData = $_POST["form_data"];
    $form_id = $formData["id"];
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

    $form_update = "UPDATE IGNORE hpq_main SET $cell_values WHERE id = $form_id";

    mysqli_query($conn, $form_update);

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