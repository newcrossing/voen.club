$(document).ready(function () {
    sendAjax()
    /**
     * Массив цвета текста для дальнейшей очистки класса
     * @type {string[]}
     */
    var arrColor = [
        'text-muted',
        'text-danger',
        'text-warning',
        'text-info',
        'text-success',
        'text-primary']

    // проверка на пустоту
    function isEmpty (str) {
        if (str.trim() == '') {
            return true
        }
        return false
    }

    /**
     * Сброс оценки
     */
    function resetScore () {
        $('#score, #score_prefix, #score_level').html('')
        $('#score,  #score_level').removeClass(arrColor.join(' '))
    }

    /**
     * сброс результатов
     * @param  a  - сброс в конкретоно упражнении
     */
    function reset (a = 0) {
        a = Number(a)
        // если обнулить надо лишь одно упражнение
        if (a != 0) {
            $('#upr_ball_' + a).html('')
            $('#upr_help_' + a).html('')

            $('#recomend_text_' + a).html('')
            $('#recomend_ball_' + a).html('0')
            $('#recomend_color_' + a).removeClass(arrColor.join(' '))
            return
        }
        // если обнулить все
        for (let i = 1; i < 5; i++) {
            $('#upr_rezu_' + i).val('')
            $('#upr_ball_' + i).html('')
            $('#upr_help_' + i).html('')
            $('#recomend_text_' + i).html('')
            $('#recomend_ball_' + i).html('0')
            $('#upr_ball_' + i).removeClass(arrColor.join(' '))
            $('#upr_ball_' + i).removeClass(arrColor.join(' '))
            $('#recomend_color_' + i).removeClass(arrColor.join(' '))
            $('#upr_itog_recomend_ball').html('0')

            resetScore()
        }
    }

    function sendAjax () {
        let summ_upr = Number($('#summ_upr').val())
        let sex = $('#sex').val()
        let age = $('#age').val()
        let category = $('#category').val()

        let req = $.ajax({
            url: 'main.php',
            type: 'POST',
            data: {
                type: 'scores',
                summ_upr: summ_upr,
                age: age,
                sex: sex,
                category: category,
            },
            dataType: 'html',
        })
        req.done(function (msg) {
            // ПОЛУЧИЛИ ДАННЫЕ
            $('#score_table').html(msg)
        })
    }

    $('#age').change(function () {
        reset()
        $('#age-help').text($(this).val() + '-я возрастная группа')
        sendAjax()
    })
    /**
     * Выбор пола
     */
    $('#sex').change(function () {
        reset()
        if ($(this).val() == '0') {
            $('#57b_m, #51_m').hide()
            $('#57b_w').show()

            $('#age6_m, #age7_m, #age8_m').hide()
            $('#age6_w').show()
        }
        else if ($(this).val() == 1) {
            $('#57b_w').hide()
            $('#57b_m, #51_m').show()

            $('#age6_m, #age7_m, #age8_m').show()
            $('#age6_w').hide()
        }
        sendAjax()
    })

    // при измении категории обнулить показания
    $('#category').change(function () {
        reset()
        sendAjax()
    })

    // при измнении количества упражнений
    $('#summ_upr').change(function () {
        reset()
        $('#score, #score_level').html('')

        if ($(this).val() == 3) {
            $('#upr_4_div1, #upr_4_div2, #upr_5_div1, #upr_5_div2').hide()
            $('#recomend_block_4, #recomend_block_5').hide()
        }
        else if ($(this).val() == 4) {
            $('#upr_4_div1, #upr_4_div2').show()
            $('#upr_5_div1, #upr_5_div2').hide()

            $('#recomend_block_4').show()
            $('#recomend_block_5').hide()
        }
        else if ($(this).val() == 5) {
            $('#upr_4_div1, #upr_4_div2, #upr_5_div1, #upr_5_div2').show()
            $('#recomend_block_4, #recomend_block_5').show()
        }
        sendAjax()
    })

    // placeholder//

    $('[numuprselect]').change(function () {
        // полчаю варинт упражнения
        let ii = $(this).attr('numuprselect')

        reset(ii)
        $('#upr_rezu_' + ii).val('')
        switch ($(this).val()) {
            case '40':
                $('#upr_rezu_' + ii).attr('placeholder', '7.3 (сек)')
                break
            case '41':
                $('#upr_rezu_' + ii).attr('placeholder', '11.8 (сек)')
                break
            case '42':
                $('#upr_rezu_' + ii).attr('placeholder', '24.0 (сек)')
                break
            case '57':
                $('#upr_rezu_' + ii).attr('placeholder', '1.00 (мин.сек)')
                break
            case '57a':
                $('#upr_rezu_' + ii).attr('placeholder', '30.0 (мин.сек)')
                break
            case '57b':
                $('#upr_rezu_' + ii).attr('placeholder', '9.00 (мин.сек)')
                break
            case '58':
                $('#upr_rezu_' + ii).attr('placeholder', '1.16 (мин.сек)')
                break
            case '51':
                $('#upr_rezu_' + ii).attr('placeholder', '850 (см)')
                break
            case '1':
                $('#upr_rezu_' + ii).attr('placeholder', '75 (раз)')
                break
            case '1':
                $('#upr_rezu_' + ii).attr('placeholder', '75 (раз)')
                break
            case '2':
                $('#upr_rezu_' + ii).attr('placeholder', '70 (раз)')
                break
            case '4':
                $('#upr_rezu_' + ii).attr('placeholder', '30 (раз)')
                break
            case '5':
                $('#upr_rezu_' + ii).attr('placeholder', '36 (раз)')
                break
            case '6':
                $('#upr_rezu_' + ii).attr('placeholder', '32 (раз)')
                break
            case '7':
                $('#upr_rezu_' + ii).attr('placeholder', '15 (раз)')
                break
            case '8_1':
                $('#upr_rezu_' + ii).attr('placeholder', '21 (раз)')
                break
            case '8_2':
                $('#upr_rezu_' + ii).attr('placeholder', '29 (раз)')
                break
            case '9':
                $('#upr_rezu_' + ii).attr('placeholder', '50 (раз)')
                break
            case '10':
                $('#upr_rezu_' + ii).attr('placeholder', '54.0 (сек)')
                break
            case '11_1':
                $('#upr_rezu_' + ii).attr('placeholder', '65 (раз)')
                break
            case '11_2':
                $('#upr_rezu_' + ii).attr('placeholder', '75 (раз)')
                break
            case '12_1':
                $('#upr_rezu_' + ii).attr('placeholder', '22 (раза)')
                break
            case '12_2':
                $('#upr_rezu_' + ii).attr('placeholder', '30 (раз)')
                break
            case '13_1':
                $('#upr_rezu_' + ii).attr('placeholder', '18 (раз)')
                break
            case '13_2':
                $('#upr_rezu_' + ii).attr('placeholder', '26 (раз)')
                break
            case '62':
                $('#upr_rezu_' + ii).attr('placeholder', '56 (раз)')
                break
            case '45':
                $('#upr_rezu_' + ii).attr('placeholder', '3.10 (мин.сек)')
                break
            case '46':
                $('#upr_rezu_' + ii).attr('placeholder', '10.30 (мин.сек)')
                break
            case '47':
                $('#upr_rezu_' + ii).attr('placeholder', '16.20 (мин.сек)')
                break
            case '43':
                $('#upr_rezu_' + ii).attr('placeholder', '88.5 (сек)')
                break
            case '53':
                $('#upr_rezu_' + ii).attr('placeholder', '18.00 (мин.сек)')
                break
            case '54':
                $('#upr_rezu_' + ii).attr('placeholder', '40.00 (мин.сек)')
                break
            case '57b':
                $('#upr_rezu_' + ii).attr('placeholder', '7.00 (мин.сек)')
                break
            default:
                $('#upr_rezu_' + ii).attr('placeholder', '')
                break
        }
    })

    // ввод результата
    $('[numupr]').change(function () {
        // номер выбранного упражнения
        let numupr = $(this).attr('numupr')

        reset(numupr)
        resetScore()

        let upr = $('#upr_select_' + numupr).val()
        let rez = $('#upr_rezu_' + numupr).val()
        let sex = $('#sex').val()
        let age = $('#age').val()
        let category = $('#category').val()

        var request = $.ajax({
            url: 'main.php',
            type: 'POST',
            data: {
                type: 'ball',
                upr: upr,
                age: age,
                sex: sex,
                rez: rez,
                category: category,
            },
            dataType: 'html',
        })

        request.done(function (msg) {
            //alert(msg);
            let json = JSON.parse(msg)
            $('#upr_ball_' + numupr).
                html(json.ball + ' баллa(ов) ').
                removeClass(arrColor.join(' ')).
                addClass(json.color)
            $('#recomend_ball_' + numupr).html(json.ball)
            $('#upr_help_' + numupr).
                html(json.text).
                removeClass(arrColor.join(' ')).
                addClass(json.color)
            $('#recomend_text_' + numupr).html(json.text2)
            $('#recomend_color_' + numupr).
                removeClass(arrColor.join(' ')).
                addClass(json.color)

            // подсчет общего результа
            let b1 = Number($('#recomend_ball_1').text())
            let b2 = Number($('#recomend_ball_2').text())
            let b3 = Number($('#recomend_ball_3').text())
            let b4 = Number($('#recomend_ball_4').text())
            let b5 = Number($('#recomend_ball_5').text())
            let allBall = b1 + b2 + b3 + b4 + b5
            $('#upr_itog_recomend_ball').html(allBall)

            let summ_upr = Number($('#summ_upr').val())

            let r1 = $('#upr_rezu_1').val()
            let r2 = $('#upr_rezu_2').val()
            let r3 = $('#upr_rezu_3').val()
            let r4 = $('#upr_rezu_4').val()
            let r5 = $('#upr_rezu_5').val()

            let rc1 = $('#upr_ball_1').hasClass('text-danger')
            let rc2 = $('#upr_ball_2').hasClass('text-danger')
            let rc3 = $('#upr_ball_3').hasClass('text-danger')
            let rc4 = $('#upr_ball_4').hasClass('text-danger')
            let rc5 = $('#upr_ball_5').hasClass('text-danger')

            /**
             * Признак заполенности результатов и возможности подсчитать общий
             * результат
             * @type {boolean}
             */
            let complit = false

            // если 3 заполнено
            if (summ_upr == 3 && !isEmpty(r1) && !rc1 &&
                !isEmpty(r2) && !rc2 &&
                !isEmpty(r3) && !rc3) {
                complit = true
            }
            // если 4 заполнено
            if (summ_upr == 4 && !isEmpty(r1) && !rc1 &&
                !isEmpty(r2) && !rc2 &&
                !isEmpty(r3) && !rc3 &&
                !isEmpty(r4) && !rc4) {
                complit = true
            }
            // если 5 заполнено
            if (summ_upr == 5 && !isEmpty(r1) && !rc1 &&
                !isEmpty(r2) && !rc2 &&
                !isEmpty(r3) && !rc3 &&
                !isEmpty(r4) && !rc4 &&
                !isEmpty(r5) && !rc5) {
                complit = true
            }

            // Если есть уже ниже порогового
            if (rc1 || rc2 || rc3 || rc4 || rc5) {
                resetScore()
                $('#score').html('2').addClass('text-danger')
                $('#score_prefix').html('Неудовлетворительно')
            }

            if (complit) {
                //Отправка запроса на рассчет общего результа
                var requestBall = $.ajax({
                    url: 'main.php',
                    type: 'POST',
                    data: {
                        type: 'allball',
                        summ_upr: summ_upr,
                        age: age,
                        sex: sex,
                        rez: allBall,
                        category: category,
                    },
                    dataType: 'html',
                })
                requestBall.done(function (msg) {
                    // ПОЛУЧИЛИ ДАННЫЕ ИТОГОВАЯ ОЦЕНКА
                    //alert(msg);
                    $('#score1, #score2,#score3,#score4,#score5,#score6,#score7,#score8').removeClass('bg-info')
                    resetScore()
                    let json = JSON.parse(msg)

                    $('#score').html(json.score).addClass(json.color)
                    $('#score_prefix').html(json.score_prefix)
                    $('#score_level').html(json.level).addClass(json.color)

                    if (json.n == 3 || json.n == 4 || json.n == 5 || json.n == 6 || json.n == 7 || json.n ==8 ){
                        $('#score'+json.n ).addClass('bg-info')
                    }

                })
            }
        })

        request.fail(function (jqXHR, textStatus) {
            alert('Request failed: ' + textStatus)
        })
    })
})