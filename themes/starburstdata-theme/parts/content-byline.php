<?php
/**
 * The template part for displaying an author byline
 */
?>

<?php
$press_release  = 'Press Release';
$press_releases = get_field( 'press_releases_category', 'option' ) ? get_field( 'press_releases_category', 'option' ) : 33;
$cat_name       = '';
foreach( ( get_the_category() ) as $childcat ) {
	if ( $childcat->cat_ID === $press_releases ) {
		$cat_name = $press_release;
	}
}
?>

<p class="byline">
	<?php the_time('F j, Y'); ?>
	<?php if ( ! empty( $cat_name ) ) echo esc_html( ' — ' . $cat_name ); ?>
</p>
