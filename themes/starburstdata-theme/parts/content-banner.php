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

<!-- Interior banner -->
<div class="interior-banner">
	<div class="grid-container">
		<div class="grid-x align-center interior-banner__wrapper">
			<div class="interior-banner__content cell large-8 text-center">
				<h1><?php the_field( 'banner_headline' ); ?></h1>
				<h4><?php the_field( 'banner_description' ); ?></h4>
				<?php if ( get_field( 'cta_button_title' ) && get_field( 'cta_button_link' ) ) : ?>
				<a class="button large" href="<?php the_field( 'cta_button_link' ); ?>" target="_blank"><?php the_field( 'cta_button_title' ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!-- /Interior banner -->

<?php
if ( get_field( 'show_scrolling_menu' ) ) :
	if ( have_rows( 'page_blocks' ) ) :
?>
<!-- Inner page scrolling menu -->
<div class="page-block page-block--inner-scroll" style="background-color:#253746;">
	<div class="container">
		<div id="page-scroll">
			<?php
			$index = 0;
			while ( have_rows( 'page_blocks' ) ) :
				the_row();
				$block_id = get_sub_field( 'block_id' ) ? get_sub_field( 'block_id' ) : sanitize_title( get_sub_field( 'block_scrolling_menu_name' ) );
				if ( get_sub_field( 'block_scrolling_menu_name' ) ) :
			?>
			<a href="#<?php echo esc_attr( $block_id ); ?>" class="<?php echo ( 0 === $index ) ? 'is-active' : ''; ?>"><?php the_sub_field( 'block_scrolling_menu_name' ); ?></a>
			<?php endif; ?>
			<?php $index++; endwhile; ?>
		</div>
	</div>
</div>
<!-- Dummy div with same height to account for absolute position -->
<div class="mb50"></div>
<!-- /Inner page scrolling menu -->
<?php
	endif;
endif;
?>
