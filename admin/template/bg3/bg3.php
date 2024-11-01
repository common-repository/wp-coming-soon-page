<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
 <link rel="stylesheet" type="text/css" href="<?php echo MWB_WCSP_dir_url. 'admin/template/bg3/assets/css/bg3.css'?>">
</head>
<body>
<!--=========================================
=            coming-soon-section            =
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
<body>
	<div id="mwb-wrapper">
		<div class="mwb-section">
		<div class="mwb_header">
    <?php if( $mwb_wcsp_site_enable_image=='on'){ ?>
    <img  class="mwb_picture" src="<?php echo $mwb_wcsp_site_image ?>" />
    <?php }?>
		<h4 class="mwb_first_heading"><?php echo$mwb_wcsp_site_heading; ?></h4>
		<p class="mwb_para"><?php echo do_shortcode($mwb_wcsp_site_description) ?></p>
    <?php if( $mwb_wcsp_site_enable_timer=='on')
            {?>
		<div id="mwb-clockdiv">
          <div>
            <span class="mwb-days">01</span>
            <div class="mwb-smalltext">Days</div>
          </div>
          <div>
            <span class="mwb-hours">22</span>
            <div class="mwb-smalltext">Hours</div>
          </div>
          <div>
            <span class="mwb-minutes">12</span>
            <div class="mwb-smalltext">Minutes</div>
          </div>
          <div>
            <span class="mwb-seconds">20</span>
            <div class="mwb-smalltext">Seconds</div>
          </div>
        </div>  
        <?php }?>
        <input  id="mwb_hidden_field"type="hidden" value="<?php echo  $mwb_wcsp_site_timer ?>"></input>
	  	</div>
	  	</div>
	   	<div class="mwb_email_section">
		</div>
	</div>
<script src="<?php echo MWB_WCSP_dir_url.'admin/template/bg1/assets/js/timer.js'?>" type="text/javascript"></script>
</body>
</html>

