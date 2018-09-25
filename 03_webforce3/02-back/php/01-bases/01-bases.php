<style>
    h2 {color: purple;}
</style>

<?php
//---------------------------------
echo '<h2>  --- Les balises PHP --- </h2>';
//---------------------------------
?>

<?php
// Pour ouvrire un passage en PHP on utilise la balise précédente.
// Pour fermer un passage en PHP, on utilise la balise suivante.
?>

<p>Bonjour</p> <!--En dehors des balises d'ouverture et de fermeture du PHP, nous pouvons écrire de HTML quand on est dans un fichier ayant l'extension .php -->

<?php
// Vous n'êtes pas obligé de fermer un passage en PHP en fin de script.
//---------------------------------
echo '<h2> --- Affichage --- </h2>';
//---------------------------------

echo 'Bonjour <br>'; // echo est une instruction qui permet d'afficher dans le navigateur. Toutes les instructions se termine par un point virgule. Dans un echo nous pouvons mettre aussi du HTML.
print 'Nous sommes mardi <br>';// print est une autre instruction d'affichage. Pas ou peu de difference avec echo.

 // Autres instruction d'affichage que nous verrons plus loin :
 //  => print_r();
 //  => var_dump();

 // Pour faire un commentaire sur une seule ligne.

 # autre syntaxe de commentaire sur une seule ligne.

 /*
    Pourfaire 
    un commentaire sur
    plusieurs lignes

 */

 //--------------------------------------------------------------------
echo '<h2> --- Variable / Déclaration / Affectation / Types --- </h2>';
//---------------------------------------------------------------------

// Définition : Une variable est un espace mémoire qui porte un nom et permettant de conserver une valeur. 
// En PHP on déclare une variable avec le signe $.

$a = 127; // affectation de la valeur 127 à ma variable $a.
echo gettype($a); // gettype() est une fonction prédéfinie qui indique le type d'une variable, ici il s'agit d'un integer (entier). 
echo '<br>';

$a = 'une chaine de caractère';
echo gettype($a); // affiche string.

echo '<br>';

$b = '127';
echo gettype($b); // affiche string car un nombre écrit entre quote est interprété comme un string.

echo '<br>';

$a = true;
echo gettype($a); // affiche boolean.

// Par convention un nom de variable commence ^par une lettre minuscule puis on met une majuscule à chaque mot. Il peut contenir des chiffres (jamais au début) ou un underscore (jamais au début car signification particulière en objet) ni à la fin.

//---------------------------------------
echo '<h2>  --- Concaténation --- </h2>';
//---------------------------------------

$x = ' Bonjour ';
$y = 'tout le monde';
echo $x . $y . '<br>'; // le point de concaténation peut être traduit par 'suivi de'.
// Remarque sur echo : 
echo $x, $y, '<br>'; //Dans l'instruction echo, on peut séparer les élémznt affiché par une virgule. Cette syntaxe est spécifique au echo et ne marche pas avec print.

//-------
// Concaténation lors de l'affectation :
$prenom1 = 'Bruno';
$prenom1 = 'Claire';
echo $prenom1 . '<br>'; // Affiche Claire.

$prenom2 = 'Nicolas';
$prenom2 .= ' Marie'; // .= opérateur combiné, il prend la valeur précédente pour y ajouter une seconde valeur.
echo $prenom2 . '<br>'; // Affiche "Nicolas Marie" grâce à l'opérateur combiné. La valeur "Marie" vient se concaténé à la valeur "Nicola "sans la remplacer.

//----------------------------------------------
echo '<h2>  --- Guillemets et quotes --- </h2>';
//----------------------------------------------

$message = "Aujourd'hui";
// ou bien
$message = 'Aujourd\'hui'; // on échappe les apostrophe dans les quotes simple avec \ (alt gr + 8).
$txt = 'Bonjour';
echo "$txt tout le monde <br>";// Dans les guillemets, la variable est évalué : c'est sont contenu qui est affiché 'ici bonjour).
echo '$txt tout le monde <br>'; // Dans les quotes simple, la variable n'est pas évalué : elle est traité comme du texte brute (affiche $txt). 

