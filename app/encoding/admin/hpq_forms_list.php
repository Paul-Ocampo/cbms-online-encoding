<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["condition"])) {

    $access_level = $_SESSION["access_level"];
    $username = $_SESSION["username"];
    $brgy = $_SESSION["brgy"];

    switch ($access_level) {
        case 0:
            switch ($_POST["condition"]) {
                case 'total':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main");
                    break;
                case 'today':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE upload_date = $dateToday");
                    break;
                case 'valid':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE hpq_stat = 2");
                    break;
                case 'pending':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE hpq_stat < 2");
                    break;
            }
            break;
        case 1:
            switch ($_POST["condition"]) {
                case 'total':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE brgy = '$brgy'");
                    break;
                case 'today':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE upload_date = $dateToday AND brgy = '$brgy'");
                    break;
                case 'valid':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE hpq_stat = 2 AND brgy = '$brgy'");
                    break;
                case 'pending':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE hpq_stat < 2 AND brgy = '$brgy'");
                    break;
            }
            break;

        case 2:
            switch ($_POST["condition"]) {
                case 'total':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE brgy = '$brgy' AND encoder = '$username'");
                    break;
                case 'today':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE upload_date = $dateToday, brgy = '$brgy' AND encoder = '$username'");
                    break;
                case 'valid':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE hpq_stat = 2, brgy = '$brgy' AND encoder = '$username'");
                    break;
                case 'pending':
                    $query = mysqli_query($conn, "SELECT * FROM hpq_main WHERE hpq_stat < 2, brgy = '$brgy' AND encoder = '$username'");
                    break;
            }
            break;
    }

    $response = "";

    while ($row = mysqli_fetch_array($query)) {

        $response .= '<tr>';
        $response .= '  <td align="center" class="dt-control" data-id="' . $row['hpq_id'] . '"></td>';
        $response .= '  <td> ' . $row['hpq_id'] . ' </td>';
        $response .= '  <td> ' . brgy($row['brgy']) . ' </td>';
        $response .= '  <td> ' . $row['hcn'] . ' </td>';
        $response .= '  <td> ' . $row['respondent'] . ' </td>';
        $response .= '  <td> ' . $row['int_date'] . ' </td>';
        $response .= '  <td> ' . $row['upload_date'] . ' </td>';
        $response .= '  <td> ' . hpq_stat($row['hpq_stat']) . ' </td>';
        $response .= '  <td> ' . $row['encoder'] . ' </td>';
        $response .= '  <td align="center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-light" onclick="hpq_view(' . "'" . $row["hpq_id"] . "'" . ');">
                                    <i class="bi bi-eye text-secondary"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-light" onclick="hpq_edit(' . "'" . $row["hpq_id"] . "'" . ');">
                                    <i class="bi bi-pencil-square text-secondary"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-light" onclick="hpq_delete(' . "'" . $row["hpq_id"] . "'" . ');">
                                    <i class="bi bi-trash text-secondary"></i>
                                </a>
                            </div>
                        </td>
                      </tr>';
    }

    echo $response;
}
