<?php

include_once 'config/core.php';
include_once 'config/database.php';
include_once 'config/insertData.php';
include_once 'functions/functions.php';

if ($_POST["data"] == "test") {

    $returnArray = array("error" => false, "data" => "server_online");

    echo json_encode($returnArray);
} elseif ($_POST["data"] == "end") {

    $returnArray = array("error" => false, "data" => "all_files_uploaded");

    echo json_encode($returnArray);    
} else {

    $data = $_POST["data"];
    $obj = json_decode($data, TRUE);

    $filename = $obj["filename"];
    $brgy = $obj["brgy"];
    $obj["upload_date"] = date('Y-m-d');

    $file_data = json_encode($obj);

    file_force_contents("ROOT/$brgy/instances/$filename.json", $file_data, LOCK_EX);
}

function file_force_contents($fullPath, $contents, $flags = 0)
{

    $parts = explode('/', $fullPath);
    array_pop($parts);
    $dir = implode('/', $parts);

    if (!is_dir($dir))
        mkdir($dir, 0777, true);

    file_put_contents($fullPath, $contents, $flags);

    insertData($contents);
}
