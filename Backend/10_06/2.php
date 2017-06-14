<form  action="2.php" method="POST">
   <label for="text1">Field 1:
      <textarea name="text1" id="text1" rows="8" cols="80"></textarea>
   </label>
   <input type="submit">
</form>

<?php
if ($_SERVER['REQUEST METHOD'] = 'POST') {
   $text = $_POST['text1'];
   echo longestWord($text);
}

function longestWord($str)
{
   $result = [];
   $arr = explode(" ", $str);
   usort ($arr, 'sortLength');
   array_push ($result, $arr[0], $arr[1], $arr[2]);
   return implode(', ', $result);
}

function sortLength($a, $b)
{
   return strlen($a) <=> strlen($b);
}
?>
