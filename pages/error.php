<?php

ob_start();


?>

<p class="flow-text">Désolé nous n'avons pas trouvé cette page !</p>
    <a href="index.php">Retour à l'accueil</a>


<?php
$content = ob_get_clean();
require('template.php');