//--------------------------------------------------------
echo '<h2>  --- Constante et constante magique --- </h2>';
//--------------------------------------------------------

// Une constante permet de conserver une valeur sauf que celle ci ne peut pas être modifié durant l'exécution  du ou des script. Utile pour, par exemple, conserver les parametre de connexion à la BDD sans pouvoir le modifiés une fois définis.

define('CAPITALE', 'Paris'); // ON déclare une constante avec la fonction prédéfinie define() qui s'appelle CAPITALE et prend pour valeu "Paris". Par prévention les constante sont toujours écrites en majuscules.
echo CAPITALE . '<br>'; // Affiche Paris

// Deux constantes magique

echo __DIR__ . '<br>'; // Affiche le chemin complet vers le dossier de notre fichier
echo __FILE__ . '<br>'; // Affiche le chemin complet vers le fichier (dossier  + nom du fichier).

//--------------------------------------------------------
echo '<h2>  ** Exercice ** </h2>';
//--------------------------------------------------------

// Vous affichez bleu - blanc - rouge (avec les tirets) en mettant le texte de chaque tirets dans des variable : 
$couleur1 = 'Bleu ';
$couleur2 = '- Blanc - ';
$couleur3 = ' Rouge ';
echo $couleur1 . $couleur2 . $couleur3 . '<br>';

$couleur1 = 'Bleu ';
$couleur2 = 'Blanc';
$couleur3 = 'Rouge';
echo $couleur1 . ' - ' . $couleur2 . ' - ' . $couleur3 . '<br>';

$c1 = 'Bleu - ';
$c1 .= ' Blanc - Rouge';
echo $c1 . '<br>';


//--------------------------------------------------------
echo '<h2>  --- Opérateurs arithmétique --- </h2>';
//--------------------------------------------------------

$a = 10;
$b = 2;

echo $a + $b . '<br>'; // Affiche 12
echo $a - $b . '<br>'; // Affiche 8
echo $a * $b . '<br>'; // Affiche 20
echo $a / $b . '<br>'; // Affiche 5
echo $a % $b . '<br>'; // Affiche 0 ( % = le reste d'une division entière).
// 3%2 = si on a 3 billes réparties entre 2 personnes, il nous en reste 1 dans la main.

//----------------------
// Opération et affectation combinées

$a = 10;
$b = 2;

$a += $b; // équivaut à $a = $a + $b, $a vaut donc au final 12.
$a -= $b; // équivaut à $a = $a - $b, $a vaut donc au final 10.
$a *= $b; // équivaut à $a = $a * $b, $a vaut donc au final 20.
$a /= $b; // équivaut à $a = $a * $b, $a vaut donc au final 10.
$a %= $b; // équivaut à $a = $a * $b, $a vaut donc au final 0.

// Exemple d'utilisation : pratique pour faire des caluls de quantités dans les paniers d"achat (+= et -=). 

//-----------------------

// Incrémenter et décrémenter : 

$i = 0;
$i++; // On ajoute 1 à $i qui vaut au final 1
$i--; // On retire 1 à $i qui vaut au final 0

$i = 0;
$k = ++$i; // La variable $i est incrémentée de 1 puis elle est retournée. On affecte donc 1 à $k.
echo '$i vaut ' . $i . '<br>'; // affiche 1
echo '$k vaut ' . $k . '<br>'; // affiche 1

$i = 0;
$k = $i++; // La variable $i est d'abord retourné puis elle est incrémentée de 1. On affecte donc 1 à $k.
echo '$i vaut ' . $i . '<br>'; // affiche 1
echo '$k vaut ' . $k . '<br>'; // affiche 0

//-------------------------------------------------------------------------
echo '<h2>  --- Structures conditionnelles - opérateurs de comparaison --- </h2>';
//-------------------------------------------------------------------------

$a = 10;
$b = 5;
$c = 2;

