    <form method="post" action="23.php">
        <input type="number" name="number" placeholder="number">
        <input type="submit">
    </form>
<?php
    $a = isset($_POST['number']) ? $_POST['number'] : 0;
    $arr = str_split($a);
    $sum = 0;
    for ($i=0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    echo $sum;
?>
