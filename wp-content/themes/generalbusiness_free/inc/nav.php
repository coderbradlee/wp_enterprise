<?php if(get_option('mytheme_detects_drop')){$mytheme_detects_drop='class="oneline_p"';} ?>
<div id="header_pic_nav"<?php echo $mytheme_detects_drop; ?>>      
                <?php  
				
				 
				 $mytheme_detects_nav=get_option('mytheme_detects_nav');
				 $header_menu='header-menu';
				
				  echo $divdrog;
			
				ob_start(); wp_nav_menu(array('walker' => new header_menu(), 'container' => false,'theme_location' => $header_menu,'items_wrap' => '<div id="header_pic_menu" class="header_menu_ul ">%3$s</div>' ) ); echo $divdrogd;?>
               
               
               

               

           
          </div>