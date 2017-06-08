<?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $count = 0;
    $element_per_row = 3;
    $str = ', ';
    foreach ($arr as $item) {
        $count ++;
        if ($count % $element_per_row  == 0) {
            echo $item . '</br>';
        } else {
            echo $item . $str;
        }
    }