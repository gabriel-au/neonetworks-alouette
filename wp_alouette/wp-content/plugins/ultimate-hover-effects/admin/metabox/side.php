<?php



return array(
	array(
		'type'      => 'group',
		'name'      => 'shortcode_info',
		'fields'    => array(
				
				
/*	
			array(
				'type'  => 'select',
				'name'  => 'style',
				'label' => __('Select Style', 'vp_textdomain'),
				'items' => array(
					array(
						'value' => 'style1',
						'label' => '1',
					),
					array(
						'value' => 'style2',
						'label' => '2',
					),	
					array(
						'value' => 'style3',
						'label' => '3',
					),	
					array(
						'value' => 'style4',
						'label' => '4',
					),		

			),				
				
			),			
*/
			array(
				'type'  => 'textbox',
				'name'  => 'category',
				'label' => __('Enter Your Category', 'vp_textdomain'),
				'description' => __('must contain category name, this is case sensitive', 'vp_textdomain'),
			),
			
			
			array(
					'type' => 'textbox',
					'name' => 'shortcode',
					'label' => __('Shortcode', 'vp_textdomain'),
					'description' => __('copy & paste this shortcode where you want ', 'vp_textdomain'),
					'binding' => array(
						'field' => 'style, category',
						'function' => 'vp_simple_shortcode'
					)
				),

		),
	),
);

/**
 * EOF
 */