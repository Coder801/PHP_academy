<?php

function files_in_dir ($dir, $word)
{
    $res = opendir($dir);
    while ($files = readdir($res)) {
        if(!is_dir($files)) {
            if (strstr($files, $word)) {
                echo $files . "<br>";
            }
        }
    }
    closedir($res);
}

files_in_dir('/Users/andrewmatiyko/PHP_academy/Homeworks/Backend/10_06/functions_forms_tasks', '5');