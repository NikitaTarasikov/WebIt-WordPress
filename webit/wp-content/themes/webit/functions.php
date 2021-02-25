<?php	
	add_action('wp_enqueue_scripts', 'webit_styles');
	add_action('wp_enqueue_scripts', 'webit_scripts');


function webit_styles() {
	
	wp_enqueue_style('bootstrap-style',  get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('webit-style', get_stylesheet_uri() );
};

function webit_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery',  get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js');
	
	wp_enqueue_script('bootstrap-scripts',  get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script('slick-scripts',  get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);
	wp_Enqueue_script('jquery');
	wp_enqueue_script('webit-scripts', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), null, true);
};

add_theme_support('custom-logo');
add_theme_support('menus');

function webp_upload_mimes( $existing_mimes ) {
	$existing_mimes['webp'] = 'image/webp';
	return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args){
	if ($args->menu === 'Main') {
		$atts['class'] = 'header__item-link';

		if($item->current) {
		$atts['class'] .= ' header__item-link--active';
			
		}
		
	};
	return $atts;
}


add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	if( $dosvg ){
		if( current_user_can('manage_options') ){
			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}
	return $data;
}

?>