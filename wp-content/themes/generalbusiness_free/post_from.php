<?php $detect = new Mobile_Detect();
   $mytheme_detects=get_option('mytheme_detects');
   $form_title=get_option('mytheme_form_title');
   $form_title2=get_option('mytheme_form_title2'); 
   $mytheme_form_img=get_option('mytheme_form_img');
    ?> 
<div class="post_form">
         <div class="post_form_in">
         
         
        <div id="severs_nav">
        <div class="severs_nav_titile"><img class="post_form_img" src="<?php if($mytheme_form_img){echo $mytheme_form_img;}else{echo get_bloginfo('template_url').'/images/liucheng.png';} ?>" /><p><strong><?php if($form_title){echo $form_title;}else{echo '服务流程';} ?></strong><br /><?php if($form_title2){echo $form_title2;}else{echo 'Process';} ?></p></div>
       
       
           <?php  
			if(is_page()){
				$id =get_the_ID();
				$page_nav2=get_post_meta($id,"page_nav2", true);
       if($page_nav2){
				 ob_start(); wp_nav_menu(array( 'walker' => new header_menu(),'container' => false,'menu' => $page_nav2 ,'items_wrap' => '<div class="severs_nav_ul">%3$s</div>' ) );
	   }else{ob_start(); wp_nav_menu(array('walker' => new header_menu(), 'container' => false,'theme_location' => 'drogz-menu','items_wrap' => '<div class="severs_nav_ul">%3$s</div>' ) ); }
				}else{
				ob_start(); wp_nav_menu(array('walker' => new header_menu(), 'container' => false,'theme_location' => 'drogz-menu','items_wrap' => '<div class="severs_nav_ul">%3$s</div>' ) ); }?>
       
       
        </div>
          
          
       
       
       
         </div>
    
    </div>