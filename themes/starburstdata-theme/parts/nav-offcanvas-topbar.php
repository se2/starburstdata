<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 *
 * @category   Components
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li>
				<a href="<?php echo esc_attr( home_url() ); ?>">
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
	<div class="top-bar-right float-right hide-for-medium">
		<ul class="menu">
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); // phpcs:ignore ?></a></li>
		</ul>
	</div>
</div>
