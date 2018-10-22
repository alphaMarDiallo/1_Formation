<?php
get_header(); // inclusion du fichier header.php

if (have_posts()):
    while (have_posts()): the_post();
?>


		<h1 class="col-lg-12">
			<a href="<?php the_permalink();?>"><?php the_title();?></a>
		</h1>

		<div class="col-lg-12">
			<div class="mb-4"><?php the_content();?></div>
			<div><span></span><?php the_title();?></div>
			<div><span></span><?php the_field('code_postal');?></div>
			<div><span></span><?php the_field('ville');?></div><hr>
		</div>
<?php
    endwhile;
else:

    echo '<p>Désolé, aucun contenu ne correspond à votre demande...</p>';

endif;

get_footer(); // inclusion du fichier footer.php


