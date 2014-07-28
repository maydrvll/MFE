
<?php
/*
Template Name: index
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

			<div class="bandeau">
				<div class="row">
						<div class="col-md-6" style="padding-left:0px padding-right:0px">
							<img src="<?php bloginfo('template_directory'); ?>/images/mfe_homepage_mode.png" width="100%">
						</div>
						<div class="col-md-6" style="padding-left:0px padding-right:0px">
							<img src="<?php bloginfo('template_directory'); ?>/images/mfe_homepage_tissage.png" width="100%">
						</div>
				<div class="croix"><img src="<?php bloginfo('template_directory'); ?>/images/mfe_croixlogo.png" width="10%">
				</div>
			</div>
			
								<!--INFOS-->

			<section class="info"> 
				<div class="row">
					<div class="col-md-6 col-md-offset-1">
						<p>Si vous êtes déjà sensible à l’éthique, vous pensiez peut-être qu’elle est incompatible avec la mode ? My Fashion Ethic  déniche pour vous des créateurs animés par une même sensibilité : la solidarité concrète.
						Leur principale raison d’être est d’offrir un travail et une vie meilleure à de nombreuses femmes. Ils œuvrent pour responsabiliser ces femmes en leur proposant de prendre leur vie en main. Idéalistes, nous voulons croire qu’il est possible de fonder un business économiquement viable basé sur la générosité, le don, le partage et la collaboration.
						</p>
						<p>La mode est un puissant outil de développement et de lutte contre la pauvreté. My Fashion Ethic donne du sens à vos achats, place aux choix engagés.
						</p>
					</div>
					
					<div class="col-md-3 col-md-offset-1">
						<p>La mode éthique solidaire est un moyen d'affirmer votre identité.
						</p>
						<p>Cerise sur le gâteau, pour My Fashion Ethic, qui dit éthique dit souvent fait-main, série limitée et exclusivité. Les vêtements de notre sélection vous feront vous sentir unique.
						Craquez pour les collections de nos créateurs que nous avons  dénichés spécialement pour vous.
						</p>
					</div>
				<div class="row">
			</section>

			
	<!--#######################
			FIN CONTENUS
	#######################-->

<?php get_footer(); ?>

	
