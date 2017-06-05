<?php
    include "2.php";
if (($age < 0 ) || (!(is_int($age)))) {
    echo "Неизветный возраст";
}else {
    if (($age >= 18) && ($age <= 59)) {
        echo "Вам еще работать и работать";
    } else if ($age > 59) {
        echo "Вам пора на пенсию";
    } else if (($age >= 0) && ($age <= 17)) {
        echo "Вам еще рано работать";
    }
}
