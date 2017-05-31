<?php
    $a = false && true || false && true || !false && true;
    print $a."<br/>";
    $x = 5;
    $dx = $x % 2;
    $result = (bool)$dx;
    $answer = !$result;
    print "Делится ли {$x} на 2? - ";
    var_dump($answer);
?>

