<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (count($_POST) > 0) {

    $query = mysqli_query($conn, "SELECT * FROM survey_progress");

    $response = "";

    while ($row = mysqli_fetch_array($query)) {
        if ($row['expected_hh'] != 0) {
            $response .= '<h4 class="small font-weight-bold">' . brgy($row['brgy']) . ' <span class="float-end">' . ($row['current_hh'] / $row['expected_hh'] * 100) . '%</span></h4>';
            $response .= '<div class="progress mb-4">';
            $response .= '  <div class="progress-bar bg-info" role="progressbar" style="width: ' . ($row['current_hh'] / $row['expected_hh'] * 100) . '%" aria-valuenow="' . ($row['current_hh'] / $row['expected_hh'] * 100) . '" aria-valuemin="0" aria-valuemax="100"></div>';
            $response .= '</div>';
        } else {
            $response .= '<h4 class="small font-weight-bold">' . brgy($row['brgy']) . ' <span class="float-end">0%</span></h4>';
            $response .= '<div class="progress mb-4">';
            $response .= '  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>';
            $response .= '</div>';
        }
    }

    echo $response;
}
