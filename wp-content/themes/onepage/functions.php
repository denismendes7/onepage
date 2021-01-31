<?php

require_once( get_template_directory() . '/inc/class-nav-bootstrap-walker.php');

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup() {

	add_theme_support('post-thumbnails');

	add_theme_support('title-tag');

	register_nav_menus(
		array(
			'primary' => 'Primary'
		)
	);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');
function my_theme_scripts() {

	wp_enqueue_style('my-theme-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1', true );
	
	wp_enqueue_script('my-theme-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('popper'), '1.0', true );

}

add_action('widgets_init', 'my_theme_sidebars');
function my_theme_sidebars() {

	register_sidebar(array(
		'id' => 'primary-sidebar',
		'name' => 'Primary Sidebar',
		'description' => 'Sidebar that appears across the entire website',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));

}






