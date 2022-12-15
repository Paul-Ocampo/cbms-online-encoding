<?php

include_once '../config/core.php';

if (isset($_POST)) {

    echo $_SESSION["username"];
}
