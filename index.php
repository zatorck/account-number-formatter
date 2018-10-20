<form action="" method="GET">
    <input type="text" minlength="26" maxlength="26" style="width: 300px" name="number" required placeholder="Type number">
    <input type="submit" value="go">
</form>
<?php
if ($_GET['number'] != null) {
    $number = $_GET['number'];
    $parts = array(0 => 2, 2 => 4, 6 => 4, 10 => 4, 14 => 4, 18 => 4, 22 => 4);
    foreach ($parts as $key => $val)
    {
        $newNumber .= substr($number, $key, $val).' ';
    }
    echo 'Reformatted Number: ';
    echo $newNumber;
}
?>