<?php
$count = 0;
$arr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье',];
foreach ($arr as $item) {
    $count ++;
    if (($count == 6) || ($count == 7)) {
        echo '<b>'.$item.'</b><br/>';
    } else {
        echo $item.'<br/>';
    }
}