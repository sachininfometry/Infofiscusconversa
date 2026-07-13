<?php
/**
 * Plugin Name: Infometry Product Templates
 * Description: Adds isolated product page templates for Infometry product experiences.
 * Version: 1.0.44
 * Author: Infometry
 * Text Domain: infometry-product-templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'INFOMETRY_PT_VERSION', '1.0.44' );
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

	return infometry_pt_is_conversa_page_id( $page_id );
}

/**
 * Check a specific page ID for the Conversa template.
 *
 * @param int $page_id Page ID.
 * @return bool
 */
function infometry_pt_is_conversa_page_id( $page_id ) {
	$page_id = absint( $page_id );

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
 * Print critical page-scoped overrides before cached/minified assets load.
 */
function infometry_pt_print_conversa_critical_css() {
	if ( ! infometry_pt_should_use_conversa_template() ) {
		return;
	}
	?>
	<style id="infometry-conversa-critical-css">
		body.infometry-conversa-product-page #Footer,
		body.infometry-conversa-product-page #Footer_wrapper,
		body.infometry-conversa-product-page .mfn-footer,
		body.infometry-conversa-product-page footer#Footer,
		body.infometry-conversa-product-page #mfn-rev-slider,
		body.infometry-conversa-product-page .mfn-rev-slider,
		body.infometry-conversa-product-page rs-module-wrap,
		body.infometry-conversa-product-page .forcefullwidth_wrapper_tp_banner,
		body.infometry-conversa-product-page .rev_slider_wrapper,
		body.infometry-conversa-product-page [id^="rev_slider_"][id$="_wrapper"],
		body.infometry-conversa-product-page [id^="rev_slider_"][id$="_forcefullwidth"] {
			display: none !important;
			height: 0 !important;
			min-height: 0 !important;
			padding: 0 !important;
			margin: 0 !important;
			overflow: hidden !important;
		}
		body.infometry-conversa-product-page .infometry-conversa-product .icp-product-footer {
			display: block !important;
			height: auto !important;
			min-height: 0 !important;
			overflow: hidden;
		}
		body.infometry-conversa-product-page .infometry-conversa-product .icp-shell {
			width: min(100% - 64px, 1400px);
		}
		body.infometry-conversa-product-page .infometry-conversa-product .icp-hero-grid {
			grid-template-columns: minmax(520px, .82fr) minmax(660px, 1.18fr);
			gap: 72px;
			padding-top: 126px;
		}
		body.infometry-conversa-product-page .infometry-conversa-product .icp-hero h1 {
			max-width: 640px;
		}
		@media (max-width: 1280px) {
			body.infometry-conversa-product-page .infometry-conversa-product .icp-hero-grid {
				grid-template-columns: 1fr;
			}
		}
		@media (max-width: 860px) {
			body.infometry-conversa-product-page .infometry-conversa-product .icp-shell {
				width: min(100% - 32px, 1180px);
			}
			body.infometry-conversa-product-page .infometry-conversa-product .icp-hero-grid {
				gap: 34px;
				padding-top: 118px;
			}
		}
	</style>
	<?php
}
add_action( 'wp_head', 'infometry_pt_print_conversa_critical_css', 1 );

/**
 * Enqueue isolated assets only when the Conversa product template is active.
 */
function infometry_pt_enqueue_assets() {
	if ( ! infometry_pt_should_use_conversa_template() ) {
		return;
	}

	$css_path    = INFOMETRY_PT_PATH . 'assets/css/infofiscus-conversa.css';
	$js_path     = INFOMETRY_PT_PATH . 'assets/js/infofiscus-conversa.js';
	$css_version = INFOMETRY_PT_VERSION . ( is_readable( $css_path ) ? '-' . (string) filemtime( $css_path ) : '' );
	$js_version  = INFOMETRY_PT_VERSION . ( is_readable( $js_path ) ? '-' . (string) filemtime( $js_path ) : '' );

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
