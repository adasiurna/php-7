<?php declare(strict_types=1);
include "includes/head.php";
require_once "functions.php";
require_once "content.php";
$activePageId = 2;
outputMenu($menu, $activePageId);
outputContent($content[2]);
outputGallery($content[2]['gallery']);
outputNews($news);

?>

</body>
</html>
