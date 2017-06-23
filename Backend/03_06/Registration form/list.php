<?php
 $users = file('new_user.txt');
 echo 'New users: <hr/>';
// $a = unserialize($users);
// echo '<pre>';
// print_r($a);
// echo '</pre>';
 foreach ($users as $item) {
     $a = unserialize($item);
     echo 'Name: ' . $a['first_name'] . '<br/>';
     echo 'Last name: ' . $a['last_name'] . '<br/>';
     echo 'E-Mail: '. $a['email'] . '<br/>';
     echo '<hr/>';
 }
?>