<?php

function insertData($data)
{

    global $conn;

    $hpq = json_decode($data, TRUE);
    $hpq_mem = $hpq["hpq_mem"];
    $hpq_death = $hpq["hpq_death"];
    $hpq_prog = $hpq["hpq_prog"];
    $hpq_id = $hpq["hpq_id"];
    $file_name = $hpq["filename"];

    if (hpq_id_exists($conn, $hpq_id)) {

        $queryStr = "DELETE FROM hpq_main WHERE hpq_id = '$hpq_id'";

        mysqli_query($conn, $queryStr);

    }

    $addMain = insertMain($conn, $hpq);
    $addMem = insertMem($conn, $hpq_id, $hpq_mem);
    $addDead = insertDeceased($conn, $hpq_id, $hpq_death);
    $addProg = insertProg($conn, $hpq_id, $hpq_prog);

    if ($addMain && $addMem && $addDead && $addProg) {

        $returnArray = array("error" => false, "data" => $file_name);

        echo json_encode($returnArray);
    } else {

        $returnArray = array("error" => true, "data" => mysqli_error($conn));

        echo json_encode($returnArray);
    }
}

function insertMain($conn, $hpq)
{
    //region
    $hpq_id = $hpq["hpq_id"];
    $latitude = $hpq["latitude"];
    $longitude = $hpq["longitude"];
    $regn = $hpq["regn"];
    $prov = $hpq["prov"];
    $mun = $hpq["mun"];
    $brgy = $hpq["brgy"];
    $purok = $hpq["purok"];
    $street = $hpq["street"];
    $hcn = $hpq["hcn"];
    $respondent = $hpq["respondent"];
    $int_date = $hpq["int_date"];
    $interviewer = $hpq["interviewer"];
    $field_coordinator = $hpq["field_coordinator"];
    $brgy_captain = $hpq["brgy_captain"];
    $htype = $hpq["htype"];
    $numcr = $hpq["numcr"];
    $numbed = $hpq["numbed"];
    $roof = $hpq["roof"];
    $wall = $hpq["wall"];
    $numofw = $hpq["numofw"];
    $numfam = $hpq["numfam"];
    $numpreg = $hpq["numpreg"];
    $numunipar = $hpq["numunipar"];
    $numpwd = $hpq["numpwd"];
    $phsize = $hpq["phsize"];
    $hunger_ind = $hpq["hunger_ind"];
    $mdead = $hpq["mdead"];
    $water = $hpq["water"];
    $water_o = $hpq["water_o"];
    $toilet = $hpq["toilet"];
    $toilet_o = $hpq["toilet_o"];
    $tenur = $hpq["tenur"];
    $tenur_o = $hpq["tenur_o"];
    $bpermit = $hpq["bpermit"];
    $built_when = $hpq["built_when"];
    $len_stay = $hpq["len_stay"];
    $elec_ind = $hpq["elec_ind"];
    $elec_type = $hpq["elec_type"];
    $imprnt = $hpq["imprnt"];
    $reloc_ind = $hpq["reloc_ind"];
    $reloc_reason = $hpq["reloc_reason"];
    $housing = $hpq["housing"];
    $curstay = $hpq["curstay"];
    $radio = $hpq["radio"];
    $tv = $hpq["tv"];
    $dvd = $hpq["dvd"];
    $stereo = $hpq["stereo"];
    $karaoke = $hpq["karaoke"];
    $refrigerator = $hpq["refrigerator"];
    $efan = $hpq["efan"];
    $iron = $hpq["iron"];
    $stove = $hpq["stove"];
    $washmachine = $hpq["washmachine"];
    $oven = $hpq["oven"];
    $computer = $hpq["computer"];
    $internet = $hpq["internet"];
    $cellphone = $hpq["cellphone"];
    $telephone = $hpq["telephone"];
    $aircon = $hpq["aircon"];
    $sew = $hpq["sew"];
    $car = $hpq["car"];
    $motor = $hpq["motor"];
    $sofa = $hpq["sofa"];
    $dinning = $hpq["dinning"];
    $land_agri = $hpq["land_agri"];
    $land_res = $hpq["land_res"];
    $land_com = $hpq["land_com"];
    $garb_collect = $hpq["garb_collect"];
    $garb_burn = $hpq["garb_burn"];
    $garb_compost = $hpq["garb_compost"];
    $garb_recycle = $hpq["garb_recycle"];
    $garb_segregate = $hpq["garb_segregate"];
    $garb_pitcover = $hpq["garb_pitcover"];
    $garb_pitnocover = $hpq["garb_pitnocover"];
    $garb_river = $hpq["garb_river"];
    $garb_other_ind = $hpq["garb_other_ind"];
    $garb_other_o = $hpq["garb_other_o"];
    $garb_collector = $hpq["garb_collector"];
    $garb_collector_freq = $hpq["garb_collector_freq"];
    $garb_collector_freq_o = $hpq["garb_collector_freq_o"];
    $calam_typhoon_ind = $hpq["calam_typhoon_ind"];
    $calam_typhoon_aid_ind = $hpq["calam_typhoon_aid_ind"];
    $calam_typhoon_aid_source = $hpq["calam_typhoon_aid_source"];
    $calam_flood_ind = $hpq["calam_flood_ind"];
    $calam_flood_aid_ind = $hpq["calam_flood_aid_ind"];
    $calam_flood_aid_source = $hpq["calam_flood_aid_source"];
    $calam_drought_ind = $hpq["calam_drought_ind"];
    $calam_drought_aid_ind = $hpq["calam_drought_aid_ind"];
    $calam_drought_aid_source = $hpq["calam_drought_aid_source"];
    $calam_earthquake_ind = $hpq["calam_earthquake_ind"];
    $calam_earthquake_aid_ind = $hpq["calam_earthquake_aid_ind"];
    $calam_earthquake_aid_source = $hpq["calam_earthquake_aid_source"];
    $calam_eruption_ind = $hpq["calam_eruption_ind"];
    $calam_eruption_aid_ind = $hpq["calam_eruption_aid_ind"];
    $calam_eruption_aid_source = $hpq["calam_eruption_aid_source"];
    $calam_fire_ind = $hpq["calam_fire_ind"];
    $calam_fire_aid_ind = $hpq["calam_fire_aid_ind"];
    $calam_fire_aid_source = $hpq["calam_fire_aid_source"];
    $calam_epidemic_ind = $hpq["calam_epidemic_ind"];
    $calam_epidemic_aid_ind = $hpq["calam_epidemic_aid_ind"];
    $calam_epidemic_aid_source = $hpq["calam_epidemic_aid_source"];
    $calam_evac = $hpq["calam_evac"];
    $crop_ind = $hpq["crop_ind"];
    $crop_csh = $hpq["crop_csh"];
    $crop_knd = $hpq["crop_knd"];
    $live_ind = $hpq["live_ind"];
    $live_csh = $hpq["live_csh"];
    $live_knd = $hpq["live_knd"];
    $fish_ind = $hpq["fish_ind"];
    $fish_csh = $hpq["fish_csh"];
    $fish_knd = $hpq["fish_knd"];
    $hunt_ind = $hpq["hunt_ind"];
    $hunt_csh = $hpq["hunt_csh"];
    $hunt_knd = $hpq["hunt_knd"];
    $sale_ind = $hpq["sale_ind"];
    $sale_csh = $hpq["sale_csh"];
    $sale_knd = $hpq["sale_knd"];
    $manu_ind = $hpq["manu_ind"];
    $manu_csh = $hpq["manu_csh"];
    $manu_knd = $hpq["manu_knd"];
    $social_ind = $hpq["social_ind"];
    $social_csh = $hpq["social_csh"];
    $social_knd = $hpq["social_knd"];
    $trans_ind = $hpq["trans_ind"];
    $trans_csh = $hpq["trans_csh"];
    $trans_knd = $hpq["trans_knd"];
    $quar_ind = $hpq["quar_ind"];
    $quar_csh = $hpq["quar_csh"];
    $quar_knd = $hpq["quar_knd"];
    $cons_ind = $hpq["cons_ind"];
    $cons_csh = $hpq["cons_csh"];
    $cons_knd = $hpq["cons_knd"];
    $oea_ind = $hpq["oea_ind"];
    $oea_csh = $hpq["oea_csh"];
    $oea_knd = $hpq["oea_knd"];
    $totea_csh = $hpq["totea_csh"];
    $totea_knd = $hpq["totea_knd"];
    $totwage_csh = $hpq["totwage_csh"];
    $totwage_knd = $hpq["totwage_knd"];
    $ags_csh = $hpq["ags_csh"];
    $ags_knd = $hpq["ags_knd"];
    $ofw_csh = $hpq["ofw_csh"];
    $ofw_knd = $hpq["ofw_knd"];
    $supf_csh = $hpq["supf_csh"];
    $supf_knd = $hpq["supf_knd"];
    $supr_csh = $hpq["supr_csh"];
    $supr_knd = $hpq["supr_knd"];
    $rent_csh = $hpq["rent_csh"];
    $rent_knd = $hpq["rent_knd"];
    $intr_csh = $hpq["intr_csh"];
    $intr_knd = $hpq["intr_knd"];
    $pen_csh = $hpq["pen_csh"];
    $pen_knd = $hpq["pen_knd"];
    $div_csh = $hpq["div_csh"];
    $div_knd = $hpq["div_knd"];
    $oth_csh = $hpq["oth_csh"];
    $oth_knd = $hpq["oth_knd"];
    $etot_csh = $hpq["etot_csh"];
    $etot_knd = $hpq["etot_knd"];
    $imprnttot = $hpq["imprnttot"];
    $totin_csh = $hpq["totin_csh"];
    $totin_knd = $hpq["totin_knd"];
    $totin = $hpq["totin"];
    $agri_own_id = $hpq["agri_own_id"];
    $agri_own_o = $hpq["agri_own_o"];
    $agri_own_area = $hpq["agri_own_area"];
    $agri_rice = $hpq["agri_rice"];
    $agri_vegy = $hpq["agri_vegy"];
    $agri_corn = $hpq["agri_corn"];
    $agri_potato = $hpq["agri_potato"];
    $agri_cassava = $hpq["agri_cassava"];
    $agri_hemp = $hpq["agri_hemp"];
    $agri_coco = $hpq["agri_coco"];
    $agri_other = $hpq["agri_other"];
    $agri_other_o = $hpq["agri_other_o"];
    $note = $hpq["note"];
    $hpq_stat = $hpq["hpq_stat"];
    $encoder = $hpq["encoder"];
    $file_name = $hpq["filename"];
    $upload_date = $hpq["upload_date"];
    $hpq_mem = $hpq["hpq_mem"];
    $hpq_death = $hpq["hpq_death"];
    $hpq_prog = $hpq["hpq_prog"];
    //endregion

    $sql_insert = " INSERT IGNORE INTO hpq_main (   id, hpq_id, 
                                                    latitude, longitude, regn, prov, mun, brgy, purok, street, hcn, 
                                                    respondent, int_date, interviewer, field_coordinator, brgy_captain, 
                                                    htype, numcr, numbed, roof, wall, numofw, numfam, numpreg, numunipar, numpwd, phsize, 
                                                    hunger_ind, mdead, water, water_o, toilet, toilet_o, tenur, tenur_o, bpermit, 
                                                    built_when, len_stay, elec_ind, elec_type, imprnt, reloc_ind, reloc_reason, housing, 
                                                    curstay, radio, tv, dvd, stereo, karaoke, refrigerator, efan, iron, stove, washmachine, oven, computer, 
                                                    internet, cellphone, telephone, aircon, sew, car, motor, sofa, dinning, land_agri, land_res, land_com, 
                                                    garb_collect, garb_burn, garb_compost, garb_recycle, garb_segregate, garb_pitcover, garb_pitnocover, garb_river, 
                                                    garb_other_ind, garb_other_o, garb_collector, garb_collector_freq, garb_collector_freq_o, 
                                                    calam_typhoon_ind, calam_typhoon_aid_ind, calam_typhoon_aid_source, 
                                                    calam_flood_ind, calam_flood_aid_ind, calam_flood_aid_source, 
                                                    calam_drought_ind, calam_drought_aid_ind, calam_drought_aid_source, 
                                                    calam_earthquake_ind, calam_earthquake_aid_ind, calam_earthquake_aid_source, 
                                                    calam_eruption_ind, calam_eruption_aid_ind, calam_eruption_aid_source, 
                                                    calam_fire_ind, calam_fire_aid_ind, calam_fire_aid_source, 
                                                    calam_epidemic_ind, calam_epidemic_aid_ind, calam_epidemic_aid_source, calam_evac, 
                                                    crop_ind, crop_csh, crop_knd, live_ind, live_csh, live_knd, fish_ind, fish_csh, fish_knd, 
                                                    hunt_ind, hunt_csh, hunt_knd, sale_ind, sale_csh, sale_knd, manu_ind, manu_csh, manu_knd, 
                                                    social_ind, social_csh, social_knd, trans_ind, trans_csh, trans_knd, quar_ind, quar_csh, 
                                                    quar_knd, cons_ind, cons_csh, cons_knd, oea_ind, oea_csh, oea_knd, 
                                                    totea_csh, totea_knd, totwage_csh, totwage_knd, 
                                                    ags_csh, ags_knd, ofw_csh, ofw_knd, supf_csh, supf_knd, 
                                                    supr_csh, supr_knd, rent_csh, rent_knd, intr_csh, intr_knd, 
                                                    pen_csh, pen_knd, div_csh, div_knd, oth_csh, oth_knd, 
                                                    etot_csh, etot_knd, imprnttot, totin_csh, totin_knd, totin, 
                                                    agri_own_id, agri_own_o, agri_own_area, 
                                                    agri_rice, agri_vegy, agri_corn, agri_potato, agri_cassava, agri_hemp, agri_coco, 
                                                    agri_other, agri_other_o, note, 
                                                    hpq_stat, 
                                                    encoder, 
                                                    hpq_filename, 
                                                    upload_date)
                    VALUES ('', '$hpq_id', 
                                '$latitude', '$longitude', '$regn', '$prov', '$mun', '$brgy', '$purok', '$street', '$hcn', 
                                '$respondent', '$int_date', '$interviewer', '$field_coordinator', '$brgy_captain', 
                                '$htype', '$numcr', '$numbed', '$roof', '$wall', '$numofw', '$numfam', '$numpreg', '$numunipar', '$numpwd', '$phsize', 
                                '$hunger_ind', '$mdead', '$water', '$water_o', '$toilet', '$toilet_o', '$tenur', '$tenur_o', '$bpermit', 
                                '$built_when', '$len_stay', '$elec_ind', '$elec_type', '$imprnt', '$reloc_ind', '$reloc_reason', '$housing', 
                                '$curstay', '$radio', '$tv', '$dvd', '$stereo', '$karaoke', '$refrigerator', '$efan', '$iron', '$stove', '$washmachine', '$oven', '$computer', 
                                '$internet', '$cellphone', '$telephone', '$aircon', '$sew', '$car', '$motor', '$sofa', '$dinning', '$land_agri', '$land_res', '$land_com', 
                                '$garb_collect', '$garb_burn', '$garb_compost', '$garb_recycle', '$garb_segregate', '$garb_pitcover', '$garb_pitnocover', '$garb_river', 
                                '$garb_other_ind', '$garb_other_o', '$garb_collector', '$garb_collector_freq', '$garb_collector_freq_o', 
                                '$calam_typhoon_ind', '$calam_typhoon_aid_ind', '$calam_typhoon_aid_source', 
                                '$calam_flood_ind', '$calam_flood_aid_ind', '$calam_flood_aid_source', 
                                '$calam_drought_ind', '$calam_drought_aid_ind', '$calam_drought_aid_source', 
                                '$calam_earthquake_ind', '$calam_earthquake_aid_ind', '$calam_earthquake_aid_source', 
                                '$calam_eruption_ind', '$calam_eruption_aid_ind', '$calam_eruption_aid_source', 
                                '$calam_fire_ind', '$calam_fire_aid_ind', '$calam_fire_aid_source', 
                                '$calam_epidemic_ind', '$calam_epidemic_aid_ind', '$calam_epidemic_aid_source', 
                                '$calam_evac', '$crop_ind', '$crop_csh', '$crop_knd', '$live_ind', '$live_csh', '$live_knd', '$fish_ind', '$fish_csh', '$fish_knd', 
                                '$hunt_ind', '$hunt_csh', '$hunt_knd', '$sale_ind', '$sale_csh', '$sale_knd', '$manu_ind', '$manu_csh', '$manu_knd', 
                                '$social_ind', '$social_csh', '$social_knd', '$trans_ind', '$trans_csh', '$trans_knd', '$quar_ind', '$quar_csh', '$quar_knd', 
                                '$cons_ind', '$cons_csh', '$cons_knd', '$oea_ind', '$oea_csh', '$oea_knd', 
                                '$totea_csh', '$totea_knd', '$totwage_csh', '$totwage_knd', 
                                '$ags_csh', '$ags_knd', '$ofw_csh', '$ofw_knd', '$supf_csh', '$supf_knd', 
                                '$supr_csh', '$supr_knd', '$rent_csh', '$rent_knd', '$intr_csh', '$intr_knd', 
                                '$pen_csh', '$pen_knd', '$div_csh', '$div_knd', '$oth_csh', '$oth_knd', 
                                '$etot_csh', '$etot_knd', '$imprnttot', '$totin_csh', '$totin_knd', '$totin', 
                                '$agri_own_id', '$agri_own_o', '$agri_own_area', 
                                '$agri_rice', '$agri_vegy', '$agri_corn', '$agri_potato', '$agri_cassava', '$agri_hemp', '$agri_coco', 
                                '$agri_other', '$agri_other_o', '$note', 
                                '$hpq_stat', 
                                '$encoder', 
                                '$file_name', 
                                '$upload_date'
        )";

    mysqli_query($conn, $sql_insert);

    if (mysqli_affected_rows($conn) > 0) {

        return true;
    } else {

        return false;
    }
}

