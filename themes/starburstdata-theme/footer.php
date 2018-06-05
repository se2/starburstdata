<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

				<footer class="footer" role="contentinfo">

					<div class="container">

						<div class="inner-footer">

							<div class="grid-x grid-margin-x">

								<div class="cell small-12 medium-9">
									<h2 class="primary-color light">We are the Presto Experts.</h2>
									<nav role="navigation">
										<?php joints_footer_links(); ?>
									</nav>
									<!-- <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p> -->
								</div>

								<div class="cell small-12 medium-3 text-right">
									<a class="light-gray fz-18" href="mailto:hello@starburstdata.com">hello@starburstdata.com</a>
								</div>

							</div>

							<div class="grid-x grid-margin-x">

								<div class="cell small-12 medium-9"></div>
								<div class="cell small-12 medium-3 text-right">
									<?php
									$socials = array( 'github', 'twitter', 'facebook', 'linkedin' );
									foreach ($socials as $key => $social) :
									?>
									<a class="light-gray social-link size-21" href="/#!"><i class="fi-social-<?php echo esc_attr( $social ); ?>"></i></a>
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