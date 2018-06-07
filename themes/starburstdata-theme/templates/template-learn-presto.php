<?php
/**
 * Template Name: Learn Presto
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

<?php get_template_part( 'parts/content', 'blocks' ); ?>

<?php get_template_part( 'parts/content', 'footer' ); ?>

<?php endwhile; ?>

<?php endif; ?>

<?php
get_footer();
