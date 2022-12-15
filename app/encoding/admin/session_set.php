<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["_action"])) {

    $action = $_POST["_action"];

    if ($action == 'set') {
        if (isset($_SESSION["hpq_id"])) {
            echo $_SESSION["hpq_id"];
        } else {
            $_SESSION["hpq_id"] = protect($_POST["_id"]);
        }
    } else {
        unset($_SESSION["hpq_id"]);
    }
}
