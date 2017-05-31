<form action="serialize.php" method="post">
    <input type="text" placeholder="name" name="username"/>
    <input type="email" placeholder="email" name="email"/>
    <br/>
    <textarea type="text" placeholder="message" name="message"></textarea>
    <input type="submit" value="send"/>
</form>
<?php
    $ser_str = serialize($_POST);
    echo $ser_str;
?>