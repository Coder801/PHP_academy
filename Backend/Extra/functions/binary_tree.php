<?php
for ($i=0; $i<=20; $i++) {
    $arr[$i] = rand(0, 10000);
    echo $arr[$i] . ' ';
}

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

