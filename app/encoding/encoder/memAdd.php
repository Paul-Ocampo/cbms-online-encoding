<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (count($_POST) > 0) {

    $json = $_POST['str'];
    $obj = json_decode($json, TRUE);

    $keys = array();
    $values = array();

    foreach ($obj as $key => $value) {

        array_push($keys, $key);
        array_push($values, protect($value));
        
    }

    $col_headers = join(", ", $keys);
    $cell_values = join("', " . "'", $values);
    $form_id = $_SESSION["form_id"];

    $query = "INSERT INTO hpq_mem (id, form_id," . $col_headers . ")
                  VALUES ('', '$form_id','" . $cell_values . "')";

    mysqli_query($conn, $query);

    echo "ok";
}
