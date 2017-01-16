<?php
function themepark_add_thumbnails() {
          global $post;
          $already_has_thumb = has_post_thumbnail($post->ID);
              if (!$already_has_thumb)  {
              $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
                          if ($attached_image) {
                                foreach ($attached_image as $attachment_id => $attachment) {
                                set_post_thumbnail($post->ID, $attachment_id);
                                }
                           }
                        }
      }  
add_action('the_post', 'themepark_add_thumbnails');
add_action('save_post', 'themepark_add_thumbnails');
if ( function_exists( 'add_theme_support' ) ) {add_theme_support( 'post-thumbnails' );}
if ( function_exists( 'add_image_size' ) ) {
   
	
	add_image_size( 'case', 307, 204,true );
	add_image_size( 'fang', 307, 307,true );
	
	add_image_size( 'news', 400, 266,true );
    add_image_size( 'case_full', 307, 340,true );
	
	add_image_size( 'gallery_lightbox', 150, 150,true ); 
	add_image_size( 'product-thumb', 624, 400,true );
	
	
	add_image_size( 'gallery-other-thumbb', 610,400); 
    add_image_size( 'gallery-full-thumbb', 930,500,true );
};
 function themepark_thumbnails($thumbnail_size){
	  $id =get_the_ID(); 
	   $title_images= get_post_meta($id,"title_images", true);
		 $attachment_id = get_attachment_id_from_src(  $title_images );
	if(get_option('mytheme_'.$thumbnail_size.'_thumbnails')){$case_thumbnails=get_option('mytheme_'.$thumbnail_size.'_thumbnails');}else{$case_thumbnails= get_bloginfo('template_url').'/thumbnails/'.$thumbnail_size.'.jpg';} 
		 
		  $tit= get_the_title();

		 if($title_images){ echo wp_get_attachment_image( $attachment_id, $thumbnail_size); ;}else if (has_post_thumbnail()) { the_post_thumbnail($thumbnail_size ,array('alt'=>$tit, 'title'=> $tit ));}else{
			 echo '<img alt="'.$tit.'" title="'.$tit.'" src="'.$case_thumbnails.'" />';
			 }
	  
	 
	 }

?>