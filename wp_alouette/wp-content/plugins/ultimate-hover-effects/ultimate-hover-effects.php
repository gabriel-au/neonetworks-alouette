<?php
/*
Plugin Name: Ultimate Hover Effects
Plugin URI: http://demo.themebon.com/ultimate-hover-effects/
Description: Ultimate Hover Effects is simple modern, yet stylish hover effects for image captions. Eye catching image effects with CSS3 transition for your website to improve your business.
Author: Noor-E-Alam
Author URI: http://demo.themebon.com/ultimate-hover-effects/
Version: 5.3.7
*/


//Loading CSS
function ultimate_hover_effects_style() {
	
	wp_enqueue_script('jquery');
	wp_enqueue_style('uhe_default', plugins_url( '/css/default.css' , __FILE__ ) );
	wp_enqueue_style('uhe_component', plugins_url( '/css/component.css' , __FILE__ ) );
	wp_enqueue_script('uhe_modernizr_js', plugins_url( '/js/modernizr.custom.js' , __FILE__ ) );
	wp_enqueue_script('uhe_toucheffects_js', plugins_url( '/js/toucheffects.js' , __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'ultimate_hover_effects_style' );


// Defines framework class
if(!class_exists('VP_UltimateAutoLoader')){
// Setup Contants
defined( 'VP_HOVER_VERSION' ) or define( 'VP_HOVER_VERSION', '2.0' );
defined( 'VP_HOVER_URL' )     or define( 'VP_HOVER_URL', plugin_dir_url( __FILE__ ) );
defined( 'VP_HOVER_DIR' )     or define( 'VP_HOVER_DIR', plugin_dir_path( __FILE__ ) );
defined( 'VP_HOVER_FILE' )    or define( 'VP_HOVER_FILE', __FILE__ );



// Looding Bootstrap
require 'framework/bootstrap.php';

//Include Custom Data Sources
require_once 'admin/metabox/data_sources.php';

}


// embed font function
function uhe_embed_fonts()
{
    // you can directly enqueue and register
    VP_Site_GoogleWebFont::instance()->register_and_enqueue();
    // or register and get the handler to be used as dependency
    VP_Site_GoogleWebFont::instance()->register();
    wp_register_style('mystyle', 'path_to_style.css', VP_Site_GoogleWebFont::instance()->get_names());
    wp_enqueue_style('mystyle');
}
add_action('wp_enqueue_scripts', 'uhe_embed_fonts');


// Registering Custom Post
add_action( 'init', 'ultimate_hover_effects_custom_post' );
function ultimate_hover_effects_custom_post() {
	register_post_type( 'ultimate-effects',
		array(
			'labels' => array(
				'name' => __( 'U Hover Effects' ),
				'singular_name' => __( 'Hover Item' ),
				'add_new_item' => __( 'Add New Hover Item' )
			),
			'public' => true,
			'supports' => array('title'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'featured'),
			'menu_icon' => '',
			'menu_position' => 20,
		)
	);
	
}


// Registering Custom post's category
add_action( 'init', 'ultimate_hover_effects_custom_post_taxonomy'); 
function ultimate_hover_effects_custom_post_taxonomy() {
	register_taxonomy(
		'ultimate_cat',  
		'ultimate-effects',
		array(
			'hierarchical'          => true,
			'label'                         => 'Hover Effects Category',
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'he-category',
				'with_front'    => true
				)
			)
	);
}

// custom post icon
require_once 'admin/metabox/icon.php';

// Load Metaboxes 
new VP_Metabox(array
(
			'id'          => 'infosmeta',
			'types'       => array('ultimate-effects'),
			'title'       => __('Ultimate Hover Effects ', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_HOVER_DIR . '/admin/metabox/metaboxes.php'
));

new VP_Metabox(array
(
			'id'          => 'sidemeta',
			'types'       => array('ultimate-effects'),
			'title'       => __('Your Shortcode', 'vp_textdomain'),
			'priority'    => 'high',
			'context'     => 'side',
			'template' => VP_HOVER_DIR . '/admin/metabox/side.php'
));

//style 1 shortcode
require_once(VP_HOVER_DIR . 'admin/style1-shortcode.php');
?>