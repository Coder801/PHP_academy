<?php
$e = [2, 3, 4];
$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $value1) {
    foreach ($e as $value2) {
        if ($value1 == $value2) {
            echo $value2 . '<br>' ;

        }
    }
}



//    $arr = [4, 2, 5, 19, 13, 0, 10];
//    $arr_search = [2, 3, 4];
//
//
//
//    $inter = array_intersect($arr, $arr_search);
//    if (count($inter) !=0) {
//        echo 'Есть!';
//    } else {
//        echo 'Нет!';
//    };




//    $check = false;
//    foreach ($arr as $item) {
//        if (($item == 2) || ($item == 3) || ($item == 4)) {
//            $check = true;
//        }
//    }
//    if ($check) {
//        echo 'Есть!';
//    } else {
//        echo 'Нет!';
//    }