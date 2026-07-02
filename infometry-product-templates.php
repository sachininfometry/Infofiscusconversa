<?php
/**
 * Plugin Name: Infometry Product Templates
 * Description: Adds isolated product page templates for Infometry product experiences.
 * Version: 1.0.2
 * Author: Infometry
 * Text Domain: infometry-product-templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'INFOMETRY_PT_VERSION', '1.0.2' );
define( 'INFOMETRY_PT_PATH', plugin_dir_path( __FILE__ ) );
define( 'INFOMETRY_PT_URL', plugin_dir_url( __FILE__ ) );
define( 'INFOMETRY_PT_CONVERSA_TEMPLATE', 'templates/page-infofiscus-conversa.php' );

/**
 * Expose product templates in the WordPress page-template selector.
 *
 * @param array $templates Available page templates.
 * @return array
 */
function infometry_pt_register_page_templates( $templates ) {
	$templates[ INFOMETRY_PT_CONVERSA_TEMPLATE ] = __( 'INFOFISCUS Conversa Product', 'infometry-product-templates' );
	return $templates;
}
add_filter( 'theme_page_templates', 'infometry_pt_register_page_templates' );

/**
 * Resolve the real page ID for normal, preview, revision, and autosave requests.
 *
 * @return int
 */
function infometry_pt_get_current_page_id() {
	$page_id = get_queried_object_id();

	if ( is_preview() && isset( $_GET['preview_id'] ) ) {
		$preview_id = absint( wp_unslash( $_GET['preview_id'] ) );
		if ( $preview_id ) {
			$page_id = $preview_id;
		}
	}

	if ( ! $page_id && isset( $GLOBALS['post']->ID ) ) {
		$page_id = absint( $GLOBALS['post']->ID );
	}

	$revision_parent = $page_id ? wp_is_post_revision( $page_id ) : false;
	if ( $revision_parent ) {
		$page_id = (int) $revision_parent;
	}

	$autosave_parent = $page_id ? wp_is_post_autosave( $page_id ) : false;
	if ( $autosave_parent ) {
		$page_id = (int) $autosave_parent;
	}

	return (int) $page_id;
}

/**
 * Decide whether the current page selected the Conversa template.
 *
 * @return bool
 */
function infometry_pt_should_use_conversa_template() {
	$page_id = infometry_pt_get_current_page_id();

	if ( ! $page_id || 'page' !== get_post_type( $page_id ) ) {
		return false;
	}

	return INFOMETRY_PT_CONVERSA_TEMPLATE === get_page_template_slug( $page_id );
}

/**
 * Load product templates from this plugin without modifying the active theme.
 *
 * @param string $template Resolved template path.
 * @return string
 */
function infometry_pt_load_page_template( $template ) {
	if ( infometry_pt_should_use_conversa_template() ) {
		$plugin_template = INFOMETRY_PT_PATH . INFOMETRY_PT_CONVERSA_TEMPLATE;
		if ( is_readable( $plugin_template ) ) {
			return $plugin_template;
		}
	}

	return $template;
}
add_filter( 'page_template', 'infometry_pt_load_page_template', PHP_INT_MAX );
add_filter( 'template_include', 'infometry_pt_load_page_template', PHP_INT_MAX );

/**
 * Add a page-specific body class for safely scoped styling.
 *
 * @param array $classes Existing body classes.
 * @return array
 */
function infometry_pt_body_classes( $classes ) {
	if ( infometry_pt_should_use_conversa_template() ) {
		$classes[] = 'infometry-conversa-product-page';
	}

	return array_unique( $classes );
}
add_filter( 'body_class', 'infometry_pt_body_classes' );

/**
 * Enqueue isolated assets only when the Conversa product template is active.
 */
function infometry_pt_enqueue_assets() {
	if ( ! infometry_pt_should_use_conversa_template() ) {
		return;
	}

	$css_path    = INFOMETRY_PT_PATH . 'assets/css/infofiscus-conversa.css';
	$js_path     = INFOMETRY_PT_PATH . 'assets/js/infofiscus-conversa.js';
	$css_version = is_readable( $css_path ) ? (string) filemtime( $css_path ) : INFOMETRY_PT_VERSION;
	$js_version  = is_readable( $js_path ) ? (string) filemtime( $js_path ) : INFOMETRY_PT_VERSION;

	wp_enqueue_style(
		'infometry-infofiscus-conversa',
		INFOMETRY_PT_URL . 'assets/css/infofiscus-conversa.css',
		array(),
		$css_version
	);

	wp_enqueue_script(
		'infometry-infofiscus-conversa',
		INFOMETRY_PT_URL . 'assets/js/infofiscus-conversa.js',
		array(),
		$js_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'infometry_pt_enqueue_assets', 20 );
