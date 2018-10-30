<?php

function outputMenu(array $menu, int $activePageId = 1): void
{
    echo '<header><nav>
            <a href="index.php" ' . (($activePageId == 1) ? 'class="active"' : '') . '>Apie mus</a>
            <a href="structure.php" ' . (($activePageId == 2) ? 'class="active"' : '') . '>Struktūra</a>
          </nav></header>';
}

function outputContent(array $content): void
{
    echo '
        <div class="container"><main>
            <h1>' . $content["name"] . '</h1>
            <img src="img/' . $content["image"] . '" alt="'.$content["image"].'">
            ' . $content["text"] . '
    ';
}

function outputGallery(array $galleryData): void
{
    echo '<div class="main-gallery">
                    <h1>Galerija</h1>';
    foreach ($galleryData as $galleryImage) {
        echo '<img src="img/' . $galleryImage . '" alt="' . $galleryImage . '">';
    }
    echo '</div></main>';
}

function outputNews(array $news): void
{
    echo '<section><h2>Naujienos</h2>';
    foreach ($news as $data => $new) {
        echo '<div class="section-news"><h3> ' . $new['name'] . ' </h3>
              <p>' . $data . '</p>
              <p>' . $new['description'] . '</p>
              <p>' . $new['text'] . '</p></div>';
    }
    echo '</section></div>';
}
