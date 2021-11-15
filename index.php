<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://bootstrap5.ru/examples/checkout">
    <meta name="description" content="Онлайн калькулятор по физической подготовке военнослужащих">
    <meta name="author" content="Новокрещенов П.">
    <meta name="docsearch:language" content="ru">
    <meta name="docsearch:version" content="5.0">
    <meta name="yandex-verification" content="2bf0709983ffc58f"/>
    <title>Онлайн калькулятор по физической подготовке военнослужащих Минобороны</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/docs.css">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/examples/checkout-form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container">
    <div class="py-5 text-center">
        <h1 class="h2">Онлайн калькулятор</h1>
        <p class="lead">Военнослужащим по контракту Минобороны по физической подготовке.</p>
    </div>

    <div class="row g-3">

        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Вводные данные</h4>

            <div class="row g-3">

                <div class="col-6">
                    <label for="sex" class="form-label">Ваш пол</label>
                    <select class="form-select" id="sex" required="">
                        <option value="1" selected="selected">Мужской</option>
                        <option value="0">Женский</option>
                    </select>
                </div>

                <div class="col-6">
                    <label for="age" class="form-label">Возраст</label>
                    <select class="form-select" id="age" required="">
                        <option value="1" selected="selected">до 25</option>
                        <option value="2">25 - 29</option>
                        <option value="3">30 - 34</option>
                        <option value="4">35 - 39</option>
                        <option value="5">40 - 44</option>
                        <option value="6">45 - 49</option>
                        <option value="7">50 - 54</option>
                        <option value="8">55 и старше</option>
                    </select>
                    <small class="text-muted" id="age-help">1-я возрастная группа</small>
                </div>

                <div class="col-6">
                    <label for="category" class="form-label">Категория </label>
                    <select class="form-select" id="category" required="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <a class="text-muted " data-toggle="modal" href="#" data-target="#staticBackdrop"> Какую
                        выбрать?</a>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"> Категории</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    категория N 1: военнослужащие подразделений специального назначения,
                                    разведывательных, воздушно-десантных, десантно-штурмовых и морской
                                    пехоты;<br/><br/>

                                    категория N 2: личный состав основных подразделений и подразделений боевого
                                    обеспечения (кроме указанных в категории N 1) воинских частей видов (родов
                                    войск) Вооруженных Сил, управления соединений, воинских частей; слушатели и
                                    курсанты вузов;<br/><br/>

                                    категория N 3: военнослужащие подразделений материального, технического и
                                    медицинского обеспечения, ремонта и обслуживания, соединений (бригад) надводных
                                    кораблей и подводных лодок, военных оркестров, переменный состав учебных
                                    воинских частей (военнослужащие по контракту - курсанты). Военнослужащие,
                                    проходящие военную службу в органах военного управления (от управления
                                    объединения и выше), в организациях Вооруженных Сил.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6">
                    <label for="summ_upr" class="form-label">Упражнения </label>
                    <select class="form-select" id="summ_upr" required="">
                        <option value="3" selected="selected">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <small class="text-muted">Количество упражнений</small>
                </div>

                <hr class="my-4">
                <h4 class="mb-3">Результаты</h4>

                <div class="col-8">
                    <label for="upr_select_1" class="form-label">Скорость</label>
                    <select class="form-select" id="upr_select_1" required="" numuprselect="1">
                        <option value="40" selected="selected">Упр. № 40 (Бег на 60 м)</option>
                        <option value="41">Упр. № 41 (Бег на 100 м)</option>
                        <option value="42">Упр. № 42 (Челночный бег 10х10 м)</option>
                        <option value="57">Упр. № 57 (Плавание 100 м вольным стилем)</option>
                        <option value="57a">Упр. № 57,а (Плавание 50 м вольным стилем)</option>
                        <option value="57b" id="57b_m">Упр. № 57,б (Плавание 500 м вольным стилем)</option>
                        <option value="57b" id="57b_w" style="display: none">Упр. № 57,б (Плавание 300)</option>
                        <option value="58" style="display:none ">Упр. № 58 (Плавание 100 м способом брасс)</option>
                        <option value="51" id="51_m" style="display:none ">Упр. № 51 (Тройной прыжок с места)</option>
                    </select>
                    <small class="text-muted" id="upr_help_1"></small>
                </div>

                <div class="col-4">
                    <label for="upr_rezu_1" class="form-label">Результат</label>
                    <input type="text" class="form-control" id="upr_rezu_1" placeholder="" numupr="1">
                    <small class="text-muted" id="upr_ball_1"></small>
                </div>


                <div class="col-8">
                    <label for="upr_select_2" class="form-label">Сила</label>
                    <select class="form-select" id="upr_select_2" required="" numuprselect="2">
                        <option value="1">Упр. № 1 (Cгибание и разгибание рук в упоре лежа)</option>
                        <option value="2">Упр. № 2 (Наклоны туловища вперед)</option>
                        <option value="4" selected="selected">Упр. № 4 (Подтягивание на перекладине)</option>
                        <option value="5" style="display:none ">Упр. № 5 (Поднимание ног к перекладине)</option>
                        <option value="6">Упр. № 6 (Подъем переворотом на перекладине)</option>
                        <option value="7">Упр. № 7 (Подъем силой на перекладине)</option>
                        <option value="8_1">Упр. № 8 (Жим штанги 70 кг. лёжа (вес до 70 кг)</option>
                        <option value="8_2">Упр. № 8 (Жим штанги 70 кг. лёжа (вес свыше 70 кг)</option>
                        <option value="9">Упр. № 9 (Сгибание и разгибание рук в упоре на брусьях)</option>
                        <option value="10" style="display:none ">Упр. № 10 (Угол в упоре на брусьях)</option>
                        <option value="11_1">Упр. № 11 (Рывок гири 24 кг (вес до 70 кг)</option>
                        <option value="11_2">Упр. № 11 (Рывок гири 24 кг (вес свыше 70 кг)</option>
                        <option value="12_1">Упр. № 12 (Толчок двух гирь 24 кг (вес до 70 кг)</option>
                        <option value="12_2">Упр. № 12 (Толчок двух гирь 24 кг (вес свыше 70 кг)</option>
                        <option value="13_1">Упр. № 13 (Толчок двух гирь по длинному циклу 24 кг (вес до 70 кг)
                        </option>
                        <option value="13_2">Упр. № 13 (Толчок двух гирь по длинному циклу 24 кг (вес свыше 70 кг)
                        </option>
                        <option style="display: none;" value="62">Упр. № 62 (Приседание)</option>
                    </select>
                    <small class="text-muted" id="upr_help_2"></small>
                </div>

                <div class="col-4">
                    <label for="upr_rezu_2" class="form-label">Результат</label>
                    <input type="text" class="form-control" id="upr_rezu_2" numupr="2">
                    <small class="text-muted" id="upr_ball_2"></small>
                </div>


                <div class="col-8">
                    <label for="upr_select_3" class="form-label">Выносливость</label>
                    <select class="form-select" id="upr_select_3" required="" numuprselect="3">
                        <option value="45">Упр. № 45 (Бег на 1 км)</option>
                        <option value="46">Упр. № 46 (Бег на 3 км)</option>
                        <option value="47">Упр. № 47 (Бег на 5 км)</option>
                        <option value="43">Упр. № 43 (Бег 400 м) !!! в секундах !!!</option>
                        <option value="53">Упр. № 53 (Лыжная гонка на 5 км)</option>
                        <option value="54">Упр. № 54 (Лыжная гонка на 10 км)</option>
                        <option value="57b" style="display: none;">Упр. № 57 б (Плавание на 300 м)</option>
                    </select>
                    <small class="text-muted" id="upr_help_3"></small>
                </div>

                <div class="col-4">
                    <label for="upr_rezu_3" class="form-label">Результат</label>
                    <input type="text" class="form-control" id="upr_rezu_3" numupr="3">
                    <small class="text-muted" id="upr_ball_3"></small>
                </div>


                <div class="col-8" id="upr_4_div1" style="display: none">
                    <label for="upr_select_4" class="form-label">Военно-прикладные навыки</label>
                    <select class="form-select" id="upr_select_4" required="" numuprselect="4">
                        <option value="00">Упражнение с оценкой</option>
                        <option value="52" selected="selected">Упр. № 52 (Метание гранаты на дальность)</option>
                        <option value="60">Упр. №60 (Ныряние в длину)</option>
                    </select>
                    <small class="text-muted" id="upr_help_4"></small>
                </div>

                <div class="col-4" id="upr_4_div2" style="display: none">
                    <label for="upr_rezu_4" class="form-label">Результат</label>
                    <input type="text" class="form-control" id="upr_rezu_4" numupr="4">
                    <small class="text-muted" id="upr_ball_4"></small>
                </div>


                <div class="col-8" id="upr_5_div1" style="display: none">
                    <label for="upr_select_5" class="form-label">Ловкость</label>
                    <select class="form-select" id="upr_select_5" required="" numuprselect="5">
                        <option value="00">Оценка за упражнение на ловкость (5,4,3,2)</option>
                        <option value="51">Упр. № 51 (Тройной прыжок с места)</option>
                    </select>
                    <small class="text-muted" id="upr_help_5"></small>
                </div>

                <div class="col-4" id="upr_5_div2" style="display: none">
                    <label for="upr_rezu_5" class="form-label">Результат</label>
                    <input type="text" class="form-control" id="upr_rezu_5" numupr="5">
                    <small class="text-muted" id="upr_ball_5"></small>
                </div>
            </div>

            <hr class="my-4">


        </div>
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Рекомендации</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div id="recomend_color_1">
                        <h6 class="my-0">Упражнение 1</h6>
                        <small class="text-muted" id="recomend_text_1"></small>
                    </div>
                    <span class="text-muted" id="recomend_ball_1">0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div id="recomend_color_2">
                        <h6 class="my-0">Упражнение 2</h6>
                        <small class="text-muted" id="recomend_text_2"></small>
                    </div>
                    <span class="text-muted" id="recomend_ball_2">0</span>
                </li>
                <li class="list-group-item ">
                    <div class="d-flex justify-content-between lh-sm ">
                        <div id="recomend_color_3">
                            <h6 class="my-0">Упражнение 3</h6>
                            <small class="text-muted" id="recomend_text_3"></small>
                        </div>
                        <span class="text-muted" id="recomend_ball_3">0</span>
                    </div>
                </li>

                <li class="list-group-item " style="display: none" id="recomend_block_4">
                    <div class="d-flex justify-content-between lh-sm ">
                        <div id="recomend_color_4">
                            <h6 class="my-0">Упражнение 4</h6>
                            <small class="text-muted" id="recomend_text_4"></small>
                        </div>
                        <span class="text-muted" id="recomend_ball_4">0</span>
                    </div>
                </li>
                <li class="list-group-item  " style="display: none" id="recomend_block_5">
                    <div class="d-flex justify-content-between lh-sm ">
                        <div id="recomend_color_5">
                            <h6 class="my-0">Упражнение 5</h6>
                            <small class="text-muted" id="recomend_text_5"></small>
                        </div>
                        <span class="text-muted" id="recomend_ball_5">0</span>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Итого </span>
                    <strong id="upr_itog_recomend_ball">0 </strong>
                </li>


            </ul>


            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Результат</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title text-center text-success" id="score"></h1>
                        <p class="h3 text-center" id="score_level"></p>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li></li>

                        </ul>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2021 Воен.клаб</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a class="text-muted " data-toggle="modal" href="#" data-target="#confid"> Что нового</a>
            </li>
            <li class="list-inline-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-telegram" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                </svg>
                <a class="text-muted " href="https://t.me/joinchat/JdUlA9x4dppmN2Uy">Нашли ошубку?</a>
            </li>

            <!-- Modal -->
            <div class="modal fade" id="confid" data-backdrop="static" data-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel2"> Новое</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-left">
                            <?
                            include_once('./new.txt') ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть
                            </button>

                        </div>
                    </div>
                </div>
            </div>

        </ul>
    </footer>
</div>


<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/script.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(85995842, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/85995842" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>