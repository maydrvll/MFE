
<?php
/*
Template Name: contact
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

								<!--BANDEAU-->

		<div><img width="100%" src="<?php bloginfo('template_directory'); ?>/images/contact.png"></div>
		<div class="croix"><img src="<?php bloginfo('template_directory'); ?>/images/mfe_croixlogo.png" width="10%">
		

		<section class="infocontact">
				<p>Vous êtes une marque éthique,</p>
				<p>vous souhaitez travailler avec nous,</p>
				<p>vous avez des questions ou des idées,</p>
				<p>n'hésitez pas à nous contacter :</p>
				<br>
				<p>contact@myfashionethic.com</p>
		</section>
			
	<!--#######################
			FIN CONTENUS
	#######################-->

<?php get_footer(); ?>

	