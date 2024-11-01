<div id="tab-2" class="ced_vm_wrapper">

 	<?php
  $count=1;
 	foreach ($mwb_wcsp_images as $key => $val) {
 		?>
 		<?php 
 		$activate=get_option("mwb_wcsp_enable_imgurl",false);   
 		?>
  <div class="ced_vm_gallery ced_vm_first">

    <div class="ced_vm_content-wrap ">
      <figure class="ced_image-content">
        <div   class="ced_vm-image-wrap <?php if($activate==$val) echo 'mwb_wcsp_border';?>">
          <img src="<?php echo MWB_WCSP_dir_url .'admin/template/'.$val  ?>.jpeg" alt="" class="ced_vm_gallery-img">
          <div class="ced_vm_overlay">
          <h1 style="padding-left:120px;padding-top:10px;color:white;" ><?php _e('Template', 'mwb-wordpress-coming-soon-page' );?><?php echo $count; $count++;?></h1>
            <!-- <button type="button" class="ced_vm_btn">Activate</button> -->
            <input  name="image"  id="image<?php echo $val  ?>" data="<?php echo $val  ?>" class="btn ced_vm_btn" value="<?php if($activate==$val) echo _e('Activated','mwb-wordpress-coming-soon-page');
                           else  echo _e('Activate','mwb-wordpress-coming-soon-page')                 
		          ?>" type="button">
          </div>
        </div>
      </figure>
    </div>
  </div>
  <?php } 
	?>
</div>