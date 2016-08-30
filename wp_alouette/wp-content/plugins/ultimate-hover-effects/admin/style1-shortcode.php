<?php

// Register Shortcode
function ultimate_hover_effects_style1_shortcode($atts, $content = null){
	extract( shortcode_atts( array(
	
		'category' => '',
		
	), $atts) );
	

		$q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'ultimate-effects', 'ultimate_cat' => $category)
        );
		
		while($q->have_posts()) : $q->the_post();
		$id = get_the_ID();
		

	
		
	$style1_infos = vp_metabox('infosmeta.style1_info', false);	
	
	$style1_effects = vp_metabox('infosmeta.style1_settings.0.style1_effects', false);	
	$style1_width = vp_metabox('infosmeta.style1_settings.0.style1_width', false);	
	$style1_letf_right = vp_metabox('infosmeta.style1_settings.0.style1_letf_right', false);
	$style1_move_texts_topbottom = vp_metabox('infosmeta.style1_settings.0.style1_move_texts_topbottom', false);	
	$style1_move_texts_leftright = vp_metabox('infosmeta.style1_settings.0.style1_move_texts_leftright', false);
	$style1_fontfamily = vp_metabox('infosmeta.style1_settings.0.style1_fontfamily', false);	
	$style1_heading_fontsize = vp_metabox('infosmeta.style1_settings.0.style1_heading_fontsize', false);
	$style1_heading_color = vp_metabox('infosmeta.style1_settings.0.style1_heading_color', false);
	$style1_desc_fontsize = vp_metabox('infosmeta.style1_settings.0.style1_desc_fontsize', false);
	$style1_desc_color = vp_metabox('infosmeta.style1_settings.0.style1_desc_color', false);	
	$style1_custom_css = vp_metabox('infosmeta.style1_settings.0.style1_custom_css', false);
	
	$i = 0;

		$output = '<ul class="grid '.$style1_effects.'">';

		foreach ($style1_infos as $style1_info) {	

		$output .= '<li style="width:'.$style1_width.'px; margin-left: '.$style1_letf_right.'px !important">
					<figure>
						<img src="'.$style1_info['style1_image'].'"/>
						<figcaption>
							<a style="margin-top:'.$style1_move_texts_topbottom.'px;margin-left:'.$style1_move_texts_leftright.'px" href="'.$style1_info['style1_link'].'" target="'.$style1_link_open.'">
								<h3>'.$style1_info['style1_title'].'</h3>
								<span>'.$style1_info['style1_description'].'</span>
							</a>
							</figcaption>
					</figure>
				</li>';
				
		$i++;
	}
		$output .='</ul>';	

	
	endwhile;
	wp_reset_query();
	return $output;
}


add_shortcode('uhe_style1', 'ultimate_hover_effects_style1_shortcode');	

?>