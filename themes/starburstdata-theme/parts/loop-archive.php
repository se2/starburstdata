<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article class="archive-article-wrapper" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

	<!---------------- Single Article Container ---------------->
	<div class="archive-article-container">

		<!---------------- Date ---------------->
		<?php get_template_part( 'parts/content', 'byline' ); ?>

		<!---------------- Title ---------------->
		<h2 class="blog-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<!---------------- Excerpt ---------------->
		<p class="archive-excerpt"><?php echo get_the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>">Read&nbsp;More&nbsp;&raquo;</a>

	</div>

</article>