<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://makewebbetter.com
 * @since      1.0.0
 *
 * @package    Mwb_Wordpress_Coming_Soon_Page
 * @subpackage Mwb_Wordpress_Coming_Soon_Page/admin/partials
 */
?>
<?php
$tabactive1='';
$tabactive2='';
$tabactive3='';
if(isset($_GET['tab']))
{
  if($_GET['tab']=='tab1')
  {
  	$tabactive1='mwb_current';
  }
  if($_GET['tab']=='tab2')
  {
  	$tabactive2='mwb_current';
  }
  if($_GET['tab']=='tab3')
  {
  	$tabactive3='mwb_current';
  }

}
else
{
	$tabactive1='mwb_current';
}
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h1><?php _e('WordPress Coming Soon Page Settings','mwb-wordpress-coming-soon-page');?></h1>
<?php
if(isset($_POST['submit_css']))//save custom css
    {?>
         <div class='notice notice-success is-dismissible'>
        <p><?php _e( 'Settings Saved!','mwb-wordpress-coming-soon-page' ); ?></p>
    </div>
    <?php
   }
   ?>
   <?php 
 if(isset($_POST['submit']))
   {
   ?>
     <div class='notice notice-success is-dismissible'>
        <p><?php _e('Settings Saved!','mwb-wordpress-coming-soon-page' ); ?></p>
    </div>
    <?php
       }
       ?>
         <div id='demo'>
       </div>
<ul id="mwb_tabs">
	<li style="border-right:4px solid white;" id="<?php echo $tabactive1 ;?>"><a href="<?php echo admin_url();?>admin.php?page=mwb_wcsp_menu&tab=tab1"><?php _e('General','mwb-wordpress-coming-soon-page' ); ?></a></li>
	<li  style="border-right:4px solid white;" id="<?php echo $tabactive2;?>"><a href="<?php echo admin_url();?>admin.php?page=mwb_wcsp_menu&tab=tab2"><?php _e('Appearance','mwb-wordpress-coming-soon-page' ); ?></a></li>
	<li  style="border-right:4px solid white;" id="<?php echo $tabactive3;?>"><a href="<?php echo admin_url();?>admin.php?page=mwb_wcsp_menu&tab=tab3"><?php _e('Aditional Settings','mwb-wordpress-coming-soon-page' ); ?></a></li>	
</ul>
<?php
if(isset($_GET['tab']))
{
  
   if($_GET['tab']=='tab1')
  {
  	require_once MWB_WCSP_dir_path."admin/partials/mwb-wordpress-coming-soon-page-admin-display-tab1.php"; 
  }
  if($_GET['tab']=='tab2')
  {
  	require_once MWB_WCSP_dir_path."admin/partials/mwb-wordpress-coming-soon-page-admin-display-tab2.php"; 
  }
  if($_GET['tab']=='tab3')
  {
  	require_once MWB_WCSP_dir_path."admin/partials/mwb-wordpress-coming-soon-page-admin-display-tab3.php"; 
  }

}
else
{
  require_once MWB_WCSP_dir_path."admin/partials/mwb-wordpress-coming-soon-page-admin-display-tab1.php"; 
}
?>