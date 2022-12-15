<?php

$page_title = "Register";

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (count($_POST) > 0) {

  // protect input from possible sql injection
  $first_name = protect($_POST['first_name']);
  $mid_name = protect($_POST['mid_name']);
  $last_name = protect($_POST['last_name']);
  $cpnumber = protect($_POST['cpnumber']);
  $birth_date = protect($_POST['birth_date']);
  $username = protect($_POST['username']);
  $pass = protect($_POST['password']);
  $brgy = protect($_POST['brgy']);
  $access_level = protect($_POST['access_level']);
  $pword = md5($pass);

  if (username_exists($username)) {

    $returnArray = array("error" => true, "response" => "Registration Failed.<br><strong>Username</strong> already exist.");

    echo json_encode($returnArray);
  } elseif (cpnumber_exists($cpnumber)) {

    $returnArray = array("error" => true, "response" => "Registration Failed.<br>Mobile number already in use.");

    echo json_encode($returnArray);
  } else {

    $getLastID = mysqli_query($conn, "SELECT MAX(id) AS LastID FROM users;");
    $returnedID = mysqli_fetch_array($getLastID);
    $new_user_ID = $returnedID['LastID'] + 1;

    $query = " INSERT INTO users (id, last_name, first_name, mid_name, username, pword, cpnumber, birth_date, brgy, access_level, stat)
               VALUES ( $new_user_ID, '" . $last_name . "', '" . $first_name . "', '" . $mid_name . "', '" . $username . "', '" . $pword . "', '" . $cpnumber . "', '" . $birth_date . "', '" . $brgy . "', '" . $access_level . "', 1)";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {

      $returnArray = array("error" => false, "response" => "Registration successful.<br>Please wait for the Admin to activate your account.");

      echo json_encode($returnArray);
    } else if (mysqli_error($conn)) {

      $returnArray = array("error" => true, "response" => mysqli_error($conn));

      echo json_encode($returnArray);
    } else {

      $returnArray = array("error" => true, "response" => "Server error.");

      echo json_encode($returnArray);
    }
  }
}
