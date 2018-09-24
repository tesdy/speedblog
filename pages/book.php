<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 21/09/18
 * Time: 00:57
 */

ob_start();

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $book = get_book($_GET['id']);
    switch ($book->type) {
        case 1:
            // Manga
            $parallaximg = 'type1-Manga.jpeg';
            break;
        case 2:
            // Comic
            $parallaximg = 'type2-Comic2.jpg';
            break;
        case 3:
            // BD
            $parallaximg = 'type3-BDs.jpg';
            break;
        default:
            $parallaximg = 'bulles-white.jpg';
    }
    if($book == false) {
        header('Location: index.php?page=error');
    }
} else {
    header('Location: index.php?page=error');
}

?>
    </div> <!-- Close the Body>Container tag -->
    <div class="parallax-container" style="margin-top: -40px">
        <div class="parallax">
            <img src="web/<?= $parallaximg ?>" alt="YourHeros">
        </div>
    </div>

    <div class="container"> <!-- reopen the Body>Container tag -->
    <div class="padhome">
        <h1><?= $book->title ?></h1>
        <p class="flow-text"><?= $book->content; ?></p>
    </div>

<?php
$content = ob_get_clean();
require('template.php');