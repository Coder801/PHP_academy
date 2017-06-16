<form  action="9.php" method="POST">
   <label for="text1">Field 1:
      <textarea name="text1" id="text1" rows="8" cols="80"></textarea>
   </label>
   <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST METHOD'] = 'POST') {
   $text = $_POST['text1'];
   echo reverseString($text);
}

function reverseString($str)
{
   $result = '';
   for ($i=strlen($str)-1;$i>=0;$i--) {
      $result .= $str[$i];
   }
   return $result;
}
?>
