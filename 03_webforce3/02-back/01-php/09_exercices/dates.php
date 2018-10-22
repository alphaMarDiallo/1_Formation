<?php
/*
1- Créer une fonction qui retourne la conversion d'une date FR en date US ou inversement.
Cette fonction prend 2 paramètres : une date et le format de conversion de sortie "US" ou "FR". Pour faire cette conversion, vous utilisez la classe DateTime.

2- Vous validez que le paramètre de format est bien "US" ou "FR". La fonction retourne un message si ce n'est pas le cas.

3- Vous validez que la date fournie est bien une date. La fonction retourne un message si ce n'est pas le cas.

 */

// 1- créer la fonction :
function dateConvertir($date, $format)
{
    //3-verifier que c'est une date :
    if (strtotime($date) == false) {

        return '</p>Ceci n\'est pas une date</p>';

    } else {
        // 2-vérification du format :
        $objetDate = new DateTime($date);

        if ($format == 'US') {

            $objetDate = $objetDate->format('Y-m-d');
            return $objetDate;

        } elseif ($format == 'FR') {

            $objetDate = $objetDate->format('d-m-Y');
            return $objetDate;

        } else {

            return '<p> Ce format n\'existe pas. </p>';
        }

    }

} // FIN function dateConvertir($date, $format)

echo dateConvertir('21-12-1979', 'US');

/*
CORRECTION

// 1- déclaration de la fonction :

function afficheDate($date,$format){

// 2 on controle d'abord les valeurs reçues :

if($format != 'FR && $format != 'US'){
return '<p> Le format demandé n'est pas valide</p>';
// return nous  fait quitter la fonction, le reste n'est donc pas exécuté
}

if(!strtotime($date)){
return '<p>La date est invalide !</p>';
}

//3-Traitement de l'affichage de la tête :

$objet = new DateTime($date);
if($format == 'FR'){
$objetDate = $objetDate->format('Y-m-d');
}else{
return  $objetDate = $objetDate->format('d-m-Y');
}

}

 */
