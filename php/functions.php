<?php

/**
 * Определяет разницу в единицах измерения упражнения
 * между двумя результатами в баллах.
 *
 * @param integer $ball_good - результат лучший
 * @param integer $ball_bad  - результат худший
 * @param integer $upr       - номер упражнения
 * @param integer $age       - возрастная категонрия
 * @param integer $sex       - пол
 *
 * @return  string
 */
function diffBallToRez($ball_good, $ball_bad, $upr, $age = 0, $sex = 0)
{
    global $db;

    $maxRez = getRezFromBall($ball_good, $upr);
    $minRez = getRezFromBall($ball_bad, $upr);

    $res = $db->query('SELECT * FROM ?f LIMIT 1', $upr);
    $data = $res->fetchAssoc();

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
        $def = abs($maxRez - $minRez);
    }
    return $def;
}

/**
 * Определяет результат по баллам
 *
 * @param integer $ball  - балл
 * @param string  $upr   - упражнение
 * @param integer $age   - возрастная категонрия
 * @param integer $sex   - пол
 * @param integer $kateg - категория
 *
 * @return string
 */
function getRezFromBall($ball, $upr, $age = '', $sex = '', $kateg = '')
{
    global $db;

    $res = $db->query('SELECT MAX(ball) as max, MIN(ball) as min FROM ?f', $upr);
    $data = $res->fetchAssoc();

    // если меньше минимального балла
    if ($ball < $data['min']) {
        return '0';
    } else {
        // ищем результат по баллу в базе.
        $res = $db->query('SELECT * FROM ?f WHERE ball<=?d ORDER BY ball DESC LIMIT 1', $upr, $ball);
        $data = $res->fetchAssoc();
        return $data['rezult'];
    }
}

function diffRez($rez1, $rez2, $format = '', $sex = '', $kateg = '')
{
    global $db;

    // вичисляю измнение результата
    if ($format == 'мин.') {
        // перевод  секунды Минимального результат

        $subs1 = explode('.', $rez1);
        if (!empty($subs1[1])) {
            $subs1[1] = (strlen($subs1[1]) == 1) ? $subs1[1].'0' : $subs1[1];
            $rez1sec = $subs1[1] + $subs1[0] * 60;
        } else {
            $rez1sec = $subs1[0] * 60;
        }
        $subs2 = explode('.', $rez2);
        if (!empty($subs2[1])) {
            $subs2[1] = (strlen($subs2[1]) == 1) ? $subs2[1].'0' : $subs2[1];
            $rez2sec = $subs2[1] + $subs2[0] * 60;
        } else {
            $rez2sec = $subs2[0] * 60;
        }
        // разница секундах
        $defSec = abs($rez2sec - $rez1sec);
        $min = floor($defSec / 60);
        $sec = $defSec - ($min * 60);
        $def = ($min) ? $min.'.'.$sec.' мин.' : $sec.' сек.';
        return $def;
    } else {
        $def = abs($rez1 - $rez2);
        return $def.' '.$format;
    }
}