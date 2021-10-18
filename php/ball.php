<?php

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




//проврка на изначально выше и ниже крайних результатов
if ($bad) {
    // минимальный возрастной результат
    $res = $db->query('SELECT * FROM ?f WHERE ball>=?d ORDER BY ball ASC LIMIT 1', $UPR, $MIN_BALL_M[$AGE]);
    $dataMin = $res->fetchAssoc();

    $JSON['ball'] = 0;
    $JSON['color'] = 'text-danger';
    $JSON['text'] = 'Ниже минимального результа';
    $JSON['text2'] = 'Увеличь результат как минимум до '.$dataMin['rezult'].' '.$dataMin['format'].' для своей возрастной группы';
    $json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
    echo $json;
    exit();
}
if ($good) {
    $JSON['ball'] = 100;
    $JSON['color'] = 'text-success';
    $JSON['text'] = 'Герой!';
    $JSON['text2'] = 'Так держать!';
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
if ($data['ball'] < $MIN_BALL_M[$AGE]) {
    $res = $db->query('SELECT * FROM ?f WHERE ball>=?d ORDER BY ball ASC LIMIT 1', $UPR, $MIN_BALL_M[$AGE]);
    $dataMin = $res->fetchAssoc();

    // вичисляю измнение результата
    if ($data['format'] == 'мин.') {
        // перевод  секунды Минимального результат
        //   $REZ = floatval(str_replace(",", ".", $dataMin['rezult']));
        $subs = explode('.', $dataMin['rezult']);
        $subMinRez = @$subs[1] + @$subs[0] * 60;

        // перевод  секунды текущего результата
        $subs = explode('.', $REZ);
        @$subs[1] = '0.'.@$subs[1];
        $subRez = @$subs[1] + @$subs[0] * 60;

        // разница секундах
        $def = abs($subRez - $subMinRez);
        //echo $def.'-'.$subRez.'-'.$subMinRez;
        // exit();
        $min = floor($def / 60);
        $sec = $def - ($min * 60);
        $def = $min.'.'.$sec;
    } else {
        $def = abs($REZ - $dataMin['rezult']);
    }

    $JSON['ball'] = $data['ball'];
    $JSON['color'] = 'text-danger';
    $JSON['text'] = 'Ниже минимального результа.';
    // $JSON['text2'] = 'Увеличь результат как минимум до '.$dataMin['rezult'].' '.$dataMin['format'].
    //         ' для своей возрастной группы. Не хватает всего-то  '.$def.' '.$dataMin['format'];
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