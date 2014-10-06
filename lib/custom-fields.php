<?php 

include_once('advanced-custom-fields/acf.php');
define( 'ACF_LITE', false );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_location',
		'title' => 'Location',
		'fields' => array (
			array (
				'key' => 'field_53b965a0f78cd',
				'label' => 'Address',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53b96614f78d2',
				'label' => 'Street Address',
				'name' => 'street_address',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53b9661df78d3',
				'label' => 'City',
				'name' => 'city',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53b96626f78d4',
				'label' => 'State',
				'name' => 'state',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53b9662df78d5',
				'label' => 'Zip',
				'name' => 'zip',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53b966d918f6d',
				'label' => 'Contact',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53b96639f78d6',
				'label' => 'Phone',
				'name' => 'phone',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53b9680498646',
				'label' => 'Fax Number',
				'name' => 'fax_number',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53b967e8efd57',
				'label' => 'Social',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53b966f218f6e',
				'label' => 'Facebook',
				'name' => 'facebook',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53b9670418f6f',
				'label' => 'Twitter',
				'name' => 'twitter',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53b9670e18f70',
				'label' => 'Google+',
				'name' => 'google+',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53b9671818f71',
				'label' => 'Instagram',
				'name' => 'instagram',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53b9672318f72',
				'label' => 'Pinterest',
				'name' => 'pinterest',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'location',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	
	register_field_group(array (
		'id' => 'acf_staff-bio',
		'title' => 'Staff Bio',
		'fields' => array (
			array (
				'key' => 'field_53b9691a812e4',
				'label' => 'Staff Biography',
				'name' => 'staff_biography',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_53b9694b1123e',
				'label' => 'Staff Bio Excerpt',
				'name' => 'staff_bio_excerpt',
				'type' => 'wysiwyg',
				'instructions' => 'Basic bio',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'staff',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_staff-details',
		'title' => 'Staff Details',
		'fields' => array (
			array (
				'key' => 'field_53b968ec6208c',
				'label' => 'Staff Photo',
				'name' => 'staff_photo',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'staff',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

} ?>