<html>
<?php
require_once 'functions.php';
$cssBase = 'public/css/';
$title = 'Hello World';
$cssFiles = ['style.css', 'theme.css'];
outputHead($title, $cssBase, $cssFiles);
?>
<body>
    Hello World!
</body>
</html>