<?php 

class fourq extends WP_Widget {

	function fourq()
	{
		$widget_ops = array('classname'=>'fourq','description' =>get_bloginfo('template_url').'/images/xuanxiang/66.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget($id_base="fourq",$name='自定义图文/视频模块【内容区排版模块】',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	
	     $my_text1 = esc_attr($instance['my_text1']);
		 $my_text2 = esc_attr($instance['my_text2']);
		 $my_text3 = esc_attr($instance['my_text3']);
		 $my_images = esc_attr($instance['my_images']);
		 $my_b_images = esc_attr($instance['my_b_images']);
		  $my_b_images2 = esc_attr($instance['my_b_images2']);
		 $my_code = esc_attr($instance['my_code']);
		 $my_hight = esc_attr($instance['my_hight']);
		 $my_text_width = esc_attr($instance['my_text_width']);
		 $my_text_top = esc_attr($instance['my_text_top']);
		  $my_text_btn = esc_attr($instance['my_text_btn']);
		 $my_text_url = esc_attr($instance['my_text_url']);
		 
		 $my_img_top= esc_attr($instance['my_img_top']);
		 $my_text_color= esc_attr($instance['my_text_color']);
	     $my_text_alpha=esc_attr($instance['my_text_alpha']);
		 $left_right=esc_attr($instance['left_right']);
	    $ipad=esc_attr($instance['ipad']);
	?>


<p>   
    <label  for="<?php echo $this->get_field_id('left_right'); ?>">图/视频和文字是顺序：</label><br />
             <select id="<?php echo $this->get_field_id('left_right'); ?>" name="<?php echo $this->get_field_name('left_right'); ?>" >
              <option value=''<?php if ($left_right == "" ) {echo "selected='selected'";}?> >图右文左</option>
	          <option value='90'<?php if ($left_right == "90" ) {echo "selected='selected'";}?>>图左文右</option>
              <option value='80'<?php if ($left_right == "80" ) {echo "selected='selected'";}?>>文字居中</option>
  
	</select><br />
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">当选择文字居中时，可以同时设置文字模块宽度为100%</em>
</p>
<p>   
    <label  for="<?php echo $this->get_field_id('ipad'); ?>">在平板电脑上是否显示上下图文的方式：</label><br />
             <select id="<?php echo $this->get_field_id('ipad'); ?>" name="<?php echo $this->get_field_name('ipad'); ?>" >
              <option value=''<?php if ($ipad == "" ) {echo "selected='selected'";}?> >默认pc选项</option>
	          <option value='1'<?php if ($ipad == "1" ) {echo "selected='selected'";}?>>上下图文居中</option>
            
  
	</select><br />
    <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;"><strong>注意这个选项只针对平板电脑</strong>选择了上下图文居中时，在ipad等平板电脑上显示就会强制将左右模块宽度设置为100，从而上下显示。</em>
</p>


<p>
 <label  for="<?php echo $this->get_field_id('my_text1'); ?>">标题:</label>
 <input type="text" size="40" value="<?php echo $my_text1 ; ?>" name="<?php echo $this->get_field_name('my_text1'); ?>" id="<?php echo $this->get_field_id('my_text1'); ?>"/>

 </p>
 
 <p>
 <label  for="<?php echo $this->get_field_id('my_text2'); ?>">标题2:</label>
 <input type="text" size="40" value="<?php echo $my_text2 ; ?>" name="<?php echo $this->get_field_name('my_text2'); ?>" id="<?php echo $this->get_field_id('my_text2'); ?>"/>

 </p>
 
 
<p>
 <label  for="<?php echo $this->get_field_id('my_text3'); ?>">文字段落:</label>
<textarea style="width:98%;" id="<?php echo $this->get_field_id('my_text3'); ?>" name="<?php echo $this->get_field_name('my_text3'); ?>"cols="52" rows="4" ><?php echo stripslashes($my_text3); ?></textarea>  
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;"><?php esc_attr_e('使用代码 <br />进行分行,也支持html代码');?></em>
</p>


<p>
  <label  for="<?php echo $this->get_field_id('my_b_images2'); ?>">文字段落的插图:</label><br />
 <input type="text" size="40" value="<?php echo $my_b_images2 ; ?>" name="<?php echo $this->get_field_name('my_b_images2'); ?>" id="<?php echo $this->get_field_id('my_b_images2'); ?>"/>
 
 <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">（插图会在文字之前显示，文字显示为绕排，若不想显示则不输入）</em>
 
</p> 






<p>
 <label  for="<?php echo $this->get_field_id('my_text_url'); ?>">链接:</label>
 <input type="text" size="40" value="<?php echo $my_text_url ; ?>" name="<?php echo $this->get_field_name('my_text_url'); ?>" id="<?php echo $this->get_field_id('my_text_url'); ?>"/>
</p>

<p>
 <label  for="<?php echo $this->get_field_id('my_text_top'); ?>">文字距离顶部的高度:</label>
 <input type="text" size="40" value="<?php echo $my_text_top ; ?>" name="<?php echo $this->get_field_name('my_text_top'); ?>" id="<?php echo $this->get_field_id('my_text_top'); ?>"/>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">你可以通过这个选项调整文字距离顶部的距离，默认为10%；你可以填写%或者px的长度</em>
 </p>

<p>
 <label  for="<?php echo $this->get_field_id('my_text_width'); ?>">文字的宽度:</label>
 <input type="text" size="40" value="<?php echo $my_text_width ; ?>" name="<?php echo $this->get_field_name('my_text_width'); ?>" id="<?php echo $this->get_field_id('my_text_width'); ?>"/>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">控制文字模块的宽度，可以控制他们在具体的地方进行换行，默认是55%宽度，你可以填写px或者%单位的长度</em>
 </p>

<p>   
    <label  for="<?php echo $this->get_field_id('my_text_color'); ?>">文字颜色选择：</label><br />
             <select id="<?php echo $this->get_field_id('my_text_color'); ?>" name="<?php echo $this->get_field_name('my_text_color'); ?>" >
              <option value=''<?php if ($my_text_color == "" ) {echo "selected='selected'";}?> >黑色</option>
	          <option value='1'<?php if ($my_text_color == "1" ) {echo "selected='selected'";}?>>白色</option>
	</select><br />

</p>

<p>   
    <label  for="<?php echo $this->get_field_id('my_text_alpha'); ?>">文字颜色透明度：</label><br />
             <select id="<?php echo $this->get_field_id('my_text_color_alpha'); ?>" name="<?php echo $this->get_field_name('my_text_alpha'); ?>" >
              <option value=''<?php if ($my_text_alpha == "" ) {echo "selected='selected'";}?> >100%</option>
	          <option value='90'<?php if ($my_text_alpha == "90" ) {echo "selected='selected'";}?>>90%</option>
               <option value='80'<?php if ($my_text_alpha == "80" ) {echo "selected='selected'";}?>>80%</option>
                <option value='70'<?php if ($my_text_alpha == "70" ) {echo "selected='selected'";}?>>70%</option>
                 <option value='60'<?php if ($my_text_alpha == "60" ) {echo "selected='selected'";}?>>60%</option>
                  <option value='50'<?php if ($my_text_alpha == "50" ) {echo "selected='selected'";}?>>50%</option>
	</select><br />

</p>



<p>
  <label  for="<?php echo $this->get_field_id('my_images'); ?>">配给的图片:</label><br />
 <input type="text" size="40" value="<?php echo $my_images ; ?>" name="<?php echo $this->get_field_name('my_images'); ?>" id="<?php echo $this->get_field_id('my_images'); ?>"/>
 
 <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">这张图片是这个模块默认靠右显示的，你可以选择相反的顺序排列，也可以使用下面的html代码选项进行替换，填写相应的代码之后，图片将不会显示</em>
</p> 

<p>
 <label  for="<?php echo $this->get_field_id('my_code'); ?>">视频或者其他html代码:</label>
<textarea style="width:98%;" id="<?php echo $this->get_field_id('my_code'); ?>" name="<?php echo $this->get_field_name('my_code'); ?>"cols="52" rows="4" ><?php echo stripslashes($my_code); ?></textarea>  
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">上面的代码填写之后，图片将不会显示,但是你需要上传一张图片，这张图片将会对视频的大小起到作用，并可以在不同设备缩放视频尺寸。</em>
</p>


<p>
 <label  for="<?php echo $this->get_field_id('my_img_top'); ?>">图片距离顶部的高度:</label>
 <input type="text" size="40" value="<?php echo $my_img_top ; ?>" name="<?php echo $this->get_field_name('my_img_top'); ?>" id="<?php echo $this->get_field_id('my_img_top'); ?>"/>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">你可以通过这个选项调整图片距离顶部的距离，默认为10%；你可以填写%或者px的长度</em>
 </p>




<p>
 <label  for="<?php echo $this->get_field_id('my_hight'); ?>">模块高度（默认高度321像素）:</label>
 <input type="text" size="40" value="<?php echo $my_hight ; ?>" name="<?php echo $this->get_field_name('my_hight'); ?>" id="<?php echo $this->get_field_id('my_hight'); ?>"/>
 </p>


<p>
  <label  for="<?php echo $this->get_field_id('my_b_images'); ?>">背景图片:</label><br />
 <input type="text" size="40" value="<?php echo $my_b_images ; ?>" name="<?php echo $this->get_field_name('my_b_images'); ?>" id="<?php echo $this->get_field_id('my_b_images'); ?>"/>
 
 <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">（尺寸宽度为1920，高度默认321px，若你修改了高度，那么请按照自定义的高度来设定）</em>
 
</p> 


   
	<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	extract( $args );
	     $id =$instance['id'];
        $before_content = $instance['before_content'];
        $after_content = $instance['after_content'];
	  
		$my_text1  = apply_filters('widget_title', empty($instance['my_text1']) ? __('') : $instance['my_text1']);
		$my_text2  = apply_filters('widget_title', empty($instance['my_text2']) ? __('') : $instance['my_text2']);
		$my_text3  = apply_filters('widget_title', empty($instance['my_text3']) ? __('') : $instance['my_text3']);
        $my_images  = apply_filters('widget_title', empty($instance['my_images']) ? __('') : $instance['my_images']);
	    $my_b_images = apply_filters('widget_title', empty($instance['my_b_images']) ? __('') : $instance['my_b_images']);
		 $my_b_images2 = apply_filters('widget_title', empty($instance['my_b_images2']) ? __('') : $instance['my_b_images2']);
		$my_code = apply_filters('widget_title', empty($instance['my_code']) ? __('') : $instance['my_code']);
		$my_hight = apply_filters('widget_title', empty($instance['my_hight']) ? __('') : $instance['my_hight']);
		$my_text_top =apply_filters('widget_title', empty($instance['my_text_top']) ? __('') : $instance['my_text_top']);
		$my_img_top =apply_filters('widget_title', empty($instance['my_img_top']) ? __('') : $instance['my_img_top']);
		$my_text_width =apply_filters('widget_title', empty($instance['my_text_width']) ? __('') : $instance['my_text_width']);
		$my_text_color  = apply_filters('widget_title', empty($instance['my_text_color']) ? __('') : $instance['my_text_color']);
        $my_text_alpha  = apply_filters('widget_title', empty($instance['my_text_alpha']) ? __('') : $instance['my_text_alpha']);
		$left_right= apply_filters('widget_title', empty($instance['left_right']) ? __('') : $instance['left_right']);
		$my_text_btn = apply_filters('widget_title', empty($instance['my_text_btn']) ? __('') : $instance['my_text_btn']);
		$my_text_url = apply_filters('widget_title', empty($instance['my_text_url']) ? __('') : $instance['my_text_url']);
		$ipad= apply_filters('widget_title', empty($instance['ipad']) ? __('') : $instance['ipad']);
		 
		$toppp='top:';
				
		if($my_hight||$my_b_images){
			$my_hights='height:'.$my_hight.';';
			$my_b_imagess='background: center url('.$my_b_images.');';
			$modle_style='style="'.$my_hights.$my_b_imagess.'"';
			$modle_style_in='style="'.$my_hights.'"';
			}
			
			if($my_text_top||$my_text_width){
				
				if($my_text_top){$my_text_tops=''.$toppp.$my_text_top.';';}
		if($my_text_width){	$my_text_widths='width:'.$my_text_width.';';}
			$text_style='style="'.$my_text_tops.$my_text_widths.'"';
				
				}
				if(	$my_img_top){$img_style='style="'.$toppp.$my_img_top.'"';}
			if($my_text_alpha){$my_text_alphas='alpha'.$my_text_alpha;};
				if($my_text_color){$my_text_colors='whithe';};
				if($left_right=="90"){ $left_rights='id="right_cunst"';}else if($left_right=="80"){ $left_rights='id="center_cunst"';}
				
		?>
        
 <div <?php if($ipad){echo 'id="full_cunst_modle_1"';} ?> class="cunst_modle"<?php echo $modle_style ?> >
  <div class="cunst_modle_in <?php echo $this->get_field_id("id"); ?>" <?php echo  $left_rights.$modle_style;?> >
          <?php if($left_right){ ?>
            <?php if($my_code||$my_images){ ?> <div class="cunst_code" <?php echo $img_style; ?>>
              
                <?php echo html_entity_decode($my_code);
				if($my_text_url){$my_text_urls=' href="'.$my_text_url.'"';}
				if($my_images){echo '<a '.$my_text_urls.'><img src="'.$my_images.'" alt="'.$my_text1 .'" /></a>'; }?>
              </div>
              <?php } ?>
              
             
          
              <div class="cunst_text  <?php echo $my_text_alphas.'   '.$my_text_colors ?>" <?php echo $text_style; ?>>
                 <a  target="_blank"href="<?php echo $my_text_url; ?>" class="cunst_title"> <div class="titlte_bottom"><h2><?php echo $my_text1 ?></h2><span><?php echo $my_text2 ?></span></div></a>
                    <p>  <?php if($my_b_images2){echo '<a target="_blank" href="'.$my_text_url.'"><img alt="'.$my_text1.'" src="'.$my_b_images2.'" /></a>';}   echo html_entity_decode($my_text3); ?></p>
                 
              </div>
          
          <?php }else{ ?>
         
          
              <div class="cunst_text  <?php echo $my_text_alphas.'   '.$my_text_colors ?>" <?php echo $text_style; ?>>
                 <a  target="_blank"href="<?php echo $my_text_url; ?>" class="cunst_title"> <div class="titlte_bottom"><h2><?php echo $my_text1 ?></h2><span><?php echo $my_text2 ?></span></div></a>
                    <p>  <?php if($my_b_images2){echo '<a target="_blank" href="'.$my_text_url.'"><img alt="'.$my_text1.'" src="'.$my_b_images2.'" /></a>';}   echo html_entity_decode($my_text3); ?></p>
                 
              </div>
              
             <?php if($my_code||$my_images){ ?> <div class="cunst_code" <?php echo $img_style; ?>>
              
                  <?php echo html_entity_decode($my_code);
				if($my_text_url){$my_text_urls=' href="'.$my_text_url.'"';}
				if($my_images){echo '<a '.$my_text_urls.'><img src="'.$my_images.'" alt="'.$my_text1 .'" /></a>'; }?>
              </div>
              <?php }} ?>
          </div>
 
 </div>
 <?php if(!get_option("mytheme_donghuaopen")) {?>
<script> $(window).scroll(function () {$(".donghuaopen .<?php echo $this->get_field_id("id"); ?>").cunst();}); </script>

        <?php
	}}
}
register_widget('fourq');
?>