<?php
    include "9.php";
    switch ($day) {
        case (($day >= 1) && ($day <=5)): echo "Это рабочий день"; break;
        case (($day >= 6) && ($day <=7)): echo "Это выходной день"; break;
    }