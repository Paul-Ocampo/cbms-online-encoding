<?php
// set userID
if (isset($_SESSION["user_id"])) {
    $userID = $_SESSION["user_id"];
}
// set userID
if (isset($_SESSION["form_id"])) {
    $form_id = $_SESSION["form_id"];
}

$dateToday = date("Y-m-d");

// Empty the table
function truncateTable($table_name)
{
    global $conn;
    mysqli_query($conn, "TRUNCATE `cbms_db`.`$table_name`");
}
// Protect inputs for possible sql injection
function protect($string)
{
    $string = trim(strip_tags(addslashes($string)));
    return $string;
}
// get name of encoder
function get_username($encoder_id)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM users WHERE id = $encoder_id");
    $row = mysqli_fetch_array($query);
    $encoder_name = $row["last_name"] . ", " . $row["first_name"] . " " . $row["mid_name"];
    $num = mysqli_num_rows($query);
    if ($num > 0) {
        return $encoder_name;
    } else {
        return "";
    }
}
// Count rows to display for overview
function count_entries($table_name, $condition = "1=1")
{
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM $table_name WHERE $condition");
    $num = mysqli_num_rows($query);
    if ($num > 0) {
        return $num;
    } else {
        return 0;
    }
}
// Check if username is already used by other user/student
function username_exists($username)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $num = mysqli_num_rows($query);
    if ($num > 0) {
        return true;
    } else {
        return false;
    }
}
// Get user_name with id from class_schedules
function user_name($user_id)
{
    global $conn;
    $subrow = mysqli_fetch_array(mysqli_query($conn, "SELECT last_name, first_name, LEFT(mid_name, 1) as mid FROM users WHERE id=$user_id"));
    return $subrow["last_name"] . ", " . $subrow["first_name"] . " " . $subrow["mid"] . ".";
}
// Check if cp number is already used by other user/encoder
function cpnumber_exists($cpnumber)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM users WHERE cpnumber = '$cpnumber'");
    $num = mysqli_num_rows($query);
    if ($num > 0) {
        return true;
    } else {
        return false;
    }
}
// Record user activity
function record_activity($activity)
{

    global $conn;

    $currentEncoder = $_SESSION["user_id"];
    $access_level = $_SESSION["access_level"];

    $act_time = date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa')));
    $act_date = date('Y') . "-" . date('m') . "-" . date('d');

    $getlast_act_id = mysqli_query($conn, "SELECT MAX(id) AS LastID FROM activity_log;");
    $fetched_act_id = mysqli_num_rows($getlast_act_id);

    if ($fetched_act_id > 0) {
        $returned_last_act_id = mysqli_fetch_array($getlast_act_id);
        $new_act_ID = $returned_last_act_id["LastID"] + 1;
    } else {
        $new_act_ID = 1;
    }

    $query = " INSERT INTO activity_log (id, user_id, activity, access_level, act_date, act_time)
               VALUES ($new_act_ID, $currentEncoder, '$activity', $access_level, '$act_date', '$act_time')";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
}

function hpq_stat($statCode)
{
    switch ($statCode) {
        case '0':
            return "Incomplete data";
        case '1':
            return "Not validated";
        case '2':
            return "Validated";
    }
}

function brgy($brgyCode)
{
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
        case '012':
            return "Buang";
        case '013':
            return "Buhian";
        case '014':
            return "Cabagñan";
        case '015':
            return "Cobo";
        case '016':
            return "Comon ";
        case '017':
            return "Cormidal";
        case '018':
            return "Divino Rostro (Pob.)";
        case '019':
            return "Fatima";
        case '020':
            return "Guinobat";
        case '021':
            return "Hacienda (San Miguel Island)";
        case '022':
            return "Magapo";
        case '023':
            return "Mariroc";
        case '024':
            return "Matagbac";
        case '025':
            return "Oras";
        case '026':
            return "Oson";
        case '027':
            return "Panal";
        case '029':
            return "Pawa";
        case '030':
            return "Pinagbobong";
        case '031':
            return "Quinale Cabasan (Pob.)";
        case '032':
            return "Quinastillojan";
        case '033':
            return "Rawis (San Miguel Island)";
        case '034':
            return "Sagurong (San Miguel Island)";
        case '035':
            return "Salvacion";
        case '036':
            return "San Antonio";
        case '037':
            return "San Carlos";
        case '011':
            return "San Isidro (Boring)";
        case '038':
            return "San Juan (Pob.)";
        case '039':
            return "San Lorenzo";
        case '040':
            return "San Ramon";
        case '041':
            return "San Roque";
        case '042':
            return "San Vicente";
        case '044':
            return "Santo Cristo (Pob.)";
        case '045':
            return "Sua-Igot";
        case '046':
            return "Tabiguian";
        case '048':
            return "Tagas";
        case '049':
            return "Tayhi (Pob.)";
        case '050':
            return "Visita (San Miguel Island)";
    }
}

function access_level($access_level)
{
    switch ($access_level) {
        case 0:
            return "Administrator";
            break;
        case 1:
            return "Coordinator";
            break;
        case 2:
            return "Encoder";
            break;
        case 3:
            return "User";
            break;
    }
}

function user_status($stat)
{
    switch ($stat) {
        case 0:
            return "Activated";
            break;

        case 1:
            return "Pending";
            break;
    }
}

function survey_status($stat_code)
{
    switch ($stat_code) {
        case 0:
            return '<div class="badge rounded-pill bg-warning text-white">Not started</div>';
            break;

        case 1:
            return '<div class="badge rounded-pill bg-info text-white">On-going</div>';
            break;

        case 2:
            return '<div class="badge rounded-pill bg-success text-white">Complete</div>';
            break;
    }
}

function reln($reln)
{
    switch ($reln) {
        case 1:
            return "Head";
            break;
        case 2:
            return "Spouse";
            break;
        case 3:
            return "Son/Daughter";
            break;
        case 4:
            return "Son-in-Law/Daughter-in-Law";
            break;
        case 5:
            return "Grandchildren";
            break;
        case 6:
            return "Parents";
            break;
        case 7:
            return "Father-in-Law/Mother-in-Law";
            break;
        case 8:
            return "Brother/Sister";
            break;
        case 9:
            return "Uncle/Aunt";
            break;
        case 10:
            return "Grandparents";
            break;
        case 11:
            return "Nephew/Niece";
            break;
        case 12:
            return "Housemaid/Houseboy";
            break;
    }
    
}
