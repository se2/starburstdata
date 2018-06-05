<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="bg-cover home-banner-background" style="background-image: url(<?php the_field('home_banner_image'); ?>;">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="home-banner-container cell medium-4">
				<h1 class="home-banner-headline"><?php the_field('home_banner_headline'); ?></h1>
				<h3 class="home-banner-subhead"><?php the_field('home_banner_subhead'); ?></h3>
			</div>
		</div>
	</div>
</div>

<div class="grid-container text-center main-container">
	<?php if( have_rows('home_intro') ): ?>
		<div class="grid-x grid-padding-x medium-up-3 small-up-1">
			<?php while( have_rows('home_intro') ): the_row();
				$home_intro_icon = get_sub_field('home_intro_icon');
				$home_intro_header = get_sub_field('home_intro_header');
				$home_intro_description = get_sub_field('home_intro_description');
				?>
				<div class="cell">
					<img class="home-intro-icon" src="<?php echo $home_intro_icon['url']; ?>" alt="<?php echo $home_intro_icon['alt']; ?>" />
					<h4 class="home-intro-header"><?php echo $home_intro_header; ?></h4>
					<p class="home-intro-description"><?php echo $home_intro_description; ?></p>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>

<div class="cta-container text-center">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				<a class="button reverse" href="<?php the_field('home_cta_link'); ?>" target="_blank"><?php the_field('home_cta_text'); ?></a>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
