<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["mem_id"])) {

    $json = $_POST['str'];
    $obj = json_decode($json, TRUE);
    $memberID = protect($_POST["mem_id"]);
    $hpq_id = protect($_POST["hpq_id"]);

    foreach ($obj as $key => $value) {

        $cell_values .= $key . "='" . protect($value) . "', ";
        
    }

    $query = str_replace(',  WHERE', ' WHERE', "UPDATE hpq_mem SET hpq_id = '$hpq_id', $cell_values WHERE id = $memberID");

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {

        echo "Process complete with query: '$query'";

    }
}
