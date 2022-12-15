<?php
// show error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
 
// start php session
session_start();
 
// set your default time-zone
date_default_timezone_set('Asia/Manila');

// get the ip address of your server
$host= gethostname();
$ip = gethostbyname($host);

// set root path
//$home_url = 'http://'.$ip.'/cbms.com/';
$home_url = 'https://cbms-tc.000webhostapp.com/app/encoding/';