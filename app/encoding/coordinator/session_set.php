<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["_id"])) {

    $_SESSION["hpq_id"] = protect($_POST["_id"]);

    echo $_SESSION["hpq_id"];

}