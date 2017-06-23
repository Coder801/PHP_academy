<?php
$comments = file_get_contents('db.txt');
$comments = explode("\n", trim($comments));

require_once "7.html";

if ($_SERVER['REQUEST METHOD'] = ['POST']) {
   $text = $_POST['text1'];
   if (bad_words($text)){
       echo "<script type='text/javascript'>alert('Запрещенно использовать нецензурную лексику')</script>";
   } else {
       $text = strip_tags($text, '<b>');
       file_put_contents('db.txt', $text . PHP_EOL, FILE_APPEND);
   }
}

function bad_words ($str)
{
   if (stristr($str, 'сука')) return true;
   return false;
}

?>


