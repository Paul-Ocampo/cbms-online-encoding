<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["formID"])) {

    $formID = $_POST["formID"];
    $json = $_POST["str"];
    $obj = json_decode($json, TRUE);
    $cell_values = "";
    
    foreach ($obj as $key => $value) {

        $cell_values .= $key . "='" . protect($value) . "', ";

    }
    
    $qryStr = "UPDATE hpq_main SET $cell_values WHERE form_id = $formID";
    $query = str_replace(',  WHERE', ' WHERE', $qryStr);

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {

        echo "Form saved successfully...";

    }else{

        echo "No data was updated...";

    }
}
