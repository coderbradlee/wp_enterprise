<?php get_header();
get_template_part( 'page_single/top' ); 
?>	

<div id="content">
<div class="left_mian"><?php get_sidebar(); ?></div>
<div class="right_mian">

 <ul class="loop_news" id="default">
 
   <?php if(get_option('mytheme_list_nmber2')==""){$nmnber =12;}else{ $nmnber =get_option('mytheme_list_nmber2');}
$posts = query_posts($query_string . '&showposts='.$nmnber); ?>   
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
           <li id="fist">
             <a   href="<?php the_permalink() ?>" class="news_001_pic"> <?php  $tit= get_the_title();
					if (has_post_thumbnail()) { the_post_thumbnail('default-list-thumbb' ,array('alt'	=>$tit, 'title'=> $tit ));}?> 
                    
                    </a>
              <span>
             <b><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></b>
             <a class="time">TIME:<?php the_time('Y-m-d') ?></a>
             <p> <?php echo mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),  0,300,"..."); ?></p>
             <a href="<?php the_permalink() ?>" class="news_btn">MORE>></a>
             </span>
           </li>
             <?php endwhile; ?>     
                        <?php else : ?>
                         <?php  endif; ?>      

           </ul> 
           
             <div class="pager">   <?php par_pagenavi(); ?>  </div>  

</div>
</div>  
    
<?php get_footer(); ?>
