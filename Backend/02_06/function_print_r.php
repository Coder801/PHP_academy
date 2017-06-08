<?php
    function my_print_r ($a) {
        echo 'Array ( ';
        foreach ($a as $key => $value) {
            if (!is_array($value)) {
                echo '[' . $key . '] => ' . $value . ' ';
            } else {
                echo '[' . $key . '] => ';
                my_print_r($value);
            }
        }
        echo ' ) ';
    }
    $arr = [
        12,
        13,
        [
            'one',
            'two',
            'three',
            ],
        456,
        343,
        [
            'four',
            [
                'english',
                'german',
                'french',
            ],
            'five'
        ],
    ];
    echo 'Встроеная функция print_r<br/>';
#    echo '<pre>';
    print_r($arr);
#    echo '</pre>';
    echo '<hr/>';
    my_print_r($arr);