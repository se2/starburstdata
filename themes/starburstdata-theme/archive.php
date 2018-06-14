<?php
/**
 * Default archive page
 *
 * @category   Template
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

get_header(); ?>

<!-- Latest post -->
<?php
$paged              = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$term_id          = get_queried_object()->term_id;
$term             = get_term( $term_id, 'category' );
$term_children    = get_term_children( $term_id, 'category' );
$shown_categories = get_field( 'show_popular_posts_on', 'option' ) ? get_field( 'show_popular_posts_on', 'option' ) : array();
$the_query        = new WP_Query( array(
	'post_type'      => 'post',
	'cat'            => $term_id,
	'posts_per_page' => 1,
));
?>

<?php
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
?>
<!-- Interior banner -->
<div class="interior-banner">
	<div class="grid-container">
		<div class="grid-x align-center interior-banner__wrapper">
			<div class="interior-banner__content cell large-8 text-center">
				<p class="archive-latest-header mb0 lh1">Latest Blog Post:</p>
				<h1><?php the_title(); ?></h1>
				<a class="archive-latest-link" href="<?php the_permalink(); ?>">View Post&nbsp;&raquo;</a>
			</div>
		</div>
	</div>
</div>
<!-- /Interior banner -->
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<!-- Popular Posts (User-Selectable) -->
<?php if ( in_array( $term_id, $shown_categories ) ) : ?>
<div class="grid-container archive-popular-wrapper">
	<div class="grid-x grid-padding-x">
		<div class="cell medium-12 text-center">
			<h3 class="archive-popular-header"><?php the_field( 'blog_popular_header', 'option' ); ?></h3>
		</div>
	</div>

	<?php if ( have_rows( 'blog_popular_repeater', 'option' ) ) : ?>
	<div class="grid-x grid-padding-x medium-up-3 small-up-1">
		<?php
		while ( have_rows( 'blog_popular_repeater', 'option' ) ) :
			the_row();
			$blog_popular_repeater_post = get_sub_field( 'blog_popular_repeater_post', 'option' );
			if ( $blog_popular_repeater_post ) :
				// override $post.
				$post = $blog_popular_repeater_post;
				setup_postdata( $post );
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
							<h4 class="archive-popular-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<span class="archive-popular-date"><?php get_template_part( 'parts/content', 'byline' ); ?></span>
						</div>
					</div>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
</div>
<?php else : ?>
<div class="grid-container archive-popular-wrapper" style="padding:1.25em 0;"></div>
<?php endif; ?>

<!-- List of Posts -->
<div class="archive-main-container">
	<div class="grid-container">
		<div class="grid-x align-center">
			<div class="cell medium-8 small-12">

				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
				?>

				<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; ?>

				<?php joints_page_navi(); ?>

				<?php else : ?>

				<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
