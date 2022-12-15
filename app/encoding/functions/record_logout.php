<?php

if (isset($_SESSION["users_log_id"])) {
    // Update the logout date and time
    $users_log_id = $_SESSION["users_log_id"];
    $user_id = $_SESSION["user_id"];
    $logout_date = date('Y') . "-" . date('m') . "-" . date('d');
    $logout_time = date('H:i:s');

    mysqli_query($conn, "UPDATE users_log
                    SET id='" . $users_log_id . "',
                        user_id='" . $user_id . "',
                        logout_date='" . $logout_date . "',
                        logout_time='" . $logout_time . "'
                    WHERE id='" . $users_log_id . "'");
}

?>