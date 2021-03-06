<?php ob_start(); ?>

<?php

    $books = get_books(1);

if(!empty($_POST['searchinlist'])) {
    // vérifier la recherche : pas de caractères spéciaux
    echo $_POST['searchinlist'];
}

?>
    <nav id="searchform">
        <div class="nav-wrapper">
            <div class="col s12">
                <div class="padleft20">
                    <a href="index.php" class="breadcrumb">home</a>
                    <a href="?page=list" class="breadcrumb active" >Liste</a>
                </div>
            </div>
        </div>
    </nav>
    <nav>
        <div class="nav-wrapper">
            <form method="post" action="#">
                <div class="input-field">
                    <input id="search" type="search" name="searchinlist" placeholder="Recherche rapide" class="blue lighten-3" style="color: #8d8d8d">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav>

    <div class="row" style="margin-bottom: -10px; padding-bottom: -10px">
        <div class="input-field col s4 offset-s8">

            <select id="select-order">
                <option value="" disabled selected>Tri par :</option>
                <option value="nameasc">Titre : A -> Z</option>
                <option value="namedesc">Titre : Z -> A</option>
                <option value="dateasc">Parution : Ancien -> Recent</option>
                <option value="datedesc">Parution : Recent -> Ancien</option>
            </select>
            <label></label>
        </div>
    </div>


    <div class="bookcard row">
        <?php foreach ($books as $key => $book) { ?>
            <div class="item col l6 m6 s12" data-date="<?= $book->editeddate; ?>" data-name="<?= $book->title; ?>" >
                <h5 class="header"><?= $book->title ?></h5>
                <i><?= $book->editeddate ?></i>
                <div class="card horizontal">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img src="<?= $book->image ?>">
                    </div>
                    <div class="card-content" >
                        <p><?= substr(nl2br($book->content), 0,150)?>...</p>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><i class="material-icons right" title="Lecture rapide">more_vert</i></span>
                    </div>
                    <div class="card-reveal" style="resize: both">
                        <span class="card-title ltdtxt">Résumé : <br> <?= nl2br($book->content) ?>
                            <i class="material-icons right">close</i></span>
                    </div>
                    <div class="card-action">
                        <a href="?page=post&id=<?= $book->id ?>">Voir plus</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>



<?php
$content = ob_get_clean(); ?>



<?php require('template.php'); ?>