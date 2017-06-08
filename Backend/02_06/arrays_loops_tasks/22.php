<?php
    $str = 'xx';
    $j = 0;
    for ($i = 1; $i <= 5; $i++) {
        do {
            echo $str;
            $j++;
        } while ($j < $i);
        echo "<br/>";
        $j = 0;
    }