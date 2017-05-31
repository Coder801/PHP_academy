<?php
    $check = true;
    for ($i=1; $i<=100; $i++) {
        for ($j=2; $j<$i; $j++) {
            if ($i % $j == 0) {
                $check = false;
            }
        }
        if ($check) {
            echo $i."<br/>";
        }
        $check = true;
    }
    echo "<hr/>";
    $k = 1;
    while ($k <= 100) {
        $t = 2;
        while ($t<$k) {
            if ($k % $t == 0){
                $check = false;
            }
            $t++;
        }
        if ($check) {
            echo $k."<br/>";
        }
        $check = true;
        $k++;
    }
    echo "<hr/>";
    $var = array(1, 9, 234, 18, 27, 12412, 12, 21312, 3454, 54);
    foreach ($var as $item) {
        if ($item % 3 == 0) {
            echo $item."<br/>";
        }
    }