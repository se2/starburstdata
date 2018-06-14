<?php
/**
 * The template part for displaying an author byline
 */
?>

<?php
$news_cat       = 25;
$press_releases = 30;
$cat_name       = '';
foreach( ( get_the_category() ) as $childcat ) {
	// if ( cat_is_ancestor_of( $news_cat, $childcat ) ) {
	if ( $childcat->cat_ID === $press_releases ) {
		$cat_name = 'Press Release';
	}
}
?>

<p class="byline">
	<?php the_time('F j, Y'); ?>
	<?php if ( ! empty( $cat_name ) ) echo esc_html( ' — ' . $cat_name ); ?>
</p>
