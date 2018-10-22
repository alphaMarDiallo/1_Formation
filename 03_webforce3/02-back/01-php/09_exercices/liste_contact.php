<?php
/*
1- Afficher dans une table HTML la liste des contacts avec les champs nom, prénom, téléphone, et un champ supplémentaire "autres infos" avec un lien qui permet d'afficher le détail de chaque contact.

2- Afficher sous la table HTML le détail d'un contact quand on clique sur le lien "autres infos".
 */
$pdo = new PDO(
    'mysql:host=localhost;dbname=contacts',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8',
    )
);

$contenu = '';
$info = '';
$resultat = $pdo->query("SELECT * FROM contact");

$contenu .= '<table class="table">';
$contenu .= '<tr>';
for ($i = 0; $i < $resultat->columnCount(); $i++) {

	$colonne = $resultat->getColumnMeta($i);
	
    if ($colonne['name'] != 'id_contact' && $colonne['name'] != 'email' && $colonne['name'] != 'annee_rencontre' && $colonne['name'] != 'type_contact') {

        $contenu .= '<th>' . $colonne['name'] . '</th>';
    }
}
$contenu .= '<th>Details</th>';
$contenu .= '</tr>';

while ($contact = $resultat->fetch(PDO::FETCH_ASSOC)) {
    $contenu .= '<tr>';
    // echo '<pre>';
    // var_dump($contact);
    // echo '</pre>';

    $contenu .= '<td>' . $contact['nom'] . '</td>';
    $contenu .= '<td>' . $contact['prenom'] . '</td>';
    $contenu .= '<td>' . $contact['telephone'] . '</td>';

    $contenu .= '<td><a href="?action=' . $contact['id_contact'] . '">autre info</a></td>';

    $contenu .= '</tr>';

} // fin while ($contact = $resultat->fetch(PDO::FETCH_ASSOC))
$contenu .= '</table>';

/****************************** DETAIL ******************************/

if ($_GET['action']) {

    foreach ($_GET as $indice => $valeur) {

        $_GET[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
    }
    // echo htmlentities($_GET['action']); // pour verifier que le special chars fonctionne
    $resultat = $pdo->prepare("SELECT * FROM contact WHERE id_contact = :id_contact");

    $resultat->bindparam(':id_contact', $_GET['action']);
    $resultat->execute();
    $contact = $resultat->fetch(PDO::FETCH_ASSOC);



    $info .= '<div class="mt-3 mb-3"> <h1>DETAIL DU CONTACT</h1> </div><br>';
    $info .= '<div> Nom : ' . $contact['nom'] . '</div><br>';
    $info .= '<div> Prénom : ' . $contact['prenom'] . '</div><br>';
    $info .= '<div> Téléphone : ' . $contact['telephone'] . '</div><br>';
    $info .= '<div> Date de rencontre : ' . $contact['annee_rencontre'] . '</div><br>';
    $info .= '<div> Email : ' . $contact['email'] . '</td><br>';
    $info .= '<div> Catégorie : ' . $contact['type_contact'] . '</div><br>';

} //FIN if (!empty($_GET) && $_GET['action'] == "inf
// echo '<pre>';
// var_dump($info);
// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- CSS de Bootstrap en 1er -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- CSS perso en 2ème -->
	<title>Document</title>
</head>
<body>
	
</body>
</html>

	<div class="container mt-5">
<?php echo $contenu; ?>
	</div>
<div class="container mt-3">
<?php echo $info; ?>
</div>