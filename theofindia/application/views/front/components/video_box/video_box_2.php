<div class="thumbnail video_box_2 hover2">
    <div class="media embed-responsive embed-responsive-16by9 ">
        <?php if($type == 'upload'){?>
            <video style="height:360px;width:550px; background:red;">
                <source src="<?php echo base_url();?><?php echo $video_src;?>">
            </video>
        <?php }else{?>
            <iframe src="<?php echo $video_src;?>" frameborder="0" class="embed-responsive-item">
            </iframe>
        <?php }?>
    </div>
    <div class="caption">
  
        <h6 class="caption-title" style="padding:17px;">
        	<a href="<?php echo $this->Crud_model->video_link($video_id);?>">
				<?php echo word_limiter($title,3);?>
            </a>
        </h6>
    
    </div>
</div>
