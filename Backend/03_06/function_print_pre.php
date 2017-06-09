<?php
function for_arr_print($a, $b) {
    switch ($b) {
        case $b == "var_dump":
            echo '<pre>';
            var_dump($a);
            echo '</pre>';
            break;
        case $b == "print_r":
            echo '<pre>';
            print_r( $a);
            echo '</pre>';
            break;
        default:
            echo '<pre>';
            print_r( $a);
            echo '</pre>';;
    }
}
$arr = [12, 2323, 234, 324,];
$method1 = "var_dump";
$method2 = "print_r";
$method3 = 'default_check';
for_arr_print($arr, $method3);
