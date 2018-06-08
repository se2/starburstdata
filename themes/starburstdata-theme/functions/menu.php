<?php
/**
 * Menu functions
 *
 * @category   Functions
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

// Register menus.
register_nav_menus(
	array(
		'main-nav'     => __( 'The Main Menu', 'jointswp' ),
		'footer-links' => __( 'Footer Links', 'jointswp' ),
	)
);

/**
 * The Top Menu.
 */
function joints_top_nav() {
	wp_nav_menu(array(
		'container'      => false,
		'menu_class'     => 'medium-horizontal menu',
		'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location' => 'main-nav',
		'depth'          => 5,
		'fallback_cb'    => false,
		'walker'         => new Topbar_Menu_Walker(),
	));
}

/**
 * Add a popup trigger for main nav
*/
function add_popup_trigger( $items, $args ) {
	if ( 'main-nav' === $args->theme_location ) {
		$items .= '<li class="button tiny menu-button"><a href="#" data-open="try-presto">Try Presto</a></li>';
	}
	if ( 'footer-links' === $args->theme_location ) {
		$items = '<li class="menu-item menu-item--popup"><a class="bold primary-color no-outline" href="#" data-open="try-presto">Try Presto</a></li>' . $items;
	}
	return $items;
}

add_filter( 'wp_nav_menu_items', 'add_popup_trigger', 10, 2 );

/**
 * Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker.
 */
class Topbar_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = Array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"menu\">\n";
	}
}

/**
 * The Off Canvas Menu.
 */
function joints_off_canvas_nav() {
	wp_nav_menu(array(
		'container'      => false,
		'menu_class'     => 'vertical menu accordion-menu',
		'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
		'theme_location' => 'main-nav',
		'depth'          => 5,
		'fallback_cb'    => false,
		'walker'         => new Off_Canvas_Menu_Walker(),
	));
}

/**
 * Class Off_Canvas_Menu_Walker.
 */
class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = Array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}

/**
 * The Footer Menu.
 */
function joints_footer_links() {
	wp_nav_menu(array(
		'container'      => 'false',
		'menu_class'     => 'menu',
		'theme_location' => 'footer-links',
		'depth'          => 0,
		'fallback_cb'    => '',
	));
} /* End Footer Menu */

/**
 * Header Fallback Menu.
 */
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home'   => true,
		'menu_class'  => '',
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
		'link_before' => '',
		'link_after'  => '',
	));
}

/**
 * Footer Fallback Menu.
 */
function joints_footer_links_fallback() {
	/* You can put a default here if you like */
}

/**
 * Add Foundation active class to menu.
 */
function required_active_nav_class( $classes, $item ) {
	if ( 1 === $item->current || true === $item->current_item_ancestor ) {
			$classes[] = 'active';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );
