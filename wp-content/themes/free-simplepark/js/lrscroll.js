(function(d){d.fn.jCarouselLite=function(e){e=d.extend({btnPrev:null,btnNext:null,btnGo:null,mouseWheel:false,auto:null,onMouse:false,speed:200,easing:null,vertical:false,circular:true,visible:3,start:0,scroll:1,beforeStart:null,afterEnd:null},e||{});return this.each(function(){var n=false,l=e.vertical?"top":"left",g=e.vertical?"height":"width";var f=d(this),p=d("ul",f),i=d("li",p),u=i.size(),t=e.visible;var s=0;if(e.circular){p.prepend(i.slice(u-t-1+1).clone()).append(i.slice(0,t).clone());e.start+=t}var r=d("li",p),o=r.size(),w=e.start;f.css("visibility","visible");r.css({overflow:"hidden","float":e.vertical?"none":"left"});p.css({margin:"0",padding:"0",position:"relative","list-style-type":"none","z-index":"1"});f.css({overflow:"hidden",position:"relative","z-index":"2",left:"0px"});var k=e.vertical?a(r):c(r);var q=k*o;var m=k*t;r.css({width:r.width(),height:r.height()});p.css(g,q+"px").css(l,-(w*k));f.css(g,m+"px");if(e.btnPrev){d(e.btnPrev).click(function(){return j(w-e.scroll)})}if(e.btnNext){d(e.btnNext).click(function(){return j(w+e.scroll)})}if(e.btnGo){d.each(e.btnGo,function(v,x){d(x).click(function(){return j(e.circular?e.visible+v:v)})})}if(e.mouseWheel&&f.mousewheel){f.mousewheel(function(v,x){return x>0?j(w-e.scroll):j(w+e.scroll)})}if(e.auto){s=setInterval(function(){j(w+e.scroll)},e.auto+e.speed)}if(e.onMouse){d(this).mouseenter(function(){if(e.auto){clearInterval(s)}});d(this).mouseleave(function(){if(e.auto){s=setInterval(function(){j(w+e.scroll)},e.auto+e.speed)}})}function h(){return r.slice(w).slice(0,t)}function j(v){if(!n){if(e.beforeStart){e.beforeStart.call(this,h())}if(e.circular){if(v<=e.start-t-1){p.css(l,-((o-t*2)*k)+"px");w=v==e.start-t-1?o-t*2-1:o-t*2-e.scroll}else{if(v>=o-t+1){p.css(l,-(t*k)+"px");w=v==o-t+1?t+1:t+e.scroll}else{w=v}}}else{if(v<0||v>o-t){return}else{w=v}}n=true;p.animate(l=="left"?{left:-(w*k)}:{top:-(w*k)},e.speed,e.easing,function(){if(e.afterEnd){e.afterEnd.call(this,h())}n=false});if(!e.circular){d(e.btnPrev+","+e.btnNext).removeClass("disabled");d(w-e.scroll<0&&e.btnPrev||w+e.scroll>o-t&&e.btnNext||[]).addClass("disabled")}}return false}})};function b(e,f){return parseInt(d.css(e[0],f))||0}function c(e){return e[0].offsetWidth+b(e,"marginLeft")+b(e,"marginRight")}function a(e){return e[0].offsetHeight+b(e,"marginTop")+b(e,"marginBottom")}})(jQuery);$(document).ready(function(){$("#nogallery_enter").children(".list-h, #enter_xz").remove();$("#nav .menu_nav li").not(".sub-menu li").append('<div class="hover"></div>');$("#nav .menu_nav li .sub-menu li").children("ul").addClass("block");$("#nav .menu_nav li").hover(function(){$(this).children(".sub-menu").not(".block").stop(true,true).fadeIn("200")},function(){$(this).children(".sub-menu").not(".block").stop(true,true).fadeOut("1000")});$("#nav .menu_nav li").not(".current-menu-item,.current-menu-ancestor,.current-category-ancestor").hover(function(){$(this).children(".hover").stop(true,true).fadeIn("200")},function(){$(this).children(".hover").stop(true,true).fadeOut("1000")});$(".loop_news li#fist .news_001_pic").mouseenter(function(){$(this).children("img").animate({width:"150px",height:"150px",left:"-10px",top:"-10px"},400)});$(".loop_news li#fist .news_001_pic").mouseleave(function(){$(this).children("img").animate({width:"130px",height:"130px",left:"0",top:"0"},400)});$(".loop_news li#ohter .news_001_pic").mouseenter(function(){$(this).children("img").animate({width:"108px",height:"108px",left:"-10px",top:"-10px"},400)});$(".loop_news li#ohter .news_001_pic").mouseleave(function(){$(this).children("img").animate({width:"88px",height:"88px",left:"0",top:"0"},400)})});if($(".footer_bottom .f_bq p .banquan").length==0){$("body").remove();$("html").append("<p><a target='_blank'href=\"http://www.themepark.com.cn\">请勿删除版权信息！务必保留页脚css类.f_bq，方可显示正常。</a></p>")}$(".footer_bottom .f_bq p  .banquan").html("技术支持：WEB主题公园");$(".footer_bottom .f_bq p  .banquan").attr("href","http://www.themepark.com.cn");$(document).mousemove(function(a){var b=$(document).width()/2-a.clientX;$("#pic_out").css({"background-position":(($(document).width()-1437)/5+b/40-100)+"px 0px"})});
