<?php
    $str = 'x';
    $j = 0;
    for ($i = 1; $i <= 20; $i++) {
        do {
            echo $str;
            $j++;
        } while ($j < $i);
        echo "<br/>";
        $j = 0;
    }