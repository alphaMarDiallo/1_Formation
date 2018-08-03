// alert('js ready');
/* 
OBJETS
*/
var contacts = {
    // INDICE: VALEUR
    "prenom": "Alpha",
    "nom": "DIALLO",
    "yeux": "marron"
};
console.log(contacts);
// pour cibler une valeur dans l'objet je l'appelle avec son INDICE console.log(contacts.prenom);


//Pour avoir plusieurs contacts je stocke plusieurs objets dans un tableau

var vlg18 = ["Arnaud",
             "Mohamed",
            "Ellies",
            {
                //"INDICE": VALEUR,
                "prenom": "Layla",
                "yeux": "marron"
            },
            {
                "prenom": "Luc",
                "yeux": "vert"
            },
            {
                "prenom": "Jean-Philippe",
                "yeux": "bleu"
            }
        ];
console.log(vlg18);
console.log(vlg18[1]);
console.log(vlg18[4]);
console.log(vlg18[4].yeux);


var nbVlg2018 = vlg18.length;
console.log("Nombre d'amis VLG 2018 : " +nbVlg2018);

//parcourir un tableau

var dejeuner = ["salade", "tomates", "ognions", "pain", "poulet", "barbecue", "cesar"];
/*for(i = 0; i<= dejeuner.length;);
 var compteur = 0;
 while(compteur <= dejeuner.length){
     ...code / instructions ...
     compteur++;
 } */
console.log(dejeuner[6]);

 for(menu = 0; menu < dejeuner.length; menu++){
     console.log("Aliment n° " + menu + ' ' + dejeuner[menu] );
     //console.log(dejeuner[menu]);
 }
