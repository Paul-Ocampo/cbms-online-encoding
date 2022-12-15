<?php

include_once '../config/core.php';
include_once '../config/database.php';

//if (count($_POST) > 0) {

    $query = mysqli_query($conn, "SELECT * FROM users WHERE access_level != 0");

    $returnArr = array("error" => false);
    $users = array();

    while ($row = mysqli_fetch_assoc($query)) {

        $users[] = $row;

    }

    $returnArr["users"] = $users;
    
    echo json_encode($returnArr);

//}
