<?php
	/**
	 * Page Blocks
	 *
	 * @category   Components
	 * @package    FoundationPress
	 * @subpackage StarburstData
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

if ( have_rows( 'page_blocks' ) ) :
	while ( have_rows( 'page_blocks' ) ) :
		the_row();
		$block_id = get_sub_field( 'block_id' ) ? get_sub_field( 'block_id' ) : sanitize_title( get_sub_field( 'block_scrolling_menu_name' ) );
		switch ( get_row_layout() ) {
			case 'text_block':
				$icons = get_sub_field( 'icon_columns' );
?>
<!-- Editor Block -->
<div class="page-block page-block--text page-block--padding <?php echo ( get_sub_field( 'fullwidth' ) ) ? 'page-block--fullwidth' : ''; ?>" style="background-color:<?php the_sub_field( 'background_color' ); ?>;" id="<?php echo esc_attr( $block_id ); ?>">
	<div class="container">
		<div class="grid-x grid-centered">
			<div class="cell small-12 large-<?php the_sub_field( 'block_grid_width' ); ?>">
				<div class="page-block--text__content entry-content">
					<h2 class="text-center light secondary-color"><?php the_sub_field( 'block_title' ); ?></h2>
					<p class="text-center mb25"><?php the_sub_field( 'block_subtitle' ); ?></p>
					<?php the_sub_field( 'block_content' ); ?>
				</div>
			</div>
			<?php if ( $icons ) : ?>
			<div class="cell small-12">
				<div class="page-block--text__content">
					<br>
					<div class="grid-x grid-padding-x mb25 show-for-medium">
						<?php foreach ( $icons as $key => $icon ) : ?>
						<div class="cell small-12 medium-3 text-center">
							<img src="<?php echo esc_attr( $icon['icon'] ); ?>" alt="">
						</div>
						<?php endforeach; ?>
					</div>
					<div class="grid-x grid-padding-x mb50">
						<?php foreach ( $icons as $key => $icon ) : ?>
						<div class="cell small-12 medium-3 text-center">
							<img class="hide-for-medium" src="<?php echo esc_attr( $icon['icon'] ); ?>" alt="">
							<h6 class="bold"><?php echo esc_html( $icon['icon_title'] ); ?></h6>
							<p class="small"><?php echo $icon['icon_description']; // phpcs:ignore ?></p>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if ( get_sub_field( 'block_cta_button_title' ) && get_sub_field( 'block_cta_link' ) ) : ?>
			<div class="text-center">
				<a href="<?php the_sub_field( 'block_cta_link' ); ?>" class="button small"><?php the_sub_field( 'block_cta_button_title' ); ?></a>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- /Editor Block -->
<?php
				break;
			case 'overlap_image_block':
				$overlap_height = get_sub_field( 'overlap_height' ) ? get_sub_field( 'overlap_height' ) . 'px' : '0px';
?>
<!-- Text image overlap block -->
<div class="page-block page-block--overlap-img <?php echo ( 'image_content' === get_sub_field( 'block_layout' ) ) ? 'page-block--overlap-img--left' : ''; ?> pos-rel" id="<?php echo esc_attr( $block_id ); ?>">
	<div class="inner" style="background-color:<?php the_sub_field( 'block_background' ); ?>;">
		<div class="container">
			<div class="grid-x grid-padding-x <?php echo ( 'image_content' === get_sub_field( 'block_layout' ) ) ? 'grid-right' : ''; ?>">
				<div class="cell large-6 text-col" style="background-color:<?php the_sub_field( 'block_background' ); ?>;">
					<h2 class="secondary-color light"><?php the_sub_field( 'block_title' ); ?></h2>
					<?php the_sub_field( 'block_content' ); ?>
				</div>
				<img class="overlap-img" src="<?php the_sub_field( 'overlap_image' ); ?>" alt="" style="height:calc(100% + <?php echo esc_attr( $overlap_height ); ?>);">
			</div>
		</div>
	</div>
</div>
<!-- /Text image overlap block -->
<?php
				break;
			case 'comparison_table_block':
				$features = get_sub_field( 'features' );
?>
<!-- Table block -->
<div class="page-block page-block--padding page-block--comapre-table" style="background-color:<?php the_sub_field( 'block_background' ); ?>;" id="<?php echo esc_attr( $block_id ); ?>">
	<div class="container">
		<div class="grid-x grid-margin-x grid-centered">
			<div class="cell small-12 large-10">
				<h1 class="fz-52 primary-color text-center light mb40"><?php the_sub_field( 'block_title' ); ?></h1>
				<table width="100%" class="compare-table">
					<thead>
						<tr>
							<td class="compare-table__column compare-table__content">
								<strong><?php the_sub_field( 'block_subtitle' ); ?></strong>
							</td>
							<td class="compare-table__column compare-table__presto">
								<img src="<?php the_sub_field( 'column_1_logo' ); ?>" alt="Presto">
							</td>
							<td class="compare-table__column compare-table__starburst">
								<img src="<?php the_sub_field( 'column_2_logo' ); ?>" alt="StarburstData">
							</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ( $features as $key => $feature ) : ?>
						<tr>
							<td class="compare-table__column pos-rel compare-table__content">
								<?php echo $feature['feature']; // phpcs:ignore ?>
							</td>
							<td class="compare-table__column pos-rel compare-table__presto">
								<?php if ( $feature['column_1'] ) : ?>
								<img class="check abs-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/check.png" alt="Presto">
								<?php endif; ?>
							</td>
							<td class="compare-table__column pos-rel compare-table__starburst">
								<?php if ( $feature['column_2'] ) : ?>
								<img class="check abs-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/check.png" alt="StarburstData">
								<?php endif; ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /Table block -->
<?php
				break;
			case '2_column_content_block':
				$rows = get_sub_field( 'content_rows' );
?>
<!-- Text image in columns block -->
<div class="page-block page-block--text-img pos-rel" style="background-color:<?php the_sub_field( 'block_background' ); ?>;" id="<?php echo esc_attr( $block_id ); ?>">
	<div class="container">
		<?php foreach ( $rows as $key => $row ) : ?>
		<!-- Text-image row -->
		<div class="grid-x grid-margin-x page-block--text-img__row entry-content grid-centered <?php echo esc_attr( $row['vertical_align'] ); ?>">
			<div class="cell small-12 medium-<?php echo esc_attr( $row['column_1_grid_width'] ); ?> <?php echo ( $row['reverse_stack_on_mobile'] ) ? 'stack-down' : ''; ?>">
				<?php echo $row['column_1_content']; // phpcs:ignore ?>
			</div>
			<div class="cell small-12 medium-<?php echo esc_attr( $row['column_2_grid_width'] ); ?> <?php echo ( $row['reverse_stack_on_mobile'] ) ? 'stack-up' : ''; ?>">
				<?php echo $row['column_2_content']; // phpcs:ignore ?>
			</div>
		</div>
		<!-- /Text-image row -->
		<?php endforeach; ?>
	</div>
</div>
<!-- /Text image in columns block -->
<?php
				break;
			default:
				break;
		}
	endwhile;
endif;
