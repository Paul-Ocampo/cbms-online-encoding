<?php

$page_title = "Register";

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (count($_POST) > 0) {

    // protect input from possible sql injection
    $last_name = protect($_POST['last_name']);
    $first_name = protect($_POST['first_name']);
    $mid_name = protect($_POST['mid_name']);
    $cpnumber = protect($_POST['cpnumber']);
    $username = protect($_POST['username']);
    $pass = protect($_POST['password']);
    $brgy = protect($_POST['brgy']);
    $access_level = protect($_POST['access_level']);
    $pword = md5($pass);

  if (username_exists($username)) {

    echo "username_exists";
  } elseif (cpnumber_exists($cpnumber)) {

    echo "cpnumber_exists";
  } else {

    $getLastID = mysqli_query($conn, "SELECT MAX(id) AS LastID FROM users;");
    $returnedID = mysqli_fetch_array($getLastID);
    $new_user_ID = $returnedID['LastID'] + 1;

    $query = " INSERT INTO users (id, last_name, first_name, mid_name, username, pword, cpnumber, brgy, access_level, stat)
               VALUES ( $new_user_ID, '" . $last_name . "', '" . $first_name . "', '" . $mid_name . "', '" . $username . "', '" . $pword . "', '" . $cpnumber . "', '" . $brgy . "', '" . $access_level . "', 1)";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {

      $getLatestID = mysqli_query($conn, "SELECT MAX(id) AS LastID FROM users;");
      $latestID = mysqli_fetch_array($getLatestID);
      $lastID = $latestID['LastID'];

      $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$lastID");
      $row = mysqli_fetch_assoc($result);

      $returnArray = array("error" => false, "user" => $row);

      echo json_encode($returnArray);

    } else {

      echo mysqli_error($conn);

    }
  }

}
