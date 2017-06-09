<?php
    $arr = [];
    $array_size = 5;
    $min = 0;
    $max = 0;
    $min_index = 0;
    $max_index = 0;
    for ($i =0; $i <= $array_size; $i++) {
        $arr[$i] = rand(-1000, +1000);
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $min_index = $i;
            }
        if ($max < $arr[$i]) {
            $max = $arr[$i];
            $max_index = $i;
        }
    }
    print_r($arr);
    echo '<br/>MIN:'.min($arr);
    echo '<br/>MAX:'.max($arr);
    $arr[$min_index] = $max;
    $arr[$max_index] = $min;
    echo '<br/>';
    print_r($arr);
