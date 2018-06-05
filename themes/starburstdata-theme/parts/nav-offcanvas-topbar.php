<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li>
				<a href="<?php echo home_url(); ?>">
					<?php if ( get_field( 'logo', 'option' ) ) : ?>
					<img class="site-logo" src="<?php the_field( 'logo', 'option' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php else : ?>
					<?php bloginfo( 'name' ); ?>
					<?php endif; ?>
				</a>
			</li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>