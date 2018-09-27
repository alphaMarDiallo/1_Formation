<?php
//------------------------
// LA superglobale $_POST
//------------------------

//$_POST est une superglobale qui permet de récupérer les données saisies dans un formulaire

//$_POST est une superglobale donc un array, il est disponible dans tous les contexte du script y compris au sein des fonction.

// Syntaxe des $_POST : $_POST = array('name1' => 'valeur input1', 'nameN') => 'valeur inputN')


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_POST</title>
</head>
<body>
<!-- Un formulaire doit toujours être dans des balises <form> pour fonctionner. Attribut action définit l'url de destination des saisie -->
<form method="POST" action="#">
    <label for="prenom">Prénom</label>
    <br>
    <input type="text"  id="prenom" name="prenom">
    <!-- Les name des inputs constituent les indices de l'array $_POST qui réceptionne les infos-->
    <br>
    <label for="description">Description</label>
    <br>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <!-- Lees id et le for sont liées : ils permettent de placer le curseur dans l'input quand on clique sur le label-->
    <br>
    <input type="submit" value="Valider" style="background-color:green; color:#fff;">
</form>
</body>
</html>