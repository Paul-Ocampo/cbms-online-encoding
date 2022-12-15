<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (count($_POST) > 0) {

    $regn = protect($_POST["regn"]);
    $prov = protect($_POST["prov"]);
    $mun = protect($_POST["mun"]);
    $brgy = protect($_POST["brgy"]);
    $hcn = protect($_POST["hcn"]);

    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE brgy = $brgy AND hcn = $hcn");
    $num = mysqli_num_rows($query);

    $currentEncoder = $_SESSION["id"];

    if ($num > 0) {

        $row = mysqli_fetch_array($query);
        $hpq_stat = $row["hpq_stat"];
        $encodedBy = $row["encoder"];

        if (($currentEncoder == $encodedBy) && ($hpq_stat == "1" || $hpq_stat == "2")) {

            echo json_encode(array("msg" => "isComplete"));
        } else if (($currentEncoder == $encodedBy) && $hpq_stat == "0") {

            $_SESSION["form_id"] = $row["form_id"];
            echo json_encode(array("msg" => "isNotComplete", "form_id" => $_SESSION["form_id"]));
        } else {

            echo json_encode(array("msg" => "encoded", "encoder" => get_encoder_name($encodedBy)));
        }
    } else {

        $hpq_id = $regn . $prov . $mun . $brgy . $hcn;
        $sql_insert = " INSERT INTO hpq_main (form_id, hpq_id, regn, prov, mun, brgy, hcn, int_date, encoder)
                        VALUES ('', '$hpq_id', '$regn', '$prov', '$mun', '$brgy', '$hcn', '$int_date', '$currentEncoder')";

        mysqli_query($conn, $sql_insert);
        $last_id = mysqli_insert_id($conn);

        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION["form_id"] = $last_id;
            echo json_encode(array("msg" => "noData", "form_id" => $_SESSION["form_id"]));
        }
    }
}
