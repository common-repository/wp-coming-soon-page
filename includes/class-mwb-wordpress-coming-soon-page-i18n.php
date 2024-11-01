<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://makewebbetter.com
 * @since      1.0.0
 *
 * @package    Mwb_Wordpress_Coming_Soon_Page
 * @subpackage Mwb_Wordpress_Coming_Soon_Page/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mwb_Wordpress_Coming_Soon_Page
 * @subpackage Mwb_Wordpress_Coming_Soon_Page/includes
 * @author     makewebbetter <webmaster@makewebbetter.com>
 */
class Mwb_Wordpress_Coming_Soon_Page_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mwb-wordpress-coming-soon-page',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
