    <form method="post" action="24.php">
        <input type="number" name="number" placeholder="number">
        <input type="number" name="digit" placeholder="digit to count">
        <input type="submit">
    </form>
<?php
$a = isset($_POST['number']) ? $_POST['number'] : 0;
$b = isset($_POST['digit']) ? $_POST['digit'] : 0;
$arr = str_split($a);
$count = 0;
foreach ($arr as $item) {
    if ($item == $b) {
        $count ++;
    }
}
echo $count;
?>
