$(document).ready(function () {
    $("#age").change(function () {
        if ($(this).val() == 1) {
            $("#age-help").text("1-я возрастная группа");
        } else if ($(this).val() == 2) {
            $("#age-help").text("2-я возрастная группа");
        } else if ($(this).val() == 3) {
            $("#age-help").text("3-я возрастная группа");
        } else if ($(this).val() == 4) {
            $("#age-help").text("4-я возрастная группа");
        } else if ($(this).val() == 5) {
            $("#age-help").text("5-я возрастная группа");
        } else if ($(this).val() == 6) {
            $("#age-help").text("6-я возрастная группа");
        } else if ($(this).val() == 7) {
            $("#age-help").text("7-я возрастная группа");
        } else {
            $("#age-help").text("8-я возрастная группа");
        }
    });
    /**
     * Выбор пола
     */
    $("#sex").change(function () {
        if ($(this).val() == "0") {
            $("#57b_m").hide();
            $("#57b_w").show();
            $("#51_m").hide();
        } else if ($(this).val() == 1) {
            $("#57b_w").hide();
            $("#57b_m").show();
            $("#51_m").show();
        }
    });

  

    $("#num").change(function () {
        if ($(this).val() == 3) {
            $("#upr_4_div1").hide();
            $("#upr_4_div2").hide();
            $("#upr_5_div1").hide();
            $("#upr_5_div2").hide();
        } else if ($(this).val() == 4) {
            $("#upr_4_div1").show();
            $("#upr_4_div2").show();
            $("#upr_5_div1").hide();
            $("#upr_5_div2").hide();
        } else if ($(this).val() == 5) {
            $("#upr_4_div1").show();
            $("#upr_4_div2").show();
            $("#upr_5_div1").show();
            $("#upr_5_div2").show();
        }
    });

    // placeholder//

    $("#upr_1_select").change(function () {
        $("#upr_1_rez").val('');
        $("#upr_1_ball").html('');
        $("#upr_1_help").html('');
        if ($(this).val() == 40) {
            $("#upr_1_rez").attr("placeholder", "7.3 (сек)");
        } else if ($(this).val() == 41) {
            $("#upr_1_rez").attr("placeholder", "11.8 (сек)");
        } else if ($(this).val() == 42) {
            $("#upr_1_rez").attr("placeholder", "24.0 (сек)");
        } else if ($(this).val() == 57) {
            $("#upr_1_rez").attr("placeholder", "1.00 (мин.сек)");
        } else if ($(this).val() == "57a") {
            $("#upr_1_rez").attr("placeholder", "30.0 (мин.сек)");
        } else if ($(this).val() == "57b") {
            $("#upr_1_rez").attr("placeholder", "9.00 (мин.сек)");
        } else if ($(this).val() == "58") {
            $("#upr_1_rez").attr("placeholder", "1.16 (мин.сек)");
        } else if ($(this).val() == "51") {
            $("#upr_1_rez").attr("placeholder", "850 (см)");
        }
    });

    $("#upr_2_select").change(function () {
        $("#upr_2_rez").val('');
        $("#upr_2_ball").html('');
        $("#upr_2_help").html('');
        if ($(this).val() == 1) {
            $("#upr_2_rez").attr("placeholder", "75 (раз)");
        } else if ($(this).val() == 2) {
            $("#upr_2_rez").attr("placeholder", "70 (раз)");
        } else if ($(this).val() == 4) {
            $("#upr_2_rez").attr("placeholder", "30 (раз)");
        } else if ($(this).val() == 5) {
            $("#upr_2_rez").attr("placeholder", "36 (раз)");
        } else if ($(this).val() == "6") {
            $("#upr_2_rez").attr("placeholder", "32 (раз)");
        } else if ($(this).val() == "7") {
            $("#upr_2_rez").attr("placeholder", "15 (раз)");
        } else if ($(this).val() == "8_1") {
            $("#upr_2_rez").attr("placeholder", "21 (раз)");
        } else if ($(this).val() == "8_2") {
            $("#upr_2_rez").attr("placeholder", "29 (раз)");
        } else if ($(this).val() == "9") {
            $("#upr_2_rez").attr("placeholder", "50 (раз)");
        } else if ($(this).val() == "10") {
            $("#upr_2_rez").attr("placeholder", "54.0 (сек)");
        } else if ($(this).val() == "11_1") {
            $("#upr_2_rez").attr("placeholder", "65 (раз)");
        } else if ($(this).val() == "11_2") {
            $("#upr_2_rez").attr("placeholder", "75 (раз)");
        } else if ($(this).val() == "12_1") {
            $("#upr_2_rez").attr("placeholder", "22 (раз)");
        } else if ($(this).val() == "12_2") {
            $("#upr_2_rez").attr("placeholder", "30 (раз)");
        } else if ($(this).val() == "13_1") {
            $("#upr_2_rez").attr("placeholder", "18 (раз)");
        } else if ($(this).val() == "13_2") {
            $("#upr_2_rez").attr("placeholder", "26 (раз)");
        } else if ($(this).val() == "62") {
            $("#upr_2_rez").attr("placeholder", "56 (раз)");
        }
    });

    $("#upr_3_select").change(function () {
        if ($(this).val() == 45) {
            $("#upr_3_rez").attr("placeholder", "3.10 (мин.сек)");
        } else if ($(this).val() == 46) {
            $("#upr_3_rez").attr("placeholder", "10.30 (мин.сек)");
        } else if ($(this).val() == 47) {
            $("#upr_3_rez").attr("placeholder", "16.20 (мин.сек)");
        } else if ($(this).val() == 43) {
            $("#upr_3_rez").attr("placeholder", "88.5 (сек)");
        } else if ($(this).val() == "53") {
            $("#upr_3_rez").attr("placeholder", "18.00 (мин.сек)");
        } else if ($(this).val() == "54") {
            $("#upr_3_rez").attr("placeholder", "40.00 (мин.сек)");
        } else if ($(this).val() == "57b") {
            $("#upr_3_rez").attr("placeholder", "7.00 (мин.сек)");
        }
    });

    // изменение первого упражнения
    $("#upr_1_rez").change(function () {

        $("#upr_1_ball").html('');

        let upr1 = $("#upr_1_select").val();
        let sex = $("#sex").val();
        let age = $("#age").val();
        let rez = $("#upr_1_rez").val();

        var request = $.ajax({
            url: "main.php",
            type: "POST",
            data: {type: 'ball', upr: upr1, age: age, sex: sex, rez: rez},
            dataType: "html"
        });

        request.done(function (msg) {
          //  alert(msg);
            var json = JSON.parse(msg);
            $("#upr_1_ball").html(json.ball + ' балл(ов) ');
            $("#upr_1_recomend_ball").html(json.ball);
            $("#upr_1_help").html(json.text);
            $("#upr_1_recomend").html(json.text2);
            $("#upr_1_ball, #upr_1_help, #upr_1_recomend_color").removeClass('text-muted text-danger text-success').addClass(json.color);
        });

        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    });

    // изменение второго упражнения
    $("#upr_2_rez").change(function () {

        $("#upr_2_ball").html('');

        let upr2 = $("#upr_2_select").val();
        let sex = $("#sex").val();
        let age = $("#age").val();
        let rez = $("#upr_2_rez").val();

        var request = $.ajax({
            url: "main.php",
            type: "POST",
            data: {type: 'ball', upr: upr2, age: age, sex: sex, rez: rez},
            dataType: "html"
        });

        request.done(function (msg) {
            //  alert(msg);
            var json = JSON.parse(msg);
            $("#upr_2_ball").html(json.ball + ' балл(ов) ');
            $("#upr_2_recomend_ball").html(json.ball);
            $("#upr_2_help").html(json.text);
            $("#upr_2_recomend").html(json.text2);
            $("#upr_2_ball, #upr_2_help, #upr_2_recomend_color").removeClass('text-muted text-danger text-success').addClass(json.color);
        });

        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    });
});