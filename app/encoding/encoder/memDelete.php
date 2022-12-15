<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if ($_POST["mem_id"] != "") {

    $mem_id = $_POST["mem_id"];

    $query = mysqli_query($conn, "DELETE FROM hpq_mem WHERE id = $mem_id");
    $num = mysqli_num_rows($query);

    if (mysqli_affected_rows($conn) > 0) {

        echo "deleted";

    }
}
