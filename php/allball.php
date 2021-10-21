<?php
//print_r($_REQUEST);

// определяю массив результатов
if ($SEX) {
    // если мужчина
    $arr = $BALLI_M[$AGE - 1][$CATEGORY - 1][$SUMM_UPR - 3];
} else {
    // если женщина
    $arr = $BALLI_W[$AGE - 1];
}
$i = 0;
//print_r($arr);
// если меньше минимального то оценка 2
if ($REZ < min($arr)) {
    $JSON['score'] = 2;
    $JSON['score_prefix'] = 'неудовлетворительно';
    $JSON['level'] = '';
    $JSON['text'] = 'Мои соболезнования';
    $json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
    echo $json;
    exit();
}

// если больше максимального то оценка 5 - высший уровень
if ($REZ >= max($arr)) {
    $JSON['score'] = 5;
    $JSON['score_prefix'] = 'отлично';
    $JSON['level'] = 'высший уровень';
    $JSON['text'] = 'Мои поздравления';
    $json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
    echo $json;
    exit();
}

// ущу его результат
foreach ($arr as $key => $value) {
    if ($REZ >= $value) {
        $i = $key;
    } else {
        break;
    }
}

$JSON['score'] = $score[$i]['score'];
$JSON['score_prefix'] = $score[$i]['score_prefix'];
$JSON['level'] = $score[$i]['level'];
$JSON['text'] = 'Мои поздравления';
$json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
echo($json);
exit();



