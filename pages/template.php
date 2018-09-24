<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="blue lighten-5">
<?php include("views/topbar.php"); ?>
<div class="container lime lighten-5">
    <?= $content ?>
</div>
<footer class="page-footer light-blue row" style="margin-bottom: 0">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Contenu pied di pagia </h5>
                <p class="grey-text text-lighten-4">bla bleu bli blou</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Link to the past</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1 sur Nes</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2 sur Nes </a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3 a link to the past (SNes)</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4 A Link's Awakening (GB)</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!--JavaScript at end of body for optimized loading-->
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!-- Specific JS -->
<?php
if(isset($_GET['page'])) {
    $js_page = scandir('js/');
    if(in_array($_GET['page'] . '.func.js', $js_page)) {
        ?>
        <script type="text/javascript" src="js/<?= $_GET['page'] ?>.func.js"></script>
        <?php
    }
}
?>
</body>
</html>