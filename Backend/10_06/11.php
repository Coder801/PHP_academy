<form  action="11.php" method="POST">
   <label for="text1">Field 1:
      <textarea name="text1" id="text1" rows="8" cols="80"></textarea>
   </label>
   <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST METHOD'] = 'POST') {
   $text = $_POST['text1'];
   echo firstLettersLarge($text);
}

function firstLettersLarge($str)
{
   $result = [];
   $arr = explode (". ", $str);
   foreach ($arr as $item) {
           array_push($result, mb_ucfirst($item));
   }
   return implode('. ', $result);
}

function mb_ucfirst($str)
{
    return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
}
?>
