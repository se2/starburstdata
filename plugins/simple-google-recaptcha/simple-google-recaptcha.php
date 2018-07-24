<?php
/*
* Plugin Name: Simple Google reCAPTCHA
* Description: Simply protect your WordPress against spam comments and brute-force attacks, thanks to Google reCAPTCHA!
* Version: 2.8
* Author: Michal Nov&aacute;k
* Author URI: https://www.novami.cz
* License: GPL3
* Text Domain: simple-google-recaptcha
* Domain Path: /languages
*/

function sgr_add_plugin_action_links($links) {
	return array_merge(array("settings" => "<a href=\"options-general.php?page=sgr-options\">".__("Settings", "simple-google-recaptcha")."</a>"), $links);
}
add_filter("plugin_action_links_".plugin_basename(__FILE__), "sgr_add_plugin_action_links");

function sgr_activation($plugin) {
	if ($plugin == plugin_basename(__FILE__) && (!get_option("sgr_site_key") || !get_option("sgr_secret_key"))) {
		exit(wp_redirect(admin_url("options-general.php?page=sgr-options")));
	}
}
add_action("activated_plugin", "sgr_activation");

function sgr_options_page() {
	echo "<div class=\"wrap\">
	<h1>".__("Simple Google reCAPTCHA Options", "simple-google-recaptcha")."</h1>
	<form method=\"post\" action=\"options.php\">";
	settings_fields("sgr_header_section");
	do_settings_sections("sgr-options");
	submit_button();
	echo "</form>
	</div>";
}

function sgr_menu() {
	add_submenu_page("options-general.php", "reCAPTCHA", "reCAPTCHA", "manage_options", "sgr-options", "sgr_options_page");
}
add_action("admin_menu", "sgr_menu");

function sgr_display_content() {
	echo "<p>".__("You have to <a href=\"https://www.google.com/recaptcha/admin\" rel=\"external\">register your domain</a> first, get required keys (reCAPTCHA V2) from Google and save them bellow.", "simple-google-recaptcha")."</p>";
}

function sgr_display_site_key_element() {
	$sgr_site_key = filter_var(get_option("sgr_site_key"), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	echo "<input type=\"text\" name=\"sgr_site_key\" class=\"regular-text\" id=\"sgr_site_key\" value=\"{$sgr_site_key}\" />";
}

function sgr_display_secret_key_element() {
	$sgr_secret_key = filter_var(get_option("sgr_secret_key"), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	echo "<input type=\"text\" name=\"sgr_secret_key\" class=\"regular-text\" id=\"sgr_secret_key\" value=\"{$sgr_secret_key}\" />";
}

function sgr_display_options() {
	add_settings_section("sgr_header_section", __("What first?", "simple-google-recaptcha"), "sgr_display_content", "sgr-options");

	add_settings_field("sgr_site_key", __("Site Key", "simple-google-recaptcha"), "sgr_display_site_key_element", "sgr-options", "sgr_header_section");
	add_settings_field("sgr_secret_key", __("Secret Key", "simple-google-recaptcha"), "sgr_display_secret_key_element", "sgr-options", "sgr_header_section");

	register_setting("sgr_header_section", "sgr_site_key");
	register_setting("sgr_header_section", "sgr_secret_key");
}
add_action("admin_init", "sgr_display_options");

function load_language_sgr() {
	load_plugin_textdomain("simple-google-recaptcha", false, dirname(plugin_basename(__FILE__))."/languages/");
}
add_action("plugins_loaded", "load_language_sgr");

function frontend_sgr_script() {
	$sgr_site_key = filter_var(get_option("sgr_site_key"), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$sgr_display_list = array("comment_form_after_fields", "login_form", "register_form", "lost_password", "lostpassword_form", "retrieve_password", "resetpass_form", "woocommerce_login_form", "woocommerce_register_form", "woocommerce_lostpassword_form", "woocommerce_after_order_notes", "bp_after_signup_profile_fields");
	
	wp_register_script("sgr_recaptcha_main", plugin_dir_url(__FILE__)."main.js");
	wp_enqueue_script("sgr_recaptcha_main");
	wp_localize_script("sgr_recaptcha_main", "sgr_recaptcha", array("site_key" => $sgr_site_key));
	wp_register_script("sgr_recaptcha", "https://www.google.com/recaptcha/api.js?hl=".get_locale()."&onload=sgr&render=explicit");
	wp_enqueue_script("sgr_recaptcha");
	wp_enqueue_style("style", plugin_dir_url(__FILE__)."style.css");
	
	foreach($sgr_display_list as $sgr_display) {
		add_action($sgr_display, "sgr_display");
	}
}

function sgr_display() {
	echo "<div class=\"g-recaptcha\"></div>";
}

function sgr_verify($input) {
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["g-recaptcha-response"])) {
		$sgr_secret_key = filter_var(get_option("sgr_secret_key"), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$recaptcha_response = filter_input(INPUT_POST, "g-recaptcha-response", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret={$sgr_secret_key}&response={$recaptcha_response}");
		$response = json_decode($response["body"], 1);
		
		if ($response["success"]) {
			return $input;
		} else {
			wp_die("<p><strong>".__("ERROR:", "simple-google-recaptcha")."</strong> ".__("Google reCAPTCHA verification failed.", "simple-google-recaptcha")."</p>\n\n<p><a href=".wp_get_referer().">&laquo; ".__("Back", "simple-google-recaptcha")."</a>", "", 403);
			return null;
		}
	} else {
		wp_die("<p><strong>".__("ERROR:", "simple-google-recaptcha")."</strong> ".__("Google reCAPTCHA verification failed.", "simple-google-recaptcha")." ".__("Do you have JavaScript enabled?", "simple-google-recaptcha")."</p>\n\n<p><a href=".wp_get_referer().">&laquo; ".__("Back", "simple-google-recaptcha")."</a>", "", 403);
		return null;
	}
}

function sgr_check() {
	if (get_option("sgr_site_key") && get_option("sgr_secret_key") && !is_user_logged_in()) {
		add_action("login_enqueue_scripts", "frontend_sgr_script");
		add_action("wp_enqueue_scripts", "frontend_sgr_script");
		
		$sgr_verify_list = array("preprocess_comment", "wp_authenticate_user", "registration_errors", "lostpassword_post", "resetpass_post", "bp_signup_validate", "woocommerce_register_post");
		
		foreach($sgr_verify_list as $sgr_verify) {
			add_action($sgr_verify, "sgr_verify");
		}
	}
}

add_action("init", "sgr_check");