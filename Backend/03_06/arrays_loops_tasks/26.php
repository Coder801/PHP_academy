<?php
$arr = [];
$array_size = 4;
$result = 1;
for ($i =0; $i <= $array_size; $i++) {
    $arr[$i] = rand(1, 100);
    echo $arr[$i] . '<br/>';
    if (($arr[$i] > 0) && ($i % 2 == 0)) {
        $result *= $arr[$i];
    }
}
echo '<hr/>';
echo 'Произведение положительных элементов с парным индексом: ' . $result . '<br/>';
echo 'Элементы с непарным индексом: <br/>' ;
foreach($arr as $key => $value) {
    if ($key % 2 !== 0) {
        echo $value . '<br>';
    }
}