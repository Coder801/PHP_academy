<?php
    $raw = rand(1, 40);
    $col = rand(1, 40);
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    echo '<table>';
    for ($i=1; $i <= $raw; $i++) {
        echo '<tr>';
        for ($j=1; $j <= $col; $j++) {
            $c = rand(0,6);
            echo "<td style=\"background-color:$colors[$c]\">" . rand(-1000, 1000). '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
