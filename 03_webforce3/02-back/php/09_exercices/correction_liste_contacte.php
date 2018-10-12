<?php
// if ($_GET['action']) {

//     foreach ($_GET as $indice => $valeur) {

//         $_GET[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
//     }

//     $resultat = $pdo->prepare("SELECT * FROM contact WHERE id_contact = :id_contact");

//     $resultat->bindparam(':id_contact', $_GET['action']);
//     $resultat->execute();
//     $contact = $resultat->fetch(PDO::FETCH_ASSOC);

//     $info .= '<td>' . $contact['nom'] . '</td><br>';
//     $info .= '<td>' . $contact['prenom'] . '</td><br>';
//     $info .= '<td>' . $contact['telephone'] . '</td><br>';
//     $info .= '<td>' . $contact['annee_rencontre'] . '</td><br>';
//     $info .= '<td>' . $contact['email'] . '</td><br>';
//     $info .= '<td>' . $contact['type_contact'] . '</td><br>';

// } //FIN if (!empty($_GET) && $_GET['action'] == "info")

//} //FIN if (!empty($_GET) && $_GET['action'] == "info")

$contenu = '';

// Connexion BDD :
$pdo = new PDO(
    'mysql:host=localhost;dbname=contacts',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8',
    )
);

//on selectionne tous les contacts :
$query = $pdo->prepare("SELECT * FROM contact");
$query->execute(); // les methodes prepare() et execute vont toujours ensemble

// on prepare la table :

$contenu .= '<h1>liste des contacts</h1>';

$contenu .= '<table border="1">';

$contenu .= '<tr>';

$contenu .= '<th>Nom</th>';
$contenu .= '<th>Prénom</th>';
$contenu .= '<th>Téléphone</th>';
$contenu .= '<th>Autres infos</th>';
$contenu .= '</tr>';

//Tant qu'il y a un résultat dans $query, on prépare la ligne de la table HTML correspondant au contact :
while ($contact = $query->fetch(PDO::FETCH_ASSOC)) {
    // echo '<pre>';
    //     var_dump($contact);
    // echo '</pre>';

    $contenu .= '<tr>';
    $contenu .= '<td>' . $contact['nom'] . '</td>';
    $contenu .= '<td>' . $contact['prenom'] . '</td>';
    $contenu .= '<td>' . $contact['telephone'] . '</td>';
    // lien cliquable "plus d'info" :
    $contenu .= '<td><a href="?id_contact=' . $contact['id_contact'] . '">plus    d\'infos</a></td>';
    $contenu .= '</tr>';
}

$contenu .= '</table>';

// Si on a cliqué sur un lien "plus d'info" :

if (isset($_GET['id_contact'])) { // si l'indice "id_contact" est dans $_GET, donc dans l'url, c'est que l'on a demandé le détail d'un et d'un seul contact

    //die('ligne 78'); // on peut faire un echo ou un exit ou un die pour vérifier que l'on passe bien cette condition
    $_GET['id_contact'] = htmlspecialchars($_GET['id_contact'], ENT_QUOTES); // permet de transformer les caractères spécieux en entité HTML pour ce prévenir des risques JS et CSS

    // on fait un requete prepare de sélection dans la BDD :

    $query = $pdo->prepare("SELECT * FROM contact WHERE id_contact = :id_contact");
    $query->bindParam(':id_contact', $_GET['id_contact']);
    $query->execute(); // avec un prepare toujours un execute().

    // on transform le resultat de la requete en un array associatif :
    $contact = $query->fetch(PDO::FETCH_ASSOC); // on ne met pas de while car on est certain de n'avoir qu'un résultat

    //On affiche les infos du contact :

    $contenu .= '<h2>Détail du contact </h2>';
    //var_dump($contact);
    if($contact == false){
        $contenu .= '<p>Ce contact n\'existe pas ! </p>';
    } else {
        $contenu .= '<ul>';
            $contenu .= '<li>'.$contact['nom'].'</li>';
            $contenu .= '<li>'.$contact['prenom'].'</li>';
            $contenu .= '<li>'.$contact['telephone'].'</li>';
            $contenu .= '<li>'.$contact['email'].'</li>';
            $contenu .= '<li>'.$contact['annee_rencontre'].'</li>';
            $contenu .= '<li>'.$contact['type_contact'].'</li>';
            
        $contenu .= '</ul>';
    }
} //fin if(isset($_GET['id_contact'])

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <?php echo $contenu; ?>
</body>
</html>
