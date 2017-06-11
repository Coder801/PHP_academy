<?php
for ($i=0; $i<=20; $i++) {
    $arr[$i] = rand(0, 1000);
    echo $arr[$i] . ' ';
}

//function binary_tree_print($a)
//{
//    $raw_stop = 1;
//    $marker =1;
//    echo '<div style="text-align:center; font-size: 20px; line-height: 40px;">';
//    foreach ($a as $value) {
//        echo $value  . '<span style="padding-left: 30px;"></span>';
//        $marker++;
//        if ($marker > $raw_stop) {
//          echo '<br/>';
//          $marker = 1;
//          $raw_stop++;
//        }
//    }
//    echo '</div>';
//}
//binary_tree_print($arr);

function binary_tree_sort($a)
{
    $binary_tree = [ $parent => $a[0];]

//    $parent = $a[0];
//    $left_child = $a[1];
//    $right_child = $a[2];
//    $binary_tree = [
//        $parent => [
//            $left_child =>[],
//            $right_child => []
//        ]
//    ];
//    echo '<pre>';
//    print_r($binary_tree);
//    echo '</pre>';

}
binary_tree_sort($arr);
