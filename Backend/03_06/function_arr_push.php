<?php
    function array_length_push ($a) {
        $length = count($a);
        array_push($a, $length);
        return $a;
    }
    $arr = ['23213', 'sdfd', '123213', 'adsada',];
    echo '<pre>';
    print_r(array_length_push($arr));
    echo '</pre>';