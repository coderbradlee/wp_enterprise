
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<?php if(is_single()):?> <div class="title_page"><h1><?php the_title();?></h1></div><div class="des_page"><a>TIME: <?php the_time('Y-m-d')?></a>


         <?php foreach((get_the_category()) as $category) { echo '<a href="'. get_category_link($category->cat_ID).'">' .$category->cat_name .'</a> ';}?>
         
</div>
<?php endif; ?>


  <div class="enter"> <?php the_content(); ?>
  
  <?php wp_link_pages('before=<div class="pager">&after=</div>'); ?>
  
  </div>
 <?php endwhile; endif; ?>
