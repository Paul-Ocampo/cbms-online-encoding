<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["_id"])) {

    $prog_id = protect($_POST["_id"]);

    $query = mysqli_query($conn, "DELETE
                                        prog_table,
                                        mem_ref_table
                                FROM
                                        hpq_prog as prog_table
                                INNER JOIN hpq_mem_ref as mem_ref_table on prog_table.hpq_id = mem_ref_table.hpq_id
                                WHERE prog_table.hpq_id = '$prog_id'");

    if (mysqli_affected_rows($conn) > 0) {

        $returnArray = array("error" => false, "response_code" => "0", "response" => "Data deleted");

        echo json_encode($returnArray);
    } else if (mysqli_error($conn)) {

        $returnArray = array("error" => true, "response_code" => "2", "response" => mysqli_error($conn));

        echo json_encode($returnArray);
    } else {

        $returnArray = array("error" => false, "response_code" => "1", "response" => "No changes made");

        echo json_encode($returnArray);
    }
}
