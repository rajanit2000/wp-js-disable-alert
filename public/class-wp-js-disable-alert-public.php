<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://dckap.com
 * @since      1.0.0
 *
 * @package    Wp_Js_Disable_Alert
 * @subpackage Wp_Js_Disable_Alert/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Js_Disable_Alert
 * @subpackage Wp_Js_Disable_Alert/public
 * @author     Rajan V <rajanit2000@gmail.com>
 */
class Wp_Js_Disable_Alert_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $wjda    The ID of this plugin.
	 */
	private $wjda;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wjda       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wjda, $version ) {

		$this->wjda = $wjda;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Js_Disable_Alert_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Js_Disable_Alert_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wjda, plugin_dir_url( __FILE__ ) . 'css/wp-js-disable-alert-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Js_Disable_Alert_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Js_Disable_Alert_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wjda, plugin_dir_url( __FILE__ ) . 'js/wp-js-disable-alert-public.js', array( 'jquery' ), $this->version, false );

	}

	public function render_disable_alert(){
		$content 	= '<noscript>';
		$content 	.= '<div class="js-disable-container">';
		$content 	.= '<p>' . 'JavaScript is off. Please enable to view full site.' . '</p>';
		$content 	.= '</div>';
		$content 	.= '</noscript>';
		echo $content;
	}

}
