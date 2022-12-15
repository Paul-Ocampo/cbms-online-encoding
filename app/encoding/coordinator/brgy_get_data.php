<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["brgy_id"])) {

    $brgy_id = protect($_POST["brgy_id"]);

    $query = mysqli_query($conn, "SELECT * FROM brgy_data WHERE id = $brgy_id");

    echo json_encode(mysqli_fetch_assoc($query));

}
