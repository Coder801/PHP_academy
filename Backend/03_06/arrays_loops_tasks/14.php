<?php
    $arr = [4, 2, 5, 19, 13, 0, 10];
    $check = false;
    foreach ($arr as $item) {
        if (($item == 2) || ($item == 3) || ($item == 4)) {
            $check = true;
        }
    }
    if ($check) {
        echo 'Есть!';
    } else {
        echo 'Нет!';
    }