function insertMem($conn, $hpq_id, $hpq_mem)
{

    $mem_columns = "(id, hpq_id, ";
    $mem_values = "";
    $mem_row_num = 0;

    foreach ($hpq_mem as $row => $memRow) {

        $mem_key_pos = 0;
        $mem_row_num++;
        $mem_values .= "('', '" . $hpq_id . "', ";

        foreach ($memRow as $key => $value) {

            $mem_key_pos++;

            if ($mem_key_pos != count($memRow)) {

                if ($mem_row_num == 1) {
                    $mem_columns .= "$key, ";
                }

                $mem_values .= "'" . protect($value) . "', ";
            } else {

                if ($mem_row_num == 1) {
                    $mem_columns .= "$key)";
                }

                if ($mem_row_num != count($hpq_mem)) {
                    $mem_values .= "'" . protect($value) . "'),";
                } else {
                    $mem_values .= "'" . protect($value) . "')";
                }
            }
        }
    }

    $mem_insert = "INSERT IGNORE INTO hpq_mem $mem_columns VALUES $mem_values";

    mysqli_query($conn, $mem_insert);

    if (mysqli_affected_rows($conn) > 0) {

        return true;
    } else {

        return false;
    }
}

function insertDeceased($conn, $hpq_id, $hpq_death)
{

    $death_columns = "(id, hpq_id, ";
    $death_values = "";
    $death_row_num = 0;

    foreach ($hpq_death as $row => $deathRow) {

        $death_key_pos = 0;
        $death_row_num++;
        $death_values .= "('', '" . $hpq_id . "', ";

        foreach ($deathRow as $key => $value) {

            $death_key_pos++;

            if ($death_key_pos != count($deathRow)) {

                if ($death_row_num == 1) {
                    $death_columns .= "$key, ";
                }

                $death_values .= "'" . protect($value) . "', ";
            } else {

                if ($death_row_num == 1) {
                    $death_columns .= "$key)";
                }

                if ($death_row_num != count($hpq_death)) {
                    $death_values .= "'" . protect($value) . "'),";
                } else {
                    $death_values .= "'" . protect($value) . "')";
                }
            }
        }
    }

    $death_insert = "INSERT IGNORE INTO hpq_death $death_columns VALUES $death_values";

    mysqli_query($conn, $death_insert);

    if (mysqli_affected_rows($conn) > 0) {

        return true;
    } else {

        return false;
    }
}

