<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://makewebbetter.com
 * @since      1.0.0
 *
 * @package    Mwb_Wordpress_Coming_Soon_Page
 * @subpackage Mwb_Wordpress_Coming_Soon_Page/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mwb_Wordpress_Coming_Soon_Page
 * @subpackage Mwb_Wordpress_Coming_Soon_Page/admin
 * @author     makewebbetter <webmaster@makewebbetter.com>
 */
class Mwb_Wordpress_Coming_Soon_Page_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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
		 wp_enqueue_style( 'mwb-wcsp-ui-css', plugin_dir_url( __FILE__ ) . 'css/mwb-jqueryUi.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( 'mwb-wcsp-timepicker-css', plugin_dir_url( __FILE__ ) . 'js/jquery-timepicker/jquery-ui-timepicker-addon.css', array(), $this->version, 'all' );
        wp_enqueue_style('mwb_wcsp_font_awesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css",array(),$this->version,'all');
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mwb-wordpress-coming-soon-page-admin.css', array(), $this->version, 'all' );
		

	}

	/**
	 * Register the JavaScript for the admin area.
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
         wp_enqueue_script( 'jquery-ui-datepicker' );
         wp_enqueue_script( 'jquery-ui-spinner' );
		 wp_enqueue_script("mwb-wcsp-timepicker-js", plugin_dir_url( __FILE__ ) . 'js/jquery-timepicker/jquery-ui-timepicker-addon.js', array( 'jquery','jquery-ui-datepicker', 'jquery-ui-slider' ), $this->version, false );

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mwb-wordpress-coming-soon-page-admin.js', array( 'jquery','mwb-wcsp-timepicker-js'), $this->version, false );
		$mwb_wcsp_ajax_nonce = wp_create_nonce( "mwb_special_string" );
		wp_localize_script( $this->plugin_name, 'mwb_wcsp_Ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php'),'security'=>$mwb_wcsp_ajax_nonce,
            'activated'=>__('Activated','mwb-wordpress-coming-soon-page'),
		   'activate'=>__('Activate','mwb-wordpress-coming-soon-page'),
		   'template1'=>__('Template 1 has been activated','mwb-wordpress-coming-soon-page'),
		   'template2'=>__('Template 2 has been activated','mwb-wordpress-coming-soon-page'),
		   'template3'=>__('Template 3 has been activated','mwb-wordpress-coming-soon-page'),
		   'template4'=>__('Template 4 has been activated','mwb-wordpress-coming-soon-page')
			));

	}

	/**
	 * Register the Settings for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function mwb_wcsp_menu_pages()
	{

		add_menu_page('Coming Soon',__('Coming Soon Settings','mwb-wordpress-coming-soon-page'),'administrator','mwb_wcsp_menu',array($this,'mwb_wcsp_display'));
	}
	
	/**
	 * Display the Settings for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function mwb_wcsp_display()
	{
		$mwb_wcsp_images=array("temp1"=>"bg1","temp2"=>"bg2","temp3"=>"bg3");
		require_once MWB_WCSP_dir_path.'admin/partials/mwb-wordpress-coming-soon-page-admin-display.php';
	}
    /**
	 *  Register the Thickbox for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function mwb_wcsp_register_thick_box()
	{
		add_thickbox();
	}
	/**
	 *  Save setings of Cooming soon Page.
	 *
	 * @since    1.0.0
	 */
	public function mwb_wcsp_save_settings()
	{
      if(isset($_POST['submit']))
       {
      	if(wp_verify_nonce( $_POST['nonce'], 'mwb_form_string' ))
         {
	      	$mwb_wcsp_enable=isset($_POST['enable_plugin'])?sanitize_text_field($_POST['enable_plugin']):'';
	      	$mwb_wcsp_site_heading=isset($_POST['sitetitle'])?sanitize_text_field(stripslashes($_POST['sitetitle'])):'';
	        $mwb_wcsp_site_enable_image=isset($_POST['enable_image'])?sanitize_text_field($_POST['enable_image']):'';
	      	$mwb_wcsp_site_image=isset($_POST['image'])?sanitize_text_field($_POST['image']):'';
	        $mwb_wcsp_site_description=isset($_POST['description'])?sanitize_text_field(stripslashes($_POST['description'])):'';
	        $mwb_wcsp_site_enable_timer=isset($_POST['enable_timer'])?sanitize_text_field($_POST['enable_timer']):'';
	        $mwb_wcsp_site_timer=isset($_POST['timer'])?sanitize_text_field(stripslashes($_POST['timer'])):'';
	        update_option('mwb_wcsp_enable',$mwb_wcsp_enable);
	        update_option('mwb_wcsp_heading',$mwb_wcsp_site_heading);
	        update_option('mwb_wcsp_site_image',$mwb_wcsp_site_image);
	        update_option('mwb_wcsp_site_description',$mwb_wcsp_site_description);
	        update_option('mwb_wcsp_site_enable_timer',$mwb_wcsp_site_enable_timer);
	        update_option('mwb_wcsp_site_timer',$mwb_wcsp_site_timer);  
	        update_option('mwb_wcsp_site_image_enable',$mwb_wcsp_site_enable_image);  
         }
       }
      if(isset($_POST['submit_css']))//save custom css
		{ 
			if(wp_verify_nonce( $_POST['nonce'], 'mwb_form_string_css' ))
         {
			$mwb_wcsp_css  = isset($_POST['custom_css'])?sanitize_text_field(stripcslashes($_POST['custom_css'])):"";
			update_option("mwb_wcsp_css",$mwb_wcsp_css);
		  }
		}

	}
	/**
	 *  Save Template for  Cooming soon Page.
	 *
	 * @since    1.0.0
	 */
	public function mwb_wcsp_image_action_callback()
	{
		if(check_ajax_referer('mwb_special_string', 'security' ))
		{
			$mwb_wcsp_enable_imgurl=sanitize_text_field( $_POST['imgurl'] );
			update_option("mwb_wcsp_enable_imgurl",$mwb_wcsp_enable_imgurl);
			echo  $mwb_wcsp_enable_imgurl ;
			die();
		}
	} 
}
