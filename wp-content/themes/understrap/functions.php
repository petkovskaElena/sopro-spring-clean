<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom hooks.
 */
require get_template_directory() . '/inc/hooks.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';


function my_acf_admin_head() {
	?>
	<style type="text/css">
	.acf-fields > .acf-tab-wrap .acf-tab-group li.active a {
		background: #FFFFFF;
		color: #00a0d2;
	}

	.acf-fields > .acf-tab-wrap .acf-tab-group li a, .acf-fields > .acf-tab-wrap .acf-tab-group li a:hover {
		background: #00a0d2;
		color: #fff;
	}

	.acf-postbox h2 {
		text-transform: uppercase;
		background-color: #e2e2e2;
	}
		.acf-field .acf-label label {
			color: #5a5a5a;
			font-size: 14px;
			font-family: 'Niramit', sans-serif;
		}

		a.acf-button.button.button-primary {
			background-color: #4bcaa5;
			border: none;
			box-shadow: none;
			text-shadow: none;
			font-size: 16px;
			border: 1px solid #42a085;
		}
	
		.acf-flexible-content .layout .acf-fc-layout-handle {
			/*background-color: #00B8E4;*/
			background-color: #202428;
			color: #eee;
		}
	
		.acf-repeater.-row > table > tbody > tr > td,
		.acf-repeater.-block > table > tbody > tr > td {
			border-top: 2px solid #E2E2E2;
		}
	
		.acf-repeater .acf-row-handle {
			vertical-align: top !important;
			padding-top: 16px;
		}
	
		.acf-repeater .acf-row-handle span {
			font-size: 20px;
			font-weight: bold;
			color: #202428;
		}
	
		.imageUpload img {
			width: 75px;
		}
	
		.acf-repeater .acf-row-handle .acf-icon.-minus {
			top: 30px;
		}
	
	</style>
	<?php
	}
	
	add_action('acf/input/admin_head', 'my_acf_admin_head');



	// faq post type
	$labels = array(
		"menu_name" => "FAQ",
		'all_items' => 	'Prospecting FAQ',
		"singular_name" => "Prospecting FAQ",
		"add_new" =>  "Add New",
		"add_new_item" => "Add New Prospecting FAQ",
	);
	$args = array(
	  	'labels'	=> $labels,
		'supports'			 =>	array( 'title', 'revisions', 'custom-fields' ),				
		'menu_position'		 =>	10,
		'publicly_queryable' => false,
		'menu_icon'			 => 'dashicons-editor-help',
		'public'			 =>	true
	);
	register_post_type( 'faq', $args );

	// nested post type
	$labels = array(
		"menu_name" => "Compliance/GDPR FAQs",
		'all_items' => 	'Compliance/GDPR FAQs',
		"singular_name" => "Compliance/GDPR FAQ",
		"add_new" =>  "Add New",
		"add_new_item" => "Add New Compliance/GDPR FAQ",
	);
	$args = array(
		  'labels' => $labels,
		  'supports'      =>	array( 'title', 'custom-fields', 'revisions' ),				
		  'show_in_menu'  =>	'edit.php?post_type=faq', // This is where we tell WordPress to add 'Locations' as a submenu
		  'publicly_queryable' => false,
		  'public'		    =>	true
	);
	register_post_type( 'compliance_faq', $args );

	// partners post type
	$labels = array(
		"menu_name" => "Partners",
		'all_items' => 	'General Partners',
		"singular_name" => "General Partner",
		"add_new" =>  "Add New",
		"add_new_item" => "Add New General Partner",
	);
	$args = array(
	  	'labels'	=> $labels,
		'supports'			 =>	array( 'title', 'revisions', 'custom-fields' ),				
		'menu_position'		 =>	10,
		'publicly_queryable' => false,
		'menu_icon'			 => 'dashicons-editor-help',
		'public'			 =>	true
	);
	register_post_type( 'faq', $args );

	// nested post type
	$labels = array(
		"menu_name" => "Compliance/GDPR FAQs",
		'all_items' => 	'Compliance/GDPR FAQs',
		"singular_name" => "Compliance/GDPR FAQ",
		"add_new" =>  "Add New",
		"add_new_item" => "Add New Compliance/GDPR FAQ",
	);
	$args = array(
		  'labels' => $labels,
		  'supports'      =>	array( 'title', 'custom-fields', 'revisions' ),				
		  'show_in_menu'  =>	'edit.php?post_type=faq', // This is where we tell WordPress to add 'Locations' as a submenu
		  'publicly_queryable' => false,
		  'public'		    =>	true
	);
	register_post_type( 'compliance_faq', $args );


	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));
		
	}
	