//#region jQuery extended functions
jQuery.fn.extend({
    readOnly: function () {
        $(this).attr("readonly", "readonly");
    }
});

jQuery.fn.extend({
    required: function () {
        $(this).attr("required", "required");
    }
});

jQuery.fn.extend({
    notRequired: function () {
        $(this).attr("required", false);
    }
});
//#endregion
//#region variables
var requiredFieldsCount;
var phsize_specified, ofw_specified, numfam_specified, pregnant_specified, unipar_specified, pwd_specified, mdead_specified;
var ofw_declared, numfam_declared, pregnant_declared, unipar_declared, pwd_declared;
var nucfamchoices;
var hpq_mem_ref;
var dateToday = new Date();
var hpq_main = {};
var userDetails = {};
var hpq_data = {};
var hpq_mem = [], hpq_death = [], hpq_prog = [], hh_fams = [];
var mem_data = {}, dead_data = {}, prog_data = {};
var username = "";
var accessLevel = 0;
var instanceID = "";
var instances_to_upload = {};
var map;
var getL;
var getC;
var exitMode;
var hh_head_disabled = false;
var hh_spouse_disabled = false;
var xf_head_disabled = false;
var xf_spouse_disabled = false;
var mem_is_ofw = false, mem_is_unipar = false, mem_is_pwd = false, mem_is_pregnant = false;
var table;
var brgy_data;
var page_path = window.location.pathname;
var page_path_Array = page_path.split("/");
var page_file = page_path_Array.at(-1);
var mem_edit_mode = false, deceased_edit_mode = false, program_edit_mode = false;

