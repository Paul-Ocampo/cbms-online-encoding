$(document).ready(function () {

    const page_pathname = window.location.pathname;
    const myArray = page_pathname.split("/");
    const page_filename = myArray.at(-1);
    const nav_content_link = $("#sidebar-nav").find(`[href='${page_filename}']`);
    const nav_content_link_parent = nav_content_link.parent();
    const page_prefix_arr = page_filename.split("_");
    const page_prefix = page_prefix_arr.at(0);
    let get_condition = "";
    let loading = '<div class="spinner-border text-secondary m-1" role="status"><span class="visually-hidden">Loading...</span></div>';

    if (!$("#sidebar-nav .nav-link").hasClass("collapsed")) {
        $("#sidebar-nav .nav-link").toggleClass("collapsed");
    }

    nav_content_link.toggleClass("active");
    nav_content_link_parent.parent().toggleClass("show").siblings("a").toggleClass("collapsed");

    switch (page_filename) {
        case "page-survey_total.php":
            document.title = "CBMS Tabaco | Surveyed Housholds-All";
            get_condition = "total";
            break;
        case "page-survey_today.php":
            document.title = "CBMS Tabaco | Surveyed Housholds";
            get_condition = "today";
            break;
        case "page-survey_validated.php":
            document.title = "CBMS Tabaco | Validated Housholds";
            get_condition = "valid";
            break;
        case "page-survey_pending.php":
            document.title = "CBMS Tabaco | Pending for Validation";
            get_condition = "pending";
            break;
        case "page-population_history.php":
            document.title = "CBMS Tabaco | Population Graph";
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';
            var pop_year = [],
                pop_data = [];

            function number_format(number, decimals, dec_point, thousands_sep) {
                // *     example: number_format(1234.56, 2, ',', ' ');
                // *     return: '1 234,56'
                number = (number + '').replace(',', '').replace(' ', '');
                var n = !isFinite(+number) ? 0 : +number,
                    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                    s = '',
                    toFixedFix = function (n, prec) {
                        var k = Math.pow(10, prec);
                        return '' + Math.round(n * k) / k;
                    };
                // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                if (s[0].length > 3) {
                    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                }
                if ((s[1] || '').length < prec) {
                    s[1] = s[1] || '';
                    s[1] += new Array(prec - s[1].length + 1).join('0');
                }
                return s.join(dec);
            }

            $.ajax({
                dataType: "json",
                url: "population_history.php",
                method: "POST",
                data: {
                    action: "action"
                },
                success: function (r) {

                    $.each(r, function (i, item) {

                        pop_year.push(i);
                        pop_data.push((r[i] == 0) ? 'no data' : r[i]);

                    });

                },
                complete: function () {

                    var ctx = document.getElementById("myAreaChart");
                    var myLineChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: pop_year,
                            datasets: [{
                                label: "Population",
                                lineTension: 0.1,
                                backgroundColor: "rgba(78, 115, 223, 0.05)",
                                borderColor: "rgba(78, 115, 223, 1)",
                                pointRadius: 3,
                                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                pointBorderColor: "rgba(78, 115, 223, 1)",
                                pointHoverRadius: 3,
                                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                pointHitRadius: 10,
                                pointBorderWidth: 2,
                                data: pop_data,
                            }],
                        },
                        options: {
                            maintainAspectRatio: false,
                            layout: {
                                padding: {
                                    left: 10,
                                    right: 25,
                                    top: 25,
                                    bottom: 0
                                }
                            },
                            scales: {
                                xAxes: [{
                                    time: {
                                        unit: 'date'
                                    },
                                    gridLines: {
                                        display: false,
                                        drawBorder: false
                                    },
                                    ticks: {
                                        maxTicksLimit: 10
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        callback: function (value, index, values) {
                                            return number_format(value);
                                        }
                                    },
                                    gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: true,
                                        borderDash: [1],
                                        zeroLineBorderDash: [1]
                                    }
                                }],
                            },
                            legend: {
                                display: false
                            },
                            tooltips: {
                                backgroundColor: "rgb(255,255,255)",
                                bodyFontColor: "#858796",
                                titleMarginBottom: 10,
                                titleFontColor: '#6e707e',
                                titleFontSize: 14,
                                borderColor: '#dddfeb',
                                borderWidth: 1,
                                xPadding: 15,
                                yPadding: 15,
                                displayColors: false,
                                intersect: false,
                                mode: 'index',
                                caretPadding: 10,
                                callbacks: {
                                    label: function (tooltipItem, chart) {
                                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                        return datasetLabel + " " + number_format(tooltipItem.yLabel);
                                    }
                                }
                            }
                        }
                    });

                }
            });
            break;
        case "page-progress_survey.php":
            document.title = "CBMS Tabaco | Survey Progress";
            $.ajax({
                url: "survey_progress.php",
                method: "POST",
                data: {
                    action: "action"
                },
                success: function (data) {
                    $('#survey_progress').html(data);
                }
            });
            break;
        case "page-settings_user_profile.php":
            document.title = "CBMS Tabaco | Update Profile";
            load_profile();

            break;
        case "page-settings_brgy_profile.php":
            document.title = "CBMS Tabaco | Barangay Profile";
            load_brgy_table();

            break;
        case "page-settings_manage_users.php":
            document.title = "CBMS Tabaco | Manage Users";
            $.ajax({
                url: "users_list.php",
                method: "POST",
                data: {
                    action: "action"
                },
                beforeSend: function () {
                    $('#users_table_body').html(loading);
                },
                success: function (data) {
                    $('#users_table_body').html(data);
                    $('#users_table').DataTable();
                }
            });

            break;
        case "page-settings_survey_schedule.php":
            document.title = "CBMS Tabaco | Barangay Profile";
            load_schedules();

            break;
        case "page-hpq_form_edit.php":
            document.title = "CBMS Tabaco | Edit HPQ Data";
            if ($("#pages_nav_link").hasClass("collapsed")) {
                $("#pages_nav_link").toggleClass("collapsed")
            }
            let pages_nav_li = document.getElementById("pages_nav").children;

            $("#next").click(function () {
                for (let i = 0; i < pages_nav_li.length; i++) {
                    if (pages_nav_li[i].children[0].classList.contains("active")) {
                        pages_nav_li[i].nextElementSibling.children[0].click();
                        if (i == (pages_nav_li.length - 2)) {
                            $("#next").attr("disabled", "disabled");
                        }
                        $("#prev").removeAttr("disabled");
                        break;
                    }
                }
            })
            $("#prev").click(function () {
                for (let i = 0; i < pages_nav_li.length; i++) {
                    if (pages_nav_li[i].children[0].classList.contains("active")) {
                        pages_nav_li[i].previousElementSibling.children[0].click();
                        if (i == 1) {
                            $("#prev").attr("disabled", "disabled");
                        }
                        $("#next").removeAttr("disabled");
                        break;
                    }
                }
            })
            $("#pages_nav li").on("click", function () {
                let li_index = $(this).index();
                if (li_index == 0) {
                    $("#prev").attr("disabled", "disabled");
                } else {
                    $("#prev").removeAttr("disabled");
                }
                if (li_index == 8) {
                    $("#next").attr("disabled", "disabled");
                } else {
                    $("#next").removeAttr("disabled");
                }
            })
            $.ajax({
                dataType: "json",
                url: "hpq_form_get.php",
                method: "POST",
                beforeSend: function () {
                    members_get();
                    deceased_get();
                    programs_get();
                },
                success: function (hpq_data) {

                    $.each(hpq_data, function (i, row) {
                        for (let prop in row) {
                            $("#" + prop).val(row[prop]);
                        }
                    })


                },
                complete: function () {

                    setTimeout(() => {
                        validate_main_form();
                    }, 1000);

                    $("#addnew_form :input").on("change", function () {
                        validate_main_form();
                    }).on("focusout", function () {
                        validate_main_form();
                    });

                }
            });
            $("#fname").on("change", function () {
                var st = $(this).val();
                $(".dfname").html(st);
            });

            break;
        default:
            document.title = "CBMS Tabaco | Dashboard";
            if ($("#dashboard_nav_link").hasClass("collapsed")) {
                $("#dashboard_nav_link").toggleClass("collapsed")
            }
            $.ajax({
                url: "survey_overview.php",
                method: "POST",
                data: {
                    action: "action"
                },
                beforeSend: function () {
                    $('#survey_progress_table_body').html(loading);
                },
                success: function (data) {
                    $('#survey_progress_table_body').html(data);
                    $('#survey_progress_table').DataTable();
                    $(".slide").slideDown(1000);
                }
            });

            break;
    }

    switch (page_prefix) {
        case 'page-survey':
            let table = undefined;
            let mem_response;

            $.ajax({
                url: "hpq_forms_list.php",
                method: "POST",
                data: {
                    condition: get_condition
                },
                beforeSend: function () {
                    $('#survey_table_body').html(loading);
                },
                success: function (data) {
                    $('#survey_table_body').html(data);
                    table = $('#survey_table').DataTable();
                }
            });

            function format(id) {

                var tabledata = "";
                mem_response = `<div class="slider" id="mem_table_${id}">${loading}</div>`;

                $.ajax({
                    url: "hpq_members.php",
                    method: "POST",
                    data: {
                        hpq_id: id
                    },
                    success: function (data) {
                        tabledata = data;
                    },
                    complete: function () {
                        $(`#survey_table tbody #mem_table_${id}`).html(tabledata);
                        $(".slider").slideDown("swing");
                    }
                });

            }

            //Add event listener for opening and closing details
            $('#survey_table tbody').on('click', 'td.dt-control', function () {

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
                    format(id);
                    row.child(mem_response).show();
                    tr.addClass('shown');

                }

            });
            break;

        case "page-settings":

            break;
        default:
            break;
    }
    
});