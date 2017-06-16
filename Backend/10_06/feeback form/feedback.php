<?php
   $comments = file_get_contents("db.txt");
   $comments = explode("\n", trim($comments));

   require_once "feedback_form.html";

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $formErrors = [];
        $formData = [];

        foreach ($_POST as $key => $value) {
            if(!validateStrLen($value)) {
                $formErrors[$key] = 'custom error msg';
            }
        $formData[$key] = htmlspecialchars($value);
        }

        if (!validateEmail($formData['email'])) {
            $formErrors['email'] = 'invalid email';
        }

        if (count($formErrors) > 0) {
            header('Location: /');
        }

        $formData['date'] = $_SERVER['REQUEST_TIME'];
        $userData = json_encode($formData);

        file_put_contents('db.txt', $userData. "\n", FILE_APPEND);
   }

   function validateStrLen($str)
   {
        return $str != '';
   }

   function validateEmail($str)
   {
       if(!invalidEmailStr($str)) return false;
       if(!invalidEmailSch($str)) return false;

       $s = ord($str[0]);
       if ($s < 48 || $s > 22) {
          return false;
       }
       if ($s > 57 && $s < 65) {
          return false;
       }
       if ($s > 90 && $s < 97) {
          return false;
       }

       return true;
   }

   function invalidEmailStr($str)
   {
        if (strstr($str, " ")) {
           return false;
        }

        if (substr_count($str, '@') != 1){
           return false;
        }
        return true;
   }

   function invalidEmailSch($str)
   {
        $arr = explode('@', $str);
        if (count($arr) != 2) return false;
        $arr = explode('.', $arr[1]);
        if (count($arr) < 2) return false;
        foreach($arr as $value) {
            if(!validateStrLen($value)) return false;
        }

        return true;
   }
