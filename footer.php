<!--#######################
			FOOTER
	#######################-->

	<div class="croix"><img src="<?php bloginfo('template_directory'); ?>/images/mfe_croixlogo.png" width="10%"></div>

	<footer>
		
		<div class="contact">
			<ul>
				
				<li>
					<a href="<?php echo get_page_link( 25); ?>">contact</a> 
				</li>
				<!--<li><a href="#">livraison et retour</a> </li>
				<li><a href="#">paiement sécurisé</a> </li>-->
			</ul>
		</div>
		
			
		<div class="socialnetwork">
			<ul>
				<li><a target="_blank" href="http://fr.pinterest.com/mayeulderville/"><i class="fa fa-pinterest"></i></a></li>
				<!-- <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>-->
				<li><a target="_blank" href="https://twitter.com/mayethics"><i class="fa fa-twitter"></i></a></li>
				<li><a target="_blank" href="https://www.facebook.com/myfashionethic"><i class="fa fa-facebook-square"></i></a></li>
			</ul>
		</div>
			
	</footer>

	<!--#######################
			FIN FOOTER
	#######################-->



	<!-- /container -->        
		<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>

        <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-53255785-1', 'auto');
		  ga('send', 'pageview');

		</script>
	
		<?php wp_footer(); ?>	
		
	</body>
</html>