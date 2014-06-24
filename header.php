
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!--DEBUT DU HEAD-->

    <head>

		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="My Fashion Ethic offre un nouveau regard sur la mode éthique grâce à une plate-forme très sélective de vente en ligne de vêtements tendances ET éthiques. Le site e-commerce rassemble des projets de mode ayant des valeurs communes : la solidarité">
		<link rel="icon" type="image/png" href="logo.png"/>
		<link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<?php wp_head(); ?>

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css" type"text/css">
			<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type"text/css">

	        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

<!--FIN DU HEAD-->

<body>

	<!--#######################
			HEADER
	#######################-->

	<header>

								<!--LOGO-->
		
		<h1>
			<a href="<index.php"><img src="<?php bloginfo('template_directory'); ?>/images/mfe_logo_sanscroix.png" width="10%" class="logo">

			<img id="croixlogo" src="<?php bloginfo('template_directory'); ?>/images/mfe_croixlogo.png" width="10%"></a>
		</h1>

								<!--PANIER-->

		<a id="panier" href=#>
			<div>
				<p id="nb-article">0</p>
			</div>
		</a>

								<!--BAR DE NAV-->
								
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		  	<div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			      	</button>
			    </div>
			     
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <?php
	          wp_nav_menu( array(
	              'menu'              => 'primary',
	              'theme_location'    => 'primary',
	              'depth'             => 2,
	              'container'         => 'div',
	              'container_class'   => 'collapse navbar-collapse',
	      		  'container_id'      => 'bs-example-navbar-collapse-1',
	              'menu_class'        => 'nav navbar-nav',
	              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	              'walker'            => new wp_bootstrap_navwalker())
	          );
	     			 ?>
			        		      
		  	</div><!-- /.container-fluid -->
		</nav>
				
	</header>

	<!--#######################
			FIN HEADER
	#######################-->