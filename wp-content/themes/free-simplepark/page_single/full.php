<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="enter_full enter">
<?php if(is_single()):?> <div class="title_page"><h1><?php the_title();?></h1></div><div class="des_page"><a>TIME: <?php the_time('y-m-d')?></a>
 <?php foreach((get_the_category()) as $category) { echo '<a href="'. get_category_link($category->cat_ID).'">' .$category->cat_name .'</a> ';}?>
</div><?php endif; ?>

<?php the_content(); ?>
 <?php wp_link_pages('before=<div class="pager">&after=</div>'); ?>
</div>
<div id="respond">
 <?php if ( comments_open() ){ comments_template();} ?>
</div>
<?php endwhile; endif; ?>
</div>