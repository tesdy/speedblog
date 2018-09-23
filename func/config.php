<?php

require ('param.inc');

try {
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

} catch (PDOException $e) {
    echo "Connexion impossible, erreur " . $e->getCode() . ", " . $e->getMessage();
}