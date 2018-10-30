<?php declare (strict_types = 1);
function square(int $number): int
{
    return $number ** 2;
}
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    $result = square((int) $number);
}

?>

<html>
<body>
<h1>Kvadratas</h1>
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
