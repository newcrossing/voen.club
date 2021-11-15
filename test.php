<?php

session_start();
define('_FLAG', 1);
define('DIR_ROOT', dirname(__FILE__));

error_reporting(E_ALL);
header('Content-Type: application/json');


// конфигурационные файл
include_once DIR_ROOT . '/configDB.php';
include_once DIR_ROOT . '/config.php';
include_once DIR_ROOT . '/php/connect_db.php';
include_once DIR_ROOT . '/php/functions.php';

// обрабатываю входные данные

/**
 * @var string $REZ
 * получаю результат в float формате с заменой , на .
 */
$REZ = floatval(str_replace(",", ".", @$_REQUEST['rez']));

/**
 * @var integer $AGE
 * Возрастная категория
 */
$AGE = (int)@$_REQUEST['age'];

/**
 * @var integer $SEX
 * Определяет пол. 1 - Мужчина, 0 - Женщина
 */
$SEX = (int)@$_REQUEST['sex'];

/**
 * @var integer $CATEGORY
 * Категория Военнослужащего
 */
$CATEGORY = (int)@$_REQUEST['category'];

/**
 * @var integer $SUMM_UPR
 * количество упражнений
 */
$SUMM_UPR = (int)@$_REQUEST['summ_upr'];
// название таблицы для БД в зависимости от пола
if ($SEX) { // если мужчины
    // если упражнения с разделением на возраст
    if (@$_REQUEST['upr'] == 45 || @$_REQUEST['upr'] == 46) {
        $UPR = ($AGE == 1 || $AGE == 2 || $AGE == 3) ? 'upr_' . $_REQUEST['upr'] . '_1' : 'upr_' . $_REQUEST['upr'] . '_2';
    } else {
        $UPR = 'upr_' . @$_REQUEST['upr'];
    }
} else {
    // если женщины
    // если упражнения с разделением на возраст
    if (@$_REQUEST['upr'] == 1 || @$_REQUEST['upr'] == 2 || @$_REQUEST['upr'] == 40 || @$_REQUEST['upr'] == 41 || @$_REQUEST['upr'] == 42
        || @$_REQUEST['upr'] == 45 || @$_REQUEST['upr'] == 57 || @$_REQUEST['upr'] == 58) {
        $UPR = ($AGE == 1 || $AGE == 2) ? 'upr_' . @$_REQUEST['upr'] . '_1_w' : 'upr_' . @$_REQUEST['upr'] . '_2_w';
    } else {
        $UPR = 'upr_' . @$_REQUEST['upr'] . '_w';
    }
}

//print_r(getRezFromBall(0, 'upr_42'));
//print_r(diffBallToRez(42, 0,'upr_42'));
print_r(diffRez('1.3', '2', 'мин.'));

