<?php
/**
 * GFF Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GFF_Starter
 */

if ( ! function_exists( 'gff_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gff_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on GFF Starter, use a find and replace
	 * to change 'gff-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gff-starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'gff-starter' ),
		'social-menu-header' => esc_html__( 'Social Header Menu', 'gff-starter' ),
		'social-menu-footer' => esc_html__( 'Social Footer Menu', 'gff-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gff_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'gff_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gff_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gff_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'gff_starter_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function gff_starter_scripts() {
wp_enqueue_style( 'gff-starter-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '20151215' );
wp_enqueue_style( 'gff-starter-bootstrap4',get_stylesheet_directory_uri()  . '/css/bootstrap4.css', array(), '20151215' );
wp_enqueue_style( 'gff-starter-responsive-menu-css', get_stylesheet_directory_uri()  . '/css/slicknav.css', array(), '20151215' );
wp_enqueue_style( 'gff-starter-slider-css', get_stylesheet_directory_uri()  . '/css/slick.css', array(), '20151215' );
wp_enqueue_style( 'gff-starter-font-awesome', get_stylesheet_directory_uri()  . '/css/font-awesome.css', array(), '1.0' );
wp_enqueue_script( 'gff-starter-slick-slider-init', get_template_directory_uri() . '/js/slick-init.js', array(), '20151215', true );
wp_enqueue_script( 'gff-starter-scripts', get_template_directory_uri() . '/js/app.min.js',array(),'12012017', true);
wp_enqueue_script( 'gff-starter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gff_starter_scripts' );


/** Fallback Jquery loaded in footer in case Google tanks
*/

// jQuery from Google's CDN, fallback to local if not available
add_action('wp_enqueue_scripts', 'load_external_jQuery');

// Deregister jQuery that is included with WordPress
function load_external_jQuery() {
    wp_deregister_script( 'jquery' );

// Check to make sure Google's library is available
    $link = 'http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js';
    $try_url = @fopen($link,'r');
        if( $try_url !== false ) {
            // If it's available, get it registered
            wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
    } else {
        // Register the local file if CDN fails
        wp_register_script('jquery', get_template_directory_uri().'/js/libs/jquery-3.1.1.min.js', __FILE__, false, '1.11.1', true);  
    }
    // Get it enqueued
    wp_enqueue_script('jquery');
}

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/plugins/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/plugins/acf/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_true');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/plugins/acf/acf.php' );




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom widgets and widget areas.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load custom ACF fields
 */
require get_template_directory() . '/inc/fields.php';

/**
* Loads dropdown menu function 
*/
require_once get_template_directory() .'/inc/dropdownmenu.php';

// add custom fields
// export the field groups and use below

define( 'ACF_LITE', true );
include_once('plugins/acf/acf.php');
 
if( function_exists('register_field_group') ):
 
register_field_group(array (
    'id' => 'acf_about-us',
    'title' => 'About Us',
    'fields' => array (
        array (
            'key' => 'field_586e22820cdf9',
            'label' => 'About Us',
            'name' => 'about_us',
            'type' => 'text',
            'instructions' => 'Enter Title for about us here',
            'required' => 1,
            'default_value' => '',
            'placeholder' => 'Enter Title for about us here',
            'prepend' => '',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_586e22f80cdfa',
            'label' => 'Establised At',
            'name' => 'establised_at',
            'type' => 'text',
            'required' => 1,
            'default_value' => '',
            'placeholder' => 'When where you established',
            'prepend' => '',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'page',
                'operator' => '==',
                'value' => '15',
                'order_no' => 0,
                'group_no' => 0,
            ),
        ),
    ),
    'options' => array (
        'position' => 'normal',
        'layout' => 'default',
        'hide_on_screen' => array (
        ),
    ),
    'menu_order' => 0,
));
register_field_group(array (
    'id' => 'acf_food-menu',
    'title' => 'Food Menu',
    'fields' => array (
        array (
            'key' => 'field_58808cfded5b3',
            'label' => 'Price',
            'name' => 'price',
            'type' => 'text',
            'required' => 1,
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_5881f02f46739',
            'label' => 'Currency',
            'name' => 'currency',
            'type' => 'select',
            'required' => 1,
            'choices' => array (
                '$' => '$',
                '&euro' => '€',
            ),
            'default_value' => '',
            'allow_null' => 0,
            'multiple' => 0,
        ),
        array (
            'key' => 'field_5880aceb6427c',
            'label' => 'Food Category',
            'name' => 'food_category',
            'type' => 'checkbox',
            'required' => 1,
            'choices' => array (
                'breakfast' => 'Breakfast',
                'lunch' => 'Lunch',
                'dinner' => 'Dinner',
                'party' => 'Party',
                'drinks' => 'Drinks',
            ),
            'default_value' => 'breakfast : Breakfast',
            'layout' => 'vertical',
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'foodmenu',
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
    'id' => 'acf_footer-details',
    'title' => 'Footer details',
    'fields' => array (
        array (
            'key' => 'field_5878f731da3ad',
            'label' => 'footer image',
            'name' => 'footer_image',
            'type' => 'image',
            'instructions' => 'Footer Image Goes Here',
            'save_format' => 'object',
            'preview_size' => 'medium',
            'library' => 'all',
        ),
        array (
            'key' => 'field_5878f756da3ae',
            'label' => 'footer content',
            'name' => 'footer_content',
            'type' => 'text',
            'instructions' => 'footer content goes here',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_58794f98697fa',
            'label' => 'Social Icons',
            'name' => '',
            'type' => 'tab',
        ),
        array (
            'key' => 'field_58794d05697f8',
            'label' => 'Facebook Username',
            'name' => 'facebook_username',
            'type' => 'text',
            'instructions' => 'Enter Your Facebook Username Here',
            'default_value' => '',
            'placeholder' => 'ajbeacon',
            'prepend' => '',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_58794c93697f7',
            'label' => 'Twitter Username',
            'name' => 'twitter_username',
            'type' => 'text',
            'instructions' => 'Enter Twitter Username Here',
            'default_value' => '',
            'placeholder' => 'ajbeacon',
            'prepend' => '@',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_58794d65697f9',
            'label' => 'Google Plus Username',
            'name' => 'google_plus_username',
            'type' => 'text',
            'instructions' => 'Enter Your Google Plus Username Here',
            'default_value' => '',
            'placeholder' => '+ajbeacon',
            'prepend' => '',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'page',
                'operator' => '==',
                'value' => '15',
                'order_no' => 0,
                'group_no' => 0,
            ),
        ),
    ),
    'options' => array (
        'position' => 'normal',
        'layout' => 'default',
        'hide_on_screen' => array (
        ),
    ),
    'menu_order' => 0,
));
register_field_group(array (
    'id' => 'acf_opening-time',
    'title' => 'Opening Time',
    'fields' => array (
        array (
            'key' => 'field_58795883ae60c',
            'label' => 'Opening Time',
            'name' => '',
            'type' => 'tab',
        ),
        array (
            'key' => 'field_587957a30aecf',
            'label' => 'Breakfast',
            'name' => 'breakfast',
            'type' => 'wysiwyg',
            'required' => 1,
            'default_value' => '',
            'toolbar' => 'full',
            'media_upload' => 'yes',
        ),
        array (
            'key' => 'field_587957f00aed0',
            'label' => 'Lunch',
            'name' => 'lunch',
            'type' => 'wysiwyg',
            'required' => 1,
            'default_value' => '',
            'toolbar' => 'full',
            'media_upload' => 'yes',
        ),
        array (
            'key' => 'field_587958310aed1',
            'label' => 'Dinner',
            'name' => 'dinner',
            'type' => 'wysiwyg',
            'required' => 1,
            'default_value' => '',
            'toolbar' => 'full',
            'media_upload' => 'yes',
        ),
        array (
            'key' => 'field_58795c760f586',
            'label' => 'Direction',
            'name' => '',
            'type' => 'tab',
        ),
        array (
            'key' => 'field_58795c900f587',
            'label' => 'Address',
            'name' => 'address',
            'type' => 'text',
            'default_value' => '',
            'placeholder' => 'Enter Address Here',
            'prepend' => '',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_58795d8550af4',
            'label' => 'Contact Details',
            'name' => '',
            'type' => 'tab',
        ),
        array (
            'key' => 'field_58795da950af5',
            'label' => 'Email',
            'name' => 'email',
            'type' => 'email',
            'required' => 1,
            'default_value' => '',
            'placeholder' => 'Enter contact Email Address here',
            'prepend' => '',
            'append' => '',
        ),
        array (
            'key' => 'field_58795dde50af6',
            'label' => 'Phone Number',
            'name' => 'phone_number',
            'type' => 'text',
            'required' => 1,
            'default_value' => '',
            'placeholder' => 'Enter Reachable Contact Phone Number Here.',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'page',
                'operator' => '==',
                'value' => '15',
                'order_no' => 0,
                'group_no' => 0,
            ),
        ),
    ),
    'options' => array (
        'position' => 'normal',
        'layout' => 'default',
        'hide_on_screen' => array (
        ),
    ),
    'menu_order' => 0,
));
register_field_group(array (
    'id' => 'acf_signature-dishes',
    'title' => 'Signature Dishes',
    'fields' => array (
        array (
            'key' => 'field_5878ff13d8ea4',
            'label' => 'Signature Dishes',
            'name' => 'signature_dishes',
            'type' => 'text',
            'required' => 1,
            'default_value' => '',
            'placeholder' => 'Enter Title Here Please',
            'prepend' => '',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'page',
                'operator' => '==',
                'value' => '15',
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
endif;