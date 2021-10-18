<?php

session_start();
define('_FLAG', 1);
define('DIR_ROOT', dirname(__FILE__));

error_reporting(E_ALL);
header('Content-Type: application/json');

function print_r2($object)
{
    echo '<pre>';
    print_r($object);
    echo '</pre>';
}

// конфигурационный файл
include_once DIR_ROOT.'/config.php';
include_once DIR_ROOT.'/php/connect_db.php';

// обрабатываю входные данные
// получаю результат в float формате с заменой , на .
$REZ = floatval(str_replace(",", ".", $_POST['rez']));
$AGE = (int)$_POST['age'];
$SEX = (int)$_POST['sex'];
// название таблицы для БД в зависимости от пола
if ($SEX) { // если мужчины
    // если упражнения с разделением на возраст
    if ($_POST['upr'] == 45 || $_POST['upr'] == 46) {
        $UPR = ($AGE == 1 || $AGE == 2 || $AGE == 3) ? 'upr_'.$_POST['upr'].'_1' : 'upr_'.$_POST['upr'].'_2';
    } else {
        $UPR = 'upr_'.$_POST['upr'];
    }
} else {
    // если женщины
    // если упражнения с разделением на возраст
    if ($_POST['upr'] == 1 || $_POST['upr'] == 2 || $_POST['upr'] == 40 || $_POST['upr'] == 41 || $_POST['upr'] == 42
            || $_POST['upr'] == 45 || $_POST['upr'] == 57 || $_POST['upr'] == 58) {
        $UPR = ($AGE == 1 || $AGE == 2) ? 'upr_'.$_POST['upr'].'_1_w' : 'upr_'.$_POST['upr'].'_2_w';
    } else {
        $UPR = 'upr_'.$_POST['upr'].'_w';
    }
}



// выходной json
$JSON = array(
        'ball' => '',
        'color' => '',
        'text' => '',
        'text2' => ''
);

switch ($_POST['type']) {
    case 'ball':
        // подстчет баллов
        include_once DIR_ROOT.'/php/ball.php';
        break;
}
