<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>
	<?php
		wp_nav_menu(array(
			'container'      => false,
			'menu_class'     => 'menu-vertical menu',
			'theme_location' => 'main-nav',
			'depth'          => 5,
			'fallback_cb'    => false,
			'walker'         => new Topbar_Menu_Walker(),
		));
	?>
</div>
