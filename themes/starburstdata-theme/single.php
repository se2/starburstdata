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

<div class="bg-cover blog-banner" style="background-image: url('<?php
										 if (get_field("blog_banner_image")) {
											 the_field( "blog_banner_image" ); }
										 else {
											 the_field("default_banner_image", "option");
										 } ?>');"></div>

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
					<?php $term = get_the_category(); ?>
					<h3 class="archive-popular-header">Read more <?php echo strtolower($term[0]->name); ?> posts</h3>
				</div>
			</div>

		<div class="grid-x grid-padding-x medium-up-3 small-up-1">
			<?php
			$the_query = new WP_Query( array(
				'post_type'      => 'post',
				'cat'            => $term[0]->term_id,
				'posts_per_page' => 3,
				'post__not_in'	 => array($post->ID),
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
						<?php
						if ( has_post_thumbnail( $post->ID ) ) :
							the_post_thumbnail( 'thumbnail' );
						else :
						?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.png" alt="">
						<?php endif; ?>
					</div>

					<div class="archive-popular-info cell small-9 medium-8">
						<?php if (get_field('blog_url')) { ?>
							<h4 class="archive-popular-title"><a href="<?php the_field('blog_url'); ?>"><?php the_title(); ?></a></h4>
						<?php } else { ?>
							<h4 class="archive-popular-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<?php } ?>

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
