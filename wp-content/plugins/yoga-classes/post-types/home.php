<?php
if( function_exists('acf_add_local_field_group') ){

acf_add_local_field_group(array(
	'key' => 'group_5f5153ddf2f17',
	'title' => 'Home',
	'fields' => array(
		array(
			'key' => 'field_5f5155dd6f962',
			'label' => 'Intro Image',
			'name' => 'intro_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => 1440,
			'min_height' => 997,
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'png,jpg,jpeg',
		),
		array(
			'key' => 'field_5f51541050bd6',
			'label' => 'First Heading',
			'name' => 'first_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 20,
		),
		array(
			'key' => 'field_5f51543950bd7',
			'label' => 'Second Heading',
			'name' => 'second_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 10,
		),
		array(
			'key' => 'field_5f51544450bd8',
			'label' => 'Paragraph',
			'name' => 'paragraph',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 60,
		),
		array(
			'key' => 'field_5f51545a50bd9',
			'label' => 'Icon',
			'name' => 'icon',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => 60,
			'min_height' => 40,
			'min_size' => '',
			'max_width' => 100,
			'max_height' => 70,
			'max_size' => '',
			'mime_types' => 'png,jpg,jpeg,gif',
		),
		array(
			'key' => 'field_5f51550550bda',
			'label' => 'Classes First Heading',
			'name' => 'classes_first_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 16,
		),
		array(
			'key' => 'field_5f51552650bdb',
			'label' => 'Classes Second Heading',
			'name' => 'classes_second_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 16,
		),
		array(
			'key' => 'field_5f5164ea841a5',
			'label' => 'Number of Posts',
			'name' => 'number_of_posts',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 3,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => 3,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => get_option( 'page_on_front' ),
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

}