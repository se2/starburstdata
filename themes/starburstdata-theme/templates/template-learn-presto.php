<?php
/*
Template Name: Learn Presto
*/

get_header(); ?>

<?php get_template_part( 'parts/content', 'banner' ); ?>

<div class="grid-container main-container">
	<div class="grid-x grid-padding-x">
		<div class="cell">
			<h2><?php the_field('learn_presto_intro_header'); ?></h2>
			<p><?php the_field('learn_presto_intro_content'); ?></p>
		</div>
	</div>
</div>


<?php get_footer(); ?>
