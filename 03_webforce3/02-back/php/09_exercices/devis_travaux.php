<?php
function debug($param)
{
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
}

function montantTTC($montant, $periode)
{
    //echo $montant. $periode; //pour tester
    if ($periode == 'inf') {
        $montantTTc = $mantant * 1.2;
    } else {
        $montantTTc = $mantant * 1.1;
    }

    return " Le montant de votre travaux est de $montantTTC € TTC";

}
/*
1- Vous réalisez un formulaire "Votre devis de travaux" qui permet de saisir le montant des travaux de votre maison en HT et de choisir la date de construction de votre maison (bouton radio) : "plus de 5 ans" ou "5 ans ou moins". Ce formulaire permettra de calculer le montant TTC de vos travaux selon la période de construction de votre maison.

2- Vous créez une fonction montantTTC qui calcule le montant TTC à partir du montant HT donné par l'internaute et selon la période de construction : le taux de TVA est de 10% pour plus de 5 ans, et de 20% pour 5 ans ou moins. La fonction retourne  "Le montant de vos travaux est de X euros TTC." où X est le montant TTC calculé. Vous affichez le résultat au-dessus du formulaire.

 */

if ($_POST) {
    debug($_POST);
    echo montantTT($_POST['montant'], $_POST['periode']);

} // FIN if($_POST)

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atelier 2 PHP</title>

    <!-- CSS de Bootstrap en 1er -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- CSS perso en 2ème -->
    <link rel="stylesheet" href="lib/css/style.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col">
				<form  method="POST" action="#" class="form-group">
					<div class="form-group">
    					<label for="montant">Montan</label>
    					<input type="text" class="form-control" id="montant"  name="montant" placeholder="entrez votre montant">
  					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="periode" id="plus_cinq" value="sup" checked>
  						<label class="form-check-label" for="plus_cinq">
    					Plus de 5 ans
  						</label>
						</div>
						<div class="form-check">
  						<input class="form-check-input" type="radio" name="periode" id="moins_cinq" value="inf">
  						<label class="form-check-label" for="moins_cinq">
    						5 ans ou moins
  						</label>
						</div>
					</div>
				</form>
			</div>
				<input class="btn btn-success" type="text" value="envoyer">
		</div>
	</div>








 <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
