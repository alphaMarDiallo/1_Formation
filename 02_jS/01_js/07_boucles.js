// alert("js ready");
/* 1- La boucle FOR */
/* 1- La boucle WHILE */

/* 1- La boucle FOR */
for(var i = 0; i <= 10; i+=2){
    document.write("<h2>Instruction répétée : " + i + "<h2>");
}
/* 
=> Syntaxe : 3 arguments 
 1- Initialise un compteur à partir de combien je compte(par défaut la variable est "i")
 2- La condition à vérifier
 3- Le 'pas' d'incrémentation (généralement +1 à chaque tour ou i++)

 Tant_que (compteur; condition_true; incrementation){

     ...code ...
 }
*/
/* 1- La boucle WHILE */

var j = 1;
while(j <= 10){
    document.write("<h2>Instruction répétée : " + j + "<h2>");
    j++;//j = j + 1; ou j += 1;
}
/* 
Syntaxe

compteur;
tant (condition_true){
    ...instruction(s) répétr...
    incrémentation;
}
*/

/*--------------------------
        Exercice
---------------------------- */

/* boucle FOR */
// var mois = 0;
//     mois++;
for( var k = 1000; k <= 2000; k +=50){
    document.write("<br> nombre de mois : " mois + k + "<br>");
}

/* boucle WHILE */
var l = 1000;
var temps= 0;//compteur de tour de boucle

while( l <= 2000){
     l +=50;
    temps++;// si je l'oublie => boucle infinie
    document.write( "<h2> fortune sur mon compte"+ l + "<h2>");
    document.write( "<h2> objectif atteind dans "+ temps +  "mois <h2>");
}