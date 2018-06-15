<?php
/**
 * Default single page
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

<div class="bg-cover blog-banner" style="background-image: url('<?php the_field( 'blog_banner_image' ); ?>');"></div>

<div class="grid-container blog-content-container">
	<div class="grid-x grid-padding-x align-center">
		<div class="cell medium-12 small-12">
				<!-- Title -->
				<h1 class="blog-title text-center"><?php the_title(); ?></h1>
				<h4><?php the_field( 'banner_description' ); ?></h4>
				<?php the_content(); ?>
		</div>
	</div>
</div>

<?php get_template_part( 'parts/content', 'blocks' ); ?>

<?php get_template_part( 'parts/content', 'footer' ); ?>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
