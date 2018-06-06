<?php
/**
 * General page banner
 *
 * @category   Components
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

?>

<div class="interior-banner">
	<div class="grid-container">
		<div class="grid-x align-center interior-banner__wrapper">
			<div class="interior-banner__content cell medium-8 text-center">
				<h1><?php the_field( 'banner_headline' ); ?></h1>
				<h4><?php the_field( 'banner_description' ); ?></h4>
				<?php if ( get_field( 'cta_button_title' ) && get_field( 'cta_button_link' ) ) : ?>
				<a class="button large" href="<?php the_field( 'cta_button_link' ); ?>" target="_blank"><?php the_field( 'cta_button_title' ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
