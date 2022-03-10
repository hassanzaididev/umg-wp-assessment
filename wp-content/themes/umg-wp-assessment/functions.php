<?php 

/****** Advance Custom Field *****/
// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/vendor/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/vendor/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'umg_acf_settings_url');
function umg_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'umg_acf_settings_show_admin');
function umg_acf_settings_show_admin( $show_admin ) {
    return true;
}
// dynamic block titles
add_filter('acf/fields/flexible_content/layout_title', function($title) {
    $ret = $title;
    if ($custom_title = get_sub_field('title')) {
        $ret =  $title.' <em style="font-size: 90%; opacity: 0.6"> ('.trim($custom_title).')</em>';
    }elseif($custom_title = get_sub_field('global_block')) {
		$custom_title = get_the_title($custom_title);
        $ret =  $title.' <em style="font-size: 90%; opacity: 0.6"> ('.trim($custom_title).')</em>';
    }

    return $ret;
});


//for theme option
if( function_exists('acf_add_options_page') ) {
	$main_option_page = acf_add_options_page(array(
            'page_title'    => __('UMG WP Assessment Theme Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
	/*$footer_options = acf_add_options_page(array(
            'page_title'  => __('Footer Settings'),
            'menu_title'  => __('Footer'),
            'parent_slug' => $main_option_page['menu_slug'],
        ));*/
}

// ACF save local json
add_filter('acf/settings/save_json', 'umg_acf_json_save_point');
 
function umg_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/vendor/acf-json';
    return $path;
    
}

// ACF load local json
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
	unset($paths[0]);
	$paths[] = get_stylesheet_directory() . '/vendor/acf-json';
	return $paths;
	}
	
/***** Active Theme support ******/
add_theme_support('post-thumbnails');
add_image_size( 'post-thumb', 768, 340, true );

/***** Declare scripts and styles in HEAD AREA ******/
function wp_head_scripts() {
	wp_enqueue_style('QuicksandFontsGoogle', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap' );
	wp_enqueue_style('RobotoFontsGoogle', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;800;900&display=swap' );
	wp_enqueue_style('GlobalCss', get_stylesheet_directory_uri() . '/assets/css/style.css' );
	
	wp_enqueue_style('DevStyle', get_stylesheet_uri() );
	wp_enqueue_script('jquery');
	
	}
add_action( 'wp_enqueue_scripts', 'wp_head_scripts' );
/*******************************/


/***** Declare scripts and styles in FOOTER AREA ******/
function footer_scripts(){
	wp_enqueue_script('library', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), '1.0.0', true );
	wp_enqueue_script('CustomJs', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
	
	}
add_action('wp_footer','footer_scripts');
/*******************************/


/***** Register navigation ******/
register_nav_menu( 'primary', 'Primary Menu' );
/*******************************/


?>