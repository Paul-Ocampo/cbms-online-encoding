$(function () {
    $.ajax({
        dataType: "json",
        url: "hpq-form_get.php",
        method: "POST",
        beforeSend: function () {
            members_get();
            deceased_get();
            programs_get();
        },
        success: function (hpq_data) {

            for (let prop in hpq_data) {
                $("#" + prop).val(hpq_data[prop]);
            }

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

});