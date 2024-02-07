<?php
/*
 * Plugin Name: FG Congierge Chat for WordPress
 * Plugin URI: https://freundlichegruesse.com
 * Description: A chat widget plugin for WordPress powered by the OpenAI Assistants API.
 * Version: 2024.01.27
 * Author: Freundliche Gruesse AG
 * Author URI: https://freundlichegruesse.com
 * License:           MIT
 * License URI:       https://opensource.org/license/MIT/
 * Text Domain:       plugin-name
 * Domain Path:       /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/* Import dependencies */
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tw-chat.php';

// Instantiate the plugin class

function run_tw_chat() {

	$plugin = new TW_Chat_Plugin();

}
run_tw_chat();