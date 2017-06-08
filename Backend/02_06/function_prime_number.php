<?php
    function prime_number ($a) {
        $check = true;
        for ($i = 2; $i < $a; $i++) {
            if ($a % $i == 0) {
                $check =false;
            }
        }
        return $check;
    }
    $number = 5;
    if (prime_number($number)) {
        echo "Число простое";
    } else {
        echo "Сложное число";
    }