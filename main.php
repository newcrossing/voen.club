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
$UPR = ($SEX) ? 'upr_'.$_POST['upr'] : 'upr_'.$_POST['upr'].'_w';

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
