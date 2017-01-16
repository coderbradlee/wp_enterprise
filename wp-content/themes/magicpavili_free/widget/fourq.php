<?php 

class fourq extends WP_Widget {

	function fourq()
	{
		$widget_ops = array('classname'=>'fourq','description' =>get_bloginfo('template_url').'/images/xuanxiang/66.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget($id_base="fourq",$name='两栏多功能模块',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	
	     $my_text1 = esc_attr($instance['my_text1']);
		 $my_text3 = esc_attr($instance['my_text3']);
		 $my_btns= esc_attr($instance['my_btns']);
		 $my_images = esc_attr($instance['my_images']);
		 $my_b_images = esc_attr($instance['my_b_images']);
		 $my_code = esc_attr($instance['my_code']);
		 $my_hight = esc_attr($instance['my_hight']);
		 $my_text_width = esc_attr($instance['my_text_width']);
		 $my_text_top = esc_attr($instance['my_text_top']);
		  $title = esc_attr($instance['title']);
		 $my_text_url = esc_attr($instance['my_text_url']);
		 
		 $my_img_top= esc_attr($instance['my_img_top']);
		 $my_text_color= esc_attr($instance['my_text_color']);
	     $my_text_alpha=esc_attr($instance['my_text_alpha']);
		 $left_right=esc_attr($instance['left_right']);
	    $ipad=esc_attr($instance['ipad']); 
		
		$my_pingjia_t=esc_attr($instance['my_pingjia_t']);
		$my_pingjia_t2=esc_attr($instance['my_pingjia_t2']);
		$my_pingjia_t3=esc_attr($instance['my_pingjia_t3']);
		$themepark_comment=esc_attr($instance['themepark_comment']);
		$my_table_title=esc_attr($instance['my_table_title']);
	?>


<p>   
    <label  for="<?php echo $this->get_field_id('left_right'); ?>">图/视频和文字是顺序：</label><br />
             <select id="<?php echo $this->get_field_id('left_right'); ?>" name="<?php echo $this->get_field_name('left_right'); ?>" >
              <option value=''<?php if ($left_right == "" ) {echo "selected='selected'";}?> >图右文左</option>
	          <option value='90'<?php if ($left_right == "90" ) {echo "selected='selected'";}?>>图左文右</option>
	</select><br />

</p>


<p>
 <label  for="<?php echo $this->get_field_id('my_text1'); ?>">标题:</label>
 <input type="text" size="40" value="<?php echo $my_text1 ; ?>" name="<?php echo $this->get_field_name('my_text1'); ?>" id="<?php echo $this->get_field_id('my_text1'); ?>"/>

 </p>
 
 <p>
 <label  for="<?php echo $this->get_field_id('title'); ?>">标题2:</label>
 <input type="text" size="40" value="<?php echo $title ; ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"/>

 </p>

  
 <p>
 <label  for="<?php echo $this->get_field_id('my_btns'); ?>">按钮文字</label>
 <input type="text" size="40" value="<?php echo $my_btns ; ?>" name="<?php echo $this->get_field_name('my_btns'); ?>" id="<?php echo $this->get_field_id('my_btns'); ?>"/>

 </p>
 
<p>
 <label  for="<?php echo $this->get_field_id('my_text3'); ?>">文字段落:</label>
<textarea style="width:98%;" id="<?php echo $this->get_field_id('my_text3'); ?>" name="<?php echo $this->get_field_name('my_text3'); ?>"cols="52" rows="4" ><?php echo stripslashes($my_text3); ?></textarea>  
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;"><?php esc_attr_e('使用代码 <br />进行分行,也支持html代码');?></em>
</p>

 <p>
 <label  for="<?php echo $this->get_field_id('my_btns'); ?>">按钮文字</label>
 <input type="text" size="40" value="<?php echo $my_btns ; ?>" name="<?php echo $this->get_field_name('my_btns'); ?>" id="<?php echo $this->get_field_id('my_btns'); ?>"/>

 </p>


<p>
 <label  for="<?php echo $this->get_field_id('my_text_url'); ?>">链接:</label>
 <input type="text" size="40" value="<?php echo $my_text_url ; ?>" name="<?php echo $this->get_field_name('my_text_url'); ?>" id="<?php echo $this->get_field_id('my_text_url'); ?>"/>
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
             <select id="<?php echo $this->get_field_id('my_text_alpha'); ?>" name="<?php echo $this->get_field_name('my_text_alpha'); ?>" >
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
 <label  for="<?php echo $this->get_field_id('my_code'); ?>">视频代码:</label>
<textarea style="width:98%;" id="<?php echo $this->get_field_id('my_code'); ?>" name="<?php echo $this->get_field_name('my_code'); ?>"cols="52" rows="4" ><?php echo stripslashes($my_code); ?></textarea>  
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;"><a title="点击查看付费版演示" target="_blank" href="http://www.themepark.com.cn/demo/?themedemo=magicparallax_free">付费版[点击弹出]</a>可使用<a title="点击查看插件介绍" target="_blank" href="http://www.themepark.com.cn/wordpressbdcjcjlyb.html">超级留言板</a>制作一个表单放置在这个模块上</em>
</p>
<p>   
    <label  >是否使用超级留言板：</label><br />
             <select  >
              <option >使用视频或者留空</option>
             <?php 
		$pages = get_pages();
		foreach( $pages AS $page ) { 
		 $page_id=$page->ID;
		  $page_name=$page->post_title;
		?>
       
			<option 
				value='<?php echo  $page_id; ?>'
				<?php
					if ( $themepark_comment == $page_id ) {
						echo "selected='selected'";
					}
				?>><?php echo $page_name; ?></option>
		<?php } ?>
   
	</select><br />
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">在付费版中，你可以使用超级留言板插件建立一个表单，将制作好的表单代码粘贴到上面的代码选项中，然后上方选择使用超级留言板的选项选择一个页面（因为首页不能留言），这样就可以插入一个自定义表单了。</em>



</p>








<p>
  <label  for="<?php echo $this->get_field_id('my_b_images'); ?>">背景图片:</label><br />
 <input type="text" size="40" value="<?php echo $my_b_images ; ?>" name="<?php echo $this->get_field_name('my_b_images'); ?>" id="<?php echo $this->get_field_id('my_b_images'); ?>"/>
 
 <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">（尺寸宽度为1920，高度取决于你的图片和文字大小，若选择了表单模式高度为640px,建议上传可以无限重复的背景图片）</em>
 
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
		$my_text3  = apply_filters('widget_title', empty($instance['my_text3']) ? __('') : $instance['my_text3']);
        $my_images  = apply_filters('widget_title', empty($instance['my_images']) ? __('') : $instance['my_images']);
	    $my_b_images = apply_filters('widget_title', empty($instance['my_b_images']) ? __('') : $instance['my_b_images']);
		$my_code = apply_filters('widget_title', empty($instance['my_code']) ? __('') : $instance['my_code']);
		$my_hight = apply_filters('widget_title', empty($instance['my_hight']) ? __('') : $instance['my_hight']);
		$my_text_top =apply_filters('widget_title', empty($instance['my_text_top']) ? __('') : $instance['my_text_top']);
		$my_img_top =apply_filters('widget_title', empty($instance['my_img_top']) ? __('') : $instance['my_img_top']);
		$my_text_width =apply_filters('widget_title', empty($instance['my_text_width']) ? __('') : $instance['my_text_width']);
		$my_text_color  = apply_filters('widget_title', empty($instance['my_text_color']) ? __('') : $instance['my_text_color']);
        $my_text_alpha  = apply_filters('widget_title', empty($instance['my_text_alpha']) ? __('') : $instance['my_text_alpha']);
		$left_right= apply_filters('widget_title', empty($instance['left_right']) ? __('') : $instance['left_right']);
		$title = apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title']);
		$my_text_url = apply_filters('widget_title', empty($instance['my_text_url']) ? __('') : $instance['my_text_url']);
		$ipad= apply_filters('widget_title', empty($instance['ipad']) ? __('') : $instance['ipad']);
		$my_pingjia_t=apply_filters('widget_title', empty($instance['my_pingjia_t']) ? __('') : $instance['my_pingjia_t']);
		$my_pingjia_t2=apply_filters('widget_title', empty($instance['my_pingjia_t2']) ? __('') : $instance['my_pingjia_t2']);
		$my_pingjia_t3=apply_filters('widget_title', empty($instance['my_pingjia_t3']) ? __('') : $instance['my_pingjia_t3']);
		$themepark_comment=apply_filters('widget_title', empty($instance['themepark_comment']) ? __('') : $instance['themepark_comment']);
		$my_table_title=apply_filters('widget_title', empty($instance['my_table_title']) ? __('') : $instance['my_table_title']);
		 $my_btns=apply_filters('widget_title', empty($instance['my_btns']) ? __('') : $instance['my_btns']);
	
		$toppp='top:';
				
		if($my_hight||$my_b_images){
			
			$my_b_imagess='background:center url('.$my_b_images.');';
			$modle_style='style="'.$my_hights.$my_b_imagess.'"';
			
			}
			
			if($my_text_top||$my_text_width){
				
				
		if($my_text_width){	$my_text_widths='width:'.$my_text_width.';';}
			$text_style='style="'.$my_text_tops.$my_text_widths.'"';
				
				}
				
			if($my_text_alpha){$my_text_alphas='alpha'.$my_text_alpha;};
				if($my_text_color){$my_text_colors='whithe';};
				if($left_right=="90"){ $left_rights='id="right_cunst"';}else if($left_right=="80"){ $left_rights='id="center_cunst"';}
				
		?>
        
 <div id="<?php echo 'cunst'.$my_text_top; ?>" class="cunst_modle <?php if($themepark_comment){echo 'cunst_scomment ';} echo $this->get_field_id('fourq'); ?>" >
  <div class="cunst_modle_in" <?php echo  $left_rights.$modle_style;?> >
          <?php if($left_right){ ?>
           <div class="cunst_code" <?php echo $img_style; ?>>
                <?php if($my_code||$my_images){ if(!$themepark_comment){echo '<div class="cunst_vedio">'.html_entity_decode($my_code).'</div>';}if(!$my_code&&$my_text_url!='#'){$vediourl='href="'.$my_text_url.'"';} ?> 
                <?php 
				
				if($my_images){echo '<a '.$vediourl.'><img src="'.$my_images.'" alt="'.$my_text1 .'" /></a>'; }?>
              </div>
              <?php } ?>
              
             
          
              <div class="cunst_text  <?php echo $my_text_alphas.'   '.$my_text_colors ?>" <?php echo $text_style; ?>>
                 <h2><b> <?php echo $my_text1 ?></b> <?php if($title){ ?><a href="<?php echo $my_text_url ?>" ><?php echo $title; ?></a><?php } ?></h2>
                 <p> <?php echo html_entity_decode($my_text3); ?></p>
    <a class="cunst_btn" href="<?php echo $my_text_url; ?>"><?php echo $my_btns ?></a>
              </div>
          
          <?php }else{ ?>
         
          
             
              <div class="cunst_text  <?php echo $my_text_alphas.'   '.$my_text_colors ?>" <?php echo $text_style; ?>>
                 <h2><b> <?php echo $my_text1 ?></b> <?php if($title){ ?><a href="<?php echo $my_text_url ?>" ><?php echo $title; ?></a><?php } ?></h2>
                 <p> <?php echo html_entity_decode($my_text3); ?></p>
                   <a class="cunst_btn" href="<?php echo $my_text_url; ?>"><?php echo $my_btns ?></a>
              </div>
           
             
             
             
             <div class="cunst_code" <?php echo $img_style; ?>>
                <?php if($my_code||$my_images){ if(!$themepark_comment){echo '<div class="cunst_vedio">'.html_entity_decode($my_code).'</div>';}if(!$my_code&&$my_text_url!='#'){$vediourl='href="'.$my_text_url.'"';} ?> 
                <?php 
				
				if($my_images){echo '<a '.$vediourl.'><img src="'.$my_images.'" alt="'.$my_text1 .'" /></a>'; }?>
              </div>
              <?php }} ?>
          </div>
 <div class="custe_ba"<?php echo  $modle_style;?>></div>
 </div>
 
 
 <script> $(window).scroll(function () {$(".donghuaopen .<?php echo $this->get_field_id('fourq'); ?>").cunst();}); </script>
 
        <?php
	}
}
register_widget('fourq');
?>