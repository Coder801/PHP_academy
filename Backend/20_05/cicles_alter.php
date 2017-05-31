<?php
    $check = true;
    for ($i=1; $i<=100; $i++) :
        for ($j=2; $j<$i; $j++) :
            if ($i % $j == 0) :
                $check = false;
            endif;
        endfor;
        if ($check) :
            echo $i."<br/>";
        endif;
        $check = true;
    endfor;
    echo "<hr/>";
    $k = 1;
    while ($k <= 100) :
        $t = 2;
        while ($t<$k) :
            if ($k % $t == 0) :
                $check = false;
            endif;
            $t++;
        endwhile;
        if ($check) :
            echo $k."<br/>";
        endif;
        $check = true;
        $k++;
    endwhile;
    echo "<hr/>";
    $var = array(1, 9, 234, 18, 27, 12412, 12, 21312, 3454, 54);
    foreach ($var as $item) :
        if ($item % 3 == 0) :
            echo $item."<br/>";
        endif;
    endforeach;