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

		<meta name="google-site-verification" content="Q3V4T3_gxzeJjwGjzOPZcjaG_CqMUoSXx39V9Re-ssE" />

		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- Google verification -->
		<!-- <meta name=“google-site-verification” content=“Q3V4T3_gxzeJjwGjzOPZcjaG_CqMUoSXx39V9Re-ssE” /> -->

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); // phpcs:ignore ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); // phpcs:ignore ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<?php } ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>

		<!-- Start of Async Drift Code -->
		<script>
		!function() {
			var t;
			if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
			t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
			t.factory = function(e) {
				return function() {
					var n;
					return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
				};
			}, t.methods.forEach(function(e) {
				t[e] = t.factory(e);
			}), t.load = function(t) {
				var e, n, o, i;
				e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
				o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
				n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
			});
		}();
		drift.SNIPPET_VERSION = '0.3.1';
		drift.load('rxck2emr6rp6');
		</script>
		<!-- End of Async Drift Code -->

		<!-- Global site tag (gtag.js) - Google AdWords: 815997738 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-815997738"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'AW-815997738');
		</script>

		<!-- Start of starburstdata Zendesk Widget script
		<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="starburstdata.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
		/*]]>*/</script>
		End of starburstdata Zendesk Widget script -->

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
