$(function () {
    $("#date").mask("99/99/9999");
    $("#phone").mask("(999) 999-9999");
    $("#tin").mask("999-99-9999");
    $("#ssn").mask("999-99-9999");
    $("#eyescript").mask("~9.99 ~9.99 999");
    $("#ccn").mask("9999 9999 9999 9999");

    $("#select2-1, #select2-2, #select2-4, #select2-5, #select2-6").select2({
        theme: "bootstrap",
    });

    $("#select2-3").select2({
        theme: "bootstrap",
        placeholder: "Your Favorite Football Team",
        allowClear: true,
    });

    $('input[name="start_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        timePicker: true,
        startDate: moment().startOf("hour"),
        locale: {
            format: "MM-DD-Y hh:mmm A",
        },
    });

    $('input[name="end_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        timePicker: true,
        startDate: moment().startOf("hour"),
        locale: {
            format: "MM-DD-Y",
        },
    });

    $('input[name="paycheck_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        timePicker: true,
        startDate: moment().startOf("hour"),
        locale: {
            format: "MM-DD-Y",
        },
    });

    $('input[name="deposit_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        timePicker: true,
        startDate: moment().startOf("hour"),
        locale: {
            format: "MM-DD-Y",
        },
    });

    $('input[name="daterange"]').daterangepicker({
        opens: "left",
        ranges: {
            Today: [moment(), moment()],
            Yesterday: [
                moment().subtract(1, "days"),
                moment().subtract(1, "days"),
            ],
            "Last 7 Days": [moment().subtract(6, "days"), moment()],
            "Last 30 Days": [moment().subtract(29, "days"), moment()],
            "This Month": [moment().startOf("month"), moment().endOf("month")],
            "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
            ],
        },
    });
});
