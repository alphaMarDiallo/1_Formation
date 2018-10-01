<style>
    h3 {color: purple;}
</style>
<?php
//-------------------------------
//             PDO
//-------------------------------

// PDO pour PHP Data Object, définit une interface pour accéder à une base de données depuis le  PHP.

function debug($param)
{
    echo '<pre>';
    echo print_r($param);
    // echo var_dump($param);
    echo '</pre>';
}
//--------------------------------------------------------
echo '<h3> 01- Connexion : </h3>';
//--------------------------------------------------------

$pdo = new PDO(
    'mysql:host=localhost;dbname=societe',// driver mysql (pourrait être oracle, IBM, ODBC...) + nom de la BDD
    'root', // pseudo de la BDD
    '', // mdp de la BDD
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // pour afficher les messages d'erreur SQL
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'// définition du jeu de caractère des échanges avec la BDD
    )
);

// $pdo ci-dessus est un objet issu de la classe prédéfinie PDO. Il représente la connexion à la base de donnée "societe".

//--------------------------------------------------------
echo '<h3> 02- La méthode exec() : </h3>';
//--------------------------------------------------------

// exec() est utilisé pour la formulation de requete ne retournant pas de résulta : INSERT, DELETE, UPDATE.

$resultat = $pdo->exec("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES ('test', 'test', 'm', 'test', '2016-02-08', 500)");

/* 
Valeur de retour : 
    - Succes : renvoie le nombre de lignes affectées par la requête
    - Echec : retourne false
 */

echo 'nombre de lignes affectées par le INSERT : ' . $resultat . '<br>';
echo 'Dernière ID inséré par la BDD : ' . $pdo->lastInsertId() . '<br>';

//-----
// Supprimer les ligne test
$resultat = $pdo->exec("DELETE FROM employes WHERE prenom = 'test' ");
echo 'nombre de lignes affectées par le DELETE : ' . $resultat . '<br>';

//---------------------------------------------------------------
echo '<h3> 03 - la méthode query() et les différent fetch : </h3>';
//---------------------------------------------------------------

// Au contraire de exc() query() s'utilise pour la formulation de requête retournant un ou plusieurs résultats : SELECT.

$result = $pdo->query("SELECT * FROM employes WHERE prenom = 'daniel'");

debug($pdo);
debug($result);
/* 
Valeur de retour de la méthode query() : 
    - Succès : elle nous fournit un objet issu de la classe prédéfinie PDOStatement qui contient un ou plusieurs jeux de résultats.debug
    - Echec : retourn false

    Notez que query() peut être aussi utuilisée avec INSERT, DELETE et UPDATE.
 */

// $result est le résultat de la requête sous forme inexploitable directement. En effet on ne voit pas le jeu de résultat concernant daniel à l'intérieur... 
// Il faut donc transformer $result avec la method fetch() :
$employe = $result->fetch(PDO::FETCH_ASSOC); // la methode fetch() avec le paramètre PDO::FETCH_ASSOC permet de transformer l'objet $result en un ARRAY associatif dont les indices correspondent aux noms des champs (*) de la requête SQL.
debug($employe);
echo 'Je suis ' . $employe['prenom'] . ' ' . $employe['nom'] . ' du service ' . $employe['service'] . ' .<br>';

//n'oubliez pas qu'un array écrit dans des quotes ou des guillemets perd ses quotes à son indice.

// Résumé des quatre étapes principales pour afficher Daniel Chevel :
   //  1 - Connnexion à la BDD
   //  2 - on formulr la requête : on obtient un objet PDOStatement
   //  3 - on fait fetch sur cet objet pour le transformer
   //  4 - on affiche le résultat final