//------
//if...else :
if ($a > $b) { // si la condition est évaluée a TRUE on exécute les accolades qui suivent :
    echo '$a est supérieur à $b <br>';
} else { // sinon... si la condition est evalué à FALSE, on exécute le else
    echo 'Non c\'est $b qui  est supérieur à $a <br>';
}

//------
// l'opérateur AND écrit && 
if ($a > $b && $b > $c) { // si $a est superieur à $b et que dans le même temps $b est supérieur à $ c, alors on entre dans les accolades.
    echo 'Okay pour les deux conditions <br>';
}
//------
// l'opérateur OR écrit || 
if ($a == 9 || $b > $c) { // si $a est egal à 9 (opérateur == ) OU que $b est supérieur à $c, alors on entre dans les accolades.
    echo 'Okay pour au moins une des deux conditions <br>';
}

//-----
//if...elseif...else
if ($a === 8) {
    echo '$a est égal à 8 <br>';
} elseif ($a != 10) {
    echo '$a est different de 10 <br>';
} else {
    echo 'les deux conditions sont fausses <br>';
}

// Notes : on ne fait jamais suivre un else par une condition(sinon utilisé un elseif). On ne met pas de point virgule à la fin d'une condition car il s'agit s'une structure.

//----
// L'opérateur XOR : 
$question1 = 'mineur';
$question2 = 'je vote'; // exemple d'un questionnaire statistique

if ($question1 == 'mineur' xor $question2 === 'je ne vote pas') { // si seulement une des deux conditions doit être vrai (soit l'une ou soit l'autre). Si les  2 conditions sont vraies alors l'expression complete est fausse : c'est le cas ici, on entre donc dans le else.
    echo 'Vos réponses sont cohérentes <br>';
} else {
    echo 'Vos réponses ne sont pas cohérentes <br>';
}

//-----
// Forme contractée de la condition, dite ternaire :
echo ($a == 10) ? '$a est égal à 10 <br>' : '$a est différent de 10';
//     IF = (...) ?
//     ELSE = :...;
// dans la ternaire le "?" remplace if et le ":" remplace else. Ici, si $a est egal à 10, je fais echo du 1er string, sinon du second.

// ou encore : 
$resultat = ($a == 10) ? '$a est égal à 10 <br>' : '$a est différent de 10';
echo $resultat;

//-----
// comparaison en double = et en triple = : 
$varA = 1; // integer
$varB = '1'; // string

if ($varA == $varB) echo '$varA est egal à $varB en valeur uniquement <br>';
if ($varA === $varB) {
    echo '$varA est égal à $varB en valeur ET en type <br>';
} else {
    echo '$varA est différent de $varB en type <br>';
}
/* 
    =   signe d'affectation
    ==  signe de comparaison en valeur
    === signe de comparaison en valeur et en type
 */

//-----
// isset() et empty()
// Définitions : 
//isset() teste si c'est défini (si existe) et a une valeur non NULL (si le name existe)
//empty() test si c'est vide, c'est à dire : 0, string vide(''), NULL, false ou non définie

$var1 = 0;
$var2 = '';

if (empty($var1)) echo '0, vide, NULL, false ou non défini <br>'; // ici la condition est vrai car $var1 est vide au sens de empty (voir définition ci-dessus)
if (isset($var2)) echo 'existe et non NULL <br>'; // condition est vrtai car $var2 existe bien (et non NULL)

// si on ne déclare pas $var1 et $var2, la condition avec empty reste vrai car non définie mais la condition avec isset devient fausse (car la variable ne serait pas définie). 
// exemple d'utilisation : empty() pour vérifier qu'un champ de formulaire est vide. isset() pour vérifier qu'une variable existe bien avant de l'utiliser.

//----
// l'opérateur NOT écrit "!";
$var3 = 'une chaîne de caractère';
if (!empty($var3)) echo '$var3 n\'est vide<br>'; // ! pour NOT. Il s'agit d'une négation qui transforme false en true et inversement (!false vaut true et !true vaut false). Littéralement on teste si $var3 n'est pas vide.

