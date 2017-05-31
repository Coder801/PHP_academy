<form action="get_post.php" method="post">
    <input type="text" placeholder="name" name="name"/>
    <input type="email" placeholder="email" name="email"/>
    <text type="phone" placeholder="phone" name="phone"/>
    <input type="submit" value="send"/>
</form>
<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
?>
