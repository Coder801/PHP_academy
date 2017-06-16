<?php
for ($i=0; $i<=6; $i++) {
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
//    $tree = [
//        'main' => [],
//        'left' => [],
//        'right' => []
//    ];
    $tree['main'] =$a[0];
    for ($i=0; $i < count($a); $i++)
    {
        if ($a[$i+1] > $a[$i]) {
           $right = 'tree';
           right_branch($right, $a[$i+1]);
        } else {
           $left = 'tree';
           left_branch($left, $a[$i+1]);
        }
    }


//    $tree['main'] =$a[0];
//    if ($a[1] > $a[2]) {
//        left()
//        $tree['left']['main'] = $a[2];
//        $tree['right']['main'] = $a[1];
//    } else {
//        $tree['left']['main'] = $a[1];
//        $tree['right']['main'] = $a[2];
//    }
//    addItem ($tree, $a[1], $a[2]);
    return $tree;
}

function right_branch($new_arr, $s)
{
    $$new_arr['right']['main'] = $s;
    return $new_arr;
}
function left_branch($new_arr, $s)
{
    $$new_arr['left']['main'] = $s;
    return $new_arr;
}

//function addItem ($ar, $s1, $s2)
//{
//    if ($s1 > $s2) {
//        $ar['left']['main'] = $s2;
//        $ar['right']['main'] = $s1;
//    } else {
//        $ar['left']['main'] = $s1;
//        $ar['right']['main'] = $s2;
//}
//    return $ar ;
//}

echo '<pre>';
print_r(binary_tree_sort($arr));
echo '</pre>';
