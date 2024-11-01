<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://makewebbetter.com
 * @since      1.0.0
 *
 * @package    Mwb_Wordpress_Coming_Soon_Page
 * @subpackage Mwb_Wordpress_Coming_Soon_Page/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Mwb_Wordpress_Coming_Soon_Page
 * @subpackage Mwb_Wordpress_Coming_Soon_Page/public
 * @author     makewebbetter <webmaster@makewebbetter.com>
 */
class Mwb_Wordpress_Coming_Soon_Page_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Mwb_Wordpress_Coming_Soon_Page_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mwb_Wordpress_Coming_Soon_Page_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mwb-wordpress-coming-soon-page-public.css', array(), $this->version, 'all' );
		

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
		 * defined in Mwb_Wordpress_Coming_Soon_Page_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mwb_Wordpress_Coming_Soon_Page_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mwb-wordpress-coming-soon-page-public.js', array( 'jquery' ), $this->version, false );
	}
	/**
	 * Dispaly the template for the site if settings is enable.
	 *
	 * @since    1.0.0
	 */
	public function mwb_wcsp_display_coming_soon()
	{
      
      global $pagenow;
        $mwb_wcsp_display=get_option("mwb_wcsp_enable_imgurl",false);
        if(empty( $mwb_wcsp_display))
        {
        	 $mwb_wcsp_display='bg2';
        }
      if($pagenow!='wp-login.php'&&!is_admin()&&!current_user_can('manage_options'))
      {
       
       require_once MWB_WCSP_dir_path.'admin/template/'.$mwb_wcsp_display.'/'.$mwb_wcsp_display.'.php';
           die(); 
	  }
   }
  
}