const _brgy = {
    "001": "Agnas (San Miguel Island)",
    "002": "Bacolod",
    "003": "Bangkilingan",
    "004": "Bantayan",
    "005": "Baranghawon",
    "006": "Basagan",
    "007": "Basud (Pob.)",
    "008": "Bogñabong",
    "009": "Bombon (Pob.)",
    "010": "Bonot",
    "012": "Buang",
    "013": "Buhian",
    "014": "Cabagñan",
    "015": "Cobo",
    "016": "Comon ",
    "017": "Cormidal",
    "018": "Divino Rostro (Pob.)",
    "019": "Fatima",
    "020": "Guinobat",
    "021": "Hacienda (San Miguel Island)",
    "022": "Magapo",
    "023": "Mariroc",
    "024": "Matagbac",
    "025": "Oras",
    "026": "Oson",
    "027": "Panal",
    "029": "Pawa",
    "030": "Pinagbobong",
    "031": "Quinale Cabasan (Pob.)",
    "032": "Quinastillojan",
    "033": "Rawis (San Miguel Island)",
    "034": "Sagurong (San Miguel Island)",
    "035": "Salvacion",
    "036": "San Antonio",
    "037": "San Carlos",
    "011": "San Isidro (Boring)",
    "038": "San Juan (Pob.)",
    "039": "San Lorenzo",
    "040": "San Ramon",
    "041": "San Roque",
    "042": "San Vicente",
    "044": "Santo Cristo (Pob.)",
    "045": "Sua-Igot",
    "046": "Tabiguian",
    "048": "Tagas",
    "049": "Tayhi (Pob.)",
    "050": "Visita (San Miguel Island)"
}
const _prog = {
    1: "1 - Sustainable Livelihood Program (DSWD)",
    2: "2 - Food for School",
    3: "3 - Food for Work/Cash for Work",
    4: "4 - Social Pension for Indigent Senior Citizen",
    5: "5 - Pantawid Pamilyan Pilipino Program (4Ps)/KALAHI-CIDDSS/Listahan",
    6: "6 - Agrarian Reform Community Development Program (ARCDP)",
    7: "7 - Training for Work Scholarship Program (TWSP)",
    8: "8 - Community-Based Employment Program (CBEP)",
    9: "9 - Health care Insurance (Maxicare/Medicare/Intellicare/etc.)",
    10: "10 - Gender and Development Programs",
    11: "11 - Health Care Assistance Program",
    12: "12 - Supplemental Feeding Program",
    13: "13 - Educational Assistance/Scholarship Program",
    14: "14 - Skills or Livelihood Training Program",
    15: "15 - Credit/Lending Program",
    16: "16 - Housing Program",
    17: "17 - LGU Gift Giving / Pamaskong Handog",
    18: "18 - Longevity Cash Gift for Indigent Seinor Citizen",
    19: "19 - Other type of program"
}
const _cod = {
    1: "Heart disease",
    2: "Disease of the Vascular System",
    3: "Pneumonia",
    4: "Tuberculosis",
    5: "Cancer",
    6: "Diarrhea",
    7: "Complication during pregnancy of childbirth",
    8: "Vehicular accident",
    9: "Diabetes",
    10: "Disease of the Lungs",
    11: "Disease of the Kidney",
    12: "Murdered",
    13: "Others"
}
const _sex = {
    1: "Male",
    2: "Female"
}
const _civstat = {
    1: "Single",
    2: "Married",
    3: "Widow",
    4: "Separated",
    5: "Common Law/Live-In",
    6: "Don't know"
}
const _reln = {
    1: "Head",
    2: "Spouse",
    3: "Son/Daughter",
    4: "Son-in-Law/Daughter-in-Law",
    5: "Grandchildren",
    6: "Parents",
    7: "Father-in-Law/Mother-in-Law",
    8: "Brother/Sister",
    9: "Uncle/Aunt",
    10: "Grandparents",
    11: "Nephew/Niece",
    12: "Housemaid/Houseboy",
    13: "Others"
}
const _hpq_stat = {
    0: "Incomplete",
    1: "Not validated",
    2: "Validated",
    3: "Uploaded"
}
//#endregion
function logOut() {

    Swal.fire({
        title: 'Ready to leave?',
        html: 'Click "Logout" below if you are ready to end your current session.',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Logout'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../main/logout.php";
        }
    })

}
//#region forms management
function hpq_view(hpq_id) {

    $.ajax({
        url: "session_set.php",
        method: "POST",
        data: {
            _id: hpq_id
        },
        success: function (r) {

            localStorage.setItem("prev_page", page_file);
            window.location.href = "page-hpq_form_view.php";

        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error',
            })
        }
    });

}
function hpq_edit(hpq_id) {

    $.ajax({
        url: "session_set.php",
        method: "POST",
        data: {
            _id: hpq_id
        },
        success: function (r) {

            localStorage.setItem("prev_page", page_file);
            window.location.href = "page-hpq_form_edit.php";

        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.result,
                icon: 'error'
            })
        }
    });

}
function hpq_delete(hpq_id) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete',
        timerProgressBar: true,
        timer: 5000
    }).then((result) => {
        if (result.isConfirmed) {
            delete_hpq(hpq_id);
        }
    })

}
function delete_hpq(hpq_id) {
    $.ajax({
        dataType: "json",
        url: "hpq_form_delete.php",
        method: "POST",
        data: {
            hpq_id: hpq_id
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function () {
                        location.reload();
                    })
                }
            } else {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: response["response"],
                    icon: 'error'
                })
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error',
            })
        }
    });
}
function hpq_save(save_mode) {

    exitMode = save_mode;
    let formData = $("#addnew_form").serializeJSON();

    $.ajax({
        dataType: "json",
        url: "hpq_form_update.php",
        method: "POST",
        data: {
            form_data: formData
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function () {
                        if (exitMode == 'exit') {
                            $("#addnew_form :input").off();
                            let prev_page = localStorage.getItem("prev_page");
                            window.location.href = prev_page;
                            localStorage.clear();
                        }
                    })
                } else if (response["response_code"] == 1) {
                    Swal.fire({
                        title: response["response"],
                        icon: 'info',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function () {
                        if (exitMode == 'exit') {
                            $("#addnew_form :input").off();
                            let prev_page = localStorage.getItem("prev_page");
                            window.location.href = prev_page;
                            localStorage.clear();
                        }
                    })
                }
            } else {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: response["response"],
                    icon: 'error'
                }).then(function (result) {
                    if (result.isConfirmed) {
                        if (exitMode == 'exit') {
                            $("#addnew_form :input").off();
                            let prev_page = localStorage.getItem("prev_page");
                            window.location.href = prev_page
                            localStorage.clear();
                        }
                    }
                })
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error',
            })
        }
    });
}
function validate_main_form() { // ok

    computeIncome();

    var nArray = [];

    ofw_declared = 0;
    unipar_declared = 0;
    pwd_declared = 0;
    pregnant_declared = 0;

    try {
        phsize_declared = hpq_mem.length;
    } catch (error) {
        console.log(error)
    }
    try {
        mdead_declared = hpq_death.length;
    } catch (error) {
        console.log(error)
    }

    numfam_specified = $("#numfam").val();
    ofw_specified = $("#numofw").val();
    pregnant_specified = $("#numpreg").val();
    unipar_specified = $("#numunipar").val();
    pwd_specified = $("#numpwd").val();
    phsize_specified = $("#phsize").val();
    mdead_specified = $("#mdead").val();

    $.each(hpq_mem, function (i, item) {

        nArray.push(item.nucfam);

        if (item.ofwind == 1) ofw_declared++;

        if (item.uniparind == 1) unipar_declared++;

        if (item.pwdind == 1) pwd_declared++

        if (item.sdg_pregind == 1) pregnant_declared++;

    });

    numfam_declared = Math.max.apply(Math, nArray);

    let addNewForm = document.getElementById("addnew_form").elements;

    //#region bunch of ifs
    if ($("#htype").val() == 5) {
        $(".htype_o_tr").show();
        $("#htype_o").required();
    } else {
        $(".htype_o_tr").fadeOut();
        $("#htype_o").val("").notRequired();
    }
    if ($("#water").val() == 12) {
        $(".water_o_tr").show();
        $("#water_o").required();
    } else {
        $(".water_o_tr").fadeOut();
        $("#water_o").val("").notRequired();
    }
    if ($("#toilet").val() == 7) {
        $(".toilet_o_tr").show();
        $("#toilet_o").required();
    } else {
        $(".toilet_o_tr").fadeOut();
        $("#toilet_o").val("").notRequired();
    }
    if ($("#tenur").val() == 11) {
        $(".tenur_o_tr").show();
        $("#tenur_o").required();
    } else {
        $(".tenur_o_tr").fadeOut();
        $("#tenur_o").val("").notRequired();
    }
    if ($("#elec_ind").val() == 1) {
        $(".elec_type_tr").show();
        $("#elec_type").required();
    } else {
        $(".elec_type_tr").fadeOut();
        $("#elec_type").val("").notRequired();
    }
    if ($("#tenur").val() == 1 || ($("#tenur").val() >= 3 && $("#tenur").val() <= 7) || $("#tenur").val() == 9 || $("#tenur").val() == 11) {
        $(".imprnt_tr").show();
        $("#imprnt").required();
    } else {
        $(".imprnt_tr").fadeOut();
        $("#imprnt").val("").notRequired();
    }
    if ($("#reloc_ind").val() == 1) {
        $(".reloc_tr").show();
        $(".reloc_inputs").required();
    } else {
        $(".reloc_tr").fadeOut();
        $(".reloc_inputs").val("").notRequired();
    }
    if ($("#easement_ind").val() == 1) {
        $(".easement_type_tr").show();
        $("#easement_type").required();
    } else {
        $(".easement_type_tr").fadeOut();
        $("#easement_type").val("").notRequired();
    }
    if ($("#haz_ind").val() == 1) {
        $(".haz_type_tr").show();
        $(".haz_inputs").required();
    } else {
        $(".haz_type_tr").fadeOut();
        $(".haz_inputs").val("").notRequired();
    }
    if ($("#haz_type").val() == 1) {
        $(".haz_flood_tr").show();
        $(".haz_flood_inputs").required();
        $(".haz_volcano_tr").fadeOut();
        $(".haz_volcano_inputs").val("").notRequired();
    } else if ($("#haz_type").val() == 2) {
        $(".haz_volcano_tr").show();
        $("#haz_volcano_dist").required();
        $(".haz_flood_tr").fadeOut();
        $(".haz_flood_inputs").val("").notRequired();
    } else {
        $(".haz_flood_tr, .haz_volcano_tr").fadeOut();
        $(".haz_flood_inputs, .haz_volcano_inputs").val("").notRequired();
    }
    if ($("#garb_other_ind").val() == 1) {
        $(".garb_other_o_tr").show();
        $("#garb_other_o").required();
    } else {
        $(".garb_other_o_tr").fadeOut();
        $("#garb_other_o").val("").notRequired();
    }
    if ($("#garb_collect").val() == 1) {
        $(".garb_collector_tr").show();
        $(".garb_collect_inputs").required();
    } else {
        $(".garb_collector_tr, .garb_collector_freq_o_tr").fadeOut();
        $(".garb_collect_inputs").val("").notRequired();
    }
    if ($("#garb_collector_freq").val() == 5) {
        $(".garb_collector_freq_o_tr").show();
        $("#garb_collector_freq_o").required();
    } else {
        $(".garb_collector_freq_o_tr").fadeOut();
        $("#garb_collector_freq_o").val("").notRequired();
    }
    if ($("#calam_typhoon_ind").val() == 1) {
        $("#calam_typhoon_aid_ind").attr("hidden", false).required();
    } else {
        $("#calam_typhoon_aid_ind").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_typhoon_aid_ind").val() == 1) {
        $("#calam_typhoon_aid_source").attr("hidden", false).required();
    } else {
        $("#calam_typhoon_aid_source").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_flood_ind").val() == 1) {
        $("#calam_flood_aid_ind").attr("hidden", false).required();
    } else {
        $("#calam_flood_aid_ind, #calam_flood_aid_source").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_flood_aid_ind").val() == 1) {
        $("#calam_flood_aid_source").attr("hidden", false).required();
    } else {
        $("#calam_flood_aid_source").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_drought_ind").val() == 1) {
        $("#calam_drought_aid_ind").attr("hidden", false).required();
    } else {
        $("#calam_drought_aid_ind").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_drought_aid_ind").val() == 1) {
        $("#calam_drought_aid_source").attr("hidden", false).required();
    } else {
        $("#calam_drought_aid_source").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_earthquake_ind").val() == 1) {
        $("#calam_earthquake_aid_ind").attr("hidden", false).required();
    } else {
        $("#calam_earthquake_aid_ind").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_earthquake_aid_ind").val() == 1) {
        $("#calam_earthquake_aid_source").attr("hidden", false).required();
    } else {
        $("#calam_earthquake_aid_source").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_eruption_ind").val() == 1) {
        $("#calam_eruption_aid_ind").attr("hidden", false).required();
    } else {
        $("#calam_eruption_aid_ind").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_eruption_aid_ind").val() == 1) {
        $("#calam_eruption_aid_source").attr("hidden", false).required();
    } else {
        $("#calam_eruption_aid_source").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_fire_ind").val() == 1) {
        $("#calam_fire_aid_ind").attr("hidden", false).required();
    } else {
        $("#calam_fire_aid_ind").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_fire_aid_ind").val() == 1) {
        $("#calam_fire_aid_source").attr("hidden", false).required();
    } else {
        $("#calam_fire_aid_source").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_epidemic_ind").val() == 1) {
        $("#calam_epidemic_aid_ind").attr("hidden", false).required();
    } else {
        $("#calam_epidemic_aid_ind").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#calam_epidemic_aid_ind").val() == 1) {
        $("#calam_epidemic_aid_source").attr("hidden", false).required();
    } else {
        $("#calam_epidemic_aid_source").attr("hidden", "hidden").val("").notRequired();
    }

    if ($("#calam_typhoon_ind").val() == 1 || $("#calam_flood_ind").val() == 1 || $("#calam_drought_ind").val() == 1 || $("#calam_earthquake_ind").val() == 1 || $("#calam_eruption_ind").val() == 1 || $("#calam_fire_ind").val() == 1 || $("#calam_epidemic_ind").val() == 1) {

        $(".calam_evac_tr").attr("hidden", false);
        $("#calam_evac").required();
    } else {
        $(".calam_evac_tr").attr("hidden", "hidden");
        $("#calam_evac").val("").notRequired();
    }

    if ($("#dpkit_water_ind").val() == 1) {
        $("#dpkit_water_last").attr("hidden", false).required();
    } else {
        $("#dpkit_water_last").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#dpkit_food_ind").val() == 1) {
        $("#dpkit_food_last").attr("hidden", false).required();
    } else {
        $("#dpkit_food_last").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#crop_ind").val() == 1) {
        $("#crop_csh, #crop_knd").attr("hidden", false).required();
        $(".agricrop").show();
        $(".agri_inputs").required();
    } else {
        $("#crop_csh, #crop_knd").attr("hidden", "hidden").val("").notRequired();
        $(".agricrop").fadeOut();
        $(".agri_inputs").val("").notRequired();
    }
    if ($("#live_ind").val() == 1) {
        $("#live_csh, #live_knd").attr("hidden", false).required();
    } else {
        $("#live_csh, #live_knd").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#fish_ind").val() == 1) {
        $("#fish_csh, #fish_knd").attr("hidden", false).required();
    } else {
        $("#fish_csh, #fish_knd").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#hunt_ind").val() == 1) {
        $("#hunt_csh, #hunt_knd").attr("hidden", false).required();
    } else {
        $("#hunt_csh, #hunt_knd").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#sale_ind").val() == 1) {
        $("#sale_csh, #sale_knd").attr("hidden", false).required();
    } else {
        $("#sale_csh, #sale_knd").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#manu_ind").val() == 1) {
        $("#manu_csh, #manu_knd").attr("hidden", false).required();
    } else {
        $("#manu_csh, #manu_knd").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#social_ind").val() == 1) {
        $("#social_csh, #social_knd").attr("hidden", false).required();
    } else {
        $("#social_csh, #social_knd").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#trans_ind").val() == 1) {
        $("#trans_csh, #trans_knd").attr("hidden", false).required();
    } else {
        $("#trans_csh, #trans_knd").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#quar_ind").val() == 1) {
        $("#quar_csh, #quar_knd").attr("hidden", false).required();
    } else {
        $("#quar_csh, #quar_knd").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#cons_ind").val() == 1) {
        $("#cons_csh, #cons_knd").attr("hidden", false).required();
    } else {
        $("#cons_csh, #cons_knd").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#oea_ind").val() == 1) {
        $("#oea_csh, #oea_knd").attr("hidden", false).required();
    } else {
        $("#oea_csh, #oea_knd").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#agri_own_id").val() == 9) {
        $(".agri_own_o_tr").show();
        $("#agri_own_o").attr("hidden", false).required();
    } else {
        $(".agri_own_o_tr").fadeOut();
        $("#agri_own_o").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_slp_ind").val() == 1) {
        $("#prog_slp_impl").attr("hidden", false).required();
    } else {
        $("#prog_slp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_ffp_ind").val() == 1) {
        $("#prog_ffp_impl").attr("hidden", false).required();
    } else {
        $("#prog_ffp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_cfw_ind").val() == 1) {
        $("#prog_cfw_impl").attr("hidden", false).required();
    } else {
        $("#prog_cfw_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_sp_ind").val() == 1) {
        $("#prog_sp_impl").attr("hidden", false).required();
    } else {
        $("#prog_sp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_pppp_ind").val() == 1) {
        $("#prog_pppp_impl").attr("hidden", false).required();
    } else {
        $("#prog_pppp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_arcdp_ind").val() == 1) {
        $("#prog_arcdp_impl").attr("hidden", false).required();
    } else {
        $("#prog_arcdp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_twsp_ind").val() == 1) {
        $("#prog_twsp_impl").attr("hidden", false).required();
    } else {
        $("#prog_twsp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_cbep_ind").val() == 1) {
        $("#prog_cbep_impl").attr("hidden", false).required();
    } else {
        $("#prog_cbep_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_hci_ind").val() == 1) {
        $("#prog_hci_impl").attr("hidden", false).required();
    } else {
        $("#prog_hci_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_gadp_ind").val() == 1) {
        $("#prog_gadp_impl").attr("hidden", false).required();
    } else {
        $("#prog_gadp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_hcap_ind").val() == 1) {
        $("#prog_hcap_name, #prog_hcap_impl").attr("hidden", false).required();
    } else {
        $("#prog_hcap_name, #prog_hcap_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_sfp_ind").val() == 1) {
        $("#prog_sfp_name, #prog_sfp_impl").attr("hidden", false).required();
    } else {
        $("#prog_sfp_name, #prog_sfp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_easp_ind").val() == 1) {
        $("#prog_easp_name, #prog_easp_impl").attr("hidden", false).required();
    } else {
        $("#prog_easp_name, #prog_easp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_sltp_ind").val() == 1) {
        $("#prog_sltp_name, #prog_sltp_impl").attr("hidden", false).required();
    } else {
        $("#prog_sltp_name, #prog_sltp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_clp_ind").val() == 1) {
        $("#prog_clp_name, #prog_clp_impl").attr("hidden", false).required();
    } else {
        $("#prog_clp_name, #prog_clp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_hp_ind").val() == 1) {
        $("#prog_hp_name, #prog_hp_impl").attr("hidden", false).required();
    } else {
        $("#prog_hp_name, #prog_hp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_lgg_ind").val() == 1) {
        $("#prog_lgg_name, #prog_lgg_impl").attr("hidden", false).required();
    } else {
        $("#prog_lgg_name, #prog_lgg_impl").attr("hidden", "hidden").val("").notRequired();
    }
    if ($("#prog_lcgp_ind").val() == 1) {
        $("#prog_lcgp_name, #prog_lcgp_impl").attr("hidden", false).required();
    } else {
        $("#prog_lcgp_name, #prog_lcgp_impl").attr("hidden", "hidden").val("").notRequired();
    }
    //#endregion
    requiredFieldsCount = 0;
    $("#reqFields").html("");
    var thisElement;
    // Loop through form input elements to check if there are required field without values
    for (let i = 0; i < addNewForm.length; i++) {
        thisElement = addNewForm[i];
        if (thisElement.value == "" && thisElement.getAttribute('required') == 'required') {
            requiredFieldsCount++;
            req(thisElement.id);
            if (!$("#" + thisElement.id).hasClass("border-danger")) {
                $("#" + thisElement.id).toggleClass("border-danger");
            }
        } else if (thisElement.value != "" && thisElement.getAttribute('required') == 'required') {
            if ($("#" + thisElement.id).hasClass("border-danger")) {
                $("#" + thisElement.id).toggleClass("border-danger");
                $("#" + thisElement.id).toggleClass("border-success");
            } else if (!$("#" + thisElement.id).hasClass("border-success")) {
                $("#" + thisElement.id).toggleClass("border-success");
            }
        } else if (thisElement.getAttribute('disabled')) {
            if ($("#" + thisElement.id).hasClass("border-danger")) {
                $("#" + thisElement.id).toggleClass("border-danger");
            }
        }
    }
    //#region another bunch of ifs
    if (numfam_specified < 1) {
        req('numfam');
        requiredFieldsCount++;
        if (!$("#numfam").hasClass("border-danger")) {
            $("#numfam").toggleClass("border-danger");
        }
    } else {
        if (numfam_specified != numfam_declared) {
            req('numfam');
            requiredFieldsCount++;
            if (!$("#numfam").hasClass("border-danger")) {
                $("#numfam").toggleClass("border-danger");
            }
        } else {
            if ($("#numfam").hasClass("border-danger")) {
                $("#numfam").toggleClass("border-danger");
            }
        }
    }
    if (ofw_specified != ofw_declared) {
        req('numofw');
        requiredFieldsCount++;
        if (!$("#numofw").hasClass("border-danger")) {
            $("#numofw").toggleClass("border-danger");
        }
    } else {
        if ($("#numofw").hasClass("border-danger")) {
            $("#numofw").toggleClass("border-danger");
        }
    }
    if (pregnant_specified != pregnant_declared) {
        req('numpreg');
        requiredFieldsCount++;
        if (!$("#numpreg").hasClass("border-danger")) {
            $("#numpreg").toggleClass("border-danger");
        }
    } else {
        if ($("#numpreg").hasClass("border-danger")) {
            $("#numpreg").toggleClass("border-danger");
        }
    }
    if (unipar_specified != unipar_declared) {
        req('numunipar');
        requiredFieldsCount++;
        if (!$("#numunipar").hasClass("border-danger")) {
            $("#numunipar").toggleClass("border-danger");
        }
    } else {
        if ($("#numunipar").hasClass("border-danger")) {
            $("#numunipar").toggleClass("border-danger");
        }
    }
    if (pwd_specified != pwd_declared) {
        req('numpwd');
        requiredFieldsCount++;
        if (!$("#numpwd").hasClass("border-danger")) {
            $("#numpwd").toggleClass("border-danger");
        }
    } else {
        if ($("#numpwd").hasClass("border-danger")) {
            $("#numpwd").toggleClass("border-danger");
        }
    }

    if (phsize_specified > phsize_declared) {
        req('phsize');
        requiredFieldsCount++;
        if (!$("#phsize").hasClass("border-danger")) {
            $("#phsize").toggleClass("border-danger");
        }
        $("#addmem_btn").show();
    } else {
        if ($("#phsize").hasClass("border-danger")) {
            $("#phsize").toggleClass("border-danger");
        }
        $("#addmem_btn").fadeOut();
    }

    if (phsize_specified < 1) {
        req('phsize');
        requiredFieldsCount++;
        if (!$("#phsize").hasClass("border-danger")) $("#phsize").toggleClass("border-danger");
    }

    if (mdead_specified != mdead_declared) {
        req('mdead');
        requiredFieldsCount++;
        if (!$("#mdead").hasClass("border-danger")) {
            $("#mdead").toggleClass("border-danger");
        }
        $("#adddeceased_btn").show();
    } else {
        if ($("#mdead").hasClass("border-danger")) {
            $("#mdead").toggleClass("border-danger");
        }
        $("#adddeceased_btn").fadeOut();
    }
    //#endregion
    if (requiredFieldsCount > 0) {

        $("#hpq_stat").val("0");

        $(".required-field").show();
        $("#requiredField").text(requiredFieldsCount);

    } else if (requiredFieldsCount < 1) {

        $(".required-field").fadeOut();

    }

}
function computeIncome() { // ok

    let crop_csh, live_csh, fish_csh, hunt_csh, sale_csh, manu_csh, social_csh, trans_csh, quar_csh, cons_csh, oea_csh, totea_csh, totwage_csh;
    let crop_knd, live_knd, fish_knd, hunt_knd, sale_knd, manu_knd, social_knd, trans_knd, quar_knd, cons_knd, oea_knd, totea_knd, totwage_knd;
    let ags_csh, ofw_csh, supf_csh, supr_csh, rent_csh, intr_csh, pen_csh, div_csh, oth_csh, etot_csh
    let ags_knd, ofw_knd, supf_knd, supr_knd, rent_knd, intr_knd, pen_knd, div_knd, oth_knd, etot_knd
    let imprnt, imprnttot, totin_csh, totin_knd, totin;

    crop_csh = +$("#crop_csh").val();
    live_csh = +$("#live_csh").val();
    fish_csh = +$("#fish_csh").val();
    hunt_csh = +$("#hunt_csh").val();
    sale_csh = +$("#sale_csh").val();
    manu_csh = +$("#manu_csh").val();
    social_csh = +$("#social_csh").val();
    trans_csh = +$("#trans_csh").val();
    quar_csh = +$("#quar_csh").val();
    cons_csh = +$("#cons_csh").val();
    oea_csh = +$("#oea_csh").val();
    totea_csh = (crop_csh + live_csh + fish_csh + hunt_csh + sale_csh + manu_csh + social_csh + trans_csh + quar_csh + cons_csh + oea_csh);
    $("#totea_csh").val(+totea_csh);

    crop_knd = +$("#crop_knd").val();
    live_knd = +$("#live_knd").val();
    fish_knd = +$("#fish_knd").val();
    hunt_knd = +$("#hunt_knd").val();
    sale_knd = +$("#sale_knd").val();
    manu_knd = +$("#manu_knd").val();
    social_knd = +$("#social_knd").val();
    trans_knd = +$("#trans_knd").val();
    quar_knd = +$("#quar_knd").val();
    cons_knd = +$("#cons_knd").val();
    oea_knd = +$("#oea_knd").val();
    totea_knd = (crop_knd + live_knd + fish_knd + hunt_knd + sale_knd + manu_knd + social_knd + trans_knd + quar_knd + cons_knd + oea_knd);
    $("#totea_knd").val(+totea_knd);

    ags_csh = +$("#ags_csh").val();
    ofw_csh = +$("#ofw_csh").val();
    supf_csh = +$("#supf_csh").val();
    supr_csh = +$("#supr_csh").val();
    rent_csh = +$("#rent_csh").val();
    intr_csh = +$("#intr_csh").val();
    pen_csh = +$("#pen_csh").val();
    div_csh = +$("#div_csh").val();
    oth_csh = +$("#oth_csh").val();
    etot_csh = (ags_csh + ofw_csh + supf_csh + supr_csh + rent_csh + intr_csh + pen_csh + div_csh + oth_csh);
    $("#etot_csh").val(+etot_csh);

    ags_knd = +$("#ags_knd").val();
    ofw_knd = +$("#ofw_knd").val();
    supf_knd = +$("#supf_knd").val();
    supr_knd = +$("#supr_knd").val();
    rent_knd = +$("#rent_knd").val();
    intr_knd = +$("#intr_knd").val();
    pen_knd = +$("#pen_knd").val();
    div_knd = +$("#div_knd").val();
    oth_knd = +$("#oth_knd").val();
    etot_knd = (ags_knd + ofw_knd + supf_knd + supr_knd + rent_knd + intr_knd + pen_knd + div_knd + oth_knd);
    $("#etot_knd").val(+etot_knd);

    imprnt = +$("#imprnt").val();
    imprnttot = imprnt * 12;
    $("#imprnttot").val(imprnttot);
    totin_csh = (totea_csh + etot_csh);
    totin_knd = (totea_knd + etot_knd);
    totin = (totin_csh + totin_knd + imprnttot);
    $("#totin_csh").val(totin_csh);
    $("#totin_knd").val(totin_knd);
    $("#totin").val(totin);

}
function req(id) {
    $("#reqFields").append('<li><a class="dropdown-item my-0 py-0 reqFields" onclick="getme(this.rel);" rel="' + id + '" href="#' + id + '">' + id + '</a></li>');
}
function getme(me) {
    const pages_nav_li = document.getElementById("pages_nav").children;
    const tab_pane_id = $(`#${me}`).closest(".tab-pane").attr("id")
    var el;

    for (let i = 0; i < pages_nav_li.length; i++) {
        if (pages_nav_li[i].children[0].rel == tab_pane_id) {
            el = pages_nav_li[i].children[0];
            el.click();
        }
    }
}
//#endregion
//#region members
function members_get() {

    let table_contents = [], nav_contents = [];
    $.ajax({
        dataType: "json",
        url: "hpq_members_list.php",
        method: "POST",
        success: function (memData) {

            hpq_mem = memData;

            $.each(memData, function (i, item) {
                table_contents.push('<tr>');
                table_contents.push('    <td>' + item.lname + ', ' + item.fname + ' ' + item.mname + '</td>');
                table_contents.push('    <td>' + _reln[item.reln] + '</td>');
                table_contents.push('    <td class="btn-group">');
                table_contents.push('    <a onclick="member_view(' + item.id + ')" class="btn btn-sm btn-outline-light">');
                table_contents.push('        <i class="bi bi-eye text-secondary"></i>');
                table_contents.push('    </a>');
                table_contents.push('    <a onclick="member_edit(' + item.id + ')" class="btn btn-sm btn-outline-light">');
                table_contents.push('        <i class="bi bi-pencil-square text-secondary"></i>');
                table_contents.push('    </a>');
                table_contents.push('    <a onclick="member_delete(' + item.id + ')" class="btn btn-sm btn-outline-light">');
                table_contents.push('        <i class="bi bi-trash text-secondary"></i>');
                table_contents.push('    </a>');
                table_contents.push('    </td>');
                table_contents.push('</tr>');
                nav_contents.push(' <li class="dropdown">')
                nav_contents.push('     <a class="nav-link collapsed" href="#" data-bs-toggle="dropdown"><i class="bi arrow-right"></i><span>' + item.lname + ', ' + item.fname + '<br><sup>' + _reln[item.reln] + '</sup></span></a>')
                nav_contents.push('     <ul class="dropdown-menu">')
                nav_contents.push('         <a onclick="member_view(' + item.id + ')" class="dropdown-item d-flex btn btn-sm btn-outline-light">');
                nav_contents.push('             <span class="bi bi-eye text-secondary me-2"></span>View');
                nav_contents.push('         </a>');
                nav_contents.push('         <a onclick="member_edit(' + item.id + ')" class="dropdown-item d-flex btn btn-sm btn-outline-light">');
                nav_contents.push('             <span class="bi bi-pencil-square text-secondary me-2"></span>Edit');
                nav_contents.push('         </a>');
                nav_contents.push('         <a onclick="member_delete(' + item.id + ')" class="dropdown-item d-flex btn btn-sm btn-outline-light">');
                nav_contents.push('             <span class="bi bi-trash text-secondary me-2"></span>Delete');
                nav_contents.push('         </a>');
                nav_contents.push('     </ul>')
                nav_contents.push(' </li>')
            });
            //nav_contents.push(' <li>')
            //nav_contents.push('     <a class="nav-link" onclick="member_edit(' + item.id + ')"><i class="bi arrow-right"></i><span>' + item.lname + ', ' + item.fname + '<br><sup>' + _reln[item.reln] + '</sup></span></a>')
            //nav_contents.push(' </li>')
        },
        complete: function () {
            $("#mem_table").html(table_contents.join("").toString());
            $("#members_nav").html(nav_contents.join("").toString());
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: 'Could not fetch members data',
                icon: 'error',
            })
        }
    });

}
function member_view(id) {

    $("#addmemModal").modal("show");

    $.each(hpq_mem, function (i, item) {

        if (item.id == id) {
            for (let prop in item) {

                if (item.reln == 1) { hh_head_disabled = false };
                if (item.reln == 2) { hh_spouse_disabled = false };
                if (item.ofwind == 1) { mem_is_ofw = true } else { mem_is_ofw = false };
                if (item.uniparind == 1) { mem_is_unipar = true } else { mem_is_unipar = false };
                if (item.pwdind == 1) { mem_is_pwd = true } else { mem_is_pwd = false };
                if (item.sdg_pregind == 1) { mem_is_pregnant = true } else { mem_is_pregnant = false };

                $("#addmem_form").find("#" + prop).val(item[prop]);

            }
        }
    });

    $("#addmem_form").find(".add_edit_hpq").hide();
    $("#addmem_form").find(".view_hpq").show();

}
function member_edit(id) {

    $("#addmemModal").modal("show");
    mem_edit_mode = true;
    $.each(hpq_mem, function (i, item) {

        if (item.id == id) {
            for (let prop in item) {

                if (item.reln == 1) { hh_head_disabled = false };
                if (item.reln == 2) { hh_spouse_disabled = false };
                if (item.ofwind == 1) { mem_is_ofw = true } else { mem_is_ofw = false };
                if (item.uniparind == 1) { mem_is_unipar = true } else { mem_is_unipar = false };
                if (item.pwdind == 1) { mem_is_pwd = true } else { mem_is_pwd = false };
                if (item.sdg_pregind == 1) { mem_is_pregnant = true } else { mem_is_pregnant = false };

                $("#addmem_form").find("#" + prop).val(item[prop]);

            }
        }
    });


    if ($("#reln").val() == 1) hh_head_disabled = false;
    if ($("#reln").val() == 2) hh_spouse_disabled = false;
    $("#addmem_form").find(".add_edit_hpq").show();
    $("#addmem_form").find(".view_hpq").fadeOut();

}
function member_delete(mem_id) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete',
        timerProgressBar: true,
        timer: 5000
    }).then((result) => {
        if (result.isConfirmed) {
            delete_mem(mem_id);
        }
    })
}
function delete_mem(mem_id) {
    $.ajax({
        dataType: "json",
        url: "hpq_member_delete.php",
        method: "POST",
        data: {
            _id: mem_id
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function () {
                        members_get();
                    })
                }
            } else {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: response["response"],
                    icon: 'error'
                })
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error'
            })
        }
    });
}
function validated_add_mem_form() { // ok

    let age;

    let today = new Date();
    let bday = new Date($("#birthdate").val());
    age = today.getFullYear() - bday.getFullYear();
    let m = today.getMonth() - bday.getMonth();

    if (m < 0 || (m === 0 && today.getDate() < bday.getDate())) {
        age--;
    }

    $("#age").val(age);
    $(".dfname").html($("#fname").val());

    if ($("#nucfam").val() != 1) {
        $("#reln option[value='1']").prop("hidden", true);
        $("#reln option[value='2']").prop("hidden", true);
    } else {
        if (hh_head_disabled) {
            $("#reln option[value='1']").prop("hidden", true);
        } else {
            $("#reln option[value='1']").prop("hidden", false);
        }
        if (hh_spouse_disabled) {
            $("#reln option[value='2']").prop("hidden", true);
        } else {
            $("#reln option[value='2']").prop("hidden", false);
        }
    }
    if (xf_head_disabled) {
        $("#reln2 option[value='1']").prop("hidden", true);
    } else {
        $("#reln2 option[value='1']").prop("hidden", false);
    }
    if (xf_spouse_disabled) {
        $("#reln2 option[value='2']").prop("hidden", true);
    } else {
        $("#reln2 option[value='2']").prop("hidden", false);
    }

    //#region bunch of ifs
    if (age >= 3) {
        if (ofw_specified < 1) {
            $(".mlenres_tr").show();
            $("#mlenres").required();
        }
        $(".civstat, .educ").show();
        $("#civstat, #educind, #educal").required();
    } else {
        $(".mlenres_tr").hide();
        $("#mlenres").notRequired();
        $(".civstat, .educ").hide();
        $("#civstat, #educind, #educal").val("").notRequired();
        $(".educ_inputs").val("").notRequired();
    }
    if (age >= 5) {
        $(".literacy, .job").show();
        $("#literind, #jobind").required();
    } else {
        $(".literacy, .job").hide();
        $("#literind, #jobind").val("").notRequired();
    }
    if (age >= 10) {
        $(".gender, .gender_t").show();
        $("#gender, #gender_t").required();
    } else {
        $(".gender, .gender_t").hide();
        $("#gender, #gender_t").val("").notRequired();
    }
    if ((age >= 10 && ofw_specified > 0 && ofw_specified != ofw_specified) || (age >= 10 && ofw_specified > 0 && mem_is_ofw)) {
        $(".ofwind_tr").show();
        $("#ofwind").required();
    } else {
        $(".ofw, .ofwind_tr").hide();
        $("#ofwind").val("").notRequired();
        $(".ofw_inputs").val("").notRequired();
    }
    if ((age >= 10 && unipar_specified > 0 && unipar_specified != unipar_declared) || (age >= 10 && unipar_specified > 0 && mem_is_unipar)) {
        $(".soloparent").show();
        $("#uniparind").required();
    } else {
        $(".soloparent").hide();
        $("#uniparind").val("").notRequired();
        $(".sp_inputs").val("").notRequired();
    }
    if (age >= 60) {
        $(".seniorcitizen").show();
        $("#scid").required();
    } else {
        $(".seniorcitizen").hide();
        $("#scid").val("").notRequired();
    }
    if ((age >= 12 && $("#sex").val() == 2 && pregnant_specified > 0 && pregnant_specified != pregnant_declared) || (age >= 12 && $("#sex").val() == 2 && pregnant_specified > 0 && mem_is_pregnant)) {
        $(".sdg").show();
        $(".rcs_inputs").required();
    } else {
        $(".sdg").hide();
        $(".sdg_inputs").val("").notRequired();
    }
    if ($("#reln").val() == 13) {
        $(".reln_o_tr").show();
        $("#reln_o").required();
    } else {
        $(".reln_o_tr").hide();
        $("#reln_o").val("").notRequired();
    }
    if ($("#nucfam").val() > 1) {
        $(".reln2_tr").show();
        $("#reln2").required();
    } else {
        $(".reln2_tr").hide();
        $("#reln2").val("").notRequired();
    }
    if ($("#reln2").val() == 13) {
        $(".reln2_o_tr").show();
        $("#reln2_o").required();
    } else {
        $(".reln2_o_tr").hide();
        $("#reln2_o").val("").notRequired();
    }
    if ($("#civstat").val() == 2 || $("#civstat").val() == 5) {
        $(".familyplanning").show();
        $("#famplanind").required();
    } else /**if ($("#civstat").val() != 2 || $("#civstat").val() != 5)*/ {
        $(".familyplanning").hide();
        $("#famplanind").val("").notRequired();
        $(".fp_inputs").val("").notRequired();
    }
    if ($("#religion").val() == 7) {
        $(".religion_o").show();
        $("#religion_o").required();
    } else {
        $(".religion_o").hide();
        $("#religion_o").val("").notRequired();
    }
    if ($("#gender").val() == 1) {
        $(".gender_t").show();
        $("#gender_t").required();
    } else {
        $(".gender_t").hide();
        $("#gender_t").val("").notRequired();
    }
    if ($("#ethgrp").val() == 25) {
        $(".ethgrp_o").show();
        $("#ethgrp_o").required();
    } else {
        $(".ethgrp_o").hide();
        $("#ethgrp_o").val("").notRequired();
    }
    if ($("#ofwind").val() == 1) {
        $(".ofw").show();
        $(".ofw_inputs").required();

        $(".mlenres_tr, .mlenres_o_tr").hide();
        $("#mlenres, #mlenres_o").val("").notRequired();
    } else /**if ($("#ofwind").val() == 2)*/ {
        $(".ofw").hide();
        $(".ofw_inputs").val("").notRequired();
        if (age >= 3) {
            $(".mlenres_tr").show();
            $("#mlenres").required();
        }
    }
    if ($("#mlenres").val() == 2) {
        $(".mlenres_o_tr").show();
        $("#mlenres_o").required();
    } else {
        $(".mlenres_o_tr").hide();
        $("#mlenres_o").val("").notRequired();
    }
    if ($("#ofw_reason_leave").val() == 7) {
        $(".ofw_reason_leave_o_tr").show();
        $("#ofw_reason_leave_o").required();
    } else {
        $(".ofw_reason_leave_o_tr").hide();
        $("#ofw_reason_leave_o").val("").notRequired();
    }
    if ($("#ofw_reason_return").val() == 5) {
        $(".ofw_reason_return_o_tr").show();
        $("#ofw_reason_return_o").required();
    } else {
        $(".ofw_reason_return_o_tr").hide();
        $("#ofw_reason_return_o").val("").notRequired();
    }
    if ($("#ofw_plans_return").val() == 5) {
        $(".ofw_plans_return_o_tr").show();
        $("#ofw_plans_return_o").required();
    } else {
        $(".ofw_plans_return_o_tr").hide();
        $("#ofw_plans_return_o").val("").notRequired();
    }
    if ($("#ofw_remit_spent").val() == 4) {
        $(".ofw_remit_spent_o_tr").show();
        $("#ofw_remit_spent_o").required();
    } else {
        $(".ofw_remit_spent_o_tr").hide();
        $("#ofw_remit_spent_o").val("").notRequired();
    }
    if ($("#ofw_services").val() == 5) {
        $(".ofw_services_o_tr").show();
        $("#ofw_services_o").required();
    } else {
        $(".ofw_services_o_tr").hide();
        $("#ofw_services_o").val("").notRequired();
    }
    if ($("#educind").val() == 1) {
        $(".gradel_tr, .schtype_tr").show();
        $("#gradel, #schtype").required();
    } else if ($("#educind").val() == 2) {
        $(".gradel_tr, .schtype_tr").hide();
        $("#gradel, #schtype").val("").notRequired();

        if (age <= 24) {
            $(".ynotsch_tr").show();
            $("#ynotsch").required();
        } else {
            $(".ynotsch_tr, .ynotsch_o_tr").hide();
            $("#ynotsch, #ynotsch_o_tr").val("").notRequired();
        }

    }
    if ($("#gradel").val() >= 23 && $("#gradel").val() <= 41) {
        $(".course_tr").show();
        $("#course").required();
    } else {
        $(".course_tr").hide();
        $("#course").val("").notRequired();
    }
    if ($("#ynotsch").val() == 15) {
        $(".ynotsch_o_tr").show();
        $("#ynotsch_o").required();
    } else {
        $(".ynotsch_o_tr").hide();
        $("#ynotsch_o").val("").notRequired();
    }
    if (($("#educal").val() >= 23 && $("#educal").val() <= 41) || ($("#educal").val() >= 210 && $("#educal").val() <= 400)) {
        $(".fcourse_tr").show();
        $("#fcourse").required();
    } else {
        $(".fcourse_tr").hide();
        $("#fcourse").val("").notRequired();
    }
    if ($("#literind").val() == 1) {
        $(".lang_tr").show();
        $("#lang").required();
    } else {
        $(".lang_tr, .lang_o_tr").hide();
        $("#lang, #lang_o").val("").notRequired();
    }
    if ($("#lang").val() == 8) {
        $(".lang_o_tr").show();
        $("#lang_o").required();
    } else {
        $(".lang_o_tr").hide();
        $("#lang_o").val("").notRequired();
    }
    if ($("#jobind").val() == 1) {
        $(".occup_tr").show();
        $(".job_inputs").required();

        if (age >= 15) {
            $(".15up_tr").show();
            $(".job_inputs_15up").required();
        } else {
            $(".15up_tr").hide();
            $(".job_inputs_15up").val("").notRequired();
        }

    } else {
        $(".occup_tr").hide();
        $(".job_inputs, .job_inputs_15up").val("").notRequired();
        $(".15up_tr").hide();
    }
    if ($("#crime").val() == 1) {
        $(".crimetype_tr").show();
        $("#crimetype").required();
    } else {
        $(".crimetype_tr, .crimetype_o_tr").hide();
        $("#crimetype, #crimetype_o").val("").notRequired();
    }
    if ($("#crimetype").val() == 7) {
        $(".crimetype_o_tr").show();
        $("#crimetype_o").required();
    } else {
        $(".crimetype_o_tr").hide();
        $("#crimetype_o").val("").notRequired();
    }
    if ($("#healthcareprovider").val() == 8) {
        $(".healthcareprovider_o_tr").show();
        $("#healthcareprovider_o").required();
    } else {
        $(".healthcareprovider_o_tr").hide();
        $("#healthcareprovider_o").val("").notRequired();
    }
    if ($("#uniparind").val() == 1) {
        $(".uniparreason_tr").show();
        $("#uniparreason").required();
    } else {
        $(".uniparreason_tr, .uniparreason_o_tr").hide();
        $("#uniparreason, #uniparreason_o").val("").notRequired();
    }
    if ($("#uniparreason").val() == 10) {
        $(".uniparreason_o_tr").show();
        $("#uniparreason_o").required();
    } else {
        $(".uniparreason_o_tr").hide();
        $("#uniparreason_o").val("").notRequired();
    }
    if ((pwd_specified > 0 && pwd_specified != pwd_declared) || (pwd_specified > 0 && mem_is_pwd)) {
        $(".pwd").show();
        $("#pwdind").required();
    } else {
        $(".pwd, .pwd_inputs_tr, .pwd_inputs_o_tr").hide();
        $(".pwdind, .pwd_inputs").val("").notRequired();
    }
    if ($("#pwdind").val() == 1) {
        $(".pwd_inputs_tr").show();
        $("#pwdtype, #pwdcause, #pwdid").required();
    } else {
        $(".pwd_inputs_tr, .pwd_inputs_o_tr").hide();
        $(".pwd_inputs").val("").notRequired();
    }
    if ($("#pwdtype").val() == 17) {
        $(".pwdtype_o_tr").show();
        $("#pwdtype_o").required();
    } else {
        $(".pwdtype_o_tr").hide();
        $("#pwdtype_o").val("").notRequired();
    }
    if ($("#pwdcause").val() == 5) {
        $(".pwdcause_o_tr").show();
        $("#pwdcause_o").required();
    } else {
        $(".pwdcause_o_tr").hide();
        $("#pwdcause_o").val("").notRequired();
    }
    if ($("#famplanind").val() == 1) {
        $(".fp_meth_tr, .fp_provider_tr").show();
        $("#fp_meth, #fp_provider").required();
    } else {
        $(".fp_meth_tr, .fp_meth_o_tr, .fp_provider_tr, .fp_provider_o_tr").hide();
        $(".fp_inputs").val("").notRequired();
    }
    if ($("#fp_meth").val() == 18) {
        $(".fp_meth_o_tr").show();
        $("#fp_meth_o").required();
    } else {
        $(".fp_meth_o_tr").hide();
        $("#fp_meth_o").val("").notRequired();
    }
    if ($("#fp_provider").val() == 6) {
        $(".fp_provider_o_tr").show();
        $("#fp_provider_o").required();
    } else {
        $(".fp_provider_o_tr").hide();
        $("#fp_provider_o").val("").notRequired();
    }
    if ($("#sdg_numchildborn").val() > 0) {
        $(".sdg_preg5years_tr").show();
        $("#sdg_preg5years").required();
    } else {
        $(".sdg_preg5years_tr").hide();
        $("#sdg_preg5years").val("").notRequired();
        $(".sdg_preg5years_tb").hide();
        $(".sdg_withchild").val("").notRequired();
    }
    if ($("#sdg_preg5years").val() == 1) {
        $(".sdg_preg5years_tb").show();
        $(".sdg_withchild").required();
    } else {
        $(".sdg_preg5years_tb").hide();
        $(".sdg_withchild").val("").notRequired();
    }
    if ($("#sdg_childdelivery").val() == 6) {
        $(".sdg_childdelivery_o_tr").show();
        $("#sdg_childdelivery_o").required();
    } else {
        $(".sdg_childdelivery_o_tr").hide();
        $("#sdg_childdelivery_o").val("").notRequired();
    }
    if ($("#sdg_deliverassist").val() == 7) {
        $(".sdg_deliverassist_o_tr").show();
        $("#sdg_deliverassist_o").required();
    } else {
        $(".sdg_deliverassist_o_tr").hide();
        $("#sdg_deliverassist_o").val("").notRequired();
    }
    //#endregion

}
function update_reln() {

    var head_count = 0, spouse_count = 0;
    hh_head_disabled = false;
    hh_spouse_disabled = false;

    $.each(hpq_mem, function (i, item) {

        if (item.nucfam == 1 && item.reln == 1) {
            head_count++;
        }
        if (item.nucfam == 1 && item.reln == 2) {
            spouse_count++;
        }

    });

    if (head_count > 0) hh_head_disabled = true;
    if (spouse_count > 0) hh_spouse_disabled = true;

}
function update_reln2() {

    var xf_head_count = 0, xf_spouse_count = 0;
    xf_head_disabled = false;
    xf_spouse_disabled = false;

    $.each(hpq_mem, function (i, item) {

        if (item.nucfam == $("#nucfam").val() && item.reln2 == 1) {
            xf_head_count++;
        }
        if (item.nucfam == $("#nucfam").val() && item.reln2 == 2) {
            xf_spouse_count++;
        }

    });

    if (xf_head_count > 0) xf_head_disabled = true;
    if (xf_spouse_count > 0) xf_spouse_disabled = true;

}
$("#addmem_form").on("submit", function (e) {
    e.preventDefault();

    let memData = $("#addmem_form").serializeJSON();

    if (mem_edit_mode) {
        $.ajax({
            dataType: "json",
            url: "hpq_member_update.php",
            method: "POST",
            data: {
                mem_data: memData
            },
            success: function (response) {
                if (!response["error"]) {
                    if (response["response_code"] == 0) {
                        Swal.fire({
                            title: 'Success',
                            html: response["response"],
                            icon: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(function () {
                            members_get();
                        })
                    } else if (response["response_code"] == 1) {
                        Swal.fire({
                            title: response["response"],
                            icon: 'info',
                            timer: 2000,
                            showConfirmButton: false
                        })
                    }
                } else {
                    Swal.fire({
                        title: 'Oops!!! Something went wrong :(',
                        html: response["response"],
                        icon: 'error'
                    })
                }
            },
            complete: function () {
                document.getElementById("addmem_form").reset();
                $("#addmem_form :input").off();
                $("#addmemModal").modal("hide");
                members_get();
            },
            error: function (jqXHR) {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: jqXHR.responseText,
                    icon: 'error'
                })
            }
        });
    }

});
$("#addmemModal").on("show.bs.modal", function (e) {

    $("#addmem_form :input").on("change", function () {
        validated_add_mem_form();
    });

    nucfamchoices = null;

    for (let i = 1; i <= numfam_specified; i++) {
        nucfamchoices += "<option value='" + i + "'>" + i + "</option>"
    }
    $("#nucfam").html(nucfamchoices);

    update_reln();

    $("#nucfam").on("change", function () {
        update_reln2();
    });
});
$("#addmemModal").on("shown.bs.modal", function (e) {

    validated_add_mem_form();

});
$("#addmemModal").on("hidden.bs.modal", function (e) {
    document.getElementById("addmem_form").reset();
    mem_edit_mode = false;
});
//#endregion
//#region deceased
function deceased_get() {

    let c = [];
    $.ajax({
        dataType: "json",
        url: "hpq_deceased_list.php",
        method: "POST",
        success: function (deceasedData) {

            hpq_death = deceasedData;

            $.each(deceasedData, function (i, item) {
                c.push('<tr>');
                c.push('    <td>' + item.dlname + ', ' + item.dfname + ' ' + item.dmname + '</td>');
                c.push('    <td>' + _sex[item.dsex] + '</td>');
                c.push('    <td>' + item.dage_yr + '</td>');
                c.push('    <td class="btn-group">');
                c.push('    <a onclick="deceased_view(' + item.id + ')" class="btn btn-sm btn-outline-light">');
                c.push('        <i class="bi bi-eye text-secondary"></i>');
                c.push('    </a>');
                c.push('    <a onclick="deceased_edit(' + item.id + ')" class="btn btn-sm btn-outline-light">');
                c.push('        <i class="bi bi-pencil-square text-secondary"></i>');
                c.push('    </a>');
                c.push('    <a onclick="deceased_delete(' + item.id + ')" class="btn btn-sm btn-outline-light">');
                c.push('        <i class="bi bi-trash text-secondary"></i>');
                c.push('    </a>');
                c.push('    </td>');
                c.push('</tr>');
            });
        },
        complete: function () {
            $("#deceased_table").html(c.join("").toString());
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error',
            })
        }
    });

}
function deceased_view(id) {

    $("#adddeceasedModal").modal("show");

    $.each(hpq_death, function (i, item) {

        if (item.id == id) {
            for (let prop in item) {

                $("#adddeceased_form").find("#" + prop).val(item[prop]);

            }
        }
    });

    $("#adddeceased_form").find(".add_edit_hpq").hide();
    $("#adddeceased_form").find(".view_hpq").show();
}
function deceased_edit(id) {

    $("#adddeceasedModal").modal("show");
    deceased_edit_mode = true;
    $.each(hpq_death, function (i, item) {

        if (item.id == id) {
            for (let prop in item) {

                $("#adddeceased_form").find("#" + prop).val(item[prop]);

            }
        }
    });

    $("#adddeceased_form").find(".add_edit_hpq").show();
    $("#adddeceased_form").find(".view_hpq").fadeOut();

}
function deceased_delete(id) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete',
        timerProgressBar: true,
        timer: 5000
    }).then((result) => {
        if (result.isConfirmed) {
            delete_decased(id);
        }
    })
}
function delete_decased(id) {
    $.ajax({
        url: "hpq_deceased_delete.php",
        method: "POST",
        data: {
            _id: id
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    })
                }
            } else {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: response["response"],
                    icon: 'error'
                })
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error'
            })
        }
    });
}
function validated_add_deceased_form() { // ok

    if ($("#causeofdeath").val() == 13) {
        $(".causeofdeath_o_tr").show();
        $("#causeofdeath_o").required();
    } else {
        $(".causeofdeath_o_tr").fadeOut();
        $("#causeofdeath_o").val("").notRequired();
    }

}
$("#adddeceased_form").on("submit", function (e) {
    e.preventDefault();

    let deceasedData = $("#adddeceased_form").serializeJSON();

    if (deceased_edit_mode) {
        $.ajax({
            dataType: "json",
            url: "hpq_deceased_update.php",
            method: "POST",
            data: {
                deceased_data: deceasedData
            },
            success: function (response) {
                if (!response["error"]) {
                    if (response["response_code"] == 0) {
                        Swal.fire({
                            title: 'Success',
                            html: response["response"],
                            icon: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(function () {
                            deceased_get();
                        })
                    } else if (response["response_code"] == 1) {
                        Swal.fire({
                            title: response["response"],
                            icon: 'info',
                            timer: 2000,
                            showConfirmButton: false
                        })
                    }
                } else {
                    Swal.fire({
                        title: 'Oops!!! Something went wrong :(',
                        html: response["response"],
                        icon: 'error'
                    })
                }
            },
            complete: function () {
                document.getElementById("adddeceased_form").reset();
                $("#adddeceased_form :input").off();
                $("#adddeceasedModal").modal("hide");
                deceased_get();
            },
            error: function (jqXHR) {
                Swal.fire({
                    title: 'Oops!!! Something went wong :(',
                    html: jqXHR.responseText,
                    icon: 'error'
                })
            }
        });
    }

});
$("#adddeceasedModal").on("show.bs.modal", function (e) {

    $("#adddeceased_form :input").on("change", function () {
        validated_add_deceased_form();
    });

});
$("#adddeceasedModal").on("shown.bs.modal", function (e) {

    validated_add_deceased_form();

});
$("#adddeceasedModal").on("hidden.bs.modal", function (e) {
    document.getElementById("adddeceased_form").reset();
    deceased_edit_mode = false;
});
//#endregion
//#region programs
function programs_get() {

    let c = [];
    $.ajax({
        dataType: "json",
        url: "hpq_programs_list.php",
        method: "POST",
        success: function (programData) {

            hpq_prog = programData;

            $.each(hpq_prog, function (i, item) {
                c.push('<tr>');
                c.push('    <td>' + _prog[item.prog_type] + '</td>');
                c.push('    <td>' + item.prog_name + '</td>');
                c.push('    <td class="btn-group">');
                c.push('    <a onclick="program_view(' + item.id + ')" class="btn btn-sm btn-outline-light">');
                c.push('        <i class="bi bi-eye text-secondary"></i>');
                c.push('    </a>');
                c.push('    <a onclick="program_edit(' + item.id + ')" class="btn btn-sm btn-outline-light">');
                c.push('        <i class="bi bi-pencil-square text-secondary"></i>');
                c.push('    </a>');
                c.push('    <a onclick="program_delete(' + item.id + ')" class="btn btn-sm btn-outline-light">');
                c.push('        <i class="bi bi-trash text-secondary"></i>');
                c.push('    </a>');
                c.push('    </td>');
                c.push('</tr>');
            });

        },
        complete: function () {
            $("#prog_table").html(c.join("").toString());
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error',
            })
        }
    });

}
function get_refs(memData) {

    let c = [];
    $.each(memData, function (i, item) {
        c.push('<div class="form-check">');
        c.push('<input class="form-check-input" name="hpq_mem_ref[]' + item.memindex + '" type="checkbox" value="' + item.memindex + '" id="' + item.memindex + '">');
        c.push('<label class="form-check-label" for="' + item.memindex + '">');
        c.push(item.lname + ', ' + item.fname + ' ' + item.mname);
        c.push('</label>');
        c.push('</div>');
    });
    $("#hpq_ref").html(c.join(""));
}
function program_view(id) {

    $("#addprogModal").modal("show");

    $.each(hpq_prog, function (i, progRow) {

        if (progRow.id == id) {
            for (let key in progRow) {

                $("#addprog_form").find("#" + key).val(progRow[key]);

            }
        }
    });
    $.each(hpq_prog, function (i, progRow) {

        if (progRow.id == id) {
            for (let key in progRow["hpq_mem_ref"]) {

                $("#addprog_form").find("#" + key).attr("checked", "checked");

            }
        }
    });

    $("#addprog_form").find(".add_edit_hpq").hide();
    $("#addprog_form").find(".view_hpq").show();
}
function program_edit(id) {

    $("#addprogModal").modal("show");
    program_edit_mode = true;
    $.each(hpq_prog, function (i, progRow) {

        if (progRow.id == id) {

            for (let key in progRow) {

                $("#addprog_form").find("#" + key).val(progRow[key]);
            }
        }
    });
    $.each(hpq_prog, function (i, progRow) {

        if (progRow.id == id) {

            for (let key in progRow["hpq_mem_ref"]) {

                $("#addprog_form #hpq_ref").find("#" + progRow["hpq_mem_ref"][key]).attr("checked", "checked");
            }
        }
    });

    $("#addprog_form").find(".add_edit_hpq").show();
    $("#addprog_form").find(".view_hpq").fadeOut();
}
function program_delete(id) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete',
        timerProgressBar: true,
        timer: 5000
    }).then(function (result) {
        if (result.isConfirmed) {
            delete_prog(id);
        }
    })
}
function delete_prog(id) {
    $.ajax({
        dataType: "json",
        url: "hpq_program_delete.php",
        method: "POST",
        data: {
            _id: id
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    })
                } else if (response["response_code"] == 1) {
                    Swal.fire({
                        title: response["response"],
                        icon: 'info',
                        timer: 2000,
                        showConfirmButton: false
                    })
                }
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error'
            })
        }
    });
}
$("#addprog_form").on("submit", function (e) {
    e.preventDefault();

    let progData = $("#addprog_form").serializeJSON();
    if (program_edit_mode) {
        try {
            var ref_len = progData["hpq_mem_ref"].length
            $("#mem_ref_none").fadeOut();

            $.ajax({
                dataType: "json",
                url: "hpq_program_update.php",
                method: "POST",
                data: {
                    prog_data: progData
                },
                success: function (response) {
                    if (!response["error"]) {
                        if (response["response_code"] == 0) {
                            Swal.fire({
                                title: 'Success',
                                html: response["response"],
                                icon: 'success',
                                timer: 2000,
                                showConfirmButton: false
                            })
                        } else if (response["response_code"] == 1) {
                            Swal.fire({
                                title: response["response"],
                                icon: 'info',
                                timer: 2000,
                                showConfirmButton: false
                            })
                        }
                    } else {
                        Swal.fire({
                            title: 'Oops!!! Something went wrong :(',
                            html: response["response"],
                            icon: 'error'
                        })
                    }
                },
                complete: function () {
                    document.getElementById("addprog_form").reset();
                    $("#addprogModal").modal("hide");
                    programs_get();
                },
                error: function (jqXHR) {
                    Swal.fire({
                        title: 'Oops!!! Something went wrong :(',
                        html: jqXHR.responseText,
                        icon: 'error'
                    })
                }
            });
        } catch (error) {
            $("#mem_ref_none").show();
        }
    }

});
$("#addprogModal").on("show.bs.modal", function (e) {

    get_refs(hpq_mem);
    $("#prog_type").on("change", function () {
        if ($("#prog_type").val() == 19) {
            $("#prog_type_o_tr").show();
            $("#prog_type_o").required();
        } else {
            $("#prog_type_o_tr").fadeOut();
            $("#prog_type_o").notRequired();
        }
    })

});
$("#addprogModal").on("hidden.bs.modal", function (e) {
    $("#prog_type").off();
});
$("#addprogModal").on("hidden.bs.modal", function (e) {
    document.getElementById("addprog_form").reset();
    program_edit_mode = false;
});
//#endregion
//#region brgy
function brgy_edit(id) {

    $("#brgy_modal").modal("show");

    $.ajax({
        dataType: "json",
        url: "brgy_get_data.php",
        method: "POST",
        data: {
            brgy_id: id
        },
        success: function (response) {

            for (let prop in response) {

                $("#brgy_form").find("#" + prop).val(response[prop]);

            }

        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: 'Could not fetch requested data',
                icon: 'error',
            })
        }
    });

}
$("#brgy_form").on("submit", function (e) {
    e.preventDefault();

    let brgyData = $("#brgy_form").serializeJSON();

    $.ajax({
        dataType: "json",
        url: "brgy_profile_update.php",
        method: "POST",
        data: {
            brgy_data: brgyData
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function () {
                        load_brgy_table();
                        $("#brgy_modal").modal("hide");
                    })
                } else if (response["response_code"] == 1) {
                    Swal.fire({
                        title: response["response"],
                        icon: 'info',
                        timer: 2000,
                        showConfirmButton: false
                    })
                }
            } else {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: response["response"],
                    icon: 'error'
                })
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wong :(',
                html: jqXHR.responseText,
                icon: 'error'
            })
        }
    });
});
function load_brgy_table() {

    let c = [];
    $.ajax({
        dataType: "json",
        url: "brgy_get_data_list.php",
        method: "POST",
        data: {
            action: "action"
        },
        success: function (brgyData) {

            brgy_data = brgyData;

            $.each(brgy_data, function (i, item) {
                c.push('<tr>');
                c.push('    <td class="dt-control" data-id="' + item.id + '"></td>');
                c.push('    <td>' + _brgy[item.brgy] + '</td>');
                c.push('    <td><span class="float-end">' + item.pop_2008 + '</span></td>');
                c.push('    <td><span class="float-end">' + item.pop_2010 + '</span></td>');
                c.push('    <td><span class="float-end">' + item.pop_2012 + '</span></td>');
                c.push('    <td><span class="float-end">' + item.pop_2014 + '</span></td>');
                c.push('    <td><span class="float-end">' + item.pop_2016 + '</span></td>');
                c.push('    <td><span class="float-end">' + item.pop_2018 + '</span></td>');
                c.push('    <td><span class="float-end">' + item.pop_2020 + '</span></td>');
                c.push('    <td><span class="float-end">' + item.pop_2022 + '</span></td>');
                c.push('    <td align="center">');
                c.push('        <div class="btn-group">');
                c.push('            <a class="btn btn-sm btn-outline-light" onclick="brgy_edit(' + item.id + ');">');
                c.push('                <i class="bi bi-pencil-square text-secondary"></i>');
                c.push('            </a>');
                c.push('        </div>');
                c.push('    </td>');
                c.push('</tr>');
            });
        },
        complete: function () {
            $("#brgy_pop_data").html(c.join("").toString());
            table = $('#brgy_pop_dataTable').DataTable();
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: 'Could not fetch members data',
                icon: 'error',
            })
        }
    });

    function format(id) {

        var tabledata = "";

        $.each(brgy_data, function (i, item) {

            if (item.id == id) {
                tabledata = '<div class="slider"><table class="table table-bordered table-sm p-0 m-0" width="100%" cellspacing="0">' +
                    '           <thead>' +
                    '               <tr class="bg-info text-light text-center">' +
                    '                   <th width="20%">Census Year:</th>' +
                    '                   <th>2008</th>' +
                    '                   <th>2010</th>' +
                    '                   <th>2012</th>' +
                    '                   <th>2014</th>' +
                    '                   <th>2016</th>' +
                    '                   <th>2018</th>' +
                    '                   <th>2020</th>' +
                    '                   <th>2022</th>' +
                    '               </tr>' +
                    '           </thead>' +
                    '           <tbody>' +
                    '               <tr class="text-right">' +
                    '                   <th class="bg-info text-light text-left">Number of Households:</th>' +
                    '                   <td>' + item.hh_2008 + '</td>' +
                    '                   <td>' + item.hh_2010 + '</td>' +
                    '                   <td>' + item.hh_2012 + '</td>' +
                    '                   <td>' + item.hh_2014 + '</td>' +
                    '                   <td>' + item.hh_2016 + '</td>' +
                    '                   <td>' + item.hh_2018 + '</td>' +
                    '                   <td>' + item.hh_2020 + '</td>' +
                    '                   <td>' + item.hh_2022 + '</td>' +
                    '               </tr>' +
                    '               <tr class="text-right">' +
                    '                   <th class="bg-info text-light text-left">Male population:</th>' +
                    '                   <td>' + item.male_2008 + '</td>' +
                    '                   <td>' + item.male_2010 + '</td>' +
                    '                   <td>' + item.male_2012 + '</td>' +
                    '                   <td>' + item.male_2014 + '</td>' +
                    '                   <td>' + item.male_2016 + '</td>' +
                    '                   <td>' + item.male_2018 + '</td>' +
                    '                   <td>' + item.male_2020 + '</td>' +
                    '                   <td>' + item.male_2022 + '</td>' +
                    '               </tr>' +
                    '               <tr class="text-right">' +
                    '                   <th class="bg-info text-light text-left">Female population:</th>' +
                    '                   <td>' + item.female_2008 + '</td>' +
                    '                   <td>' + item.female_2010 + '</td>' +
                    '                   <td>' + item.female_2012 + '</td>' +
                    '                   <td>' + item.female_2014 + '</td>' +
                    '                   <td>' + item.female_2016 + '</td>' +
                    '                   <td>' + item.female_2018 + '</td>' +
                    '                   <td>' + item.female_2020 + '</td>' +
                    '                   <td>' + item.female_2022 + '</td>' +
                    '               </tr>' +
                    '           </tbody>' +
                    '       </table></div>';
            }

        });

        return tabledata;

    }

    //Add event listener for opening and closing details
    $('#brgy_pop_dataTable tbody').on('click', 'td.dt-control', function () {

        var tr = $(this).closest('tr');
        var row = table.row(tr);
        var id = $(this).data('id');

        if (row.child.isShown()) {
            $('div.slider', row.child()).slideUp("swing", function () {
                row.child.hide();
                tr.removeClass('shown');
            });
        } else {
            // Open this row
            row.child(format(id)).show();
            tr.addClass('shown');

            $("div.slider").slideDown();
        }
    });

}
//#endregion
//#region users
function load_profile() {

    $.ajax({
        dataType: "json",
        url: "user_current.php",
        method: "POST",
        success: function (userDetails) {

            for (var prop in userDetails) {
                $("#profile-overview").find("." + prop).html(userDetails[prop]);
                $("#profile-edit").find("." + prop).val(userDetails[prop]);
            }

        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error',
            })
        }
    });

}
function users_get() {
    $.ajax({
        url: "users_list.php",
        method: "POST",
        data: {
            action: "action"
        },
        beforeSend: function () {
            $('#users_table_body').html('<div class="spinner-border text-secondary m-1" role="status"><span class="visually-hidden">Loading...</span></div>');
        },
        success: function (data) {
            $('#users_table_body').html(data);
            $('#users_table').DataTable();
        }
    });
}
function user_view(id) {

    $.ajax({
        dataType: "json",
        url: "user_other.php",
        method: "POST",
        data: {
            _id: id
        },
        beforeSend: function () {
            $("#user_modal").modal("show");
        },
        success: function (userDetails) {
            for (var prop in userDetails) {
                $("#profile-overview").find("#" + prop).val(userDetails[prop]);
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error',
            })
        }
    });

}
function user_delete(id) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete',
        timerProgressBar: true,
        timer: 5000
    }).then((result) => {
        if (result.isConfirmed) {
            delete_user(id);
        }
    })
}
function delete_user(id) {
    $.ajax({
        dataType: "json",
        url: "user_delete.php",
        method: "POST",
        data: {
            _id: id
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function () {
                        users_get();
                    })
                }
            } else {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: response["response"],
                    icon: 'error'
                })
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error'
            })
        }
    });
}
$("#user_updateForm").on("submit", function (e) {
    e.preventDefault();

    let userData = $("#user_updateForm").serializeJSON();

    $.ajax({
        dataType: "json",
        url: "user_update.php",
        method: "POST",
        data: {
            user_data: userData
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function () {
                        load_profile();
                    })
                } else if (response["response_code"] == 1) {
                    Swal.fire({
                        title: response["response"],
                        icon: 'info',
                        timer: 2000,
                        showConfirmButton: false
                    })
                }
            } else {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: response["response"],
                    icon: 'error'
                })
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wong :(',
                html: jqXHR.responseText,
                icon: 'error'
            })
        }
    });
});
$("#form_activate_user").on("submit", function (e) {
    e.preventDefault();

    let userData = $("#form_activate_user").serializeJSON();

    $.ajax({
        dataType: "json",
        url: "user_verify.php",
        method: "POST",
        data: {
            user_data: userData
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function () {
                        users_get();
                        $("#user_modal").modal("hide");
                    })
                } else if (response["response_code"] == 1) {
                    Swal.fire({
                        title: response["response"],
                        icon: 'info',
                        timer: 2000,
                        showConfirmButton: false
                    })
                }
            } else {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: response["response"],
                    icon: 'error'
                })
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wong :(',
                html: jqXHR.responseText,
                icon: 'error'
            })
        }
    });
});
//#endregion
//#region schedules
function load_schedules() {
    $.ajax({
        url: "schedules_list.php",
        method: "POST",
        data: {
            action: "get"
        },
        success: function (data) {
            $('#survey_sched_table_body').html(data);
            table = $('#survey_sched_table').DataTable();
        }
    });
}
function sched_view(id) {

    $.ajax({
        dataType: "json",
        url: "survey_schedules_get.php",
        method: "POST",
        data: {
            _id: id
        },
        beforeSend: function () {
            $("#viewschedules_modal").modal("show");
        },
        success: function (userDetails) {

            for (var prop in userDetails) {
                $("#viewschedules_modal").find("." + prop).html(userDetails[prop]);
            }

        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error',
            })
        }
    });

}
function sched_edit(id) {

    $.ajax({
        dataType: "json",
        url: "survey_schedules_update.php",
        method: "POST",
        data: {
            _id: id
        },
        beforeSend: function () {
            $("#addschedules_modal").modal("show");
        },
        success: function (userDetails) {

            for (var prop in userDetails) {
                $("#addschedules_modal").find("#" + prop).val(userDetails[prop]);
            }

        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error',
            })
        }
    });

}
function sched_delete(id) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete',
        timerProgressBar: true,
        timer: 5000
    }).then((result) => {
        if (result.isConfirmed) {
            delete_user(id);
        }
    })
}
function delete_sched(id) {
    $.ajax({
        dataType: "json",
        url: "sched_delete.php",
        method: "POST",
        data: {
            _id: id
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function () {
                        load_schedules();
                    })
                }
            } else {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: response["response"],
                    icon: 'error'
                })
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error'
            })
        }
    });
}
$("#add_survey_schedule_form").on("submit", function (e) {
    e.preventDefault();

    let scheduleData = $("#add_survey_schedule_form").serializeJSON();

    $.ajax({
        dataType: "json",
        url: "survey_schedule_add.php",
        method: "POST",
        data: {
            schedule_data: scheduleData
        },
        success: function (response) {
            if (!response["error"]) {
                if (response["response_code"] == 0) {
                    Swal.fire({
                        title: 'Success',
                        html: response["response"],
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function () {
                        load_schedules()
                    })
                } else if (response["response_code"] == 1) {
                    Swal.fire({
                        title: response["response"],
                        icon: 'info',
                        timer: 2000,
                        showConfirmButton: false
                    })
                }
            } else {
                Swal.fire({
                    title: 'Oops!!! Something went wrong :(',
                    html: response["response"],
                    icon: 'error'
                })
            }
        },
        error: function (jqXHR) {
            Swal.fire({
                title: 'Oops!!! Something went wrong :(',
                html: jqXHR.responseText,
                icon: 'error'
            })
        }
    });
});
//#endregion