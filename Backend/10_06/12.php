<form  action="12.php" method="POST">
   <label for="text1">Field 1:
      <textarea name="text1" id="text1" rows="8" cols="80"></textarea>
   </label>
   <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST METHOD'] = 'POST') {
   $text = $_POST['text1'];
   echo changeSentenseOrder ($text);
}
function changeSentenseOrder($str)
{
   $arr = explode(". ", $str);
   $arr = array_reverse($arr);
   return join(". ", $arr);
}
?>
