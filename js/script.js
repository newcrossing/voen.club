$(document).ready(function () {

    // проверка на пустоту
    function isEmpty(str) {
        if (str.trim() == '')
            return true;
        return false;
    }


    // сброс результатов
    function reset(a = 0) {
        a = Number(a);
        // если обнулить надо лишь одно упражнение
        if (a != 0) {
            $("#upr_rez_" + a).val('');
            $("#upr_ball_" + a).html('');
            $("#upr_help_" + a).html('');
            return;
        }
        // если обнулить все
        for (let i = 1; i < 5; i++) {
            $("#upr_rezu_" + i).val('');
            $("#upr_ball_" + i).html('');
            $("#upr_help_" + i).html('');
            $("#recomend_text_" + i).html('');
            $("#recomend_ball_" + i).html('0');
            $("#upr_ball_" + i).removeClass('text-muted text-danger text-success');
            $("#upr_ball_" + i).removeClass('text-muted text-danger text-success');
            $("#recomend_color_" + i).removeClass('text-muted text-danger text-success');
            return;
        }
    }

    $("#age").change(function () {
        reset();
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
        reset();
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


    $("#summ_upr").change(function () {
        if ($(this).val() == 3) {
            $("#upr_4_div1").hide();
            $("#upr_4_div2").hide();
            $("#upr_5_div1").hide();
            $("#upr_5_div2").hide();
            $("#recomend_block_4").hide();
            $("#recomend_block_5").hide();

        } else if ($(this).val() == 4) {
            $("#upr_4_div1").show();
            $("#upr_4_div2").show();
            $("#upr_5_div1").hide();
            $("#upr_5_div2").hide();
            $("#recomend_block_4").show();
            $("#recomend_block_5").hide();
        } else if ($(this).val() == 5) {
            $("#upr_4_div1").show();
            $("#upr_4_div2").show();
            $("#upr_5_div1").show();
            $("#upr_5_div2").show();
            $("#recomend_block_4").show();
            $("#recomend_block_5").show();
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


    // выбор упражнения
    $("[numupr]").change(function () {
        // номер выбранного упражнения
        let numupr = $(this).attr('numupr');

        reset(numupr);

        let upr = $("#upr_select_" + numupr).val();
        let rez = $("#upr_rezu_" + numupr).val();
        let sex = $("#sex").val();
        let age = $("#age").val();
        let category = $("#category").val();
        // alert(rez);

        var request = $.ajax({
            url: "main.php",
            type: "POST",
            data: {type: 'ball', upr: upr, age: age, sex: sex, rez: rez, category: category},
            dataType: "html"
        });

        request.done(function (msg) {
            //alert(msg);
            let json = JSON.parse(msg);
            $("#upr_ball_" + numupr).html(json.ball + ' баллa(ов) ').removeClass('text-muted text-danger text-success').addClass(json.color);
            $("#recomend_ball_" + numupr).html(json.ball);
            $("#upr_help_" + numupr).html(json.text).removeClass('text-muted text-danger text-success').addClass(json.color);
            $("#recomend_text_" + numupr).html(json.text2);
            $("#recomend_color_" + numupr).removeClass('text-muted text-danger text-success').addClass(json.color);

            // подсчет общего результа
            let b1 = Number($("#recomend_ball_1").text());
            let b2 = Number($("#recomend_ball_2").text());
            let b3 = Number($("#recomend_ball_3").text());
            let b4 = Number($("#recomend_ball_4").text());
            let b5 = Number($("#recomend_ball_5").text());
            let allBall = b1 + b2 + b3 + b4 + b5;
            $("#upr_itog_recomend_ball").html(allBall);

            let summ_upr = Number($("#summ_upr").val());

            let r1 = $("#upr_rezu_1").val();
            let r2 = $("#upr_rezu_2").val();
            let r3 = $("#upr_rezu_3").val();
            let r4 = $("#upr_rezu_4").val();
            let r5 = $("#upr_rezu_5").val();

            /**
             * Признак заполенности результатов и возможности подсчитать общий результат
             * @type {boolean}
             */
            let complit = false;

            // если три заполнено
            if (summ_upr == 3 && !isEmpty(r1) && !isEmpty(r2) && !isEmpty(r3))
                complit = true;

            if (summ_upr == 4 && !isEmpty(r1) && !isEmpty(r2) && !isEmpty(r3) && !isEmpty(r4))
                complit = true;

            if (summ_upr == 5 && !isEmpty(r1) && !isEmpty(r2) && !isEmpty(r3) && !isEmpty(r4) && !isEmpty(r5))
                complit = true;

            if (complit) {
                //Отправка запроса на рассчет общего результа
                var requestBall = $.ajax({
                    url: "main.php",
                    type: "POST",
                    data: {
                        type: 'allball',
                        summ_upr: summ_upr,
                        age: age,
                        sex: sex,
                        rez: allBall,
                        category: category
                    },
                    dataType: "html"
                });
                requestBall.done(function (msg) {
                    //alert(msg);
                    let json = JSON.parse(msg);

                    $("#score").html(json.score);
                    $("#score_level").html(json.level);
                });
            }


        });

        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    });
});