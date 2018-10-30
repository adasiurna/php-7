<?php declare (strict_types = 1);

function outputHead(string $title, string $cssBase, array $cssFiles): void
{
    echo "<head>";
    echo "<title>$title</title>";
    foreach ($cssFiles as $cssFile) {
        echo '<link rel="stylesheet" type="text/css" href="' . $cssBase . $cssFile . '">';
    }
    echo "</head>";

}
