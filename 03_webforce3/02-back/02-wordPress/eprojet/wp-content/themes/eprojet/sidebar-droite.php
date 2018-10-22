
<div id="region-droite">

<?php dynamic_sidebar('colonne-droite'); // on appelle la zone de widget d'id "colonne-droite" déclarée dans functions.php ?>

</div>

<hr>

<div>

    <h2>Notre dernière annonce</h2>

    <?php
    // requête en BDD pour sélectionner le dernier post en date  de type "annonce" :

    query_posts(array(
        'post_type' => 'annonce', // slug de notre custom post type "Annonces"
        'posts_per_page' => 1 //traduction de LIMIT en sql, ici on sélectionne le premier résultat
    ));

if (have_posts()):
    while (have_posts()): the_post();
        ?>
		    <div>
		        <a href="<?php the_permalink();?>">
		                <img src="<?php the_field('photo');?>" alt="<?php the_title();?>" class="img-fluid" >
		        </a>

		        <h3>
		            <a href="<?php the_permalink();?>"><?php the_title();?></a>
		        </h3>

		        <div>Au prix de de <?php the_field('prix');?> euros</div>

		    </div>
		<?php

    endwhile;

else:
    echo '<p>Pas encore d\'annonce...</p>';
endif;

wp_reset_query(); // pour restaurer la requête principale après un query_posts();
?>

</div>
