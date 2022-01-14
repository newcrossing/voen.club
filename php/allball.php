<?php
/**
 * @global $SEX
 * @global $AGE
 * @global $REZ
 * @global $SUMM_UPR
 * @global $CATEGORY
 * @global $BALLI_M
 * @global $BALLI_W
 * @global $SCORE
 */
//print_r($_REQUEST);

// определяю массив результатов в зависимости  от пола
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
    $JSON['color'] = 'text-danger';
    $JSON['text'] = 'Мои соболезнования';
    $JSON['n'] = 2;
    $json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
    echo $json;
    exit();
}

// если больше максимального то оценка 5 - высший уровень
if ($REZ >= max($arr)) {
    $JSON['score'] = 5;
    $JSON['score_prefix'] = 'отлично';
    $JSON['level'] = 'высший уровень';
    $JSON['color'] = 'text-success';
    $JSON['text'] = 'Мои поздравления';
    $JSON['n'] = 8;
    $json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
    echo $json;
    exit();
}

// ущу его результат
foreach ($arr as $key => $value) {
    if ($REZ >= $value) {
        $i = $key;
    } else
        break;

}

$JSON['score'] = $SCORE[$i]['score'];
$JSON['score_prefix'] = $SCORE[$i]['score_prefix'];
$JSON['level'] = $SCORE[$i]['level'];
$JSON['color'] = $SCORE[$i]['color'];
$JSON['n'] = $i;
$JSON['text'] = 'Мои поздравления';
$json = json_encode($JSON, JSON_UNESCAPED_UNICODE);
echo($json);
exit();



