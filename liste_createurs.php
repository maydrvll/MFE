
<?php
/*
Template Name: liste_createurs
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

		<section class="createurs">
			<div class="row">

				
				<div class="col-md-3">
					
						<?php
					 // Get the ID of a given category
					 $category_id = get_cat_ID( 'My Philosophy' );

					 // Get the URL of this category
					 $category_link = get_category_link( $category_id );
					    ?>

					<!-- Print a link to this category -->

					<a href="<?php echo esc_url( $category_link ); ?>"title="My Philosophy"> My Philosophy </a>
						
						<img src="<?php bloginfo('template_directory'); ?>/images/mfe_myphilo.png">
			

				</div>

				<div class="col-md-3">

					<?php
					    // Get the ID of a given category
					    $category_id = get_cat_ID( 'Ile Marion' );

					    // Get the URL of this category
					    $category_link = get_category_link( $category_id );
					?>

					<!-- Print a link to this category -->

					<a href="<?php echo esc_url( $category_link ); ?>" title="Ile Marion"> Ile Marion </a>
						
						<img src="<?php bloginfo('template_directory'); ?>/images/mfe_ilemarion.png">
					
				</div>


				<div class="col-md-3">
					<a href="#"><p>createurs3</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>createurs4</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>createurs5</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>createurs6</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>createurs7</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
				<div class="col-md-3">
					<a href="#"><p>createurs8</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png"></a>
				</div>
			</div>	
		</section>

		

<?php get_footer(); ?>