<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST)) {

    $entryID = $_POST["id"];
    $tableName = $_POST["tableName"];

    if ($_POST["tableName"] == "hpq_main") {

        $queryStr = "DELETE FROM hpq_main WHERE form_id = $entryID";

        $checkmem = mysqli_query($conn, "SELECT id FROM hpq_mem WHERE form_id = $entryID");
        $checkdeceased = mysqli_query($conn, "SELECT id FROM hpq_death WHERE form_id = $entryID");

        $memCount = mysqli_num_rows($checkmem);
        $deceasedCount = mysqli_num_rows($checkdeceased);

        if ($memCount > 0) {
            mysqli_query($conn, "DELETE FROM hpq_mem WHERE form_id = $entryID");
        }
        if ($deceasedCount > 0) {
            mysqli_query($conn, "DELETE FROM hpq_death WHERE form_id = $entryID");
        }
    } else {

        $queryStr = "DELETE FROM $tableName WHERE id = $entryID";
    }

    mysqli_query($conn, $queryStr);

    if (mysqli_affected_rows($conn) > 0) {

        echo "deleted";
    } else {

        echo $entryID;
    }
}
