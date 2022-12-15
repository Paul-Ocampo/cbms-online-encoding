<?php

if (isset($_SESSION["access_level"]) && $_SESSION["access_level"] == 2) {

} else if (isset($_SESSION["access_level"]) && $_SESSION["access_level"] != 2) {

    switch ($_SESSION["access_level"]) {
        case 1:
            header("Location: {$home_url}admin/index.php");
            break;
        case 2:
            header("Location: {$home_url}encoder/index.php");
            break;
    }

} elseif (!isset($_SESSION["access_level"])) {

    header("Location: {$home_url}index.php");

}
