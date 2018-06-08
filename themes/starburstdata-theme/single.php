<?php
/**
 * Default single post
 *
 * @category   Template
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

get_header();
?>

<div class="bg-cover blog-banner" style="background-image: url('<?php the_field( 'blog_banner_image' ); ?>');"></div>

<div class="grid-container blog-content-container">
	<div class="grid-x grid-padding-x align-center">
		<div class="cell medium-10 small-12">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
				?>

				<!-- Date -->
				<?php get_template_part( 'parts/content', 'byline' ); ?>

				<!-- Title -->
				<h1 class="blog-title"><?php the_title(); ?></h1>

				<?php the_content(); ?>

				<?php comments_template(); ?>

				<?php
					endwhile;
				endif;
				?>
		</div>
	</div>
</div>

<!-- Recent posts -->
<div class="recent-posts-container">
	<div class="grid-container recent-posts-container">
			<div class="grid-x grid-padding-x text-center">
				<div class="cell medium-12">
					<h3 class="archive-popular-header"><?php the_field( 'recent_posts_header', 'option' ); ?></h3>
				</div>
			</div>

		<div class="grid-x grid-padding-x medium-up-3 small-up-1">
			<?php
			$the_query = new WP_Query( array(
				'post_type'      => 'post',
				'posts_per_page' => 3,
			));
			?>

			<?php
			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
			?>
			<div class="cell">
				<div class="grid-x align-middle archive-popular-container">
					<div class="archive-popular-thumbnail cell small-3 medium-4">
						<?php the_post_thumbnail( 'thumbnail' ); ?>
					</div>

					<div class="archive-popular-info cell small-9 medium-8">
						<h4 class="archive-popular-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<span class="archive-popular-date"><?php get_template_part( 'parts/content', 'byline' ); ?></span>
					</div>
				</div>
			</div>

			<?php
				endwhile;
			endif;
			?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
