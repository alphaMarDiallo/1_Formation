$(document).ready(function () {

    //CONNEXION
    $('#validation').on('click', function (e) {
        e.preventDefault();
        var params = $('#form').serialize();
        params += '&mode=connexion';
        console.log(params);
        $.post('ajax.php', params, function (data) {
            // console.log(data);
            // alert(data.message);
            $('#message').html(data.message);

            if (data.validation == 'OK') {
                window.location = 'index.php';
            }
        }, 'json'); // FIN $('#validation').on('click', function(e)  
    }); // FIN  $('#validation').on('click',

    //ENREGISTREMENT ARTICLE :
    $('#form_article').on('submit', function (e) { // lors de la validation du formulaire


        e.preventDefault(); // on bloque la validation du formulaire

        var fichier = 'ajax.php'; // le fichier cible
        var params = $('#form_article').serialize(); // les informations du formulaires

        // Ajout d'un paramètre pour décider, côté php, si on enregistre ou si on récupère les articles
        // params = params + '&mode=enregistrer';
        params += '&mode=enregistrer';


        console.log(params);

        $.post(fichier, params, function (reponse) {
            $('#resultat').html(reponse.message);
            $('#form_article').trigger("reset"); // on vide les champs du formulaire.
        }, 'json'); //fin  $.post(fichier, params, function()

    }); // fin  $('form').on('submit', function(e)

    setInterval(liste_article, 5000);

    function liste_article() {
        $.post('ajax.php', 'mode=afficher', function (reponse) {
            console.log(reponse);
            $('#affichage_article').html(reponse.message);
        }, 'json'); //FIN function liste_article()

    } // FIN setInterval(liste_article,50001)


}); // FIN $(document).ready(function())