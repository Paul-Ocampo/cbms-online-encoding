<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["hpq_id"])) {

    $hpq_id = protect($_POST["hpq_id"]);

    $query = mysqli_query($conn, "SELECT lname, fname, mname, reln, age_yr FROM hpq_mem WHERE hpq_id = '$hpq_id'");

    $response = '<table class="table table-sm table-borderless mb-1 text-dark" width="100%">
                    <thead>
                        <tr><th colspan="3" class="bg-info text-center text-light">Household members</th></tr>
                        <tr>
                            <th width="30%">Name</th>
                            <th width="20%">Relation</th>
                            <th width="30%">Age</th>
                        </tr>
                    </thead>
                    <tbody>';

    while ($row = mysqli_fetch_array($query)) {

        $response .= '<tr>';
        $response .= '  <td> ' . $row['lname'] . ', ' . $row['fname'] . ' ' . $row['mname'] . ' </td>';
        $response .= '  <td> ' . reln($row['reln']) . ' </td>';
        $response .= '  <td> ' . $row['age_yr'] . ' </td>';
        $response .= '<tr>';

    }

    $response .= '  </tbody>
                </table>';

    echo $response;
}
