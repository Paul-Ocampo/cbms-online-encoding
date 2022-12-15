<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["prog_data"])) {

    $progData = $_POST["prog_data"];
    $prog_id = $progData["id"];
    $hpq_id = $progData["hpq_id"];
    $pindex = $progData["pindex"];
    $key_pos = 0;
    $cell_values = "";

    foreach ($progData as $key => $value) {
        $key_pos++;
        if ($key != "hpq_mem_ref") {
            if ($key_pos != (count($progData) - 1)) {
                $cell_values .= $key . "='" . protect($value) . "', ";
            } else {
                $cell_values .= $key . "='" . protect($value) . "'";
            }
        }
    }

    mysqli_query($conn, "DELETE FROM hpq_mem_ref WHERE hpq_id = '$hpq_id' AND pindex = '$pindex'");

    foreach ($progData["hpq_mem_ref"] as $key => $val) {
        $ref_insert = "INSERT IGNORE INTO hpq_mem_ref (id, hpq_id, pindex, hpq_mem_ref_num) 
                            VALUES ('', '" . $hpq_id . "', '" . $progData["pindex"] . "', '" . $val . "')";

        mysqli_query($conn, $ref_insert);
    }

    $prog_update = "UPDATE hpq_prog SET $cell_values WHERE id = $prog_id";

    mysqli_query($conn, $prog_update);

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
