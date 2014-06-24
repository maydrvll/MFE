
<?php
/*
Template Name: createurs
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
								<!--BANDEAU INFOS-->

			<div id="bandeau"><img src="<?php bloginfo('template_directory'); ?>/images/mfe_bandeau_myphilo.png" width="100%"></div>
			<div class="croix"><img src="<?php bloginfo('template_directory'); ?>/images/mfe_croixlogo.png" width="10%"></div>
			
								<!--VETEMENTS-->

<section class="vetements">
			<div class="row">
				
					<div class="col-md-3">
						
							<a href="#">
								<div class="transparence"></div>
								<img src="<?php bloginfo('template_directory'); ?>/images/mfe_myphilo.png">
								<p style="color:white">190 euros</p>
								
							</a>
								
					</div>

					<div class="col-md-3">
						
							<a href="#">
								<div class="transparence"></div>
								<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png">
								<p>190 euros</p>
								
							</a>
						
					</div>

					<div class="col-md-3">
							
							<a href="#">

								<div class="transparence"></div>
								<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png">
								<p>190 euros</p>
								
							</a>
					</div>

					<div class="col-md-3">
							
							<a href="#">
								<div class="transparence"></div>
								<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png">
								<p>190 euros</p>
								
							</a>
					</div>
							

					<div class="col-md-3">
						
							<a href="#">
								<div class="transparence"></div>
								<img src="<?php bloginfo('template_directory'); ?>/images/mfe_myphilo.png">
								<p style="color:white">190 euros</p>
								
							</a>
								
					</div>

					<div class="col-md-3">
						
							<a href="#">
								<div class="transparence"></div>
								<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png">
								<p>190 euros</p>
								
							</a>
						
					</div>

					<div class="col-md-3">
							
							<a href="#">

								<div class="transparence"></div>
								<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png">
								<p>190 euros</p>
								
							</a>
					</div>

					<div class="col-md-3">
							
							<a href="#">
								<div class="transparence"></div>
								<img src="<?php bloginfo('template_directory'); ?>/images/mfe_photos_createurs.png">
								<p>190 euros</p>
								
							</a>
					</div>

				</div>	
		</section>

<!--#######################
			FIN CONTENUS
	#######################-->

<?php get_header(); ?>