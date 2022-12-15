<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';

if (isset($_SESSION["hpq_id"])) {

    $hpq_id = $_SESSION["hpq_id"];

    $query = mysqli_query($conn, "SELECT * FROM hpq_death WHERE hpq_id = '$hpq_id'");

    $returnArr = array();

    while ($row = mysqli_fetch_assoc($query)) {

        $returnArr[] = $row;
    }

    echo json_encode($returnArr);
}
