<?php ob_start(); ?>

<?php

$last_books = getLastBooks();



?>
<div class="lime lighten-5">
    <div class="row">
        <div class="col l6 m6 s12">
            <p>Bienvenu sur ce petit blog qui va vous faire partager votre passion pour les Bandes Dessinées et les Mangas. </p>
            <p>
                Ici on partage! Ce blog est destiné pour les amateurs de livres à bulles qui veulent s'ouvrir de nouveaux horizons mais aussi,
                et surtout, aider les autres à découvrir des perles à coté desquels ils seraient passés.
                Je vous invite donc à <a href="index.php?page=signin" class="">vous inscrire</a> afin de nous partager vos livres favoris. <br>
                Je compte sur vous !
            </p>
            <hr>
            <blockquote>
                Prochainement :
                Ici se trouvera les derniers Upload (envois), des dossiers sur les auteurs, les héros, les projets en cours,
                éventuellement des reportages sur les salons auxquels j'arriverai à participer mais aussi pourquoi pas vos visites également.
                Bref, le site n'en est qu'à ses balbutiements.
            </blockquote>
        </div>
        <div class="col l6 m6 s12">
            <img src="web/marvel_homeMini.jpg" alt="marvel_old_collection" class="z-depth-5 responsive-img">
        </div>
    </div>
</div>
</div> <!-- Close the first container -->

<div class="center" id="AlertDiv"><h1><span class="bordered container lime lighten-5">Derniers Partages</span></h1></div>
    <div class="carousel">
        <?php
        foreach ($last_books as $key => $book) {
            ?>
            <a class="carousel-item" href="index.php?page=book&id=<?= $book->id ?>">
            <p style="margin-top: -80px; text-align: center; color: #0534c1"><?= $book->aName; ?></p>
            <img class="z-depth-5 responsive-img" src="<?= $book->image ?>"></a>
            <?php
        }
        ?>

    </div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

<script type="text/javascript" src="js/home.func.js"></script>

