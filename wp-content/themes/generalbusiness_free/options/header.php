<?php
function mytheme_header_options($wp_customize){
		$wp_customize->add_section('mytheme_header_options', array(
        'title'    => __('网站顶部设置', 'mytheme'),
        'description' => '通过这个选项设置顶部的样式和内容</br>  <a href="http://www.ruomingzi.com" target="_blank">ruomingzi开发提供</a>',
        'priority' => 60,
    ));

	class Ari_Customize_Textarea_Control extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {

 ?>
  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value()); ?></textarea>
  </label>
  <p><?php echo esc_html( $this->description); ?></p>
<?php 
  }
}


	class Ari_Customize_fengexian_Control extends WP_Customize_Control {
  public $type = 'fengexian';
  public function render_content() {

 ?>
 <div style="width:100%; background:#333; margin:15px 0; height:1px;"></div>
  
<?php 
  }
}


  $wp_customize->add_setting('mytheme_logo', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_logo', array(
        'label'    => __('logo上传[尺寸高度：78px，宽度不要超过200px]', 'mytheme_logo'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_logo',
     )
    )); 




  $wp_customize->add_setting('mytheme_logo_ad', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_logo_ad', array(
        'label'    => __('logo旁边的广告图片[尺寸高度：78px，宽度不要超过500px]', 'mytheme_logo_ad'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_logo_ad',
     )
    )); 

$wp_customize->add_setting('mytheme_logo_ad_link', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('mytheme_logo_ad_link', array(
        'label'      => __('logo旁边广告图的链接', 'mytheme_logo_ad_link'),
        'section'    => 'mytheme_header_options',
        'settings'   => 'mytheme_logo_ad_link',
    ));




$wp_customize->add_setting('mytheme_tell', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('mytheme_tell', array(
        'label'      => __('电话号码', 'mytheme_tell'),
        'section'    => 'mytheme_header_options',
        'settings'   => 'mytheme_tell',
    ));
	
$wp_customize->add_setting('mytheme_tell2', array(
        'default'        => '24小时联系电话：185 8888 888',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('mytheme_tell2', array(
        'label'      => __('电话号码2', 'mytheme_tell2'),
        'section'    => 'mytheme_header_options',
        'settings'   => 'mytheme_tell2',
    ));
	
  

 $wp_customize->add_setting('mytheme_ad_top', array(
        'default'        => 'ruomingzi[www.ruomingzi.com]',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
  $wp_customize->add_control(new Ari_Customize_Textarea_Control($wp_customize,'mytheme_ad_top', array(
        'label'      => __('顶部广告词/公告（一行一条公告，只填写一条不滚动）', 'mytheme_ad_top'),
             'section'  => 'mytheme_header_options',
        'settings'   => 'mytheme_ad_top',
	
     )));
		
		
			 $wp_customize->add_setting('mytheme_ad_top_link', array(
        'default'        => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
  $wp_customize->add_control(new Ari_Customize_Textarea_Control($wp_customize,'mytheme_ad_top_link', array(
        'label'      => __('顶部广告词/公告的链接（一行一条链接，对应上面的公告内容）', 'mytheme_ad_top_link'),
             'section'  => 'mytheme_header_options',
        'settings'   => 'mytheme_ad_top_link',
	
     )));
		

	
		
		
    $wp_customize->add_setting('mytheme_nav_color', array(
	    'default'        => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_nav_color', array(
        'label'    => __('导航的背景颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_color',
    )));	
   
   
    $wp_customize->add_setting('mytheme_navtext_hover', array(
	    'default'        => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_navtext_hover', array(
        'label'    => __('鼠标经过时导航的文字颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_navtext_hover',
    )));
	
	
   
   	 $wp_customize->add_setting('mytheme_nav_hover', array(
	    'default'        => '#126f87',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_nav_hover', array(
        'label'    => __('鼠标经过时导航的背景颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_hover',
    )));
   
   
    $wp_customize->add_setting('mytheme_nav_img', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
         
    ));
      $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_nav_img', array(
        'label'    => __('导航的背景图片（如果你不想用简单的颜色，可以上传背景图）', 'mytheme_form_img'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_img',
     )
    )); 
	
	
	 $wp_customize->add_setting('mytheme_nav_title', array(
	    'default'        => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_nav_title', array(
        'label'    => __('导航的主标题颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_title',
    )));
	
	 $wp_customize->add_setting('mytheme_nav_title2', array(
	    'default'        => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_nav_title2', array(
        'label'    => __('导航的副题颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_title2',
    )));	
	
		 $wp_customize->add_setting('mytheme_nav_boder', array(
	    'default'        => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_nav_boder', array(
        'label'    => __('导航描边颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_boder',
    )));
	
	 $wp_customize->add_setting('mytheme_searh_key_tit', array(
        'default'        => '热搜',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
  $wp_customize->add_control('mytheme_searh_key_tit', array(
        'label'      => __('热门搜索词标题', 'mytheme_searh_key_tit'),
             'section'  => 'mytheme_header_options',
        'settings'   => 'mytheme_searh_key_tit',
	
     ));
		 
   
    $wp_customize->add_setting('mytheme_searh_key', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
  $wp_customize->add_control(new Ari_Customize_Textarea_Control($wp_customize,'mytheme_searh_key', array(
        'label'      => __('热门搜索词（一行一个）', 'mytheme_searh_key'),
             'section'  => 'mytheme_header_options',
        'settings'   => 'mytheme_searh_key',
	
     )));
   
   
   
   
   
};
add_action('customize_register', 'mytheme_header_options');
?>