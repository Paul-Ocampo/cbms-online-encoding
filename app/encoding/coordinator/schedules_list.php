<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["action"])) {

    $query = mysqli_query($conn, "SELECT * FROM survey_schedules");

    $response = '';

    while ($row = mysqli_fetch_array($query)) {

        $response .= '<tr>';
        $response .= '  <td> ' . $row['id'] . ' </td>';
        $response .= '  <td> ' . $row['survey_title'] . ' </td>';
        $response .= '  <td> ' . $row['survey_details'] . ' </td>';
        $response .= '  <td> ' . $row['survey_start'] . ' </td>';
        $response .= '  <td> ' . $row['survey_end'] . ' </td>';
        $response .= '  <td align="center">';
        $response .= '      <div class="btn-group">';
        $response .= '          <a class="btn btn-sm btn-outline-light" onclick="sched_view(' . $row['id'] . ');"><i class="bi bi-eye text-secondary"></i></a>';
        $response .= '          <a class="btn btn-sm btn-outline-light" onclick="sched_edit(' . $row['id'] . ');"><i class="bi bi-pencil text-secondary"></i></a>';
        $response .= '          <a class="btn btn-sm btn-outline-light" onclick="sched_delete(' . $row['id'] . ');"><i class="bi bi-trash text-secondary"></i></a>';
        $response .= '      </div>';
        $response .= '  </td>';
        $response .= '<tr>';

    }

    echo $response;
}
