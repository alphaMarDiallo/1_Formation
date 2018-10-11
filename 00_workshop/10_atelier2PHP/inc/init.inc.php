<?php
// Connexion à la BDD :
$pdo = new PDO(
    'mysql:host=localhost;dbname=phoenix',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8',
    )
);

// Déclaration du chemin :
define('RACINE_SITE', '/1_Formation/00_workshop/10_atelier2PHP/');

require_once 'inc/fonctions.inc.php';
