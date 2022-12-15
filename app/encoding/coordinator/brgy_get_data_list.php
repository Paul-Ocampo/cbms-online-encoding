<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (count($_POST) > 0) {

    $query = mysqli_query($conn, "SELECT * FROM brgy_data");

    $returnArr = array();

    while ($row = mysqli_fetch_assoc($query)) {

        $returnArr[] = $row;
    }

    echo json_encode($returnArr);

}
