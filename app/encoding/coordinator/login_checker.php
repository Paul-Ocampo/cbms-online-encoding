<?php

if (isset($_SESSION["access_level"]) && $_SESSION["access_level"] != 1) {

    switch ($_SESSION["access_level"]) {
        case 1:
            header("Location: {$home_url}coordinator/index.php");
            break;
        case 2:
            header("Location: {$home_url}encoder/index.php");
            break;
    }

} elseif (!isset($_SESSION["access_level"])) {

    header("Location: {$home_url}index.php");
}
