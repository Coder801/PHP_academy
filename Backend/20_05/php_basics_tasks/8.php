<?php
    include "2.php";
    if (($age < 0 ) || (!(is_int($age)))) {
        echo "Неизветный возраст";
    }