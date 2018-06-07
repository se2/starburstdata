<?php
/**
 * Template Name: Leadership
 *
 * @category   Template
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
?>

<?php get_template_part( 'parts/content', 'banner' ); ?>

<div class="grid-container main-container text-center">
	<div class="grid-x grid-padding-x align-center">
		<div class="cell medium-10 small-12">
			<h3><?php the_field( 'leadership_intro_header' ); ?></h3>
			<?php the_field( 'leadership_intro_content' ); ?>
		</div>
	</div>
</div>

<div class="grid-container">
	<div class="grid-x grid-padding-x align-center">
		<div class="cell medium-10 small-12">
				<?php
				if ( have_rows( 'leaders_repeater' ) ) :
					while ( have_rows( 'leaders_repeater' ) ) :
						the_row();
						$leaders_headshot    = get_sub_field( 'leaders_headshot' );
						$leaders_name        = get_sub_field( 'leaders_name' );
						$leaders_description = get_sub_field( 'leaders_description' );
				?>
					<div class="grid-x grid-padding-x leader-container">
						<div class="cell medium-3 small-12 leader-headshot">
							<img src="<?php echo esc_attr( $leaders_headshot['url'] ); ?>" alt="<?php echo esc_attr( $leaders_headshot['alt'] ); ?>" />
						</div>

						<div class="cell medium-9 small-12">
							<h3 class="leader-name"><?php the_sub_field( 'leaders_name' ); ?></h3>
							<span class="leader-description"><?php the_sub_field( 'leaders_description' ); ?></span>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php
	endwhile;
endif;
?>

<?php get_footer(); ?>
