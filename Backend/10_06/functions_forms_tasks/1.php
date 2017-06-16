<form  action="1.php" method="POST">
   <label for="text1">Field 1:
   <textarea name="text1" id="text1" rows="8" cols="80"></textarea>
</label><br>
   <label for="text1">Filed2:
   <textarea name="text2" id="text1" rows="8" cols="80"></textarea>
   </label>   <input type="submit" name="" value="SEND">
   <hr>
</form>
<?php
   if($_SERVER['REQUEST METHOD'] = 'POST') {
      $text1 = $_POST['text1'];
      $text2 = $_POST['text2'];
      $ae = explode ( " ", $text1);
      echo 'Text from field 1: ' . $text1 . "<br>";
      echo 'Text from field 2: ' . $text2 . "<br>";
      $common = getCommonWords($text1, $text2);
      echo 'Общие слова: ' . $common;
   }

   function getCommonWords($a, $b)
   {
      $result = [];
      $a_exp = explode(" ", mb_strtolower($a));
      $b_exp = explode(" ", mb_strtolower($b));
      foreach ($a_exp as $value) {
         foreach ($b_exp as $value1) {
            if($value == $value1) {
               array_push($result, $value);
               break;
            }
         }
      }
      return implode( ", ", $result);
   }
 ?>
