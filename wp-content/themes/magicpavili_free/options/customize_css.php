<?php 
function extraordinaryvision_customize_css(){

	$index_blue=get_option('mytheme_index_blue');
	$buy_color=get_option('mytheme_buy_color');
	$tag_color=get_option('mytheme_tag_color');
	$search_color=get_option('mytheme_search_color');
	$ppc_color=get_option('mytheme_ppc_color');
	$link_color=get_option('mytheme_link_color');
	$textzise_color=get_option('mytheme_textzise_color');
	$textlinehight_color=get_option('mytheme_textlinehight_color');
	$enter_p=get_option('mytheme_enter_p');
	$mytheme_footer_white=get_option('mytheme_footer_white');
$footer_grel=get_option('mytheme_footer_grel');
	$footer_white=get_option('mytheme_footer_white');
	
	$mytheme_nav_hover=get_option('mytheme_nav_hover');
	$mytheme_nav_hover_boder=get_option('mytheme_nav_hover_boder');
	$mytheme_nav_title=get_option('mytheme_nav_title');
	$mytheme_nav_title2=get_option('mytheme_nav_title2');
	$mytheme_title_hover=get_option('mytheme_title_hover');
	$mytheme_top_title=get_option('mytheme_top_title');
	
	$mytheme_top_ba=get_option('mytheme_top_ba');
	$mytheme_header_ba=get_option('mytheme_header_ba');
	$mytheme_top_cl=get_option('mytheme_top_cl');
	if(is_page()){ $id =get_the_ID();}
	?>
<style id="extraordinaryvision_customize_css" type="text/css">
	 <?php 
	             
				  if($enter_p=='suojin'){echo '.enter p{text-indent:2em; }';}
				  if($search_color!='#117dc2'){echo '.select,.nav_product_mu li .sub-menu li a:hover{background:'.$search_color.'}';}
				   if($textzise_color!='14'){echo '.enter p{font-size:'.$textzise_color.'px; line-height:'.$textlinehight_color.'px;}';}
				  if($link_color!='#117dc2'){echo '.enter a{color:'.$link_color.'}';}
                  if($ppc_color!='#ccc'){echo '.enter_cs a.cutyes{background:'.$ppc_color.'}';}
			     if($tag_color!='#117dc2'){echo '.tag_pro a:hover{background:'.$tag_color.'}.infot a#tagss,.infot a{color:'.$tag_color.'}';}
		         if($buy_color!='#117dc2'){echo '#product .buy_btn a.btn{background:'.$buy_color.'}';}
	             if($index_blue!="#ff4800"){echo '.nav_poket_widgetss_title h2 b, .nav_poket_widgetss_title h3 b,.cunst_text h2 b,.caseshow ul li div #casebtn,.news_touch_title a,.news_touch_in ul li .news_textss em{color:'.$index_blue.' } ';
				 
				 echo '.pic_big_bottom_in_search #searchsubmit,#nav_product_mue #choose,.caseshow ul li:hover div #casebtn,#commentform #submit,.nav_poket_ul li:hover .poket_btn,.cunst_modle:hover .cunst_btn,.per_out .per_p_in,.tubiao .nav_poket_ul li a span b .xianxss{background:'.$index_blue.'}
				 
				 .caseshow ul li div #casebtn,.cunst_navs_next a:hover{border:1px solid '.$index_blue.'}
				  ';} 
				  
				  
				  if($mytheme_top_ba){echo '.top{background:url("'.$mytheme_top_ba.'")}';}
				  if($mytheme_header_ba){echo '.header_in{background:url("'.$mytheme_header_ba.'")}';}
				  if($mytheme_top_cl||$mytheme_top_cl!="#ffffff"){echo '.top_left a, .top_left p,.top .tell,.top_right a,.top a{color:'.$mytheme_top_cl.'}';}
				  
				  
				  
				 if( $mytheme_nav_hover){echo '#header_pic_nav li:hover, #header_pic_nav li.current-menu-item{ background:url("'.$mytheme_nav_hover.'");}';}
				  if( $mytheme_nav_hover_boder&&$mytheme_nav_hover_boder!='#ffa800'){echo '#header_pic_nav li.current-menu-item a{ border-bottom:3px solid '.$mytheme_nav_hover_boder.';}';}
				   if( $mytheme_nav_title&&$mytheme_nav_title!='#fff'){echo '#header_pic_nav li b{ color: '.$mytheme_nav_title.';}';}
				  if( $mytheme_nav_title2&&$mytheme_nav_title2!='#fff'){echo '#header_pic_nav li p{ color: '.$mytheme_nav_title2.';}';}
				    if( $mytheme_title_hover){echo '#header_pic_nav li:hover b, #header_pic_nav li.current-menu-item b,#header_pic_nav li:hover p, #header_pic_nav li.current-menu-item p{ color: '.$mytheme_title_hover.';}';}
				  
				   
				   
				  if($footer_white&&$footer_white!='#ffffff'){echo '.footer_in_box b,.footer_about .about_pic, .footer_about .about_text,.about_text,.contact_text_p,.footer_bottom_link li a, #footer_bottom_link p a,#footer_bottom_link p{color:'.$footer_white.';}';}
		if($footer_grel&&$footer_grel!='#ffd800'){echo '.footer_bottom p{color:'.$footer_grel.';}';}
				  

	

	echo stripslashes(get_option('mytheme_zdycss'));
	
	
		
	  ?>
    </style>
<?php }
add_action( 'wp_head', 'extraordinaryvision_customize_css');
?>              