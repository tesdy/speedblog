<?php
session_start();
require('func/config.php');

$files = scandir('./pages');
$filename = array();

foreach($files as $file) {
    if(rtrim($file, '.php')) {
        $filename[] = str_replace('.php','', $file);
    }
}
$func_page = scandir('func/');
if(empty($_GET)) {
    $page = 'home';
    include 'func/home.func.php';
    require('pages/home.php');
}
else if (!array_key_exists("page", $_GET) || !in_array($_GET['page'], $filename)) {
    $page = "error";
    include 'func/error.func.php';
    require('pages/error.php');
} else {
    $page = $_GET['page'] ;
    if(in_array($_GET['page'] . '.func.php', $func_page))  include 'func/' . $_GET['page'] . '.func.php';
    require('pages/' . $page . '.php');
}


