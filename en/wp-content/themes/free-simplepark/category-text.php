<?php 
/**
  Category Template:纯文字列表
 **/
get_header();
get_template_part( 'page_single/top' ); 
?>	
<div id="content">
<div class="left_mian"><?php get_sidebar(); ?></div>
<div class="right_mian">
 <ul class="loop_news" id="text_list">
 
           <?php if(get_option('mytheme_list_nmber1')==""){$nmnber =12;}else{ $nmnber =get_option('mytheme_list_nmber1');}
$posts = query_posts($query_string . '&showposts='.$nmnber); ?>     
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
           <li id="fist">
              <span>
             <b><a  href="<?php the_permalink() ?>"> <?php the_title(); ?></a></b>
             <a class="time">TIME:2014-04-13</a>
               <p>  <?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($id))),0,300,"..."); ?>
             </p>
             
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
