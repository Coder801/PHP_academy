<?php
    $j = 0;
    for ($i = 1; $i <= 9; $i++) {
        do {
            echo $i;
            $j++;
        } while ($j < $i);
        echo "<br/>";
        $j = 0;
    }