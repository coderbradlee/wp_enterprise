<?php 
function extraordinaryvision_customize_css(){

 $mytheme_detects=get_option('mytheme_detects');
	$index_blue=get_option('mytheme_index_blue');
	$buy_color=get_option('mytheme_buy_color');
	$tag_color=get_option('mytheme_tag_color');
	$search_color=get_option('mytheme_search_color');
	$ppc_color=get_option('mytheme_ppc_color');
	$link_color=get_option('mytheme_link_color');
	$textzise_color=get_option('mytheme_textzise_color');
	$textlinehight_color=get_option('mytheme_textlinehight_color');
	$enter_p=get_option('mytheme_enter_p');
	$mytheme_form_color=get_option('mytheme_form_color');
	$mytheme_nav_color=get_option('mytheme_nav_color');
	$mytheme_nav_img=get_option('mytheme_nav_img');
	if($mytheme_nav_img){$mytheme_nav_imgs='url('.$mytheme_nav_img.')';}
	$mytheme_nav_hover=get_option('mytheme_nav_hover');
	$mytheme_nav_title=get_option('mytheme_nav_title');
		$mytheme_nav_title2=get_option('mytheme_nav_title2');
		$mytheme_nav_boder=get_option('mytheme_nav_boder');
		$mytheme_form_pic=get_option('mytheme_form_pic');
		$mytheme_footer_white=get_option('mytheme_footer_white');
		$mytheme_footer_grel=get_option('mytheme_footer_grel');
		$mytheme_footer_blue=get_option('mytheme_footer_blue');
		$mytheme_move_nav_img=get_option('mytheme_move_nav_img');
		$mytheme_nav_move_title=get_option('mytheme_nav_move_title');
		$mytheme_nav_move_title2=get_option('mytheme_nav_move_title2');
		$mytheme_navtext_hover=get_option('mytheme_navtext_hover');
	?>
<style id="extraordinaryvision_customize_css" type="text/css">
	 <?php 
	             if($mytheme_form_pic){echo '.post_form{ background:url("'.$mytheme_form_pic.'");}';}
				  if($enter_p=='suojin'){echo '.enter p{text-indent:2em; }';}
				  if($search_color&&$search_color!='#117dc2'){echo '.select,.nav_product_mu li .sub-menu li a:hover{background:'.$search_color.'}';}
				   if($textzise_color&&$textzise_color!='14'){echo '.enter p{font-size:'.$textzise_color.'px; line-height:'.$textlinehight_color.'px;}';}
				  if($link_color&&$link_color!='#117dc2'){echo '.enter a{color:'.$link_color.'}';}
                  if($ppc_color&&$ppc_color!='#cccccc'){echo '.enter_cs a.cutyes{background:'.$ppc_color.'}';}
			     if($tag_color&&$tag_color!='#117dc2'){echo '.tag_pro a:hover{background:'.$tag_color.'}.infot a#tagss,.infot a{color:'.$tag_color.'}';}
		         if($buy_color&&$buy_color!='#117dc2'){echo '#product .buy_btn a.btn{background:'.$buy_color.'}';}
	             if($index_blue&&$index_blue!="#15839f"){echo '#noswiper .nav_poket_widgetss_title p,.cunst_title span, #noswiper #nav_left_title p,.m_hd .hd_more{color:'.$index_blue.'}.titlte_bottom,.m_hd .m_hd_title,#noswiper #nav_left_title .nav_poket_bottm{border-bottom:2px solid '.$index_blue.'}.pager a.current{background:'.$index_blue.'}';
				 }
				 
				 if($mytheme_form_color){echo '.severs_nav_titile p{color:'.$mytheme_form_color.'}';}
			
			
				 if($mytheme_nav_color&&$mytheme_nav_color!="#ffffff"||$mytheme_nav_img){echo '.header_down_out{background:'.$mytheme_nav_color.'  '.$mytheme_nav_imgs.';}';}
				 
				 if($mytheme_nav_title&&$mytheme_nav_title!="#ffffff"){echo '#header_pic_nav li div{ color:'.$mytheme_nav_title.'}';}
				 if($mytheme_nav_title2&&$mytheme_nav_title2!="#ffffff"){echo '#header_pic_nav li p{ color:'.$mytheme_nav_title2.'}';} 
				
				 if($mytheme_nav_hover&&$mytheme_nav_hover!='#126f87'){echo '#header_pic_nav  li:hover,#header_pic_nav  li.current-menu-item,#header_pic_nav  li.current_page_item,#header_pic_nav  li.current-menu-item{background:'.$mytheme_nav_hover.';}#header_pic_nav  li .sub-menu li{background:none !important; }'; 
				 
				 }else if(!$mytheme_nav_hover){echo '#header_pic_nav  li:hover,#header_pic_nav  li.current-menu-item,#header_pic_nav  li.current_page_item,#header_pic_nav  li.current-menu-item{background:none;}#header_pic_nav  li .sub-menu li{background:none !important; }'; 
				 
				  }
				 if($mytheme_navtext_hover&&$mytheme_navtext_hover!='#fff'){echo'#header_pic_nav  li:hover span b,#header_pic_nav  li:hover span p,#header_pic_nav  li.current-menu-item span b,#header_pic_nav  li.current-menu-item span p{color:'.$mytheme_navtext_hover.'}';}
				 
				 
				 
				
				 
				 
					if($mytheme_qh_btn&&$mytheme_qh_btn!='#f5f5f5'){echo '.qhbtn_themepark{background:'.$mytheme_qh_btn.'}';} 
				if($mytheme_qh_btn1&&$mytheme_qh_btn1!='#98d000'){echo '.qhbtn_themepark a{background:'.$mytheme_qh_btn1.'}';} 
		if($mytheme_qh_btn2&&$mytheme_qh_btn2!='#98d000'){echo '.qhbtn_themepark a.nows{background:'.$mytheme_qh_btn2.'}';} 
		
		if($mytheme_qh_btn3&&$mytheme_qh_btn3!='#ffffff'){echo '.enter .qhbtn_themepark a{color:'.$mytheme_qh_btn3.' !important;}';} 
				 
				
				  
				 if($mytheme_nav_boder&&$mytheme_nav_boder!='#f4f4f4'){echo '#header_pic_nav li.current-menu-item{border-right:1px dashed '.$mytheme_nav_boder.';border-left:1px dashed '.$mytheme_nav_boder.'}';}
				if($mytheme_footer_white&&$mytheme_footer_white!='#333333'){echo '.footer_in_box b{color:'.$mytheme_footer_white.'}';}
				if($mytheme_footer_grel&&$mytheme_footer_grel!='#666666'){echo '.about_text,.footer_in_link li a{color:'.$mytheme_footer_grel.'}';}
				 	if($mytheme_footer_blue&&$mytheme_footer_blue!='#666666'){echo '.footer_bottom_link li a, .footer_bottom p a,.footer_bottom p{color:'.$mytheme_footer_blue.'}';}
	echo stripslashes(get_option('mytheme_zdycss'));
	
	
		
	  ?>
    </style>
<?php }
add_action( 'wp_head', 'extraordinaryvision_customize_css');
?>              