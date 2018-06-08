<?php
/**
 * The template for displaying the header.
 * Contains closing divs for header.php.
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @category   Template
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

?>

<!doctype html>

	<html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); // phpcs:ignore ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); // phpcs:ignore ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<?php } ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<!-- Load off-canvas container. Feel free to remove if not using. -->
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>

				<?php if ( get_field( 'show_announcement', 'option' ) ) : ?>
				<div class="site-announcement">
					<div class="container text-center">
						<p class="light white-color">
							<?php the_field( 'announcement', 'option' ); ?>
							<a class="bold" href="<?php the_field( 'announcement_cta_link' ); ?>"><?php the_field( 'announcement_cta_title', 'option' ); ?></a>
						</p>
					</div>
				</div>
				<?php endif; ?>

				<header class="header site-header" role="banner">

					<div class="container">
						<!-- This navs will be applied to the topbar, above all content
							To see additional nav styles, visit the /parts directory -->
						<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

						<?php get_template_part( 'parts/nav', 'popup' ); ?>

					</div>

				</header> <!-- end .header -->
