<?php ob_start(); ?>

<?php

$last_books = get_books();



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
                Huic Arabia est conserta, ex alio latere Nabataeis contigua; opima varietate conmerciorum castrisque oppleta validis et castellis, quae ad repellendos gentium vicinarum excursus sollicitudo pervigil veterum per oportunos saltus erexit et cautos. haec quoque civitates habet inter oppida quaedam ingentes Bostram et Gerasam atque Philadelphiam murorum firmitate cautissimas. hanc provinciae inposito nomine rectoreque adtributo obtemperare legibus nostris Traianus conpulit imperator incolarum tumore saepe contunso cum glorioso marte Mediam urgeret et Parthos.

                Harum trium sententiarum nulli prorsus assentior. Nec enim illa prima vera est, ut, quem ad modum in se quisque sit, sic in amicum sit animatus. Quam multa enim, quae nostra causa numquam faceremus, facimus causa amicorum! precari ab indigno, supplicare, tum acerbius in aliquem invehi insectarique vehementius, quae in nostris rebus non satis honeste, in amicorum fiunt honestissime; multaeque res sunt in quibus de suis commodis viri boni multa detrahunt detrahique patiuntur, ut iis amici potius quam ipsi fruantur.

                Homines enim eruditos et sobrios ut infaustos et inutiles vitant, eo quoque accedente quod et nomenclatores adsueti haec et talia venditare, mercede accepta lucris quosdam et prandiis inserunt subditicios ignobiles et obscuros.
            </blockquote>
        </div>
        <div class="col l6 m6 s12">
            <img src="web/marvel_homeMini.jpg" alt="marvel_old_collection" class="z-depth-5 responsive-img">
        </div>
    </div>
</div>
</div> <!-- Close the first container -->

<div class="center" id="AlertDiv"><h1><span class="bordered lime lighten-5">Derniers Partages</span></h1></div>
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

