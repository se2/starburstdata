<?php
/**
 * Template Name: Service
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

<!-- Text block -->
<div class="page-block page-block--text page-block--padding" id="overview-block">
	<div class="container">
		<div class="grid-x grid-centered">
			<div class="cell small-12 large-10">
				<div class="page-block--text__content">
					<h2 class="text-center light secondary-color">Starburst Enterprise Distribution of Presto</h2>
					<p class="text-center">
						The <a href="/#!">195e</a> Starburst Enterprise Distribution of Presto includes everything you need to install and run Presto on a single machine,
						a cluster of machines, or even your laptop. Our releases are <b>FREE</b> to use and are distributed under the Apache license.
					</p>
				</div>
			</div>
			<div class="cell small-12">
				<div class="page-block--text__content">
					<br>
					<div class="grid-x grid-padding-x mb25 show-for-medium">
						<div class="cell small-12 medium-3 text-center">
							<img src="/wp-content/uploads/2018/06/1.png" alt="">
						</div>
						<div class="cell small-12 medium-3 text-center">
							<img src="/wp-content/uploads/2018/06/2.png" alt="">
						</div>
						<div class="cell small-12 medium-3 text-center">
							<img src="/wp-content/uploads/2018/06/3.png" alt="">
						</div>
						<div class="cell small-12 medium-3 text-center">
							<img src="/wp-content/uploads/2018/06/4.png" alt="">
						</div>
					</div>
					<div class="grid-x grid-padding-x mb50">
						<div class="cell small-12 medium-3 text-center">
							<img class="mb30 hide-for-medium" src="/wp-content/uploads/2018/06/1.png" alt="">
							<h6 class="bold">Presto Server Software</h6>
							<p class="small">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et sapien, blandit dolor id, dictum lacus pellentesque
							</p>
						</div>
						<div class="cell small-12 medium-3 text-center">
							<img class="mb30 hide-for-medium" src="/wp-content/uploads/2018/06/2.png" alt="">
							<h6 class="bold">Presto Admin Installation Tool</h6>
							<p class="small">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et sapien, blandit dolor id, dictum lacus pellentesque
							</p>
						</div>
						<div class="cell small-12 medium-3 text-center">
							<img class="mb30 hide-for-medium" src="/wp-content/uploads/2018/06/3.png" alt="">
							<h6 class="bold">Presto Client Tools</h6>
							<p class="small">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et sapien, blandit dolor id, dictum lacus pellentesque
							</p>
						</div>
						<div class="cell small-12 medium-3 text-center">
							<img class="mb30 hide-for-medium" src="/wp-content/uploads/2018/06/4.png" alt="">
							<h6 class="bold">Presto Documentation</h6>
							<p class="small">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et sapien, blandit dolor id, dictum lacus pellentesque
							</p>
						</div>
					</div>
					<div class="text-center">
						<a href="/#!" class="button small">Read about the 195e release</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Text block -->

<?php get_template_part( 'parts/content', 'blocks' ); ?>

<?php get_template_part( 'parts/content', 'footer' ); ?>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
