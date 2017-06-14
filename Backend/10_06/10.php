<form  action="10.php" method="POST">
   <label for="text1">Field 1:
      <textarea name="text1" id="text1" rows="8" cols="80"></textarea>
   </label>
   <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST METHOD'] = 'POST') {
   $text = $_POST['text1'];
   echo uniqueWords($text);
}

function uniqueWords($str)
{
   $count = [];
   $arr = explode(' ', $str);
   $arr_unique = array_unique($arr);
   $result = count($arr_unique);
   return $result;
}
?>
