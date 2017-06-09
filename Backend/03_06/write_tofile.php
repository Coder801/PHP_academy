<?php
$file = fopen('write_to_file.txt', 'w');
fwrite($file, '1'. PHP_EOL . '22'. PHP_EOL . '33' . PHP_EOL . '44'. PHP_EOL . '55'. PHP_EOL . '66'. PHP_EOL . '77'. PHP_EOL . '88'. PHP_EOL . '99'. PHP_EOL . '1010'. PHP_EOL );
fclose($file);
$file1 = fopen('write_to_file.txt','r');
$text1 = fread($file1, 4);
echo $text1 . '<hr/>';
$text2 = file_get_contents('write_to_file.txt');
echo $text2;