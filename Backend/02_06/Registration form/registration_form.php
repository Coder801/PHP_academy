<?php
    if ($_GET) {
        $str = serialize($_GET);
        $file = fopen('new_user.txt', 'a');
        fwrite($file, $str. PHP_EOL);
        fclose($file);
    }
