var membres = [
    {'pseudo':'Hugo','age':26,'email':'wf3@hl-media.fr','mdp':'wf3'},
    {'pseudo':'Rodrigue','age':56,'email':'rodrigue@hl-media.fr','mdp':'roro'},
    {'pseudo':'James','age':78,'email':'james@hl-media.fr','mdp':'james8862'},
    {'pseudo':'Emilio','age':18,'email':'milio@hl-media.fr','mdp':'milioDu62'}
  ];

// declaration de variable : 
var pseudo = document.getElementById('pseudo');
var pseudoError = document.getElementsByClassName('.pseudoError');
const MAJORITY = 18;
var age = document.getElementById('age');
var ageError = document.getElementsByClassName('ageError');
var email = document.getElementById('email');
var submit = document.getElementById('submit');
var members = membres.length;
//  console.log(members);
