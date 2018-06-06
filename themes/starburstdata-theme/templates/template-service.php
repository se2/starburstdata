<?php
/**
 * Template Name: Service
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
	while (have_posts()) :
		the_post();
?>

<?php get_template_part( 'parts/content', 'banner' ); ?>

<!-- Inner page scrolling menu -->
<div class="page-block page-block--inner-scroll" style="background-color:#253746;">
	<div class="container">
		<div id="page-scroll">
			<a href="#overview-block" class="is-active">Overview</a>
			<a href="#why-starburst-block">Why Starburst?</a>
			<a href="#on-premises-block">On Premises</a>
			<a href="#aws-block">AWS</a>
			<a href="#azure-block">Azure</a>
		</div>
	</div>
</div>
<div class="mb50"></div>
<!-- /Inner page scrolling menu -->

<!-- Text block -->
<div class="page-block page-block--text page-block--padding" id="overview-block">
	<div class="container">
		<div class="grid-x grid-centered">
			<div class="cell small-12 large-10">
				<div class="page-block--text__content">
					<h2 class="text-center light secondary-color">Starburst Enterprise Distribution of Presto</h2>
					<p class="text-center">
						The <a href="/#!">195e</a> Starburst Enterprise Distribution of Presto includes everything you need to install and run Presto on a single machine,
						a cluster of machines, or even your laptop. Our releases are <b>FREE</b> to use and are distributed under the Apache license.
					</p>
				</div>
			</div>
			<div class="cell small-12">
				<div class="page-block--text__content">
					<br>
					<table width="100%" class="nostyle-table mb25">
						<tr>
							<td style="width:25%;" class="text-center">
								<img src="/wp-content/uploads/2018/06/1.png" alt="">
							</td>
							<td style="width:25%;" class="text-center">
								<img src="/wp-content/uploads/2018/06/2.png" alt="">
							</td>
							<td style="width:25%;" class="text-center">
								<img src="/wp-content/uploads/2018/06/3.png" alt="">
							</td>
							<td style="width:25%;" class="text-center">
								<img src="/wp-content/uploads/2018/06/4.png" alt="">
							</td>
						</tr>
					</table>
					<table width="100%" class="nostyle-table mb50">
						<tr>
							<td style="padding:0 10px;width:25%;" class="text-center">
								<h6 class="bold">Presto Server Software</h6>
								<p class="small">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et sapien, blandit dolor id, dictum lacus pellentesque
								</p>
							</td>
							<td style="padding:0 10px;width:25%;" class="text-center">
								<h6 class="bold">Presto Admin Installation Tool</h6>
								<p class="small">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et sapien, blandit dolor id, dictum lacus pellentesque
								</p>
							</td>
							<td style="padding:0 10px;width:25%;" class="text-center">
								<h6 class="bold">Presto Client Tools</h6>
								<p class="small">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et sapien, blandit dolor id, dictum lacus pellentesque
								</p>
							</td>
							<td style="padding:0 10px;width:25%;" class="text-center">
								<h6 class="bold">Presto Documentation</h6>
								<p class="small">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et sapien, blandit dolor id, dictum lacus pellentesque
								</p>
							</td>
						</tr>
					</table>
					<div class="text-center">
						<a href="/#!" class="button small">Read about the 195e release</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Text block -->

<!-- Text image overlap block -->
<?php $overlap_height = '65px'; ?>
<div class="page-block page-block--overlap-img page-block--overlap-img--left pos-rel is-overlap" id="on-premises-block">
	<div class="inner" style="background-color:#d5d6d7;" >
		<div class="container">
			<div class="grid-x grid-margin-x grid-right">
				<div class="cell large-6 text-col">
					<h2 class="secondary-color light">Starburst Enterprise Presto Client Drivers</h2>
					<p>
						The  Starburst Enterprise Presto Client Drivers includes enterprise grade ODBC and JDBC drivers enabling you to use your preferred Business Intelligence tools with Presto.
						The drivers are available for Windows, Mac, and Linux platforms.
					</p>
					<p class="mb0">
						Contact us for a <a href="/#!" class="secondary-color bold">free download</a> of the JDBC and ODBC drivers.
					</p>
				</div>
				<img class="overlap-img" src="/wp-content/uploads/2018/06/single-dev.png" alt="" style="height:calc(100% + <?php echo esc_attr( $overlap_height ); ?>);">
			</div>
		</div>
	</div>
</div>
<!-- /Text image overlap block -->

<!-- Text block -->
<div class="page-block page-block--text page-block--padding" id="aws-block">
	<div class="container">
		<div class="grid-x grid-centered mb60">
			<div class="cell small-12 medium-8 text-center">
				<h2 class="light">Ready to run Presto in production?</h2>
				<p class="mb0">The Starburst Enterprise Subscription provides everything you need.</p>
			</div>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-6">
				<h4 class="mb20 bold red-color">Starburst ES leads the industry in:</h4>
				<table class="nostyle-table" width="100%">
					<tr>
						<td style="width:50%;">
							<h6 class="red-color bold fz-17 mb0">Performance</h6>
							<p class="small">Starburst is always pushing</p>
							<h6 class="red-color bold fz-17 mb0">Support</h6>
							<p class="small">24x7 Enterprise Support</p>
							<h6 class="red-color bold fz-17 mb0">Security</h6>
							<p class="small">Secured</p>
						</td>
						<td style="width:50%;">
							<h6 class="red-color bold fz-17 mb0">Access</h6>
							<p class="small">Direct access to Starburst’s team of leading committers to the Presto project</p>
							<h6 class="red-color bold fz-17 mb0">Influence</h6>
							<p class="small">Product feature influence</p>
						</td>
					</tr>
				</table>
				<table class="nostyle-table" width="100%">
					<tr>
						<td style="width:50%;">
							<p class="small">
								<ul class="nomargin">
									<li class="mb5">Installation and configuration issues</li>
									<li class="mb5">Troubleshooting</li>
									<li class="mb5">Periodic health checks</li>
									<li class="mb5">Updates, patches, hotfixes</li>
								</ul>
							</p>
						</td>
						<td style="width:50%;">
							<p class="small">
								<ul class="nomargin">
									<li class="mb5">Tuning advice</li>
									<li class="mb5">Best practices</li>
									<li class="mb5">Training materials</li>
									<li class="mb5">Robust knowledgebase</li>
								</ul>
							</p>
						</td>
					</tr>
				</table>
			</div>
			<div class="cell small-12 medium-6">
				<img class="no-maxwidth" src="/wp-content/uploads/2018/06/laptop.png" alt="">
			</div>
		</div>
	</div>
</div>
<!-- /Text block -->

<!-- Table block -->
<div class="page-block page-block--padding page-block--comapre-table" style="background-color:#f1f1f2" id="why-starburst-block">
	<div class="container">
		<div class="grid-x grid-margin-x grid-centered">
			<div class="cell small-12 medium-10">
				<h1 class="fz-52 primary-color text-center light mb40">Why Starburst?</h1>
				<?php
				$features = array(
					array( 'Performance at Internet-scale', true, true ),
					array( 'Separation of compute and storage', true, true ),
					array( 'Open source and vendor neutral', true, true ),
					array( 'Query optimizer', false, true ),
					array( 'BI tool connectivity<br><ul><li>Connect BI tools via certified and authenticated OBDC driver</li></ul>', false, true ),
					array( 'Enterprise security<br><ul><li>Kerberos & LDAP integration</li><li>Security patches pushed to you</li></ul>', false, true ),
					array( 'Fully tested, stable releases', false, true ),
					array( '24x7 enterprise support', false, true ),
					array( 'Latest features & bug fixes', false, true ),
					array( 'Performance tuning', false, true ),
					array( 'Roadmap influence', false, true ),
				);
				?>
				<table width="100%" class="compare-table">
					<thead>
						<tr>
							<td class="compare-table__column compare-table__content">
								<strong>Mainline Presto from Github<br>vs. Enterprise Presto Subscription</strong>
							</td>
							<td class="compare-table__column compare-table__presto">
								<img src="/wp-content/uploads/2018/06/presto.png" alt="Presto">
							</td>
							<td class="compare-table__column compare-table__starburst">
								<img src="/wp-content/uploads/2018/06/starburst.png" alt="StarburstData">
							</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($features as $key => $feature) : ?>
						<tr>
							<td class="compare-table__column pos-rel compare-table__content">
								<?php echo $feature[0]; ?>
							</td>
							<td class="compare-table__column pos-rel compare-table__presto">
								<?php if ( $feature[1] ) : ?>
								<img class="check abs-center" src="/wp-content/uploads/2018/06/check.png" alt="Presto">
								<?php endif; ?>
							</td>
							<td class="compare-table__column pos-rel compare-table__starburst">
								<?php if ( $feature[2] ) : ?>
								<img class="check abs-center" src="/wp-content/uploads/2018/06/check.png" alt="StarburstData">
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

<!-- Text block -->
<div class="page-block page-block--text page-block--padding" id="azure-block">
	<div class="container">
		<div class="grid-x grid-centered">
				<div class="cell small-12 large-10">
					<h2 class="text-center light">Separate Compute and Storage</h2>
					<p>The Starburst Enterprise platform can query data from any storage source, giving users maximum flexibility.</p>
				</div>
		</div>
	</div>
	<div class="text-center">
		<img src="/wp-content/uploads/2018/06/Starburst_Diagrams.png" alt="StarburstData">
	</div>
</div>
<!-- /Text block -->

<!-- Page footer CTA block -->
<div class="page-block page-block--cta" style="background-color:#00a7b5;">
	<div class="container">
		<div class="grid-x grid-centered">
			<div class="cell small-12 medium-6 text-center">
				<h1 class="white-color lh1 mb10">Try Presto Today!</h1>
				<h5 style="color:#90dce2;" class="mb20">Download the Starburst Enterprise Distribution.</h5>
				<a href="/#!" class="button fill">Download Now</a>
			</div>
		</div>
	</div>
</div>
<!-- /Page footer CTA block -->

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
