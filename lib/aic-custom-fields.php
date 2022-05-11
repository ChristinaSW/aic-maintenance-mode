<?php

add_action( 'acf/init', 'aic_fields' );
function aic_fields(){
	acf_add_local_field_group(array(
		'key' => 'group_61a631ba28adb',
		'title' => 'Theme Options',
		'fields' => array(
			array(
				'key' => 'field_61a631c11d93f',
				'label' => 'Theme Colors',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_61a632031d940',
				'label' => '',
				'name' => 'theme_colors',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_61a6323b1d941',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => 'Add Color',
				'sub_fields' => array(
					array(
						'key' => 'field_61a6323b1d941',
						'label' => 'Color Name',
						'name' => 'color_name',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '33',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_61a632501d942',
						'label' => 'Color Hex',
						'name' => 'color_hex',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '33',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'enable_opacity' => 0,
						'return_format' => 'string',
					),
					array(
						'key' => 'field_6213605f5be87',
						'label' => 'Color Classes',
						'name' => 'color_classes',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '33',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => 3,
						'new_lines' => '',
						'readonly' => 1,
					),
				),
			),
			array(
				'key' => 'field_6216604e5be82',
				'label' => 'Company Information',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_6216605f5be87',
				'label' => 'Company Name',
				'name' => 'company_name',
				'type' => 'text',
				'instructions' => '<em>Field Name: company_name</em>',
				'required' => 0,
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
				'maxlength' => '',
			),
			array(
				'key' => 'field_6216607a5be84',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'instructions' => '<em>Field Name: email</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '49',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_6216609c5be82',
				'label' => 'Phone Number',
				'name' => 'phone_number',
				'type' => 'text',
				'instructions' => '<em>Field Name: phone_number</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '49',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62744bc94a6b1',
				'label' => 'Physical Address',
				'name' => '',
				'type' => 'accordion',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'open' => 0,
				'multi_expand' => 0,
				'endpoint' => 0,
			),
			array(
				'key' => 'field_62744c394a6b5',
				'label' => 'Street',
				'name' => 'physical_street',
				'type' => 'textarea',
				'instructions' => '<em>Field Name: physical_street</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 2,
				'new_lines' => 'br',
			),
			array(
				'key' => 'field_62744c5f4a6b7',
				'label' => 'City',
				'name' => 'physical_city',
				'type' => 'text',
				'instructions' => '<em>Field Name: physical_city</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62744c6a4a6b8',
				'label' => 'State',
				'name' => 'physical_state',
				'type' => 'text',
				'instructions' => '<em>Field Name: physical_state</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62744c984a6b9',
				'label' => 'Zip',
				'name' => 'physical_zip',
				'type' => 'text',
				'instructions' => '<em>Field Name: physical_zip</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62744be04a6b2',
				'label' => 'Physical Address Endpoint',
				'name' => '',
				'type' => 'accordion',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'open' => 0,
				'multi_expand' => 0,
				'endpoint' => 1,
			),
			array(
				'key' => 'field_62744c0b4a6b3',
				'label' => 'Mailing Address',
				'name' => '',
				'type' => 'accordion',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'open' => 0,
				'multi_expand' => 0,
				'endpoint' => 0,
			),
			array(
				'key' => 'field_62744d434a6bb',
				'label' => 'Street',
				'name' => 'mailing_street',
				'type' => 'textarea',
				'instructions' => '<em>Field Name: mailing_street</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 2,
				'new_lines' => 'br',
			),
			array(
				'key' => 'field_62744d554a6bc',
				'label' => 'City',
				'name' => 'mailing_city',
				'type' => 'text',
				'instructions' => '<em>Field Name: mailing_city</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62744d874a6bd',
				'label' => 'State',
				'name' => 'mailing_state',
				'type' => 'text',
				'instructions' => '<em>Field Name: mailing_state</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62744d944a6be',
				'label' => 'Zip',
				'name' => 'mailing_zip',
				'type' => 'text',
				'instructions' => '<em>Field Name: mailing_zip</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62744c204a6b4',
				'label' => 'Mailing Address Endpoint',
				'name' => '',
				'type' => 'accordion',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'open' => 0,
				'multi_expand' => 0,
				'endpoint' => 1,
			),
			array(
				'key' => 'field_61e08723b7bbd',
				'label' => '',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => 'logo-message',
				),
				'message' => '<h3>Logo</h3><br /><p><em>Please add an image <strong>OR</strong> an image url</em></p>',
				'new_lines' => 'wpautop',
				'esc_html' => 0,
			),
			array(
				'key' => 'field_61a633b815540',
				'label' => '',
				'name' => 'logo',
				'type' => 'image',
				'instructions' => '<em>Field Name: logo</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '49',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_61e091c091bc2',
				'label' => '',
				'name' => 'image_url',
				'type' => 'url',
				'instructions' => '<em>Field Name: image_url</em>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '49',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array(
				'key' => 'field_61a632871d943',
				'label' => 'Maintenance/Debugging',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_61a632bd1d944',
				'label' => 'Enable Maintenance Mode?',
				'name' => 'enable_maintenance_mode',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '49',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_6354c7651000d',
				'label' => 'Enable Debugging?',
				'name' => 'enable_debug',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '49',
					'class' => 'dev-only',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_61a635871d943',
				'label' => 'Send A Support Ticket',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_61e05723b7bbd',
				'label' => '',
				'name' => 'support-form',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'new_lines' => '',
				'esc_html' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'aic-theme-options',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'field',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
}

?>
