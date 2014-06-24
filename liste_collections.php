<?php
/*
Template Name: liste_collections
*/
?>


<?php get_header(); ?>

<?php if (have_posts()) : ?>
		        	<?php while (have_posts()) : the_post(); ?>
			            <div>
			              <?php the_content(); ?>
			            </div>

			      	<?php endwhile; ?>
		    		<?php endif; ?>

<!--#######################
			CONTENUS
	#######################-->


		<section class="collections">
			<div class="row">
				<div class="col-md-3">
					<a href="#"><p>Robes</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>Jupes</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>Pantalons</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>Shorts</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>Top</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>Pulls</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>Manteaux-Vestes</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>Accessoires</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
			</div>	
		</section>

<!--#######################
			FIN CONTENUS
	#######################-->

<?php get_footer(); ?>