function insertProg($conn, $hpq_id, $hpq_prog)
{

    $progEntry = "";

    if (count($hpq_prog) > 0) {
        foreach ($hpq_prog as $key => $progRow) {

            $progEntry = "('', '" . $hpq_id . "', '" . $progRow["pindex"] . "', '" . $progRow["prog_type"] . "', '" . $progRow["prog_type_o"] . "', '" . $progRow["prog_name"] . "', '" . $progRow["prog_impl"] . "')";

            $prog_insert = "INSERT IGNORE INTO hpq_prog (id, hpq_id, pindex, prog_type, prog_type_o, prog_name, prog_impl) VALUES $progEntry";

            mysqli_query($conn, $prog_insert);

            foreach ($progRow["hpq_mem_ref"] as $key => $val) {
                $ref_insert = "INSERT IGNORE INTO hpq_mem_ref (id, hpq_id, pindex, hpq_mem_ref_num) 
                                    VALUES ('', '" . $hpq_id . "', '" . $progRow["pindex"] . "', '" . $val . "')";

                mysqli_query($conn, $ref_insert);
            }
        }
    } else {

        return true;
    }

    if (mysqli_affected_rows($conn) > 0) {

        return true;
    } else {

        return false;
    }
}

function hpq_id_exists($conn, $hpq_id)
{

    $query = mysqli_query($conn, "SELECT id FROM hpq_main WHERE hpq_id = '$hpq_id'");
    $num = mysqli_num_rows($query);

    if ($num > 0) {
        return true;
    } else {
        return false;
    }
}
