 <?php             $news1= get_option('mytheme_news1');
        
                     $category1 = get_category($news1);
				
		    ?>

<div id="left_news">
    <div class="left_news_hd">
       
        <a id="cs1" class="inopen"><?php echo $category1->name; ?></a>
      
      </div>
      
      <ul class="loop_news ">
          
             <?php  $posts = get_posts( "category=($news1)&numberposts=5" );
                     if( $posts ) :
              $counter = 0;foreach( $posts as $post ) : setup_postdata( $post );$counter++;  ?>  
               <?php if ($counter == 1 && get_query_var('paged') < 2):?>  
               <li id="photo">
             <a href="<?php the_permalink() ?>" >
             <?php  $tit= get_the_title();if (has_post_thumbnail()) { the_post_thumbnail('news-sidbar-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));} ?> 
             </a>
             <a class="titler" href="<?php the_permalink() ?>">  <?php echo mb_strimwidth(get_the_title(), 0, 25,"...") ?></a>
           </li>
               
                  
                      <?php elseif ($counter == 2 && get_query_var('paged') < 3):?> 
           <li id="fistnopic">
            
              <span>
             <b><a href="<?php the_permalink() ?>">  <?php echo mb_strimwidth(get_the_title(), 0, 45,"...") ?></a> <a class="time">TIME:<?php the_time('Y/m/d') ?></a></b>
            
            <p>  <?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($id))),0,100,"..."); ?></p>
           
             </span>
           </li>
           
          <?php else : ?> 
         
            <li id="fistnopic">
         
              <span>
             <b><a href="<?php the_permalink() ?>"> <?php echo mb_strimwidth(get_the_title(), 0, 45,"...") ?></a> <a class="time">TIME:<?php the_time('Y/m/d') ?></a></b>
            

             </span>
           </li>

           
            <?php endif; ?>
               <?php endforeach; ?>                                              
               <?php else : ?>
               <?php endif; ?>
  
      
      
      </ul>
      
     
</div>
