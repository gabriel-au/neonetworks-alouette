<?php


// Shortcode generator
VP_Security::instance()->whitelist_function('vp_simple_shortcode');

function vp_simple_shortcode($style = "", $category = "")
{
	$result = '[uhe_style1 category="'.$category. '" ]';
	return $result;
}

?>