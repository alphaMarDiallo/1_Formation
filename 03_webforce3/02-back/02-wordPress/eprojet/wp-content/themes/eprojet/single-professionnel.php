<?php
get_header(); // inclusion du fichier header.php
?>
<div class="col-lg-9">
<?php
if (have_posts()):
    while (have_posts()): the_post();
        ?>


							<h1 class="col-lg-12">
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h1>

								<div class="mt-4"><span>descripti</span><?php the_title();?></div>
													<?php the_content();?>
								<div><span>code postal : </span><?php the_field('code_postal');?></div>
								<div><span>ville : </span><?php the_field('ville');?></div>
								<div><span>téléphone : </span><?php the_field('telephone');?></div>

							<?php
    endwhile;
else:

    echo '<p>Désolé, aucun contenu ne correspond à votre demande...</p>';

endif;
?>
	<a href="<?php bloginfo('url');?>/professionnel">Retour vers la liste des professionnels</a>

<?php
// on peut faire aussi :
//$professionnel_link = get_post_type_archive_link('professionnel');
//var_dump($professionnel_link);
?>
<!-- <p>
<a href="<?php //echo $professionnel_link ?>">Alternative au retour liste</a>
</p> -->

</div>


<div class ="col-lg-3" >
	<?php get_sidebar('droite');?>
</div>




<?php
get_footer(); // inclusion du fichier footer.php