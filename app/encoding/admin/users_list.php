<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["action"])) {
    $userID = $_SESSION["user_id"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id != '$userID'");

    $output = "";

    while ($row = mysqli_fetch_array($result)) {

        $output .= '<tr>
                      <td> ' . $row['id'] . ' </td>';
        $output .= '  <td> ' . get_username($row['id']) . ' </td>';
        $output .= '  <td> ' . brgy($row['brgy']) . ' </td>';
        $output .= '  <td> ' . access_level($row['access_level']) . ' </td>';
        $output .= '  <td> ' . user_status($row['stat']) . ' </td>';
        $output .= '  <td align="center">
                        <div class="btn-group">
                            <a class="btn btn-sm btn-outline-light" onclick="user_view(' . "'" . $row["id"] . "'" . ');">
                                <i class="bi bi-eye text-secondary"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-light" onclick="user_delete(' . "'" . $row["id"] . "'" . ');">
                                <i class="bi bi-trash text-secondary"></i>
                            </a>
                        </div>
                      </td>
                    </tr>';
    }

    echo $output;
}
