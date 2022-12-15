<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["_id"])) {

    $userID = $_POST["_id"];

    $query = mysqli_query($conn, "SELECT id, last_name, first_name, mid_name, username, cpnumber, birth_date, brgy, access_level, stat FROM users WHERE id = $userID");

    $returnArr = array();

    while ($row = mysqli_fetch_assoc($query)) {

        $returnArr = $row;

    }

    echo json_encode($returnArr);

}
