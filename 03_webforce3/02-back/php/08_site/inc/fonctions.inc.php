<?php

function debugV($param)
{
    echo '<prev style="background-color: #ebd4cb>';
    var_dump($param);
    echo '</prev>';
}

function debugP($param)
{
    echo '<pre style="background-color: #d5ecd4 ;">';
    echo '<strong>print_r($param)</strong> <br>';
    print_r($param);
    echo '</pre>';
}
//--------------- FONCTIONS MEMBRES ------------------
// cette fonction m'indique si l'internaute est connecté :
function internauteEstConnecte()
{
    if (isset($_SESSION['membre'])) {
        return true; // si l'indice membre existe dans la session, c'est que l'internaute est passé dans le formulaire de connexion avec le log/mdp. On retourne donc "true"
    } else {
        return false; // dans le cas contraire il n'est pas connecté, on retourne false
    }
    // ou :
    // return (isset($_SESSION['membre']));
}

// fonction qui indique si le membre est un admin et est connecté :
function internauteEstConnecteEtAdmin()
{
    if (internauteEstConnecte() && $_SESSION['membre']['status'] == 1) {
        return true;
    } else {
        return false;
    }
}
