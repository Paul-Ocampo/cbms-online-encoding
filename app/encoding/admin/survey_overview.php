<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (count($_POST) > 0) {

    $query = mysqli_query($conn, "SELECT * FROM survey_progress");

    $response = "";

    while ($row = mysqli_fetch_array($query)) {
        $response .= '<tr>';
        $response .= '  <td class="align-middle">0505017' . $row['brgy'] . ' </td>';
        $response .= '  <td class="align-middle"> ' . brgy($row['brgy']) . ' </td>';
        $response .= '  <td class="align-middle">';
        if ($row['expected_hh'] != 0) {
            $response .= '<div class="row"><div class="col-10"><div class="progress">';
            $response .= '  <div class="progress-bar bg-info text-dark" role="progressbar" style="width: ' . ($row['current_hh'] / $row['expected_hh'] * 100) . '%" aria-valuenow="' . ($row['current_hh'] / $row['expected_hh'] * 100) . '" aria-valuemin="0" aria-valuemax="100"></div>';
            $response .= '</div></div><div class="col-2"><span class="float-end">' . ($row['current_hh'] / $row['expected_hh'] * 100) . '%</span></div></div>';
        } else {
            $response .= '<div class="row"><div class="col-10"><div class="progress">';
            $response .= '  <div class="progress-bar bg-info text-dark" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>';
            $response .= '</div></div><div class="col-2"><span class="float-end"> 0%</span></div></div>';
        }
        $response .= '  </td>';
        $response .= '  <td align="center" class="align-middle"> ' . survey_status(($row['current_hh'] > 0) ? 1 : 0) . '</td>';
        $response .= '</tr>';
    }

    echo $response;
}
