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

?>


    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center  text-dark" id="score3">
            <small>Оценка 3</small>
            <span class="badge bg-warning "><?= $arr[3] ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center  text-dark" id="score4">
            <small>Оценка 4</small>
            <span class="badge bg-primary"><?= $arr[4] ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center  text-dark" id="score5">
            <small>3 уровень (оценка 5)</small>
            <span class="badge bg-success"><?= $arr[5] ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center  text-dark" id="score6">
            <small>2 уровень (оценка 5)</small>
            <span class="badge bg-success"><?= $arr[6] ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center  text-dark" id="score7">
            <small>1 уровень (оценка 5)</small>
            <span class="badge bg-success"><?= $arr[7] ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center  text-dark" id="score8">
            <small>Высший уровень (оценка 5)</small>
            <span class="badge bg-success"><?= $arr[8] ?></span>
        </li>
    </ul>
<?php
exit();



