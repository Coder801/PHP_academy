<?php
$comments = file_get_contents('db.txt');
$comments = explode("\n", trim($comments));

require_once "7.html";

if ($_SERVER['REQUEST METHOD'] = ['POST']) {
    $text = $_POST['text1'];
    file_put_contents('db.txt', $text. PHP_EOL, FILE_APPEND );

}

?>
