<?php
/**
 * Template part for displaying posts.
 * Used for single, index, archive, search.
 *
 * @category   Loop
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

?>

<article class="archive-article-wrapper" id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article">

	<!-- Single Article Container -->
	<div class="archive-article-container">

		<!-- Date -->
		<?php get_template_part( 'parts/content', 'byline' ); ?>

		<!-- Title -->
		<?php if (get_field('blog_url')) { ?>
			<h2 class="blog-title"><a href="<?php the_field('blog_url'); ?>" target="_blank" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php } else { ?>
			<h2 class="blog-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php } ?>

		<!-- Excerpt -->
		<p class="archive-excerpt"><?php the_excerpt(); ?></p>

		<?php if ( get_field( 'blog_url' ) ) { ?>
			<a href="<?php the_field( 'blog_url' ); ?>" target="_blank">Read&nbsp;More&nbsp;&raquo;</a>
		<?php } else { ?>
			<a href="<?php the_permalink(); ?>">Read&nbsp;More&nbsp;&raquo;</a>
		<?php } ?>

	</div>

</article>
