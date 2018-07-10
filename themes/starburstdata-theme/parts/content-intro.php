<?php
/**
 * Page Intro Section
 *
 * @category   Template
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

?>

<?php if ( get_field( 'page_intro_header' ) || get_field( 'page_intro_content' ) ) : ?>
<div class="grid-container main-container text-center">
	<div class="grid-x grid-padding-x align-center">
		<div class="cell medium-10 small-12">
			<h3><?php the_field( 'page_intro_header' ); ?></h3>
			<?php the_field( 'page_intro_content' ); ?>
		</div>
	</div>
</div>
<?php endif; ?>
