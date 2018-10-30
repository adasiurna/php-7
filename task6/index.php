<?php declare(strict_types=1);
include "includes/head.php";
require_once "functions.php";
require_once "content.php";
$activePageId = 1;
outputMenu($menu, $activePageId);
outputContent($content[1]);
outputGallery($content[1]['gallery']);
outputNews($news);

?>

</body>
</html>
