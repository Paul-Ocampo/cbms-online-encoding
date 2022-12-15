<?php

if (isset($_SESSION["access_level"])) {

    switch ($_SESSION["access_level"]) {
        case 0:
            header("Location: {$home_url}admin/index.php");
            break;
        case 1:
            header("Location: {$home_url}coordinator/index.php");
            break;
        case 2:
            header("Location: {$home_url}encoder/index.php");
            break;
    }

}