<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://dckap.com
 * @since      1.0.0
 *
 * @package    Wp_Js_Disable_Alert
 * @subpackage Wp_Js_Disable_Alert/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Js_Disable_Alert
 * @subpackage Wp_Js_Disable_Alert/includes
 * @author     Rajan V <rajanit2000@gmail.com>
 */
class Wp_Js_Disable_Alert_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-js-disable-alert',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
