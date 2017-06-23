<?php

function files_in_dir ($dir)
{
    $res = opendir($dir);
    while ($files = readdir($res)) {
        if(!is_dir($files)) {
            echo $files . "<br>";
        }
    }
    closedir($res);
}

files_in_dir('/Users/andrewmatiyko/PHP_academy/Homeworks/Backend/10_06/functions_forms_tasks');