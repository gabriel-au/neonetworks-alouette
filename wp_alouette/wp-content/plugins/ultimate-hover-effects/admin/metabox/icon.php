<?php
 
function uhe_add_menu_icons_styles(){
?>
 
<style>
#adminmenu .menu-icon-ultimate-effects div.wp-menu-image:before {
content: '\f105';
}
</style>
 
<?php
}
add_action( 'admin_head', 'uhe_add_menu_icons_styles' );
?>