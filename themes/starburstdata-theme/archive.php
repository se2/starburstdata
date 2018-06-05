<?php get_header(); ?>

<!--------- Latest Post (Banner) ------------>
<?php
$paged     = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$term_id   = get_queried_object()->term_id;
$the_query = new WP_Query( array(
	'post_type'      => 'post',
	'cat'            => $term_id,
	'posts_per_page' => 1,
));
?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="interior-banner-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="interior-banner-container cell medium-7 text-center ">
				<p class="archive-latest-header">Latest Post:</p>
				<h2 class="archive-latest-title"><?php the_title(); ?></h2>
				<a class="archive-latest-link" href="<?php the_permalink(); ?>">View Post&nbsp;&raquo;</a>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<!--------- Popular Posts (User-Selectable) ------------>
<div class="grid-container archive-popular-wrapper">
	<div class="grid-x grid-padding-x">
		<div class="cell medium-12 text-center">
			<h3 class="archive-popular-header"><?php the_field('blog_popular_header', 'option'); ?></h3>
		</div>
	</div>

	<?php if ( have_rows( 'blog_popular_repeater', 'option' ) ): ?>
	<div class="grid-x grid-padding-x medium-up-3 small-up-1">
		<?php while( have_rows('blog_popular_repeater', 'option') ): the_row();
			$blog_popular_repeater_post = get_sub_field('blog_popular_repeater_post', 'option');

			if ( $blog_popular_repeater_post ):
				// override $post
				$post = $blog_popular_repeater_post;
				setup_postdata( $post );
				?>

				<div class="cell">
					<div class="grid-x align-middle archive-popular-container">
						<div class="archive-popular-thumbnail">
							<?php the_post_thumbnail( 'thumbnail' ); ?>
						</div>

						<div class="archive-popular-info">
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

<!--------- List of Posts ------------>
<div class="archive-main-container">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell medium-8 small-12">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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