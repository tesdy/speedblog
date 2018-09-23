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
            $parallaximg = 'mangaherosreduce.jpeg';
            break;
        case 2:
            // Comic
            break;
        case 3:
            // BD
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
    <div class="parallax-container">
        <div class="parallax">
            <img src="web/<?= $parallaximg ?>" alt="HerosMangas">
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