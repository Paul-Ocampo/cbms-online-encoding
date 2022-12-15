<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_SESSION["hpq_id"])) {

    $hpq_id = $_SESSION["hpq_id"];

    $query_main = mysqli_query($conn, "SELECT * FROM hpq_main WHERE hpq_id = '$hpq_id'");

    $hpq_main[] = mysqli_fetch_assoc($query_main);

    echo json_encode($hpq_main);

}
