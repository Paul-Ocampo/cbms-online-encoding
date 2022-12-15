<?php

$servername='localhost';
$username='id20013079_cbms_tabaco';
$password='iLoveYouBeBeCo_112816';
$dbname = "id20013079_cbms_db";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){

    die('Could not Connect My Sql:' .$conn);

}

?>