<?php 

class nav_poket extends WP_Widget {

	function nav_poket()
	{
		$widget_ops = array('classname'=>'nav_poket','description' => get_bloginfo('template_url').'/images/xuanxiang/9.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget($id_base="nav_poket",$name='魔术菜单模块',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	
	    	
		
		 $id =esc_attr($instance['id']);
		
		  $title = esc_attr($instance['title']);
		   $title2 = esc_attr($instance['title2']);
	
	 $nav_poket = esc_attr($instance['nav_poket']);
	 $radius = esc_attr($instance['radius']);
	 $my_images = esc_attr($instance['my_images']);
	  $my_text_color= esc_attr($instance['my_text_color']);
	     $my_text_alpha=esc_attr($instance['my_text_alpha']);
		  $imagesfixed=esc_attr($instance['imagesfixed']);
		  $modle_bee=esc_attr($instance['modle_bee']);
		   $modle_bees=esc_attr($instance['modle_bees']);
		      $modle_bees_t=esc_attr($instance['modle_bees_t']);
			  $modle_bees_t22=esc_attr($instance['modle_bees_t22']);
	?>

<br />





<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_attr_e('标题:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('title2'); ?>"><?php esc_attr_e('副标题:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title2'); ?>" name="<?php echo $this->get_field_name('title2'); ?>" type="text" value="<?php echo $title2; ?>" /></label></p>


<p>   
<?php 	$menus = wp_get_nav_menus( array( 'orderby' => 'name' ) ); ?>
   <label for="<?php echo $this->get_field_id('nav_poket'); ?>">选择一个菜单</label>
			<select id="<?php echo $this->get_field_id('nav_poket'); ?>" name="<?php echo $this->get_field_name('nav_poket'); ?>">
				<option value="0"><?php _e( '&mdash; Select &mdash;' ) ?></option>
		<?php
			foreach ( $menus as $menu ) {
				echo '<option value="' . $menu->term_id . '"'
					. selected( $nav_poket, $menu->term_id, false )
					. '>'. esc_html( $menu->name ) . '</option>';
			}
		?>
			</select>

</p> 

<p>   
    <label  >并排数量[付费版功能]：</label><br />
             <select>
              <option>默认一排3个</option>
               <option>一排4个</option>
	          <option>一排5个</option>
	</select>
</p>


<p>   
    <label  for="">显示样式[付费版功能]：</label><br />
             <select  >
              <option  >默认大图并排显示（370*197）</option>
               <option  >小图标并排显示（40*40）</option>
	
          
	</select>
     <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">在付费版中，你可以选择这个模块输出不同尺寸以及不同的列表设样式，以此将这个模块作为不同的功能使用</em>
</p>



<p>   
    <label  for="">小图标尺寸选择[付费版功能]：</label><br />
             <select >
              <option  >默认10%（40*40）</option>
               <option >25%（80*80）</option>
               <option >50%（120*120）</option>
               
	
          
	</select>
     <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">你可以选择这个模块输出的三种预设样式，以此将这个模块作为不同的功能使用</em>
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
		$title= apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title']);
		$title2= apply_filters('widget_title', empty($instance['title2']) ? __('') : $instance['title2']);
        $nav_poket = apply_filters('widget_title', empty($instance['nav_poket']) ? __('') : $instance['nav_poket']);
	    $radius = apply_filters('widget_title', empty($instance['radius']) ? __('') : $instance['radius']);
		$my_images  = apply_filters('widget_title', empty($instance['my_images']) ? __('') : $instance['my_images']); 
		$my_text_color  = apply_filters('widget_title', empty($instance['my_text_color']) ? __('') : $instance['my_text_color']);
        $my_text_alpha  = apply_filters('widget_title', empty($instance['my_text_alpha']) ? __('') : $instance['my_text_alpha']);
		$imagesfixed = apply_filters('widget_title', empty($instance['imagesfixed']) ? __('') : $instance['imagesfixed']);
		$modle_bee= apply_filters('widget_title', empty($instance['modle_bee']) ? __('') : $instance['modle_bee']);
		$modle_bees=apply_filters('widget_title', empty($instance['modle_bees']) ? __('') : $instance['modle_bees']);
		$modle_bees_t=apply_filters('widget_title', empty($instance['modle_bees_t']) ? __('') : $instance['modle_bees_t']);
		$modle_bees_t22=apply_filters('widget_title', empty($instance['modle_bees_t22']) ? __('') : $instance['modle_bees_t22']);
		 
		if($imagesfixed){$imagesfixeds='fixed';}
		if($my_text_color){$my_text_colors='whiht_text';};
	    if($my_text_alpha){$my_text_alphas='alphass'.$my_text_alpha;};
	 

		if(is_home()){$hbiaoq='2';}elseif(is_page()&&$customizeyes){$hbiaoq='2';}else{$hbiaoq='3';}
		?>
     
<div  class="nav_poket_widgetss" id="<?php echo 'nav_poket_widgetss'.$nav_poket; ?>">
<div class="nav_poket_widgetss_in morens" >
    
     <?php if($title){ ?>  
     <div class="nav_poket_widgetss_title">  <h<?php echo $hbiaoq; ?>>
	<b> <?php if($title){ ?>  <?php echo html_entity_decode($title); ?><?php } ?> </b>
      <strong><?php echo $title2; ?></strong>
     </h<?php echo $hbiaoq; ?>>
      
     </div><?php } ?>
   
 <div id="nav_poket_widgetss_ul" class="nav_poket_ul">
   <?php  ob_start(); wp_nav_menu(array( 'walker' => new navpoket_menu(),'container' => false,'menu' => $nav_poket ,'items_wrap' => '%3$s' ) ); ?>
 
   </div>

      
</div>

</div>
<script> $(window).scroll(function () {$(".donghuaopen <?php echo '#nav_poket_widgetss'.$nav_poket; ?>").nav_poket();}); </script>
        <?php
	}
}
register_widget('nav_poket');
?>



