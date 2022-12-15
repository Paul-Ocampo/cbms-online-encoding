<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if ($_POST["action"] == "updateDashboard") {

    $returnData = array("total_encoded" => count_entries("hpq_main", "encoder = $userID"),
                        "encoded_today" => count_entries("hpq_main", "int_date = '$dateToday' AND encoder = $userID"),
                        "validated_hpq" => count_entries("hpq_main", "hpq_stat = 2 AND encoder = $userID"),
                        "incomplete_hpq" => count_entries("hpq_main", "hpq_stat = 0 AND encoder = $userID"));

                        echo json_encode($returnData);

}