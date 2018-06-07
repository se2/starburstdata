<?php
/**
 * Template Name: Learn Presto
 *
 * @category   Template
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

get_header(); ?>

<?php get_template_part( 'parts/content', 'banner' ); ?>

<!-- Text block -->
<div class="page-block page-block--text page-block--padding">
	<div class="container">
		<div class="grid-x grid-centered">
			<div class="cell small-12 large-10">
				<div class="page-block--text__content">
					<h2 class="text-center light secondary-color">About Presto</h2>
					<p>
						Presto is an open source distributed SQL engine for running fast analytic queries against various data sources ranging in
						size from gigabytes to petabytes. Presto was designed and built from scratch for interactive analytics. It approaches the
						speed of commercial data warehouses while scaling to the size of very large organizations.
					</p>
					<p>
						Presto was originally developed by Facebook to scale to the data size and performance they needed. In Fall 2012 a small
						team of four engineers at Facebook started working on Presto. By Spring 2013, the first version was successfully rolled
						out within Facebook. Later that year, Facebook open sourced Presto under the <a href="/#!">Apache License</a>. Since then the Presto community
						has thrived with a lot of internal contributions from Facebook and external contributions from other organizations.
					</p>
					<br>
					<p class="secondary-color text-center">The following is a list of just some of the companies using Presto today:</p>
					<table width="100%" class="nostyle-table">
						<tr>
							<td style="width:25%;">
								<ul class="nostyle-list">
									<li class="mb15">Airbnb</li>
									<li class="mb15">Atlassian</li>
									<li class="mb15">Amazon</li>
									<li class="mb15">Bloomberg</li>
									<li>Comcast</li>
								</ul>
							</td>
							<td style="width:25%;">
								<ul class="nostyle-list">
									<li class="mb15">Facebook</li>
									<li class="mb15">FINRA</li>
									<li class="mb15">LinkedIn</li>
									<li class="mb15">Lyft</li>
									<li>NASDAQ</li>
								</ul>
							</td>
							<td style="width:25%;">
								<ul class="nostyle-list">
									<li class="mb15">Netflix</li>
									<li class="mb15">Pinterest</li>
									<li class="mb15">Slack</li>
									<li class="mb15">Twitter</li>
									<li>Uber</li>
								</ul>
							</td>
							<td style="width:25%;">
								<ul class="nostyle-list">
									<li class="mb15">Walmart</li>
									<li class="mb15">Warner Brothers</li>
									<li>Yahoo! Japan</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Text block -->

<!-- Text image overlap block -->
<div class="page-block page-block--overlap-img pos-rel">
	<div class="inner" style="background-color:#d5d6d7;">
		<div class="container">
			<div class="grid-x grid-padding-x">
				<div class="cell large-6 text-col" style="background-color:#d5d6d7;">
					<h2 class="secondary-color light">Separation of Storage and Compute</h2>
					<p class="mb0 text-justify">
						With data volumes and types of data increasing on a daily basis, placing this data on a flexible storage
						medium such as HDFS or a cloud object storage such as Amazon's S3, S3-compatible stores (Minio, ceph), and
						Azure's Blob Storage provides a company with great flexibility on when and where they consume this data.
						Architected for separation of storage and compute, Presto can <strong class="secondary-color">scale up and down</strong> based on your analytics demand
						to access this data. There’s no need to move your data and provisioning compute to the exact need results in
						<strong class="secondary-color">significant cost savings</strong>.
					</p>
				</div>
				<?php $overlap_height = '70px'; ?>
				<img class="overlap-img" src="/wp-content/uploads/2018/06/Convergence_OfficeTeam.png" alt="" style="height:calc(100% + <?php echo esc_attr( $overlap_height ); ?>);">
			</div>
		</div>
	</div>
</div>
<!-- /Text image overlap block -->

<!-- Text image in columns block -->
<div class="page-block page-block--text-img pos-rel">
	<div class="container">
		<!-- Text-image row -->
		<div class="grid-x grid-margin-x flex-bottom page-block--text-img__row">
			<div class="cell medium-6 text-center stack-up">
				<img src="/wp-content/uploads/2018/06/interactive-analytics.png" alt="">
			</div>
			<div class="cell medium-6 stack-down text-col">
				<h3 class="secondary-color light">Interactive Analytics</h3>
				<p class="small mb0">
					From the beginning Presto was designed with SQL query performance in mind. It leverages both well-known and novel techniques for distributed query processing.
					Some include In-memory parallel processing, Pipelined execution across nodes in the cluster, Multithreaded execution model to keep all the CPU cores busy,
					Efficient flat-memory data structures to minimize Java garbage collection, and Java Byte code generation. This translates to faster insights into your data at
					a fraction of the cost of other solutions.
				</p>
			</div>
		</div>
		<!-- /Text-image row -->
		<!-- Text-image row -->
		<div class="grid-x grid-margin-x flex-center-items page-block--text-img__row">
			<div class="cell medium-6 stack-down text-col">
				<h3 class="secondary-color light">Analyze Anything</h3>
				<p class="small mb0">
					Allow your business intelligence users and <b>data scientists</b> to use their favorite tools (Tableau, Qlik, Apache Superset) to access and analyze virtually any data source via Presto.
					Analyze data from HDFS, object stores, RDBMS (SQL Server, Oracle, MySQL, PostgreSQL), Kafka, Cassandra, MongoDB, and many others. Presto’s flexible architecture allows one perform
					analytics <b>federated</b> across multiple data sources at the same time. Easily combine historical data from <b>HDFS</b> or objects stores with most recent incoming data from <b>Kafka</b> in the same query.
				</p>
			</div>
			<div class="cell medium-6 text-center stack-up">
				<img src="/wp-content/uploads/2018/06/analyze.png" alt="">
			</div>
		</div>
		<!-- /Text-image row -->
		<!-- Text-image row -->
		<div class="grid-x grid-margin-x page-block--text-img__row grid-centered">
			<div class="cell medium-5 text-col">
				<h3 class="secondary-color light">Secure Everything</h3>
				<p class="small mb0">
					Have piece of mind that your data is safe and secure. Starburst’s Presto will fully integrate with your <b>Kerberos</b> and <b>LDAP</b> environments.
					Further control authorized access to pieces of your data by leveraging AWS & Azure Access management, Hive Metastore Authorization, <b>Apache Sentry</b> Integration, and <b>Apache Ranger</b> integration.
					For complete security, Starburst’s Presto will support data <b>encryption at-rest</b> and <b>in-transit</b>.
				</p>
			</div>
			<div class="cell medium-5 text-col">
				<h3 class="secondary-color light">Deploy Anywhere</h3>
				<p class="small mb0">
					The separation of storage and compute allows Presto flexible deployment options. Deploy on public clouds such as AWS and Azure, private clouds such as OpenStack,
					on premises on bare metal commodity hardware or in a virtualized environment. ware on premises. Or let us deploy and manage with our <b>fully managed Presto offering</b>.
				</p>
			</div>
		</div>
		<!-- /Text-image row -->
	</div>
</div>
<!-- /Text image in columns block -->

<!-- Page footer CTA block -->
<div class="page-block page-block--cta" style="background-color:#00a7b5;">
	<div class="container">
		<div class="grid-x grid-centered">
			<div class="cell small-12 large-6 text-center">
				<h1 class="white-color lh1 mb10">Try Presto Today!</h1>
				<h5 style="color:#90dce2;" class="mb20">Download the Starburst Enterprise Distribution.</h5>
				<a href="/#!" class="button fill">Download Now</a>
			</div>
		</div>
	</div>
</div>
<!-- /Page footer CTA block -->

<?php get_footer(); ?>
