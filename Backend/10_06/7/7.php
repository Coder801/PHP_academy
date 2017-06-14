<?php

if ($_SERVER['REQUEST METHOD'] = ['POST']) {
   $text = $_POST['text1'];
   $guestBook = [];
   array_push($guestBook, $text);
}

require_once "7.html";

?>
