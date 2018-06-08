<?php
/**
 * Theme Functions
 *
 * @category   Function
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

// Theme support options.
require_once get_template_directory() . '/functions/theme-support.php';

// WP Head and other cleanup functions.
require_once get_template_directory() . '/functions/cleanup.php';

// Register scripts and stylesheets.
require_once get_template_directory() . '/functions/enqueue-scripts.php';

// Register custom menus and menu walkers.
require_once get_template_directory() . '/functions/menu.php';

// Register sidebars/widget areas.
require_once get_template_directory() . '/functions/sidebar.php';

// Makes WordPress comments suck less.
require_once get_template_directory() . '/functions/comments.php';

// Replace 'older/newer' post links with numbered navigation.
require_once get_template_directory() . '/functions/page-navi.php';

// Adds support for multiple languages.
require_once get_template_directory() . '/functions/translation/translation.php';

// Options Page.
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(array(
		'page_title' => 'Theme Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug'  => 'theme-settings',
	));
	acf_add_options_page(array(
		'page_title'  => 'General',
		'menu_title'  => 'General',
		'parent_slug' => 'theme-settings',
	));
	acf_add_options_page(array(
		'page_title'  => 'Blog (Archive)',
		'menu_title'  => 'Blog (Archive)',
		'parent_slug' => 'theme-settings',
	));
	acf_add_options_page(array(
		'page_title'  => 'Blog (Single)',
		'menu_title'  => 'Blog (Single)',
		'parent_slug' => 'theme-settings',
	));
}

/**
 * Custom Color Palette
 *
 * @param mixed $init Init.
 */
function my_mce4_options( $init ) {

	$custom_colours = '
		"00a7b5", "Starburst Teal",
		"253746", "Starburst Dark Blue",
		"75787b", "Starburst Gray",
		"a45248", "Starburst Red",
		"ffffff", "White",
		"000000", "Black"
	';

	// build colour grid default+custom colors.
	$init['textcolor_map'] = '[' . $custom_colours . ']';

	// change the number of rows in the grid if the number of colors changes.
	// 8 swatches per row.
	$init['textcolor_rows'] = 1;

	return $init;
}

add_filter( 'tiny_mce_before_init', 'my_mce4_options' );

for ( $i = 1; $i <= 4 ; $i++ ) {
	register_sidebar(
		array(
			'id' 						=> 'footer-widget-' . $i,
			'name'          => __( 'Footer column ' . $i, 'leasepilot' ),
			'description'   => __( 'Drag widgets to this footer container', 'leasepilot' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'before_title' 	=> '<h3 class="footer-title">',
			'after_title' 	=> '</h3>',
		)
	);
}
