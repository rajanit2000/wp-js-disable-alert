<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://dckap.com
 * @since             1.0.0
 * @package           Wp_Js_Disable_Alert
 *
 * @wordpress-plugin
 * Plugin Name:       JS Disable Alert
 * Plugin URI:        https://dckap.com
 * Description:       This is simple plugin use to show the Javascript disable alert in front-panel. 
 * Version:           1.0.0
 * Author:            Rajan V
 * Author URI:        https://dckap.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-js-disable-alert
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WJDA_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-js-disable-alert-activator.php
 */
function activate_wp_js_disable_alert() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-js-disable-alert-activator.php';
	Wp_Js_Disable_Alert_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-js-disable-alert-deactivator.php
 */
function deactivate_wp_js_disable_alert() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-js-disable-alert-deactivator.php';
	Wp_Js_Disable_Alert_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_js_disable_alert' );
register_deactivation_hook( __FILE__, 'deactivate_wp_js_disable_alert' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-js-disable-alert.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_js_disable_alert() {

	$plugin = new Wp_Js_Disable_Alert();
	$plugin->run();

}
run_wp_js_disable_alert();
