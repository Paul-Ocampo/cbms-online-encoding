<?php

include_once '../config/core.php';
include_once 'login_checker.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (count($_POST) > 0) {

    switch ($_POST["condition"]) {
        case "encoded":
            $condition = "encoder = $userID";
        break;
        case "encodedToday":
            $condition = "int_date = '$dateToday' AND encoder = $userID";
        break;
        case "validated":
            $condition = "hpq_stat = 2 AND encoder = $userID";
        break;
        case "invalid":
            $condition = "hpq_stat = 0 AND encoder = $userID";
        break;
    }

    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE $condition");

    $response = "";

    while ($row = mysqli_fetch_array($query)) {

        $response .= '<tr>
                        <td> '. $row['hpq_id'] .' </td>';
        $response .= '  <td> '. brgy($row['brgy']) .' </td>';
        $response .= '  <td> '. $row['hcn'] .' </td>';
        $response .= '  <td> '. $row['respondent'] .' </td>';
        $response .= '  <td> '. $row['int_date'] .' </td>';
        $response .= '  <td> '. hpq_stat($row['hpq_stat']) .' </td>';
        $response .= '  <td align="center">
                            <a onclick="edit_hpq('.$row['form_id'].');" class="btn btn-sm btn-success mb-1 text-light">
                                <i class="fas fa-edit fa-sm"></i>
                            </a>
                            <a class="btn btn-sm btn-danger mb-1 text-light" data-href="'.$row['form_id'].'" data-toggle="modal" data-target="#confirm-delete-hpq">
                                <i class="fas fa-trash fa-sm"></i>
                            </a>
                        </td>
                      </tr>';

    }

    echo $response;

}

function hpq_stat($statCode) {
    switch ($statCode) {
        case '0':
            return "Incomplete data";
        case '1':
            return "Not validated";
        case '2':
            return "Validated";
    }
}

function brgy($brgyCode) {
    switch ($brgyCode) {
        case '001':
            return "Agnas (San Miguel Island)";
        case '002':
            return "Bacolod";
        case '003':
            return "Bangkilingan";
        case '004':
            return "Bantayan";
        case '005':
            return "Baranghawon";
        case '006':
            return "Basagan";
        case '007':
            return "Basud (Pob.)";
        case '008':
            return "Bogñabong";
        case '009':
            return "Bombon (Pob.)";
        case '010':
            return "Bonot";
        case '011':
            return "Buang";
        case '012':
            return "Buhian";
        case '013':
            return "Cabagñan";
        case '014':
            return "Cobo";
        case '015':
            return "Comon ";
        case '016':
            return "Cormidal";
        case '017':
            return "Divino Rostro (Pob.)";
        case '018':
            return "Fatima";
        case '019':
            return "Guinobat";
        case '020':
            return "Hacienda (San Miguel Island)";
        case '021':
            return "Magapo";
        case '022':
            return "Mariroc";
        case '023':
            return "Matagbac";
        case '024':
            return "Oras";
        case '025':
            return "Oson";
        case '026':
            return "Panal";
        case '027':
            return "Pawa";
        case '028':
            return "Pinagbobong";
        case '029':
            return "Quinale Cabasan (Pob.)";
        case '030':
            return "Quinastillojan";
        case '031':
            return "Rawis (San Miguel Island)";
        case '032':
            return "Sagurong (San Miguel Island)";
        case '033':
            return "Salvacion";
        case '034':
            return "San Antonio";
        case '035':
            return "San Carlos";
        case '036':
            return "San Isidro (Boring)";
        case '037':
            return "San Juan (Pob.)";
        case '038':
            return "San Lorenzo";
        case '039':
            return "San Ramon";
        case '040':
            return "San Roque";
        case '041':
            return "San Vicente";
        case '042':
            return "Santo Cristo (Pob.)";
        case '043':
            return "Sua-Igot";
        case '044':
            return "Tabiguian";
        case '045':
            return "Tagas";
        case '046':
            return "Tayhi (Pob.)";
        case '047':
            return "Visita (San Miguel Island)";
    }
}