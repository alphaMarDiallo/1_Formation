<?php
include 'inc/init.inc.php';

if (empty($_SESSION['user'])) {
    header('location:index.php');
}

include 'inc/header.inc.php';
?>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Vous pouvez créer un article sur cette page</h1>

         <div class="row">
            <div class="col-sm-6 mx-auto mt-5">
                <form action="" method="POST" id="form_article">
                    <div class="form-group">
                        <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="categorie" id="categorie" class="form-control" placeholder="Catégorie">
                    </div>
                    <div class="form-group">
                        <input type="text" name="photo" id="photo" class="form-control" placeholder="Photo...">
                        <small class="text-danger"><i>Veuillez insérer une url valide pour la photo de l'article</i> </small>
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="contenu" id="contenu" class="form-control" placeholder="Contenu"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="enregistrer" name="enregistrer" class="form-control btn btn-warning">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
      </div><!-- /.row -->

      <div class="row"><div class="col-sm-12" id="resultat"></div></div>

    </main><!-- /.container -->






<?php
include 'inc/footer.inc.php';
?>