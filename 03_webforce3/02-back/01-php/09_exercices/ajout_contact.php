<?php

/* 1- Créer une base de données "contacts" avec une table "contact" :
id_contact PK AI INT(3)
nom VARCHAR(20)
prenom VARCHAR(20)
telephone VARCHAR(10)
annee_rencontre (YEAR)
email VARCHAR(255)
type_contact ENUM('ami', 'famille', 'professionnel', 'autre')

2- Créer un formulaire HTML (avec doctype...) afin d'ajouter un contact dans la bdd. Le champ année est un menu déroulant de l'année en cours à 100 ans en arrière à rebours, et le type de contact est aussi un menu déroulant.

3- Effectuer les vérifications nécessaires :
Les champs nom et prénom contiennent 2 caractères minimum, le téléphone 10 chiffres
L'année de rencontre doit être une année valide
Le type de contact doit être conforme à la liste des types de contacts
L'email doit être valide
En cas d'erreur de saisie, afficher des messages d'erreurs au-dessus du formulaire

4- Ajouter les contacts à la BDD et afficher un message en cas de succès ou en cas d'échec.

 */
$messages = '';
$pdo = new PDO(
    'mysql:host=localhost;dbname=contacts',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8',
    )
);

if ($_POST) { // si le formulaire est soumis :

    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    if (!isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 20) {
        $messages .= '<div class="alert alert-danger"> Le  champ nom doit être remplir et contenir entre 3 et 20 caractères</div>';
    }

    if (!isset($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 20) {
        $messages .= '<div class="alert alert-danger"> Le champ prénom doit être remplir et contenir entre 3 et 20 caractères</div>';
    }

    if (!isset($_POST['telephone']) || !is_numeric($_POST['telephone']) || strlen($_POST['telephone']) < 10) {
        $messages .= '<div class="alert alert-danger"> Saisissez un numéro valide</div>';
    }
    // if (!isset($_POST['telephone']) || !preg_match('#^[0-9]{10}$#', $_POST[''telephone]){
    //     $messages .= '<div class="alert alert-danger"> Saisissez un numéro valide</div>';
    // }

    if (!isset($_POST['annee_rencontre']) || !strtotime($_POST['annee_rencontre'])) {
        $messages .= '<div class="alert alert-danger"> Saisissez une date valide</div>';
    }

    if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $messages .= '<div class="alert alert-danger"> Votre email n\'est pas valide</div>';
    }

    if (!isset($_POST['type_contact']) || ($_POST['type_contact'] != 'ami' && $_POST['type_contact'] != 'famille' && $_POST['type_contact'] != 'professionnel' && $_POST['type_contact'] != 'autre')) {
        $messages .= '<div class="alert alert-danger"> Veuillez saissir un type de contact</div>';
    }

    if (empty($messages)) { // Si pas d'erreur sur le formulaire, on enregistre en BDD :

        foreach ($_POST as $indice => $valeur) { // protection contre les injections
            $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
        }

        $requete = $pdo->prepare("INSERT INTO contact (nom, prenom, telephone, annee_rencontre, email, type_contact) VALUES (:nom, :prenom, :telephone, :annee_rencontre, :email, :type_contact)");

        $requete->bindParam(':nom', $_POST['nom']);
        $requete->bindParam(':prenom', $_POST['prenom']);
        $requete->bindParam(':telephone', $_POST['telephone']);
        $requete->bindParam(':annee_rencontre', $_POST['annee_rencontre']);
        $requete->bindParam(':email', $_POST['email']);
        $requete->bindParam(':type_contact', $_POST['type_contact']);

        $requete->execute();

        if ($requete) {

            $messages .= '<div class="alert alert-success"> Votre contacte est enregistré !</div>';

        } // FIN if($requete)

    } // FIN if (empty($messages)

} // FIN if($_POST)

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Bootstrap Core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Exercice contact</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
		<?php echo $messages;
?>
			<div class="col-md-12">
				<form method="POST" action="liste_contact.php">
					<div class="row">
						<div class="col">
							<label for="nom">Nom : </label>
							<input class="form-control
							" type="text" id="nom" name="nom">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label for="prenom">Prénom : </label>
							<input class="form-control" type="text" id="prenom" name="prenom">
						</div>
					</div>
					<div class="row">
						<div class="col">

							<label for="telephone">Téléphone : </label>
							<input class="form-control" type="text" id="telephone" name="telephone">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label for="annee_rencontre">Année : </label>
							<select class="custom-select" id="annee_rencontre" name ="annee_rencontre">
							<!-- <option selected name="annee_rencontre">année</option> -->
								<?php
for ($i = date('Y'); $i >= date('Y') - 100; $i--) {
    echo '<option>' . $i . '</option>';
}
?>
  							</select>
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
						<div class="col">
							<label for="email">Email :</label>
						</div>
						<div class="col">
							<input  class="form-group" type="text" id="email" name="email">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
						<div class="col">
							<label for="contact">Contact</label>
						</div>
						<div class="col">
							<select class="custom-select" id="type_contact" name ="type_contact">
    							<option selected>contact</option>
    							<option value="ami">Ami</option>
    							<option value="famille">Famille</option>
    							<option value="profesionnels">Professionnel</option>
    							<option value="autre">Autre</option>
  							</select>
						</div>
						</div>
					</div>

					<input  type="submit" class="btn btn-success btn-block mt-2
					" value="Enregistrer">


				</form><!-- FIN form -->
			</div><!-- FIN .col-md-12 -->
		</div><!-- FIN .row -->

	</div><!-- FIN .container -->










 <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
