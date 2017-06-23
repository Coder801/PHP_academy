<?php
    if ($_SERVER['REQUEST_METHOD'] = 'POST') {
        $length = (int)$_POST['length'];
        $str = file_get_contents("3.txt");
        $arr = explode(" ", $str);
        foreach ($arr as $key => $value) {
            if (iconv_strlen($value) > $length) {
                unset($arr[$key]);
            }
        }
        $str = implode(" ", $arr);
        file_put_contents("3.txt", $str);
   }