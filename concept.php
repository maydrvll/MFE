
<?php
/*
Template Name: concept
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
<section class="presentation">
		<div class="row">
			<div class="col-md-6">
				<p> My Fashion Ethic propose un nouveau regard sur la mode éthique : une plate-forme très sélective de vente en ligne de vêtements <span>fashion ET éthiques</span>. Dans un univers viral, tendance et design, le site e-commerce rassemble des projets de mode ayant des valeurs communes. Les marques présentes sur la plate-forme sont issues de structures à taille humaine.  <br> <br> Mais My Fashion Ethic c’est plus qu'un e-shop : c’est aussi un <span>réseau solidaire</span> de créateurs vraiment éthiques. Trop occupés avec les problématiques de productions, les producteurs éthiques ont peu de temps à accorder au développement de la marque et à l’accroissement de sa visibilité. En fédérant, les marques aux valeurs communes, My Fashion Ethic dynamise le secteur de la mode éthique en proposant aux créateurs de devenir solidaires les uns des autres pour être plus forts. En plus des échanges et du partage de l’expérience, des moyens d’actions concrets sont mis en œuvre dans un équilibre efficace entre digital et physique. D’une part pour accroitre la visibilité des membres, d’autres part pour développer les ventes.
					My Fashion Ethic a vocation à devenir un acteur déterminant du secteur de la mode et à influencer les marques pour qu’elles s’orientent vers des processus plus exigeants dans tous les domaines.
				</p>
			</div>

			<div class="col-md-6">
				<img width= 95% src="<?php bloginfo('template_directory'); ?>/images/concept_general.png">
			</div>
		</div>

		<div class="row">
	
			<div class="col-md-7">
				<img width= 95% src="<?php bloginfo('template_directory'); ?>/images/concept_mode_ethique.png">
			</div>

			<div class="col-md-5">
				<p>Mais qu’est ce qui peut bien se cacher derrière ce concept de mode éthique ? Ecologique, bio, labélisé, made in France, responsable… On pourrait presque croire qu’il y a autant de visions de l’éthique que de marques « éthiques ». <br> <br> My Fashion Ethic assume sa vision : celle qui met l’humain au cœur du projet, en visant un impact social positif. Plutôt que de se focaliser sur les externalités négatives liées à la production, il s’agit de générer un bénéfice social concret, et des externalités positives pour la population. La mentalité est donc différente : les créateurs présents sur la plate-forme agissent partout dans le monde pour améliorer la situation de personnes défavorisées. Ils travaillent en relation étroite avec des ateliers à échelle humaine et coopèrent avec les communautés et les associations locales. Ils n’exploitent pas : ils forment ; ils emploient.

<br> <br> My Fashion Ethic rève de prouver à la fashionista que la mode éthique est un beau moyen d’exprimer ses valeurs et de s’affirmer.<p>
			</div>

			
		</div>

		<div class="row">

			
			<div class="col-md-7">
				<p>La femme est au cœur de notre projet. Nos collections respirent la féminité. Nos vêtements sont fabriqués par des femmes et pour des femmes. Nous proposons aux dressings des françaises la mode made in bout du monde. Nous offrons à la couturière du bout du monde le moyen de prendre en main son destin, d’acquérir son autonomie.

				<br><br>L’aventure entreprenariale est passionnante. Nous voulons divulguer ses valeurs. Notre projet doit permettre de susciter d’autres initiatives d’entreprenariat social. Des initiatives locales, des initiatives en France. La mode et l’entreprenariat peuvent ensemble faire de grandes choses pour améliorer le quotidien de populations pauvres et donner du sens à nos vies. 

				<br><br>Nous voulons vous faire découvrir des endroits uniques et méconnus. Un fond d’exotisme parfume les collections que nous sélectionnons pour vous. Une touche d’originalité fait la différence. Nos vêtements vous feront voyager. Si vous suivez l’aventure de My Fashion Ethic, vous en verrez de toutes les couleurs.

				Cerise sur le gâteau, pour My Fashion Ethic, qui dit éthique dit souvent fait-main, série limitée et exclusivité. Les vêtements de notre sélection vous feront vous sentir unique.
				</p>
			</div>

			<div class="col-md-4 ">
				<img src="<?php bloginfo('template_directory'); ?>/images/concept_valeurs.png">
			</div>

		</div>

		<div class="row">

			<div class="col-md-5">
				<img width="100%" src="<?php bloginfo('template_directory'); ?>/images/concept_may.png">
			</div>

			<div class="col-md-7">
				<p> Mayeul, la fibre sociale et un brin de folie. Six mois dans la jungle birmane, en pays Kachin, m’ont permis de lancer un atelier de couture à Myitkyina. De retour à la maison, j’ai cherché le moyen de faire connaître aux Françaises les magnifiques tissus kachin. J’ai alors cofondé l’association TrendEthics qui vise à soutenir l’emploi et l’émancipation des femmes au travers de projets de mode. Réalisant que le modèle associatif répond incomplètement aux besoins du développement, l’assistance n’étant qu’un palliatif à la misère, j’ai décidé de me lancer dans le Social Business efficace.

				J’ai découvert les ambivalences de la mode dite « éthique » : un certain flou autour de ce concept et la difficulté d’accès des clients potentiels aux réseaux de distribution. J’ai pourtant fini par dénicher quelques marques à la fois « hyper tendance » et correspondant profondément à ma vision de l’éthique. Pourquoi ne pas offrir une solution commerciale à ces rares marques éthiques, qui ont un vrai impact économique et social dans leurs lieux de production ? Il ne s’agissait plus de soutenir uniquement un atelier birman. 
				<br> <br> Je me lance aujourd’hui dans cette aventure, convaincue que la mode est un puissant levier de développement : lutte contre la pauvreté, encouragement à l’émancipation des femmes et soutien aux communautés locales.
				<p>	

			</div>

			

		</div>

		

	</section>		

<!--#######################
			FIN CONTENUS
	#######################-->

<?php get_footer(); ?>