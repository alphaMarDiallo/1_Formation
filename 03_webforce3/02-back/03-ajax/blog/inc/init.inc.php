<?php

// CONNEXION A LA BDD
$pdo = new PDO(
    'mysql:host=localhost;dbname=blog',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8 ',
    ));

//OUVERTURE  DE LA SESSION
session_start();
