<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';
include_once '../functions/record_logout.php';

// remove all session variables
session_unset(); 

// destroy the session 

session_destroy();

header("Location: index.php");
?>