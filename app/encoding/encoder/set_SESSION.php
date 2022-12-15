<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["formID"])) {

    $_SESSION["form_id"] = protect($_POST["formID"]);

    echo $_SESSION["form_id"];

}