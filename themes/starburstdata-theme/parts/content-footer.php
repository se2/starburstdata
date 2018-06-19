<?php
/**
 * General page footer
 *
 * @category   Components
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

?>

<?php if ( get_field( 'show_footer_cta' ) ) : ?>
<!-- Page footer CTA block -->
<div class="page-block page-block--cta" style="background-color:<?php the_field( 'footer_cta_background' ); ?>;">
	<div class="container">
		<div class="grid-x grid-centered">
			<div class="cell small-12 large-6 text-center">
				<h1 class="white-color lh1 mb10"><?php the_field( 'footer_cta_title' ); ?></h1>
				<h5 style="color:#90dce2;" class="mb20"><?php the_field( 'footer_cta_subtitle' ); ?></h5>
				<?php if ( get_field( 'cta_button_form' ) ) : ?>
				<a class="button fill" href="#!" data-open="try-presto" aria-controls="try-presto" aria-haspopup="true" tabindex="0"><?php the_field( 'footer_cta_button_title' ); ?></a>
				<?php else : ?>
				<a href="<?php the_field( 'footer_cta_button_link' ) ?>" class="button fill"><?php the_field( 'footer_cta_button_title' ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!-- /Page footer CTA block -->
<?php endif; ?>