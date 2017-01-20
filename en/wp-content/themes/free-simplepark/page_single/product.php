<?php 
	$word_t14=get_option('mytheme_word_t14');
			$word_t15=get_option('mytheme_word_t15');
			$word_t16=get_option('mytheme_word_t16');
if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<div class="product">
    <a class="product_pic">
    <div class="loading"></div>
     <?php  if (has_post_thumbnail()) { the_post_thumbnail('product_single-thumb' ,array('alt'	=>$tit, 'title'=> get_the_title() ));} ?>
    </a>
    
    <div class="product_text">
       <h1><?php the_title(); ?></h1>
       <p class="time">TIME:<?php the_time('Y-m-d'); ?></p>
        <ul>
         <?php foreach((get_the_category()) as $category) { echo '<li><a href="'. get_category_link($category->cat_ID).'">' .$category->cat_name .'</a></li> ';}?>
         </ul>
        <div class="tag_pro">
		
		<?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo '<a href="/tag/'.$tag->slug.'">' .$tag->name .'</a>';}}?> 
        
        </div>
        <?php if(get_post_meta($post->ID, "cont_read",true)!==""){ ?>
       <span><?php if($word_t14!=""){echo $word_t14;}else{echo '简介参数';}  ?></span>
       <div class="de_product">
	   
         <?php 
			 $logmeta = wpautop(trim(get_post_meta($post->ID, "cont_read",true)));
			echo $logmeta;?> 
	   
	   </div>
       
       <?php }; 
	       
			if(get_post_meta($post->ID,"purview", true) ==""){ $link='href="#respond"';}else{$link='href="'.get_post_meta($post->ID,"links_p", true).'"rel="nofollow"target="_blank"';}
	   
	   ?>
       <a class="btn"   <?php echo  $link;?>><?php if($word_t15!=""){echo $word_t15;}else{echo '联系咨询';}  ?></a>
    </div>
   <?php  if(has_shortcode( $post->post_content, 'gallery' )==true): ?>
    <div class="list">
    <a class="prve">< </a>
    <div class="lsit_hover">
    	 <?php  
                             $post_content = $post->post_content;
                             preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
                             $array_id = $ids;
                             foreach($array_id  as $array_id ){
                             }
                             echo do_shortcode("[gallery ids=". $array_id ."]"); 
                         ?> 
                         </div>
    <a class="next"> ></a>
    
    </div>
<?php endif; ?>

</div>

  <div class="enter" id="nogallery_enter"><span class="enter_cs"><?php if($word_t16!=""){echo $word_t16;}else{echo '详细参数';}  ?></span> 
  <?php the_content(); ?>
   <?php wp_link_pages('before=<div class="pager">&after=</div>'); ?>
  
  </div>
 <?php endwhile; endif; ?>