<?php
get_header(); // inclusion du fichier header.php

if (have_posts()):
    while (have_posts()): the_post();
        ?>


																		<h1 class="col-lg-12">
																			<a href="<?php the_permalink();?>"><?php the_title();?></a>
																		</h1>

																		<div class="col-lg-12">
																			<?php the_content();?>
																		</div>
																<?php
    endwhile;
else:

    echo '<p>Désolé, aucun contenu ne correspond à votre demande...</p>';

endif;
?>

<!-- Code relative a la dernière annonce parue-->
	<div class="col-lg-6">
		<?php
query_posts(array(
    'post_type' => 'annonce',
    'posts_per_page' => 1,
));
if (have_posts()):
    while (have_posts()): the_post();

        ?>

						<div>
							<a href="<?php the_permalink();?>">
				                    <img src="<?php the_field('photo');?>" alt="<?php the_title();?>" class="img-fluid">
				                </a>

							<h3><?php the_title();?></h3>
							<div><span>Prix : </span><?php the_field('prix');?> euros</div>
						</div>
				<?php
    endwhile;
endif;
wp_reset_query();
?>
	</div>
	<!-- Code relatif aux trois derniers professionnels-->
	<div class="col-lg-6">
	<h2>Les derniers professionnels</h2>
	<?php
query_posts(array(
    'post_type' => 'professionnel',
    'posts_per_page' => 3,
));
if (have_posts()):
    while (have_posts()): the_post();
        ?>
							<h3><a href="<?php the_permalink();?>"><span><?php the_field('nom');?></span></a></h3>
							<div><?php the_field('code-postal');?></div>
							<div><?php the_field('ville');?></div>
						<?php
    endwhile;
endif;
wp_reset_query();
?>
</div>


<?php
get_footer(); // inclusion du fichier footer.php