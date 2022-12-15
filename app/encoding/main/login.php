<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';
include_once "../functions/record_login.php";

if (count($_POST) > 0) {

    $username = protect($_POST["username"]);
    $pass = protect($_POST["pword"]);
    $pword = md5($pass);
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' and pword = '$pword'");
    $row = mysqli_fetch_array($result);

    if (is_array($row)) {

        if ($row["stat"] == 0 && $row["access_level"] != 0) {

            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user"] = $row["first_name"] . ' ' .$row["last_name"];
            $_SESSION["logged_in"] = true;
            $_SESSION["username"] = $row["username"];
            $_SESSION["brgy"] = $row["brgy"];
            $_SESSION["access_level"] = $row["access_level"];

            record_log();
            record_login_detail();

            echo "login_success";
        } else if ($row["stat"] == 0 && $row["access_level"] == 0) {

            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user"] = $row["first_name"] . ' ' .$row["last_name"];
            $_SESSION["logged_in"] = true;
            $_SESSION["username"] = $row["username"];
            $_SESSION["access_level"] = $row["access_level"];
            $_SESSION["brgy"] = $row["brgy"];

            record_log();
            record_login_detail();

            echo "login_success";
        } else if ($row["stat"] == 1) {

            echo "not_activated";
        }
    } else {

        echo "invalid_login";
    }
}
