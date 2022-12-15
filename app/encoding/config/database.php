<?php

$servername='localhost';
$username='username';
$password='password';
$dbname = "database_name";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){

    die('Could not Connect My Sql:' .$conn);

}

?>