<div id="pic_out">
<div id="pic">
 <ul>
      <?php 
	     
              $hot_cat= get_option('mytheme_hot_cat');//获取分类别名为 wordpress 的分类数据
              $cat_links=get_category_link($hot_cat->term_id); // 通过$cat数组里面的分类id获取分类链接
			  $word_t1=get_option('mytheme_word_t1');
        
 $posts = get_posts( "category=($hot_cat)&numberposts=30" ); ?> 
    <?php if( $posts ) : ?>                                       
			   <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>     
    <?php  if(get_post_meta($post->ID, 'hoturl',true) !==""){ $link =get_post_meta($post->ID, 'hoturl',true);}else{$link = get_permalink();}?>
    <li><a href="<?php  echo $link?>"  > 
       <?php  $tit= get_the_title();if (has_post_thumbnail()) { the_post_thumbnail('hot-pic-thumbb' ,array('alt'	=>$tit, 'title'=> $tit ));}?> 
        </a>
         
         
          
          <div class="png_pic" >
          <b> <?php the_title(); ?></b>
          
          </div>
        
          

         
    </li>
           
               <?php endforeach; ?>                                            
               <?php else : ?>
               <?php endif; ?>      
 
 </ul>

<div class="pic_nav">

<a class="prve"> < PREV </a>
<a class="next"> NEXT > </a>
</div>

</div>
</div>

<script>
$(function() {
$("#pic").jCarouselLite({
btnNext: "#pic .next",
btnPrev: "#pic .prve",
speed:2000,//滚动动画的时间
auto:4000,//滚动间隔时间
visible:1,
onMouse:true,
start:0,
easing: "easeInOutBack",
});
});
</script>