 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
 <!--    font-awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo MWB_WCSP_dir_url. 'admin/template/bg1/assets/css/bg1.css'?>">
</head>
<body>
<?php $mwb_css=get_option("mwb_wcsp_css",false);?>
<style type="text/css"><?php echo $mwb_css;?></style>

<!--=========================================
=            coming-soon-section            =
==========================================-->

       <div class="mwb_flashlight__wrapper">
	    <!-- flashlight -->
  		<div class="mwb_flashlight">
	  		<div class="mwb_wire"></div>
	  		<div class="mwb_outer_cover"></div>
	  		<div class="mwb_inner-cover">
	   			<div class="mwb_bulb"></div>
	  		</div>
	  		<div class="mwb_flash"></div>
              </div>
		</div>
	    <!-- END Flashlight -->
	   <!--=========================================
	   =            Coming Soon comment            =
	   ==========================================-->
	   
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
		<div class="mwb_header">
		<?php if( $mwb_wcsp_site_enable_image=='on'){ ?>
		<img  class="mwb_picture" src="<?php echo $mwb_wcsp_site_image ?>" class="mwb_picture"/>
		<?php }?>
		<input  id="mwb_hidden_field"type="hidden" value="<?php echo  $mwb_wcsp_site_timer ?>"></input>
		  	<h2 class="mwb_heading_first"><?php echo$mwb_wcsp_site_heading; ?></h2>
		  	</div>
		   	<div class="mwb_content_wrapper">
		   		<div class="mwb_content_section">
		   			<p class="mwb_first_para"><?php echo do_shortcode($mwb_wcsp_site_description) ?></p>
		   			<?php if( $mwb_wcsp_site_enable_timer=='on')
		   			{?>
					<div id="mwb-clockdiv">
			              <div>
			                <span id='mwb-days'class="mwb-days">1</span>
			                <div class="mwb-smalltext">Days</div>
			              </div>
			              <div>
			                <span id="mwb-hours" class="mwb-hours">2</span>
			                <div class="mwb-smalltext">Hours</div>
			              </div>
			              <div>
			                <span id="mwb-minutes" class="mwb-minutes">3</span>
			                <div class="mwb-smalltext">Minutes</div>
			              </div>
			              <div>
			                <span  id="mwb-seconds" class="mwb-seconds">6</span>
			                <div class="mwb-smalltext">Seconds</div>
			              </div>
			        </div> 
			        <?php }?>
		   		</div>
		   	</div>
		</div>
	</div>
	   <!--====  End of Coming Soon Section comment  ====-->
<script src="<?php echo MWB_WCSP_dir_url.'admin/template/bg1/assets/js/timer.js'?>" type="text/javascript"></script>
</body>
</html>
