<?php
 
function yogaom_theme_assets() {
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/fonts.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'yogaom_theme_assets' );

function yogaom_theme_support() {
	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'yogaom_theme_support' );

// Copied and modified from twentytwenty_site_logo
function yogaom_site_logo( $args = array(), $echo = true ) {
	if ( has_custom_logo() ) {
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		$args['logo'] = $image[0];
	}
	
	$defaults = array(
		'logo' => 'imgs/logo.png',
		'logo_class' => '',
		'title' => 'Yoga.om'
	);
	$args = wp_parse_args( $args, $defaults );

	$logo  = '<img src="' . $args['logo'] . '" class="' . $args['logo_class'] . '" title="' . $args['title'] . '" alt="' . $args['title'] . '" />';
	$html = '<a href="/">' . $logo . '</a>';

	return $html;
}

function  yogaom_site_disable_canonical_front_page( $redirect ) {
    if ( is_page() && $front_page = get_option( 'page_on_front' ) ) {
        if ( is_page( $front_page ) )
            $redirect = false;
    }
    return $redirect;
}

add_filter( 'redirect_canonical', 'yogaom_site_disable_canonical_front_page' );

function  yogaom_site_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'yogaom_site_post_thumbnails' );