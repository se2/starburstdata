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
		<h2 class="blog-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<!-- Excerpt -->
		<p class="archive-excerpt"><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>">Read&nbsp;More&nbsp;&raquo;</a>

	</div>

</article>
