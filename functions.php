<?php

// Ajouter des images à la une ("thumbnail")
add_theme_support( 'post-thumbnails' );

// Utiliser Bootstrap dans un menu appelé "primary"
// http://code.tutsplus.com/tutorials/how-to-integrate-bootstrap-navbar-into-wordpress-theme--wp-33410

	register_nav_menus ( 
		array(
	    'primary' => __( 'Primary Menu', 'THEMENAME' ),
	) );


// Register Custom Navigation Walker -- https://github.com/twittem/wp-bootstrap-navwalker
require_once('wp_bootstrap_navwalker.php');


remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);


function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

/** Remove Showing results functionality site-wide */
function woocommerce_result_count() {
        return;
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

add_theme_support( 'woocommerce' );