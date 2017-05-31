<?php
    #Введите число а
    $a = 12;
    #Bведите число b
    $b = 14;
    $operator = [
        1 => "+",
        2 => "-",
        3 => "*",
        4 => "/",
        5 => "%",
    ];
    #Ввеедите номер действия из списка выше
    $count = $operator[5];
    switch ($count) {
        case "+": echo $a+$b; break;
        case "-": echo $a-$b; break;
        case "*": echo $a*$b; break;
        case "/": if ($b==0) {echo "Error! Деление на ноль!";} else {echo $a/$b;}; break;
        case "%": if ($b==0) {echo "Error! Деление на ноль!";} else {echo $a%$b;}; break;
    }