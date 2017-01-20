<div class="xiaot">
                      <b class="bt">选择色系</b><br />
                      <p>这款主题提供了4种颜色可选，请选择颜色</p>
                  <?php $theme_color= get_option('mytheme_theme_color');  ?>   
               </select>
    
    
                  <label  for="theme_color ">是否连接到文章:</label>
                  <select name="theme_color" id="theme_color">
	     
          <option value=''<?php if ( $theme_color ==="" ) {echo "selected='selected'";}?>>橙色（默认）</option>
          <option value='/css/red.css'<?php if ( $theme_color ==="/css/red.css" ) {echo "selected='selected'";}?>>蓝色</option>
           <option value='/css/purple.css'<?php if ( $theme_color ==="/css/purple.css" ) {echo "selected='selected'";}?>>绿色</option>
           <option value='/css/cafe.css'<?php if ( $theme_color ==="/css/cafe.css" ) {echo "selected='selected'";}?>>咖啡色</option>
		
	</select>
    
               </div>
               
                <div class="up">
                 
                     
                    <b class="bt">ICO图标上传</b>
                    <input type="text" size="80"  name="ico" id="ico" value="<?php echo get_option('mytheme_ico'); ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                    <p><a href="http://www.themepark.com.cn/icotpssmrhzzicowj.html" target="_blank">ico是什么？ico图片制作教程</a></p>
                </div>       
                
                
                
				<div class="up">
                  <b class="bt">LOGO的图片地址</b>
                     <div class="yulan">
                  <?php if (get_option('mytheme_logo')!=""): ?>
                    <img title="logo预览" src="<?php echo get_option('mytheme_logo'); ?>"alt="logo预览" /> 
                 <?php else : ?>
                    <img title="上传图片，这里可以预览" src="<?php bloginfo('template_url'); ?>/images/xuanxiang/yulan2.gif"alt="上传图片，这里可以预览"/>
                    <?php endif; ?>  
                    
                     </div>
                    <input type="text" size="80"  name="logo" id="logo" value="<?php echo get_option('mytheme_logo'); ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                    <p>请上传logo图片，图片格式为PNG,或者带有深色底色的jpg和gif均可（ 高度为100px，宽度自定，宽度请勿上传太大，以防止导航位置不够。）</p>
                </div>    
                
                
                	
                
            
              <div class="xiaot">
                      <b class="bt">调用数据选项</b><br />
                      <p><strong style="color:#F00;">请注意</strong>：你建立了一些分类和页面，想要他们调用在首页上，程序傻傻分不清楚，所以你要手动选择一下，在选择之前，一定要记得建立好分类和页面哦！<strong>小提示：在此处指定好分类，程序就会知道调用那些分类的文章去这些模块，你可以再布局设置中设置他们的位置，如果不需要某些模块，这里的分类可以不需要选择</strong>你可以点击这里对照演示主题的样式：<a  target="_blank" href="http://www.themepark.com.cn/demo/?themedemo=moban10">首页演示</a></p>
                    
                      </p>
                        </div>
                     <div class="xiaot">
                     <b class="bt">焦点图</b><br />
                     <img  src="<?php bloginfo('template_url'); ?>/images/xuanxiang/themepark-help_02.jpg" />
                    <p>这个主题的焦点图是使用文章来调用的，这样你就可以设置无线张数的焦点图，并且程序更加优化，建立一个分类，目录并在下面指定，即可使用文章编辑中的焦点图选项调用了。</p>
              <label  for="hot_cat">请选择分类目录:</label>
                  <select name="hot_cat" id="hot_cat">
	 <option value=''>请选择</option>
		<?php 
		 $categorys = get_categories(array('hide_empty' => 0));
		 $hot_cat= get_option('mytheme_hot_cat');
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $hot_cat == $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
   <p>目前最大限制为20张焦点图，设置过多的焦点图可能会使你的网站加载变慢，推荐设置5张以下的焦点图，并且在上传时，请压缩图片到最小<a target="_blank" href="http://www.themepark.com.cn/sqzykflhdwtxw.html">如何压缩图片？</a></p> 
                      </div>
                      
  
         
     
      
      <div class="xiaot">
                     <b class="bt">新闻目录和视频模块</b><br />
                        <img  src="<?php bloginfo('template_url'); ?>/images/xuanxiang/themepark-he2221lp.jpg" />
                    <p>免费版本不支持多个栏目切换，目前只支持一个栏目单独显示，付费版本支持4个栏目切换</p>
              <label  for="news1">请选择新闻1:</label>
                  <select name="news1" id="news1">
	 <option value=''>请选择</option>
		<?php 
		 $categorys = get_categories(array('hide_empty' => 0));
		 $news1= get_option('mytheme_news1');
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if (  $news1== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
    
     
       
     <p>视频[视频请复制优酷等通用视频代码粘贴在此，此处也支持html代码]</p>
            <textarea name="video" cols="86" rows="4" id="video"><?php echo stripslashes(get_option('mytheme_video')); ?></textarea>    
                     
                      </div>
               
                      
                       <div class="xiaot">
                     <b class="bt">产品展示</b><br />
                      <img  src="<?php bloginfo('template_url'); ?>/images/xuanxiang/themepark-he5456.jpg" />
                     <p>免费版本的产品展示不支持滑块，付费版本支持2个不同样式的滑块</p>
             <?php  

			         $case1=get_option('mytheme_case1'); 
					 $case2=get_option('mytheme_case2'); 
					 $case3=get_option('mytheme_case3');  
			 ?>

      <label  for="case2">选择滑块1，以4张大图轮播形式</label>
                  <select name="case2" id="case2">
	 <option value=''>请选择</option>
		<?php 
		 $categorys = get_categories(array('hide_empty' => 0));
		 $case= get_option('mytheme_case');
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if (  $case2== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
   

                      </div>    
 
            
           <div class="xiaot">
            <b class="bt">底部文章</b><br />
            <p>在网站的底部，可以看到一个十图的展示，这里你可以设定一个分类目录，将这些内容以小图的方式展示出来.</p>
                     <?php   $footer_loop=get_option('mytheme_footer_loop'); 
		                     $footer_loop_bt=get_option('mytheme_footer_loop_bt'); 
				             $footer_loop_other=get_option('mytheme_footer_loop_other');	
		               ?>
            
       
          <p>
           
           <label  for="footer_loop_bt">模块标题：</label>        
            <input type="text" size="20"  name="footer_loop_bt" id="footer_loop_bt" value="<?php if($footer_loop_bt!=""){echo $footer_loop_bt;}else {echo 'HOT READ';} ?>"/>   
        </p>
              <label  for="footer_loop">请选择分类目录:</label>
                  <select name="footer_loop" id="footer_loop">
	 <option value=''>请选择</option>
		<?php 
		 $customers = get_categories(array('hide_empty' => 0));
		 $footer_loop=get_option('mytheme_footer_loop'); 
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if (  $footer_loop== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
    </div>
     
     <div class="xiaot">
      <b class="bt">单图片模块</b><br />
        <P>上传二维码，可以使你的微信图片，你也可以上传一张广告图片，图片尺寸为130*130</P>
           <div class="up">
           <input type="text" size="60"  name="footer_loop_other" id="footer_loop_other" value="<?php echo $footer_loop_other; ?>"/  /> 
           <input type="button" name="upload_button" value="上传" id="upbottom"/>   
        </div>
       </div>      
              
                                                     
            
            
            
           
                   
                         
           
                   
                     