<?php



function theme_styles() {
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/app.css' );
	wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );



}
add_action( 'wp_enqueue_scripts', 'theme_styles');


function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', '//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv-printshiv.min.js', '', '', false);

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery') , '', true );

	}
add_action( 'wp_enqueue_scripts', 'theme_js' );

?>