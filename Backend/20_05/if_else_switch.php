<?php
    $x = 4;
    $y = 5;
        if ($x > $y) {
            print "x= {$x} is max";
        } else{
            print "y= {$y} is max";
        }
    print "<br/><hr/>";
    $answer = $x > $y ? "x= {$x} is max": "y= {$y} is max";
    print $answer;
    print "<br/><hr/>";
    switch ($x) {
        case $x > $y: print "x= {$x} is max"; break;
        case $x < $y: print "y= {$y} is max"; break;
    }
?>