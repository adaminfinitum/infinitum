<?php

if ( ! function_exists( 'ai_setup' ) ):
function ai_setup() {

	/****************************************
	Backend
	*****************************************/

	// Clean up the head
	//remove_action('wp_head', 'rsd_link'); //rsd seems to be needed for jetypack to auto post to twitter
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wp_shortlink_wp_head');

	// Register menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'infinitum' ),
	) );

	// Register Widget Areas
	add_action( 'widgets_init', 'ai_widgets_init' );

	// Execute shortcodes in widgets
	// add_filter('widget_text', 'do_shortcode');

	// Add RSS links to head
	add_theme_support( 'automatic-feed-links' );

	// Add Editor Style Commented Out Use '_custom.scss'
	// add_editor_style( 'editor-style.css' );

	// Don't update theme
	add_filter( 'http_request_args', 'ai_dont_update_theme', 5, 2 );

	// Prevent File Modifications
	define ( 'DISALLOW_FILE_EDIT', true );

	// Set Content Width
	if ( ! isset( $content_width ) ) $content_width = 960;

	// Enable Post Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add Image Sizes
	// add_image_size( $name, $width = 0, $height = 0, $crop = false );

	// Enable Custom Headers
	// add_theme_support( 'custom-header' );

	// Enable Custom Backgrounds
	// add_theme_support( 'custom-background' );

	// Remove Dashboard Meta Boxes
	add_action('wp_dashboard_setup', 'ai_remove_dashboard_widgets' );

	// Change Admin Menu Order
	add_filter('custom_menu_order', 'ai_custom_menu_order');
	add_filter('menu_order', 'ai_custom_menu_order');

	// Hide Admin Areas that are not used
	add_action( 'admin_menu', 'ai_remove_menu_pages' );

	// Remove default link for images
	add_action('admin_init', 'ai_imagelink_setup', 10);

	// Show Kitchen Sink in WYSIWYG Editor
	add_filter( 'tiny_mce_before_init', 'ai_unhide_kitchensink' );

	// Define custom post type capabilities for use with Members
	add_action( 'admin_init', 'ai_add_post_type_caps' );


	/****************************************
	Frontend
	*****************************************/

	// Add Post Formats Theme Support
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video') );

	// Enqueue scripts
	add_action( 'wp_enqueue_scripts', 'ai_scripts' );

	// Remove Query Strings From Static Resources
	add_filter('script_loader_src', 'ai_remove_script_version', 15, 1);
	add_filter('style_loader_src', 'ai_remove_script_version', 15, 1);

	// Remove Read More Jump
	add_filter('the_content_more_link', 'ai_remove_more_jump_link');

}
endif; // ai_setup
add_action('after_setup_theme', 'ai_setup');
