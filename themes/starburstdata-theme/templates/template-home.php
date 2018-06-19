<?php
/**
 * Template Name: Home
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

<div class="bg-contain bg-center-right home-banner pos-rel" style="background-image:url('<?php the_field( 'home_banner_image' ); ?>');">
	<div class="grid-container">
		<div class="grid-x">
			<div class="home-banner-container cell small-12 medium-6">
				<h1 class="home-banner-headline"><?php the_field( 'home_banner_headline' ); ?></h1>
				<h6 class="secondary-color"><?php the_field( 'home_banner_subhead' ); ?></h6>
			</div>
		</div>
	</div>
	<img src="<?php the_field( 'home_banner_image' ); ?>" alt="<?php the_title(); ?>" class="mt30 hide-for-medium">
</div>

<div class="grid-container text-center main-container">
	<?php if ( have_rows( 'home_intro' ) ) : ?>
	<div class="grid-x grid-padding-x medium-up-3 small-up-1">
		<?php
		while ( have_rows( 'home_intro' ) ) :
			the_row();
			$home_intro_icon        = get_sub_field( 'home_intro_icon' );
			$home_intro_header      = get_sub_field( 'home_intro_header' );
			$home_intro_description = get_sub_field( 'home_intro_description' );
		?>
		<div class="cell">
			<img class="home-intro-icon" src="<?php echo esc_attr( $home_intro_icon['url'] ); ?>" alt="<?php echo esc_attr( $home_intro_icon['alt'] ); ?>" />
			<h4 class="home-intro-header"><?php the_sub_field( 'home_intro_header' ); ?></h4>
			<p class="home-intro-description"><?php the_sub_field( 'home_intro_description' ); ?></p>
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
</div>

<div class="cta-container text-center">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				<a class="button reverse" href="<?php the_field( 'home_cta_link' ); ?>" target="_blank"><?php the_field( 'home_cta_text' ); ?></a>
			</div>
		</div>
	</div>
</div>

<?php
	endwhile;
endif;
?>

<?php get_footer(); ?>
