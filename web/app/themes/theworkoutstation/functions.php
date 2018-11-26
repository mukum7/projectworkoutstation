<?php


/*Boot strap enqueue*/
function himalayan_scripts() {
// Registering Bootstrap style
wp_enqueue_style( 'bootstrap_min', get_stylesheet_directory_uri().'/css/bootstrap.css' );
wp_enqueue_script('jquery');
//Registering Bootstrap Script
wp_enqueue_script( 'bootstrap_min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '', false );

//registering awesome

wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );


}
add_action( 'wp_enqueue_scripts', 'himalayan_scripts' );


/*
---------------------------------------
custom logo
---------------------------------------
*/

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
/*
---------------------------------------
include google fonts
---------------------------------------
*/

function wp_add_google_fonts() {
 
wp_enqueue_style( 'wp-google-fonts', 'https://fonts.googleapis.com/css?family=Pacifico|Dancing+Script|Anton|Lobster|Merriweather+Sans|Noto+Sans+KR|Pacifico|Shadows+Into+Light', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'wp_add_google_fonts' );






/*
---------------------------------------
include walker file for nav menu
---------------------------------------
*/

require get_template_directory() .'/inc/walkerclass.php';




/*
--------------------------------------------
register workout Station menus
--------------------------------------------
*/

	function himalayansilver_menus() {

		  add_theme_support('menus');
		  register_nav_menu('primary', 'Header Navigation Menu');
		  register_nav_menu('verticalmenu', 'verticalmenu Navigation Menu');
		  register_nav_menu('footer', 'Footer Navigation Menu');
		}
		add_action( 'init', 'himalayansilver_menus' );




/*
--------------------------------------------
register workout Station custom header
--------------------------------------------
*/

$header_info = array(
    'width'         => 980,
    'height'        => 60,
    'default-image' => get_template_directory_uri() . '/images/sunset.jpg',
);
add_theme_support( 'custom-header', $header_info );
 
$header_images = array(
    'sunset' => array(
            'url'           => get_template_directory_uri() . '/images/sunset.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/images/sunset_thumbnail.jpg',
            'description'   => 'Sunset',
    ),
    'flower' => array(
            'url'           => get_template_directory_uri() . '/images/flower.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/images/flower_thumbnail.jpg',
            'description'   => 'Flower',
    ),  
);
register_default_headers( $header_images );






?>