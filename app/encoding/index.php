<?php

if (isset($_SESSION["access_level"])) {

    switch ($_SESSION["access_level"]) {
        case 0:
            header("Location: app/encoding/admin/index.php");
            break;
        case 1:
            header("Location: app/encoding/coordinator/index.php");
            break;
        case 2:
            header("Location: app/encoding/encoder/index.php");
            break;
    }

}else{
    header("Location: main/index.php");
}