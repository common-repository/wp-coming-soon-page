<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo MWB_WCSP_dir_url. 'admin/template/bg2/assets/css/bg2.css'?>">
</head>
<body>
	   <!--=========================================
	   =            Coming Soon comment            =
	   ==========================================-->
	   <?php $mwb_css=get_option("mwb_wcsp_css",false);?>
	   <style type="text/css"><?php echo $mwb_css;?></style>
	   <?php 
	   $mwb_wcsp_site_heading=get_option('mwb_wcsp_heading',false);
	   $mwb_wcsp_site_image=get_option('mwb_wcsp_site_image',false);
	   $mwb_wcsp_site_description=get_option('mwb_wcsp_site_description',false);
	   $mwb_wcsp_site_enable_timer=get_option('mwb_wcsp_site_enable_timer',false);
	   $mwb_wcsp_site_enable_image=get_option('mwb_wcsp_site_image_enable',false);
	   $mwb_wcsp_site_timer=get_option('mwb_wcsp_site_timer',false); 
	   ?>
	   <div id="mwb-wrapper">
	   	<div class="mwb-section">
	   		<div class="mwb_content_section">
	   			<?php if( $mwb_wcsp_site_enable_image=='on'){ ?>
	   			<img  class="mwb_picture" src="<?php echo $mwb_wcsp_site_image ?>" />
	   			<?php }?>
	   			<h1 class="mwb_heading1"><?php echo$mwb_wcsp_site_heading; ?></h1>
	   			<h3 class="mwb_heading2"><?php _e('Stay tuned','mwb-wordpress-coming-soon-page')?> for<span><?php _e('something amazing','mwb-wordpress-coming-soon-page')?> </span></h3>
	   			<?php if( $mwb_wcsp_site_enable_timer=='on')
	   			{?>
	   			<div id="mwb-clockdiv">
	   				<div class="mwb_coming_soon_circle">
	   					<div class="mwb_timing_content">
	   						<span id="mwb-days" class="mwb-days">329</span>
	   						<div class="mwb-smalltext">Days</div>
	   					</div>
	   				</div>
	   				<div class="mwb_coming_soon_circle">
	   					<div  class="mwb_timing_content">
	   						<span  id="mwb-hours" class="mwb-hours">2</span>
	   						<div class="mwb-smalltext">Hours</div>
	   					</div>
	   				</div>
	   				<div class="mwb_coming_soon_circle">
	   					<div class="mwb_timing_content">
	   						<span id="mwb-minutes" class="mwb-minutes">12</span>
	   						<div class="mwb-smalltext">Minutes</div>
	   					</div>
	   				</div>
	   				<div class="mwb_coming_soon_circle">
	   					<div class="mwb_timing_content">
	   						<span id="mwb-seconds" class="mwb-seconds">20</span>
	   						<div class="mwb-smalltext">Seconds</div>
	   					</div>
	   				</div>
	   			</div> 
	   			<?php }?>
	   			<h3 class="mwb_heading3"><?php echo do_shortcode($mwb_wcsp_site_description) ?></h3>
	</div> 
	<input  id="mwb_hidden_field"type="hidden" value="<?php echo  $mwb_wcsp_site_timer ?>"></input>
</div>
</div>
<script src="<?php echo MWB_WCSP_dir_url.'admin/template/bg2/assets/js/timer.js'?>" type="text/javascript"></script>
<!-- custom js link -->
</body>
</html>


