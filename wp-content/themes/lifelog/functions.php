<?php
/**
 * Theme Functions
** ---------------------------- */

/* Load text string used in theme */
require_once( trailingslashit( get_template_directory() ) . 'includes/string.php' );

/* Load base theme functionality. */
require_once( trailingslashit( get_template_directory() ) . 'includes/tamatebako.php' );

/* Load theme general setup */
add_action( 'after_setup_theme', 'lifelog_setup' );

/**
 * General Setup
 * @since 0.1.0
 */
function lifelog_setup(){

	/* === DEBUG === */
	$debug_args = array(
		'mobile'         => 0,
		'no-js'          => 0,
		'media-queries'  => 1,
	);
	//add_theme_support( 'tamatebako-debug', $debug_args );

	/* === Post Formats === */
	$post_formats_args = array(
		'aside',
		'image',
		'gallery',
		'link',
		'quote',
		'status',
		'video',
		'audio',
		'chat'
	);
	add_theme_support( 'post-formats', $post_formats_args );

	/* Remove Infinity */
	remove_filter( 'hybrid_aside_infinity', 'tamatebako_aside_infinity' );

	/* === Theme Layouts === */
	$layouts = array(
		/* One Column */
		'content' => 'Content',
	);
	$layouts_args = array(
		'default'   => 'content',
		'customize' => false,
		'post_meta' => false,
	);
	add_theme_support( 'theme-layouts', $layouts, $layouts_args );

	/* === Register Menus === */
	$menus_args = array(
		"primary" => lifelog_string( 'menu-primary-name' ),
	);
	add_theme_support( 'tamatebako-menus', $menus_args );

	/* Custom Header */
	$header_args = array(
		'width'                  => 160,
		'height'                 => 160,
		'admin-head-callback'    => 'lifelog_custom_header_admin_head_cb',
		'header-text'            => false,
	);
	add_theme_support( 'custom-header', $header_args );

	/* === Load Stylesheet === */
	$style_args = array(
		'theme-open-sans-font',
		'dashicons',
		'theme-reset',
		'theme-menus',
		'parent',
		'style',
		'media-queries'
	);
	add_theme_support( 'hybrid-core-styles', $style_args );

	/* === Editor Style === */
	$editor_css = array(
		'css/reset.min.css',
		'style.css',
		tamatebako_google_open_sans_font_url()
	);
	add_editor_style( $editor_css );

	/* === Customizer Mobile View === */
	add_theme_support( 'tamatebako-customize-mobile-view' );

	/* === Set Content Width === */
	hybrid_set_content_width( 650 );
}


/**
 * Custom Header Admin CB
 * @since 0.1.0
 */
function lifelog_custom_header_admin_head_cb(){
?><style type="text/css" id="lifelog-admin-header-preview-css">
	.appearance_page_custom-header .available-headers label img{
		width: 50px;
		height: 50px;
		border-radius: 50%;
	}
	.appearance_page_custom-header #headimg{
		border-radius: 50%;
	}
</style><?php
}

do_action( 'lifelog_after_setup_theme' );


/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 1. */
function my_plugin_menu() {
	//add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
	add_menu_page( 'My Sample Options', 'My Sample', 'manage_options', 'my-unique-identifier', 'my_plugin_options', 'http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-11/16/sale-icon.png', 0 );
}

/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	// echo '<p>Here is where the form would go if I actually had options.</p>';
	get_template_part('sample', 'content');
	echo '</div>';
}


add_action( 'admin_menu', 'x2');
function x2(){
	add_menu_page('x2', 'x2', 'manage_options', 'x2', 'x2f', '#', 1);

	//add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );
	add_submenu_page( 'x2', 'x2 submenu', 'x2 submenu', 'manage_options', 'x2-submenu', 'x2sub' );
}
function x2f(){
	echo 'hi';	
}

//submenu function
function x2sub(){
	echo 'submenu';
}