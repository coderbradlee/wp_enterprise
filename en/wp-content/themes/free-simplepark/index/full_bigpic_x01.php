
<?php  $case2=get_option('mytheme_case2'); 
$category = get_category($case2);

 ?>
<div id="full_ppp">
       <div class="left_news_hd" id="index_pic_oo1">
       
        <a id="cs1" class="inopen"><?php echo $category->name; ?></a>
        
    <div class="loop_big_caj_nav">
<a class="prve"target="_blank" href="<?php echo get_category_link($case2) ?>"> more</a>


 
</div>
      </div>
 




<div id="loop_big_caj" >
<ul class="bigpic_loop">

  <?php $posts = get_posts( "category=($case2)&numberposts=12" ); ?>
    <?php if( $posts ) : ?>                                       
			   <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>     
<li>
<div class="loop_big_a">
<a  href="<?php the_permalink() ?>">
  <?php   $tit= get_the_title();if (has_post_thumbnail()) { the_post_thumbnail('news-sidbar-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));}?>
  </a>
<b>
<a class="title"><?php echo mb_strimwidth(get_the_title(), 0, 20,"...") ?></a>
<a href="<?php the_permalink() ?>" class="lightboxlink"></a>
<a  href="<?php the_permalink() ?>" target="_blank" class="link"></a>

</b>
</div>

</li>

 <?php endforeach; ?>                                            
               <?php else : ?>
               <?php endif; ?> 

</ul>


</div></div>
