<?php
function mytheme_footer_options($wp_customize){
		$wp_customize->add_section('mytheme_footer_options', array(
        'title'    => __('网站底部设置', 'mytheme'),
        'description' => '设置您的网站底部的样式和内容</br>  <a href="http://www.themepark.com.cn" target="_blank">WEB主题公园开发提供</a>  </br>',
        'priority' => 80,
    ));





  $wp_customize->add_setting('mytheme_fengexian', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control(new Ari_Customize_fengexian_Control($wp_customize, 'mytheme_fengexian', array(
         'label'      => __('分隔线', 'mytheme_searchkey'),
         'section'    => 'mytheme_footer_options',
         'settings'   => 'mytheme_fengexian',
  
      )));






 
 $wp_customize->add_setting('mytheme_footer_sm_text', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control(new Ari_Customize_Textarea_Control($wp_customize, 'mytheme_footer_sm_text', array(
         'label'      => __('底部声明文字', 'mytheme_footer_box1_text'),
         'section'    => 'mytheme_footer_options',
         'settings'   => 'mytheme_footer_sm_text',

      )));

  $wp_customize->add_setting('mytheme_footer_b', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
	
	
	
	
	
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_footer_b', array(
        'label'    => __('底部（上）背景图片上传，尺寸高度221px的图片横向重复', 'mytheme_footer_b'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_b',
     )
    )); 
	
	
	  $wp_customize->add_setting('mytheme_footer_d', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_footer_d', array(
        'label'    => __('底部（下）背景图片上传，尺寸高度73px的图片横向重复', 'mytheme_footer_b'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_d',
     )
    )); 


 $wp_customize->add_setting('mytheme_footer_white', array(
	    'default'        => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_footer_white', array(
        'label'    => __('底部所有白色字体', 'extraordinaryvision'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_white',
    )));	

$wp_customize->add_setting('mytheme_footer_grel', array(
	    'default'        => '#ffd800',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_footer_grel', array(
        'label'    => __('底部声明黄色字体', 'extraordinaryvision'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_grel',
    )));	
	
	
	
};
add_action('customize_register', 'mytheme_footer_options');
?>