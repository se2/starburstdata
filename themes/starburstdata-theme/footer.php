<?php
/**
 * The template for displaying the footer.
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

				<footer class="footer" role="contentinfo">

					<div class="container">

						<div class="inner-footer">

							<div class="grid-x grid-margin-x mb20">

								<div class="cell small-12 medium-8 large-9">
									<h2 class="primary-color light">We are the Presto Experts.</h2>
								</div>

								<div class="cell small-12 medium-4 large-3 text-right">
									<a class="light-gray fz-18" href="mailto:hello@starburstdata.com">hello@starburstdata.com</a>
								</div>

							</div>

							<div class="grid-x grid-margin-x">

								<div class="cell small-12 medium-8 large-9">
									<div class="grid-x small-up-1 medium-up-5">
										<?php for ($i = 1; $i <= 4 ; $i++): ?>
										<div id="footer-widget-<?php echo $i; ?>" class="footer-menu cell">
												<?php if ( is_active_sidebar( 'footer-widget-' . $i ) ) { dynamic_sidebar( 'footer-widget-' . $i ); } ?>
										</div>
										<?php endfor; ?>
									</div>
								</div>
								<div class="cell small-12 medium-4 large-3 text-right">
									<?php
									$socials = array(
										array( 'service' => 'github', 'link' => 'https://github.com/starburstdata'),
										array( 'service' => 'twitter', 'link' => 'https://twitter.com/starburstdata'),
										array( 'service' => 'facebook', 'link' => 'https://www.facebook.com/starburstdata/'),
										array( 'service' => 'linkedin', 'link' => 'https://www.linkedin.com/company/starburstdata/'),
									);
									foreach ( $socials as $key => $social ) :
									?>
									<a target="_blank" class="light-gray social-link size-21" href="<?php echo esc_attr( $social['link'] ) ?>"><i class="fi-social-<?php echo esc_html( $social['service'] ); ?>"></i></a>
									<?php endforeach; ?>
								</div>

							</div>

						</div>

					</div>

				</footer>

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
