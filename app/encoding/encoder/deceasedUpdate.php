<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["deceased_id"])) {

    $json = $_POST['str'];
    $obj = json_decode($json, TRUE);
    $deceasedID = protect($_POST["deceased_id"]);
    $hpq_id = protect($_POST["hpq_id"]);

    foreach ($obj as $key => $value) {

        $cell_values .= $key . "='" . protect($value) . "', ";
        
    }

    $query = str_replace(',  WHERE', ' WHERE', "UPDATE hpq_death SET hpq_id = '$hpq_id', $cell_values WHERE id = $deceasedID");

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {

        echo "Process complete with query: '$query'";

    }
}
