<!--[if lt IE 10]> 
<script>
 $(document).ready(function() {
 $("div.full,.index_swipers").css('height', window.innerHeight+'px')


$(window).resize(function() { $("div.full,.index_swipers").css('height', window.innerHeight+'px');
$(".index_swipers").css('width', window.innerWidth+'px');
$(".index_swipers .swiper-slide").css('width', window.innerWidth+'px');
});
  var index_swipers = new Swiper('.index_swipers',{
     pagination: '.index_p',
     paginationClickable: true,
	 speed:1000,
loop:true,
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
  
 });
  </script>
  <![endif]-->
    <!--[if !IE]><!-->  
	<script>
	 $(document).ready(function() {
  $("div.full,.index_swipers").css('height', window.innerHeight+'px');

$(window).resize(function() { $("div.full,.index_swipers").css('height', window.innerHeight+'px');
$(".index_swipers").css('width', window.innerWidth+'px');
$(".index_swipers .swiper-slide").css('width', window.innerWidth+'px');
});
  var index_swipers = new Swiper('.index_swipers',{
     pagination: '.index_p',
     paginationClickable: true,
	 speed:1000,
loop:true,
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
  
 });
  </script> <!--<![endif]-->
