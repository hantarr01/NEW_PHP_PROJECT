<?php
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_true' );


/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'functions/theme-options.php' );
require( trailingslashit( get_template_directory() ) . 'functions/meta-boxes.php' );

function theme_options_parent($parent ) {
	$parent = '';
	return $parent;
}
add_filter( 'ot_theme_options_parent_slug', 'theme_options_parent',20 );


function artbt_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'artbt' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


}
add_action( 'after_setup_theme', 'artbt_setup' );

function artbt_widgets_init() {
	register_sidebar( array(
		'name'          => 'Область виджетов',
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'artbt' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'artbt_widgets_init' );


function Lesson_style() {
	wp_enqueue_style( 'style', get_template_directory_uri() . 'css/style.css');
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Nunito+Sans');
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Oxygen');
	wp_enqueue_style( 'bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css');
	wp_enqueue_style( 'stSlider', get_template_directory_uri() . '/css/stSlider2345.css');
	wp_enqueue_style( 'materialize', get_template_directory_uri() . '/css/materialize.min.css');
}
add_action( 'wp_enqueue_scripts', 'artbt_style' );


function Lesson_scripts() {
	wp_enqueue_script( 'materializemin', get_template_directory_uri() . '/js/materialize.min.js', array ('jquery'), '', true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array ('jquery'), '', true );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array ('jquery'), '', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', array ('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'artbt_scripts' );


