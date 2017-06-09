<?php
$arr = [1, 1, 1, 1, 2, 1, 1, 3, 3, 1, 1, 4, 6, 4, 1, 1, 5, 10, 10, 5, 1];

function binary_tree_print($a)
{
    $raw_stop = 1;
    $marker =1;
    echo '<div style="text-align:center; font-size: 20px; line-height: 40px;">';
    foreach ($a as $value) {
        echo $value  . '<span style="padding-left: 30px;"></span>';
        $marker++;
        if ($marker > $raw_stop) {
          echo '<br/>';
          $marker = 1;
          $raw_stop++;
        }
    }
    echo '</div>';
}
binary_tree_print($arr);
