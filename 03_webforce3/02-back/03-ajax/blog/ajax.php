<?php
include 'inc/init.inc.php';

$tab = array();
$mode = ''; // décide de l'action à appliquer

if (!empty($_POST['mode'])) {
    $mode = $_POST['mode'];
}

$tab['validation'] = '';
$tab['message'] = '';

if ($mode == 'connexion') {

// 2- on vérifie  que les indices dans POST existent :
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];

        // $verif = $pdo->query("SELECT * FROM user WHERE pseudo = '$pseudo' AND mdp = '$mdp'");
        $verif = $pdo->prepare("SELECT * FROM user WHERE pseudo = :pseudo AND mdp = :mdp ");
        $verif->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
        $verif->bindParam(":mdp", $mdp, PDO::PARAM_STR);
        $verif->execute();

        if ($verif->rowCount() > 0) {
            // s'il y a plus de 0 lignes, alors le pseudo et le mdp sont correct
            $tab['validation'] .= 'OK';

            $infos = $verif->fetch(PDO::FETCH_ASSOC);
            $_SESSION['user'] = array();
            foreach ($infos as $indice => $valeur) {
                $_SESSION['user'][$indice] = $valeur;
            }

        } else {
            // Le pseudo ou le mdp est faux ou les deux
            $tab['validation'] .= 'NOK';
            $tab['message'] .= '<div class="alert alert-danger" role="alert">Attention, le pseudo et/ou le mot de passe sont incorrects<br>Veuillez vérifier vos saisies</div>';
        } // FIN  if($verif->rowCount()

    } // FIN if(!empty($_POST['pseudo']) &&

} elseif ($mode == 'enregistrer') {

    //enregistrement des articles
    if (!empty($_POST['titre']) && isset($_POST['photo']) && !empty($_POST['categorie']) && !empty($_POST['contenu'])) {
        $resultat = $pdo->prepare("INSERT INTO article (titre, categorie, contenu, date_enregistrement, image, id_auteur) VALUES (:titre, :categorie, :contenu, NOW(), :image, :id_auteur)");

        $resultat->bindParam(":titre", $_POST['titre'], PDO::PARAM_STR);
        $resultat->bindParam(":categorie", $_POST['categorie'], PDO::PARAM_STR);
        $resultat->bindParam(":contenu", $_POST['contenu'], PDO::PARAM_STR);
        $resultat->bindParam(":image", $_POST['photo'], PDO::PARAM_STR);
        $resultat->bindParam(":id_auteur", $_SESSION['user']['id_user'], PDO::PARAM_STR);
        $resultat->execute();

        $tab['message'] .= '<div class="alert alert-success">Votre article a bien été enregistré</div>';

    } // FIN if(!empty($_POST['titre']) &&

} elseif ($mode == 'afficher') {

    $query = "
  SELECT
    titre,
    categorie,
    contenu,
    date_format(date_enregistrement,'le %d/%m/%Y à %H/%i/%s') AS date_fr,
    pseudo,
    image,
    avatar
FROM user, article
WHERE id_auteur = id_user
ORDER BY date_enregistrement DESC
  ";

    //recuperation des articles
    $liste = $pdo->query($query);

    $tab['message'] .= '<div class="alert alert-info w-100"> Nombre d\'article : ' . $liste->rowCount() . '</div>';

    while ($article_en_cours = $liste->fetch(PDO::FETCH_ASSOC)) {
        $tab['message'] .= '<div class="col-sm-12 mt-5"><div class="row"><h3 class="bg-dark text-white  p-2 w-100">' . $article_en_cours['titre'] . '</h3> ';

        $tab['message'] .= '<div class="col-sm-3 text-center">';
        $tab['message'] .= '<img src="' . $article_en_cours['image'] . '"class="w-100 img-thumbnail"><hr>';
        $tab['message'] .= '<img src="' . $article_en_cours['avatar'] . '"class="rounded-circle w-50"><hr>';
        $tab['message'] .= 'Ecrit par : <i>' . $article_en_cours['pseudo'] . '</i><br>';
        $tab['message'] .= $article_en_cours['date_fr'] . '<br>';
        $tab['message'] .= '</div>';
        $tab['message'] .= '<div class="col-sm-8">';
        // $tab['message'] .= '<h3 class="bg-dark text-white  p-2">' . $article_en_cours['titre'] . '</h3>';
        $tab['message'] .= '<p> ' . $article_en_cours['contenu'] . '</p>';
        $tab['message'] .= '</div>';

        $tab['message'] .= '</div></di>';
    } //FIN  while($article_en_cours= $liste->fetch(PDO::FETCH_ASSOC)

} // FIN elseif($mode == 'afficher')
// if($mode == 'connexion')
echo json_encode($tab);
