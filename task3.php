<?php declare (strict_types = 1);
function isLeapYear(int $year): bool
{
    return checkdate(2, 29, $year);
}

if (isset($_GET['year'])) {
    $year = $_GET['year'];
    $result = isLeapYear((int) $year);
}

?>

<html>
<body>
<h1>Ar metai keliamieji?</h1>
<?php if (isset($year)) {?>
    <p>
        Rezultatas:
        <?php echo $result ? 'Keliamieji' : 'Nėra keliamieji'; ?>

    </p>


<?php }?>
    <form method="GET">
        <input type="text" name="year" value="<?php echo isset($_GET['year']) ? $_GET['year'] : '' ?>">
        <input type="submit" value="Skaičiuoti">
    </form>
</body>
</html>
