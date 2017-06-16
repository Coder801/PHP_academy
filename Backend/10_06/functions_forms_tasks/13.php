<form  action="13.php" method="POST">
   <label for="text1">Field 1:
      <textarea name="text1" id="text1" rows="8" cols="80"></textarea>
   </label>
   <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST METHOD'] = 'POST') {
   $text = $_POST['text1'];
   echo 'Заданая строка: <br>' . $text . '<hr>';
   uniqueWordsCount($text);
}

function uniqueWordsCount($str)
{
   $arr = explode(" ", $str);
   $result();
   foreach ($arr as $item) {
      $count = substr_count($str, $item);
         if (!array_key_exists($item, $result)) {
            $key = $item;
            $value = $count;
            $result[$key] = $value;
            echo $key . ": " . $value . '<br>';
         }
   }
}