//----
//phpinfo(); pour vérifier la version de php sur notre serveur local.

// PHP7 : entrer une valeur dans une variable si elle existe :
$var1 = $variableInconnue ?? $varAutre ?? 'valeur par défaut';
 // l'opérateur "??" indique qu'il faut prendre la première variable ou valeur qui existe : $variableInconnue n'existant pas, on passe $varAutre qui n'existe pas non plus, donc on prend la valeur par defaut pour l'affecter à $var1.

echo $var1; // affiche 'valeur par defaut'

// Utilisation : pour pré-remplir les values des formulares quand l'internaute aura saisie et envoyé des valeurs.

//-------------------------------------------
echo '<h2>  --- Condition switch --- </h2>';
//-------------------------------------------

// La condition SWITCH est une autre syntaxe du if/elseif / else quand on veut comparer une variable à une multitude de valeurs.

$couleur = 'jaune';

switch ($couleur) {
    case 'bleu': // on compare $couleur à la valeur des "case" et exécute le codequi suit les ":" si elle correspond.
        echo 'Vous aimez le bleu <br>';
        break; // break est obligatoire pour quitter la condition une fois le case exécuté.

    case 'rouge':
        echo 'Vous aimez le ropuge <br>';
        break;

    case 'vert':
        echo 'Vous aimez le vert <br>';
        break;

    default: // ca par defaut si on entre pas dans les cases précédents 'équivalent du else).
        echo 'Vous n\'aimez aucune de ces couleurs <br>';
        break;
}
//---------------------------------
echo '<h2> ** EXERCICE ** </h2>';
//---------------------------------
//Exercice : réécrire le switch précédent en condition if... classique. On doit obtenir le même résultat.
if ($couleur == 'bleu') {
    echo 'Vous aimez le bleu <br>';
} elseif ($couleur == 'rouge') {
    echo 'Vous aimez le rouge <br>';
} elseif ($couleur == 'vert') {
    echo 'Vous aimez le vert <br>';
} else {
    echo 'Vous n\'aimez aucune de ces couleurs <br>';
}

//--------------------------------------------------------
echo '<h2> --- Quelques fonctions prédéfinies --- </h2>';
//--------------------------------------------------------

// Une fonction prédéfinie permet de réaliser un traitement spécifique prédéterminé dans le langage PHP. 

//---
//strpos : 
$email1 = 'prenom@site.fr';
echo strpos($email1, '@'); //Affiche la position  6 de @ en comptant à partir de 0.
echo '<br>';
$email2 = 'bonjour';
echo strpos($email2, '@'); // Cette ligne n'affiche rien pourtant la fonction retourne bien quelque chose : false.
echo var_dump(strpos($email2, '@')); // Grâce au var_dump on peut apercevoir ce que retourn cette fonction si '@' n'est opas trouvée. var_dump est une instruction d'affichage améliorée que l'on utilise en phase de developpement.
echo '<br>';
//----
//strlen :
$phrase = 'mettez une phrase ici à cet endroit';
echo strlen($phrase); // strlen retourne la taille d'une chaine (nombre d'octets de cette chaine, un caractère accentué valant 2 octetes).
echo '<br>';

//----
//substr :
$texte = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse itaque voluptates molestias, delectus numquam sapiente ipsum cupiditate nihil aspernatur illo inventore adipisci. Aliquam praesentium eum harum reiciendis sequi saepe fuga!';

echo substr($texte, 0, 20) . ' ...<a href=\'#`\'> Lire la suite</a>';// substr retourne une partie du string de la position 0 et sur 20 caractères.
echo '<br>';

//---
//trim :
$msg = '       Hello world     ';
echo strlen($msg) . '<br>'; // On compte la taille avec les espaces.
echo strlen(trim($msg)) . '<br>'; // On compte la taille une fois les espaces supprimé avec trim() en début et fin de string

echo '<br>';
//-----
// die() et exit()
//exit('un message'); // quitte le script après avoir affiché le message.
//die('un message'); // fait la même chose : die() est un alias de exit().
