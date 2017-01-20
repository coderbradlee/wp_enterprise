<div id="page_top" <?php if(get_option('mytheme_top_pic')!=""){ echo 'style="background:url('.get_option('mytheme_top_pic').')"';} ?> >
<?php if(is_page()): ?>
<div class="page_top_in">
  <?php     $post_data = get_post($post->ID, ARRAY_A);
			$slug = $post_data['post_name'];
			
			 ?>         
<h1> <?php echo get_the_title() . ' <a>'.$slug .' </a>'?></h1>
  <?php the_excerpt();?> 
</div>

<?php elseif(is_single()): ?>
<div class="page_top_in">
   <?php    $cat = get_category_root_id(the_category_ID(false));
                   $category = get_category($cat);?>
                        
<h1> <?php echo $category->name  . ' <a>'.$category->slug.' </a>'?></h1>
   <p><?php echo category_description($cat)?> </p>
</div>

<?php elseif(is_category()): ?>

<div class="page_top_in">
   <?php    $cat = get_category_root_id(the_category_ID(false));
		           $cat2 = get_query_var('cat'); 
				   $category2 = get_category($cat2);
                   $category = get_category($cat);
				   ?>    
<h1>    <?php if ( get_category_children($cat) != "" ) { echo $category->name . ' <a>'.$category->slug  .' </a>' ;} else{echo $category2->name . ' <a>'.$category2->slug  .' </a>'; }?> </a></h1>
     <?php if ( get_category_children($cat) != "" ) {echo category_description($cat); } else{echo category_description($cat2); }?> 
</div>
<?php endif; ?>
</div>

<div id="page_muen_nav">  <b><?php if(get_option('mytheme_word_t11')==""){echo '您现在所在的位置';}else{ echo  get_option('mytheme_word_t11');}; ?></b><?php if( is_front_page() || is_home()) {echo "<a>首页</a>";}else{if (function_exists('get_breadcrumbs')){get_breadcrumbs();}}?></div>