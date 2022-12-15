<?php

include_once '../config/core.php';
include_once '../config/database.php';
include_once '../functions/functions.php';

if (isset($_POST["action"])) {

    $query = mysqli_query($conn, "  SELECT SUM(pop_2008) as '2008',
                                        SUM(pop_2010) as '2010',
                                        SUM(pop_2012) as '2012',
                                        SUM(pop_2014) as '2014',
                                        SUM(pop_2016) as '2016',
                                        SUM(pop_2018) as '2018',
                                        SUM(pop_2020) as '2020',
                                        SUM(pop_2022) as '2022'
                                    FROM brgy_data");

    echo json_encode(mysqli_fetch_assoc($query));

}
