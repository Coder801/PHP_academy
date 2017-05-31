<?php
    $check = true;
    for ($i=200; $i<=400; $i++) {
        for ($j=200; $j<$i; $j++) {
            if ($i % $j == 0) {
                $check = false;
            }
        }
        if ( $i % 2 !== 0) {
            if ($check) {
                echo $i . "<br/>";
                break;
            }
        }
        $check = true;
    }
    