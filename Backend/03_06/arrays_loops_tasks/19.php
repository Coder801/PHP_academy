<?php
$day = 'Среда';
$arr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье',];
foreach ($arr as $item) {
    if ($item == $day) {
        echo '<i>'.$item.'</i><br/>';
    } else {
        echo $item.'<br/>';
    }
}