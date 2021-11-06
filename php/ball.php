<?php

// упражнение с оценкой
if ($UPR == 'upr_00' || $UPR == 'upr_00_w') {
    // выбираю баллы в зависимости от пола
    $b = ($SEX) ? $BALL_FROM_OCENKA_M[$AGE][$CATEGORY][$REZ] : $BALL_FROM_OCENKA_W[$AGE][$REZ];

    $JSON['ball'] = $b;
    $JSON['color'] = $ocenki_text[$REZ]['color'];
    $JSON['text'] = $ocenki_text[$REZ]['text'][rand(0, count($ocenki_text[$REZ]['text']) - 1)];
    $JSON['text2'] = $ocenki_text[$REZ]['text2'][rand(0, count($ocenki_text[$REZ]['text2']) - 1)];
    $json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
    echo $json;
    exit();
}


$res = $db->query('SELECT MAX(rezult) as max, MIN(rezult) as min, type FROM ?f', $UPR);
$data = $res->fetchAssoc();

// локальный максимальный результат
// узнаю критаерий максимльности
if ($data['type'] == 'min') {
    $max = $data['min'];
    $min = $data['max'];
    // критерий хуевости результата, хуев если истина
    $bad = ($REZ > $min) ? true : false;
    $good = ($REZ < $max) ? true : false;
} else {
    $max = $data['max'];// максимальный результат, лучший
    $min = $data['min']; // минимальный результат, худший
    $bad = ($REZ < $min) ? true : false;
    $good = ($REZ > $max) ? true : false;
}

/**
 * Минимальный пороговый бал
 * в зависимости от пола
 * @type integer
 */
$MIN_BALL = ($SEX) ? $MIN_BALL_M[$AGE] : $MIN_BALL_W[$AGE];
//проврка на изначально выше и ниже крайних результатов
if ($bad) {
    // минимальный возрастной результат
    $res = $db->query('SELECT * FROM ?f WHERE ball>=?d ORDER BY ball ASC LIMIT 1', $UPR, $MIN_BALL);
    $dataMin = $res->fetchAssoc();

    $JSON['ball'] = 0;
    $JSON['color'] = 'text-danger';
    $JSON['text'] = 'Ниже минимального результа';
    $JSON['text2'] = 'Увеличь результат как минимум до '.$dataMin['rezult'].' '.$dataMin['format']
            .' для своей возрастной группы. Осталось всего '
            .diffRez($dataMin['rezult'], $REZ, $dataMin['format']);
    $json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
    echo $json;
    exit();
}
if ($good) {
    $JSON['ball'] = 100;
    $JSON['color'] = 'text-success';
    $JSON['text'] = 'Уф, вышак в кармане';
    $JSON['text2'] = 'Больше уже некуда';
    $json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
    echo $json;
    exit();
}

// ещем результат в базе
if ($data['type'] == 'min') {
    $res = $db->query('SELECT * FROM ?f WHERE rezult>=?d ORDER BY ball DESC LIMIT 1', $UPR, $REZ);
} else {
    $res = $db->query('SELECT * FROM ?f WHERE rezult<=?d ORDER BY ball DESC LIMIT 1', $UPR, $REZ);
}
$data = $res->fetchAssoc();

// если баллов меньше чем положено по возрасту
if ($data['ball'] < $MIN_BALL) {
    $res = $db->query('SELECT * FROM ?f WHERE ball>=?d ORDER BY ball ASC LIMIT 1', $UPR, $MIN_BALL);
    $dataMin = $res->fetchAssoc();

    $JSON['ball'] = $data['ball'];
    $JSON['color'] = 'text-danger';
    $JSON['text'] = 'Ниже минимального результа.';
    $JSON['text2'] = 'Увеличь результат как минимум до '.$dataMin['rezult'].' '.$dataMin['format']
            .' для своей возрастной группы. Осталось всего '
            .diffRez($dataMin['rezult'], $REZ, $dataMin['format']);
    $json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
    echo $json;
    exit();
}

$JSON['ball'] = $data['ball'];
$JSON['color'] = 'text-success';
$JSON['text2'] = 'Отличный результат!';
$json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
echo $json;
exit();