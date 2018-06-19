<?php
/**
 * Popup form for Try Presto
 *
 * @category   Components
 * @package    WordPress
 * @subpackage StarburstData
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

?>

<!-- Known issue if using data-animation-out -->
<!-- https://github.com/zurb/foundation-sites/issues/10626 -->
<div class="reveal" id="try-presto" data-reveal data-animation-in="ease-in">
	<h2 class="light primary-color text-center fz-40 mb20">Try Presto Today!</h2>
	<div class="form form--multistep">
		<?php $popup_form = get_field( 'cta_button_shortcode' ) ? get_field( 'cta_button_shortcode' ) : '[contact-form-7 id="4"]'; ?>
		<?php echo do_shortcode( $popup_form ); ?>
	</div>
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">x</span>
	</button>
</div>

<!-- Contact Form 7 Template -->
<!-- <div class="grid-x grid-margin-x current-step">
	<div class="cell small-12 medium-6">[text* first-name placeholder "First Name*"]</div>
	<div class="cell small-12 medium-6">[text* last-name placeholder "Last Name*"]</div>
	<div class="cell small-12">[email* business-email placeholder "Busines Email*"]</div>
	<div class="cell small-12">[tel* your-phone placeholder "Phone*"]</div>
	<div class="cell small-12">[text* company placeholder "Company*"]</div>
	<div class="cell small-12">[text* country placeholder "Country*"]</div>
	<div class="cell text-center mt15"><a href="#" class="button small long js-button-next button--next">Next</a></div>
</div>
<div class="grid-x grid-margin-x hidden-step">
	<div class="cell small-12"><label>My role is...*</label>[select* menu-role "IT Professional" "Data Scientist" "DevOps Engineer" "Software Engineer" "Other"]</div>
	<div class="cell small-12"><label>My environment is...*</label>[select* menu-environment "Commodity / On Premises" "Virtual / Private Cloud" "Public Cloud - Amazon Web Services (AWS)" "Public Cloud - Microsoft Azure" "Public cloud - Google Cloud Platform" "An Appliance" "Other"]</div>
	<div class="cell small-12"><label>The amount of data I want to analyze is...*</label>[select* menu-data-amount "Up to 1TB" "1-10TB" "10-100TB" "100TB-1PB" "Over 1PB" "Prefer not to say"]</div>
	<div class="cell small-12"><label>I’m considering migration from...*</label>[select* menu-migration "Hive" "Impala" "Redshift" "Greenplum" "Vertica" "Netezza" "Other" "None"]</div>
	<div class="cell small-12"><label>I would like to move to production...*</label>[select* menu-production "ASAP" "By mid-2018" "By end of 2018" "Not urgent, just exploring"]</div>
	<div class="cell small-12"><label>Message</label>[textarea message placeholder "I’m interested in learning about your support and service offerings for Presto."]</div>
	<div class="cell text-center mt15"><a href="#" class="button small long js-button-prev button--prev">Back</a>[submit class:button class:small class:long class:fill--blue "Download"]</div>
</div> -->