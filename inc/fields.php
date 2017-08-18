<?php
/**
 * Custom Fields for ACF 
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Header code for retargeting tags
 */


function gff_header_code() {
	the_field('header_code', 'option');
}	
add_action ('wp_head','gff_header_code');	
	

/**
 * Footer code for retargeting tags
 */


function gff_footer_code() {
	the_field('footer_code', 'option');
	the_field('page_code');
}	
add_action ('wp_footer','gff_footer_code');	
	
 
/**
 * Auto Include ACF in theme
 */





if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_589236519808a',
	'title' => 'Code Fields',
	'fields' => array (
		array (
			'key' => 'field_58924008d48e6',
			'label' => 'Header Code',
			'name' => 'header_code',
			'type' => 'textarea',
			'instructions' => 'Code placed here goes between the head tags.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array (
			'key' => 'field_5892365878c5c',
			'label' => 'Footer Code',
			'name' => 'footer_code',
			'type' => 'textarea',
			'instructions' => 'Code placed here goes before the closing body tag.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-rad-seo',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => 'Code fields for google retargeting, facebook pixels, etc.',
));

acf_add_local_field_group(array (
	'key' => 'group_57d2c5779ad5e',
	'title' => 'Contact Information',
	'fields' => array (
		array (
			'key' => 'field_57d2b8d136df1',
			'label' => 'Street',
			'name' => 'address_street',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57d2b8e236df2',
			'label' => 'Street 2',
			'name' => 'address_street_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57d2b8f536df3',
			'label' => 'City',
			'name' => 'address_city',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 50,
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57d2b91236df4',
			'label' => 'State',
			'name' => 'address_state',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 20,
				'class' => '',
				'id' => '',
			),
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array (
				'AL' => 'Alabama',
				'AK' => 'Alaska',
				'AZ' => 'Arizona',
				'AR' => 'Arkansas',
				'CA' => 'California',
				'CO' => 'Colorado',
				'CT' => 'Connecticut',
				'DE' => 'Delaware',
				'DC' => 'District of Colombia',
				'FL' => 'Florida',
				'GA' => 'Georgia',
				'HI' => 'Hawaii',
				'ID' => 'Idaho',
				'IL' => 'Illinois',
				'IN' => 'Indiana',
				'IA' => 'Iowa',
				'KS' => 'Kansas',
				'KY' => 'Kentucky',
				'LA' => 'Louisiana',
				'ME' => 'Maine',
				'MD' => 'Maryland',
				'MA' => 'Massachusetts',
				'MI' => 'Michigan',
				'MN' => 'Minnesota',
				'MS' => 'Mississippi',
				'MO' => 'Missouri',
				'MT' => 'Montana',
				'NE' => 'Nebraska',
				'NV' => 'Nevada',
				'NH' => 'New Hampshire',
				'NJ' => 'New Jersey',
				'NM' => 'New Mexico',
				'NY' => 'New York',
				'NC' => 'North Carolina',
				'ND' => 'North Dakota',
				'OH' => 'Ohio',
				'OK' => 'Oklahoma',
				'OR' => 'Oregon',
				'PA' => 'Pennsylvania',
				'PR' => 'Puerto Rico',
				'RI' => 'Rhode Island',
				'SC' => 'South Carolina',
				'SD' => 'South Dakota',
				'TN' => 'Tennessee',
				'TX' => 'Texas',
				'UT' => 'Utah',
				'VT' => 'Vermont',
				'VA' => 'Virginia',
				'WA' => 'Washington',
				'WV' => 'West Virginia',
				'WI' => 'Wisconsin',
				'WY' => 'Wyoming',
			),
			'default_value' => array (
			),
			'ui' => 1,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_57d2b97936df5',
			'label' => 'Zip',
			'name' => 'address_postcode',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 30,
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_58924f0ee9e50',
			'label' => 'Phone Number',
			'name' => 'phone_number',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_58924f1be9e51',
			'label' => 'Email',
			'name' => 'email',
			'type' => 'email',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));



acf_add_local_field_group(array (
	'key' => 'group_58920b2604638',
	'title' => 'Social Media',
	'fields' => array (
		array (
			'key' => 'field_58920b5d7b776',
			'label' => 'Facebook Link Content',
			'name' => 'facebook',
			'type' => 'text',
			'instructions' => 'Place what you want to link the social media URL with e.g. < i class="fa-facebook" >< /i > for FontAwesome or an image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_589245e3e4e8f',
			'label' => 'Facebook URL',
			'name' => 'facebook_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_58922de33a082',
			'label' => 'Google Plus Link Content',
			'name' => 'google_plus',
			'type' => 'text',
			'instructions' => 'Place what you want to link the social media URL with e.g. < i class="fa-facebook" >< /i > for FontAwesome or an image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_58924608e4e91',
			'label' => 'Google Plus URL',
			'name' => 'google_plus_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_58922def3a083',
			'label' => 'Twitter Link Content',
			'name' => 'twitter',
			'type' => 'text',
			'instructions' => 'Place what you want to link the social media URL with e.g. < i class="fa-facebook" >< /i > for FontAwesome or an image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_589245f6e4e90',
			'label' => 'Twitter URL',
			'name' => 'twitter_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_58922df43a084',
			'label' => 'YouTube Link Content',
			'name' => 'youtube',
			'type' => 'text',
			'instructions' => 'Place what you want to link the social media URL with e.g. < i class="fa-facebook" >< /i > for FontAwesome or an image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_5892462ee4e92',
			'label' => 'Youtube URL',
			'name' => 'youtube_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-social-media',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'field',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => 'Set the website social media links here.	Site uses font awesome icons, but images can be also be used.',
));

endif;