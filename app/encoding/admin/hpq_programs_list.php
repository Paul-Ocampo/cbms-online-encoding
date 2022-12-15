<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';

if (isset($_SESSION["hpq_id"])) {

    $hpq_id = $_SESSION["hpq_id"];

    $prog_query = mysqli_query($conn, "SELECT * FROM hpq_prog WHERE hpq_id = '$hpq_id'");

    $hpq_prog = array();

    while ($prog = mysqli_fetch_assoc($prog_query)) {

        $prog_entry = array(
            "id" => $prog["id"],
            "hpq_id" => $prog["hpq_id"],
            "pindex" => $prog["pindex"],
            "prog_type" => $prog["prog_type"],
            "prog_type_o" => $prog["prog_type_o"],
            "prog_name" => $prog["prog_name"],
            "prog_impl" => $prog["prog_impl"],
            "hpq_mem_ref" => hpq_mem_ref($prog["hpq_id"], $prog["pindex"])
        );    

        array_push($hpq_prog, $prog_entry);        
    }
    
    echo json_encode($hpq_prog);
}

function hpq_mem_ref($hpq_id, $pindex) {

    global $conn;

    $hpq_mem_ref_query = mysqli_query($conn, "SELECT hpq_mem_ref_num FROM hpq_mem_ref WHERE hpq_id = '$hpq_id' AND pindex = '$pindex'");

    $returnArr = array();

    while ($row = mysqli_fetch_assoc($hpq_mem_ref_query)) {

        $returnArr[] = $row["hpq_mem_ref_num"];
    }

    return $returnArr;

}