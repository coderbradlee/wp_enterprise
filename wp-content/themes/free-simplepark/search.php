<?php get_header();
$word_t9=get_option('mytheme_word_t9');
?>	
<div id="page_top">
<div class="page_top_in">
  
<h1>   <?php if($word_t9!=""){echo $word_t9;}else{echo '搜索结果：';} echo '"'.wp_specialchars($s).'"'; ?></h1>
    <p><?php if($word_t8!=""){echo $word_t8;}else{echo 'Screening using labels article';}  ?></p>
</div>

</div>

<div id="page_muen_nav">  <b><?php if(get_option('mytheme_word_t11')==""){echo  '您现在所在的位置';}else{ echo get_option('mytheme_word_t11');}; ?></b><?php if( is_front_page() || is_home()) {echo "<a>首页</a>";}else{if (function_exists('get_breadcrumbs')){get_breadcrumbs();}}?></div>
<?php get_template_part( 'category/product_nav' ); ?>
<div id="content">
<div class="left_mian"><?php get_sidebar(); ?></div>
<div class="right_mian"><?php get_template_part( 'category/loop_001' ); ?>

</div>
</div>  
    
<?php get_footer(); ?>
