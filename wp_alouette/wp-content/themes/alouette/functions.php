<?php

// Custom settings
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
  add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');
  add_settings_field('main_phone', 'Main Phone', 'setting_main_phone', 'theme-options', 'section');
  
  register_setting('section', 'facebook');
  register_setting('section', 'twitter');
  register_setting('section', 'instagram');
  register_setting('section', 'main_phone');
}
add_action( 'admin_init', 'custom_settings_page_setup' );