<?php
/*
Template Name: Leadership
*/

get_header(); ?>
			
<?php get_template_part( 'parts/content', 'banner' ); ?>

<div class="grid-container main-container text-center">
	<div class="grid-x grid-padding-x align-center">
		<div class="cell medium-10 small-12">
			<h3><?php the_field('leadership_intro_header'); ?></h3>
			<?php the_field('leadership_intro_content'); ?>
		</div>
	</div>
</div>

<div class="grid-container">
	<div class="grid-x grid-padding-x align-center">
		<div class="cell medium-10 small-12">
				<?php if( have_rows('leaders_repeater') ): ?>
					<?php while( have_rows('leaders_repeater') ): the_row(); 
						$leaders_headshot = get_sub_field('leaders_headshot');
						$leaders_name = get_sub_field('leaders_name');
						$leaders_description = get_sub_field('leaders_description');
						?>
						<div class="grid-x grid-padding-x leader-container">
							<div class="cell medium-3 small-12 leader-headshot">
								<img src="<?php echo $leaders_headshot['url']; ?>" alt="<?php echo $leaders_headshot['alt']; ?>" />
							</div>

							<div class="cell medium-9 small-12">
								<h3 class="leader-name"><?php echo $leaders_name; ?></h3>
								<span class="leader-description"><?php echo $leaders_description; ?></span>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>
