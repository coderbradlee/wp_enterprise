<?php get_header();?>
<div class="full">

    <div class="index_swipers swiper-container">
         <div class="swiper-wrapper">
	<?php 	 dynamic_sidebar('sidebar-widgets');?>

         </div>
          <div class="pagination index_p"></div>
          <a class="index_next"></a>
          <a class="index_prve"></a>
    </div>
    

</div>
   <!--[if lt IE 10]> 
  <script>
  var index_swipers = new Swiper('.index_swipers',{
     pagination: '.index_p',
     paginationClickable: true,
	 speed:15000,
  
     	 loop: true,
     onSlideChangeStart: function(swiper){
$.news_open();
	}	,
    onFirstInit: function(swiper){$.news_open()}	
     	
  })
  
   $('.index_prve').on('click', function(e){
    e.preventDefault()
    index_swipers.swipePrev()
  })
  $('.index_next').on('click', function(e){
    e.preventDefault()
    index_swipers.swipeNext()
  })
  </script>
  <![endif]-->
    <!--[if !IE]><!-->  
	<script>
  var index_swipers = new Swiper('.index_swipers',{
     pagination: '.index_p',
     paginationClickable: true,
	 speed:1000,

	 loop: true,
onSlideChangeStart: function(swiper){
$.news_open();
	},
	onFirstInit: function(swiper){$.news_open()}	 
  });
  
   $('.index_prve').on('click', function(e){
    e.preventDefault()
    index_swipers.swipePrev()
  })
  $('.index_next').on('click', function(e){
    e.preventDefault()
    index_swipers.swipeNext()
  })
  </script> <!--<![endif]-->
    <div class="content_out <?php if(!get_option("mytheme_donghuaopen")) {echo 'donghuaopen';}?>">

    <?php  dynamic_sidebar('index_content'); ?>
    
  
    </div>



<?php 


 get_footer(); ?>
