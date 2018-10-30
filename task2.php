<?php declare (strict_types = 1);
function factorial(int $number): int
{
    if ($number === 0) {
        return 1;
    }
    $result = 1;
    for ($i = $number; $i >= 1; $i--) {
        $result = $result * $i;
        echo "vykdau iteraciją $i, rezultatas dabar $result<br>";
    }
    return $result;
}

if (isset($_GET['number'])) {
    $number = $_GET['number'];
    $result = factorial((int) $number);
}

?>

<html>
<body>
<h1>Faktorialas</h1>
<?php if (isset($number)) {?>
    <p>
        Rezultatas:
        <?php echo $result; ?>

    </p>


<?php }?>
    <form method="GET">
        <input type="text" name="number" value="<?php echo isset($_GET['number']) ? $_GET['number'] : '' ?>">
        <input type="submit" value="Skaičiuoti">
    </form>
</body>
</html>
