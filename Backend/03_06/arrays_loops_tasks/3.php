<?php
    $elements = [26, 17, 136, 12, 79, 15];
    $result = 0;
    foreach ($elements as $item) {
        $result +=  $item*$item;
    }
    echo $result;