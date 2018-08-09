<?php

/*--*--*--*--*--*--*--*--*--*--*-*--*--*--*--*--*--*--*--*

				* -------  Setup  ------- *

-*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*/

function sitename_setup() {

	// Register menus
	register_nav_menus(array(

		'primary' => __('Primary Menu'),
        //'footer' => __('Footer Menu') // Use this if different than primary menu

	));

    // Add Menu Support
    add_theme_support('menus');

    // Add Title Tag Support
    add_theme_support('title-tag');

    // Post Featured Images Support
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'sitename_setup');



/*--*--*--*--*--*--*--*--*--*--*-*--*--*--*--*--*--*--*--*

	* -------  Calling CSS and JavaScript Path  ------- *

-*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*/

function sitename_styles_and_scripts() {

	// Styles
	wp_enqueue_style('main', get_stylesheet_directory_uri()."/style.css", array(), 1); // Compiled by "style.scss"

	// Scripts
	//wp_enqueue_script( 'slick', get_stylesheet_directory_uri()."/scss/tools/slick/slick.min.js", ['jquery']);
	wp_enqueue_script('script', get_stylesheet_directory_uri()."/js/script.js", ['jquery'], 1, true);

}

add_action('wp_enqueue_scripts', 'sitename_styles_and_scripts');



/*--*--*--*--*--*--*--*--*--*--*-*--*--*--*--*--*--*--*--*

				* -------  Menu  ------- *

-*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*/

function sitename_primary_menu() {

	wp_nav_menu (

		array (

			'theme_location'  => 'primary',
			'menu'            => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul>%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''

		)

	);

}