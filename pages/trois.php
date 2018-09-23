<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 21/09/18
 * Time: 00:57
 */

ob_start();

?>

<h1>Page Tres</h1>


<?php
$content = ob_get_clean();
require('template.php');