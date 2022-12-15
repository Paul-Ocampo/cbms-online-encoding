<?php

function record_log()
{

    global $conn;

    $login_date = date('Y') . "-" . date('m') . "-" . date('d');
    $login_time = date('H:i:s');
    $user_id = $_SESSION["user_id"];
    $acces_level = $_SESSION["access_level"];

    $getLastID = mysqli_query($conn, "SELECT MAX(id) AS LastID FROM users_log;");
    $returnedID = mysqli_fetch_array($getLastID);
    $users_log_ID = $returnedID['LastID'] + 1;

    mysqli_query($conn, "INSERT INTO users_log (id, user_id, login_date, login_time, access_level)
                            VALUES ($users_log_ID, '" . $user_id . "', '" . $login_date . "', '" . $login_time . "', '" . $acces_level . "')");

    $_SESSION["users_log_id"] = $users_log_ID;
}

function record_login_detail()
{

    global $conn;

    $last_activity = date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa')));
    $userID = $_SESSION['user_id'];

    $getLastID = mysqli_query($conn, "SELECT MAX(id) AS LastID FROM login_details;");
    $returnedID = mysqli_fetch_array($getLastID);
    $login_ID = $returnedID['LastID'] + 1;

    mysqli_query($conn, "INSERT INTO login_details (id, user_id, last_activity)
                            VALUES ($login_ID, '" . $userID . "', '" . $last_activity . "')");

    $_SESSION["login_id"] = $login_ID;
}
