
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

	<div class="underconstruction"> 
		<p>Le site est en construction.</p> 
		<p>Encore un peu de patience, vous pourrez shopper du style en septembre !</p>
	</div>

		
		<!-- 
		<section class="createurs">
			<div class="row">

				
				<div class="col-md-3">
					
						<?php
					 
					 // récupére le lien de la prod cat my philo avec l'ID
					 $category_link = get_term_link( 16, 'product_cat' );
					    ?>


					<a href="<?php echo esc_url( $category_link ); ?>"> <p style="color:white"> My Philosophy </p>
						<img src="<?php bloginfo('template_directory'); ?>/images/mfe_myphilo.png">
					</a>
						
							

				</div>

				<div class="col-md-3">

					<?php
					   
					    // récupére le lien de la prod cat ile marion avec l'ID
					    $category_link = get_term_link( 15, 'product_cat' );
					?>


					<a href="<?php echo esc_url( $category_link ); ?>"> <p> Ile Marion </p>
						<img src="<?php bloginfo('template_directory'); ?>/images/mfe_ilemarion.png">
					</a>
					
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
	-->
	
	

<?php get_footer(); ?>