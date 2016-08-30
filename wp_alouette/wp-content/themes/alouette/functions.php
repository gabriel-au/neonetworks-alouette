<?php


function alouette_setup() {

	load_theme_textdomain( 'twentysixteen' );

	
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 680, 450, array( 'center', 'center') );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	// add_theme_support( 'html5', array(
	// 	'search-form',
	// 	'comment-form',
	// 	'comment-list',
	// 	'gallery',
	// 	'caption',
	// ) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside',
	// 	'image',
	// 	'video',
	// 	'quote',
	// 	'link',
	// 	'gallery',
	// 	'status',
	// 	'audio',
	// 	'chat',
	// ) );
}

add_action( 'after_setup_theme', 'alouette_setup' );

function mytheme_custom_logo() {
    // Try to retrieve the Custom Logo
    $output = '';
    if (function_exists('get_custom_logo'))
        $output = get_custom_logo();

    // Nothing in the output: Custom Logo is not supported, or there is no selected logo
    // In both cases we display the site's name
    if (empty($output))
        $output = '</div><div id="menuBarLogoSubtitle"><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></div><div>';

    echo $output;
}

function mytheme_post_thumbnail() {
    if ( has_post_thumbnail() ) {
    	echo '<div id="mainContentBody">';
    	echo the_post_thumbnail();
    	echo '</div>';

    	// $output = '<div id="mainContentBody">' . the_post_thumbnail() . '</div>';
    } 

    // the_post_thumbnail('thumbnail')
}

function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );


// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
			<?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>
		</form>
	</div>
	<?php }
// Twitter
function setting_facebook() { ?>
		<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
		<?php }
function setting_twitter() { ?>
		<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
		<?php }
function setting_instagram() { ?>
			<input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
			<?php }
function setting_main_phone() { ?>
			<input type="text" name="main_phone" id="main_phone" value="<?php echo get_option('main_phone'); ?>" />
			<?php }
function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('main_phone', 'Main Phone', 'setting_main_phone', 'theme-options', 'section');
  add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');
  
  register_setting('section', 'main_phone');
  register_setting('section', 'facebook');
  register_setting('section', 'twitter');
  register_setting('section', 'instagram');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// function theme_prefix_the_custom_logo() {
	
// 	if ( function_exists( 'the_custom_logo' ) ) {
// 		the_custom_logo();
// 	}

// }

// Custom settings
// function custom_settings() {
// 	add_theme_support( 'social', array(
// 		'facebook' => '',
// 		'twitter' => '',
// 		'instagram' => '',
// 	) );
// }
// add_action( 'after_setup_theme', 'custom_settings' );

