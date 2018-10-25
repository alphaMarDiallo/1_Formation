<?php
include 'inc/init.inc.php';

// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

include 'inc/header.inc.php';
?>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Bienvenue sur notre Blog</h1>
        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod exercitationem, quis corrupti labore quia voluptas dolorem veniam earum provident? Eligendi at quo perspiciatis. Possimus odio facere atque rerum vel enim?<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit veniam quis quasi iusto delectus cumque a tempora ab quia, tenetur, totam quibusdam inventore id et quas. Facilis error consequuntur praesentium!.</p>
      </div>

      <div class="row">
          <div class="col-sm-3">
              <h3>Catégorie</h3>
          </div>
          <div class="col-sm-9">
              <div class="row" id="affichage_article">

              </div>
          </div>
      </div>

    </main><!-- /.container -->






<?php
include 'inc/footer.inc.php';
?>

