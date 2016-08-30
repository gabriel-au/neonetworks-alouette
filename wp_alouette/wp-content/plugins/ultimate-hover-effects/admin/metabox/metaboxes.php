<?php

return array(

	array(
		'type' => 'toggle',
		'name' => 'style1',
		'label' => __('Style 1', 'vp_textdomain'),
	),

	array(
		'type' => 'toggle',
		'name' => 'style2',
		'label' => __('Style 2 (<strong style="color:red;">Pro Only</strong>)', 'vp_textdomain'),
	),

	array(
		'type' => 'toggle',
		'name' => 'style3',
		'label' => __('Style 3 (<strong style="color:red;">Pro Only</strong>)', 'vp_textdomain'),
	),	

	array(
		'type' => 'toggle',
		'name' => 'style4',
		'label' => __('Style 4 (<strong style="color:red;">Pro Only</strong>)', 'vp_textdomain'),
	),

    array(
		'type'      => 'group',
		'repeating' => true,
		'sortable'  => true,
		'name'      => 'style1_info',
		'priority'  => 'high',
		'title'     => __('Hover Item', 'vp_textdomain'),
			'dependency' => array(
				'field'    => 'style1',
				'function' => 'vp_dep_boolean',
				),
				
				
		'fields'    => array(
		
	
			array(
					'type' => 'upload',
					'name' => 'style1_image',
					'label' => __('Hover Image', 'vp_textdomain'),
				),
				
				
			array(
				'type'  => 'textbox',
				'name'  => 'style1_title',
				'label' => __('Heading', 'vp_textdomain'),
				'default' => 'Heading Here',
				
			),			
			
			
			array(
				'type'  => 'textbox',
				'name'  => 'style1_description',
				'label' => __('Description', 'vp_textdomain'),
				'default' => 'Description goes here',
			),	
			array(
				'type'  => 'textbox',
				'name'  => 'style1_link',
				'label' => __('Image Link', 'vp_textdomain'),
				'default' => '',
			),
			
			

		),
	),


	array(
		'type'      => 'group',
		'repeating' => false,
		'sortable'  => true,
		'name'      => 'style1_settings',
		'priority'  => 'high',
		'title'     => __('Style 1 Settings', 'vp_textdomain'),
					'dependency' => array(
				'field'    => 'style1',
				'function' => 'vp_dep_boolean',
			),
		
		'fields' => array(				

					array(
						'type' => 'notebox',
						'name' => 'nb_1',
						'label' => __('Author Comment', 'vp_textdomain'),
						'description' => __('To get all styles & features working, please buy the pro version here <a target="_blank" href="http://demo.themebon.com/ultimate-hover-effects/">Ultimate Hover Effects Pro</a> for only $11', 'vp_textdomain'),
						'status' => 'error',
						),

				array(
					'type' => 'select',
					'name' => 'style1_effects',
					'label' => __('Effect', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(
						array(
							'value' => 'cs-style-1',
							'label' => 'effect1',
						),
						array(
							'value' => 'cs-style-2',
							'label' => 'effect2',
						),		
						array(
							'value' => 'cs-style-3',
							'label' => 'effect3',
						),
						array(
							'value' => 'cs-style-4',
							'label' => 'effect4',
						),	
						array(
							'value' => 'cs-style-5',
							'label' => 'effect5',
						),
						array(
							'value' => 'cs-style-6',
							'label' => 'effect6',
						),		
						array(
							'value' => 'cs-style-7',
							'label' => 'effect7',
						),

					),
				),
				
			
				array(
					'type' => 'slider',
					'name' => 'style1_width',
					'label' => __('Image Width', 'vp_textdomain'),
					'description' => __('You can change hover item width in pixel formate without (px)', 'vp_textdomain'),
					'min' => '100',
					'max' => '1000',
					'step' => '1',
					'default' => '278',
				),

				array(
					'type' => 'slider',
					'name' => 'style1_letf_right',
					'label' => __('Move Image Left Right', 'vp_textdomain'),
					'description' => __('You can move image left and right in pixel formate without (px)', 'vp_textdomain'),
					'min' => '-40',
					'max' => '150',
					'step' => '1',
					'default' => '0',
				),
				array(
					'type' => 'slider',
					'name' => 'style1_move_texts_topbottom',
					'label' => __('Move Texts to Bottom or Top', 'vp_textdomain'),
					'min' => '-200',
					'max' => '200',
					'step' => '1',
					'default' => '15',
				),
				array(
					'type' => 'slider',
					'name' => 'style1_move_texts_leftright',
					'label' => __('Move Texts to Left or Right', 'vp_textdomain'),
					'min' => '-200',
					'max' => '200',
					'step' => '1',
					'default' => '15',
				),
				array(
					'type' => 'select',
					'name' => 'style1_fontfamily',
					'label' => __('Custom Font (<strong style="color:red;">Pro Only</strong>)', 'vp_textdomain'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value' => 'vp_get_gwf_family',
							),
						),
					),
				),
			
				array(
					'type' => 'slider',
					'name' => 'style1_heading_fontsize',
					'label' => __('Heading Font Size (<strong style="color:red;">Pro Only</strong>)', 'vp_textdomain'),
					'min' => '0',
					'max' => '50',
					'step' => '1',
					'default' => '16',
				),	
				array(
					'type' => 'color',
					'name' => 'style1_heading_color',
					'label' => __('Heading Font Color (<strong style="color:red;">Pro Only</strong>)', 'vp_textdomain'),
					'default' => '#fff',
				),
			
				array(
					'type' => 'slider',
					'name' => 'style1_desc_fontsize',
					'label' => __('Description Font Size (<strong style="color:red;">Pro Only</strong>)', 'vp_textdomain'),
					'min' => '0',
					'max' => '50',
					'step' => '1',
					'default' => '15',
				),	
				array(
					'type' => 'color',
					'name' => 'style1_desc_color',
					'label' => __('Description Font Color (<strong style="color:red;">Pro Only</strong>)', 'vp_textdomain'),
					'default' => '#E5495F',
				),

				array(
					'type' => 'checkbox',
					'name' => 'style1_link_open',
					'label' => __('Open link in new Tab? (<strong style="color:red;">Pro Only</strong>)', 'vp_textdomain'),
					'items' => array(
						array(
							'value' => '_blank',
						),
					),
				),
				
				array(
				'type'  => 'codeeditor',
				'name'  => 'style1_custom_css',
				'label' => __('Custom CSS (<strong style="color:red;">Pro Only</strong>)', 'vp_textdomain'),
				'description'=> __('Write your custom css here.','vp_textdomain'),
				'mode' => 'css',
				),
		),
	),





	
	
);