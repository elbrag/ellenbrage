<?php

function custom_navigation_menus() {

	$locations = array(
		'header_nav' => __( 'Page Menu', 'portfolio-theme' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );

 ?>
