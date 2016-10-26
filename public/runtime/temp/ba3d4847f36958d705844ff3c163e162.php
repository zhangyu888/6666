<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\maogod\public/../application/index\view\index\index.html";i:1473219319;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>猫神</title>
  <meta name="format-detection" content="telephone=no, address=no">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-touch-fullscreen" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="keywords" content="分享电商,微信公众号,微商,互联网+,分销系统,微店通" />
  <meta name="description" content="以分享经济的模式帮助传统零售企业进行互联网+转型。实现O2O营销、供应链管理、链接消费者等经营需求。" />

  <link rel="stylesheet" href="<?php echo INDEX_CSS_URL; ?>style.css" />
  <script src="<?php echo INDEX_JS_URL; ?>jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo INDEX_JS_URL; ?>common.js" type="text/javascript"></script>

  <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?php echo INDEX_CSS_URL; ?>ieCss.css" />
    <![endif]-->
    <script language="javascript">
    function killErrors()
    {
      return true;
    }
    window.onerror = killErrors;
    </script>
</head>
<body>
<!--通用头部 start-->
  <div id="header">
    <div class="header-top">
      <div class="main tar">
        <i class="icon icon-tel"></i><span class="opacity5 mr20">24小时业务咨询：<?php echo $shop_config['shop_tel']; ?></span>
        <!--<a class="btn btn-warming" style="margin-right:8px;" href="" target="_blank">后台登录</a>
        <a class="btn btn-warming" href="" target="_blank">申请开店</a>-->
      </div>
    </div>
    <div class="header-main main flex flex-abw">
      <a class="header-logo" href="/" title="猫神—分享电商领导者！"><img width="60px" src="<?php echo INDEX_IMAGE_URL; ?>logo.png" alt="猫神—分享电商领导者！"></a>
      <ul class="header-nav flex flex-abw">
      		<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
        	<li><a class="header-nav-a" href="<?php echo $nav['nav_url']; ?>" <?php if($nav['type'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['nav_name']; ?></a></li>
    		<?php endforeach; endif; else: echo "" ;endif; ?>
      		
      
        
              </ul>
    </div>
  </div>
  <div class="header-blank"></div>
  <!-- 通用头部 end -->
<!--.container start -->
<div class="container">
	<!--幻灯片start-->
    <div class="swiper-banner">
		<div class="bd">
			<div class="swiper-wrapper">
								<div class="swiper-slide">
					<div class="swiper-slidetext">
						<img src="<?php echo $slide_list[0]; ?>">
						<a href="" target="_blank" class="banner-links" style="top:65.8%; left:3.2%"></a>
					</div>
				</div>
                				<div class="swiper-slide">
					<div class="swiper-slidetext">
						<img src="<?php echo $slide_list[1]; ?>">
						<a href="" target="_blank" class="banner-links" style="top:64.7%; left:49%"></a>
					</div>
				</div>
                				<div class="swiper-slide">
					<div class="swiper-slidetext">
						<img src="<?php echo $slide_list[2]; ?>">
						<a href="" target="_blank" class="banner-links" style="top:64.7%; left:39%"></a>
					</div>
				</div>
                			</div>
		</div>
		<ul class="pagination">
						<li></li>
						<li></li>
						<li></li>
					</ul>
		<!-- <div class="pagination"></div> -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
    <!--幻灯片end-->

    <!--产品中心 start-->
	<div class="hpanel bgf2f2f2">
		<a class="hpanel-hd" href="/index/goods"><div class="hpanel-title">产品中心</div><small class="hpanel-subtitle opacity3">PRODUCTS</small><div class="hpanel-line"></div></a>
		<div class="main ovh">
			<ul class="hpanel-bd">
            		<?php foreach($products_list as $products): ?>
								<li class="product-list">
					<a class="product-main" href="/index/goods#msproduct<?php echo $products['goods_id']; ?>">
						<div class="product-title"><?php echo $products['goods_name']; ?></div>
						<div class="product-bd flex flex-vc">
							<div class="product-icon flex-none"><img src="<?php echo $products['goods_src']; ?>" alt="<?php echo $products['goods_name']; ?>"></div>
							<div class="product-text flex-1"><?php echo $products['goods_content']; ?></div>
						</div>
					</a>
				</li>
                		<?php endforeach; ?>			
                			</ul>
		</div>					
	</div>
    <!--产品中心 end-->

    <!--案例中心 start-->
    <div class="hpanel">
		<a class="hpanel-hd" href="/index/anli"><div class="hpanel-title">案例中心</div><small class="hpanel-subtitle opacity3">case</small><div class="hpanel-line"></div></a>
		<div class="main ovh">
			<ul class="hpanel-bd">
            	<?php foreach($anli_list as $anli): ?>
								<li class="case-list">
					<div class="case-main">
						<div class="case-bd">
							<div class="case-logo">
																	<img alt="<?php echo $anli['anli_name']; ?>" src="<?php echo $anli['logo']; ?>">
	                            							</div>
							<div class="case-ewm">
																	<img alt="<?php echo $anli['anli_name']; ?>" src="<?php echo $anli['image']; ?>">
	                            							</div>
						</div>
						<div class="case-title"><?php echo $anli['anli_name']; ?></div>
					</div>
				</li>
                		<?php endforeach; ?>		
                			</ul>
		</div>
	</div>
    <!--案例中心 end-->
    
    <!--资讯中心 start-->
    <div class="hpanel bgf2f2f2">
		<a class="hpanel-hd" href="/index/article/news_list"><div class="hpanel-title">资讯中心</div><small class="hpanel-subtitle opacity3">news</small><div class="hpanel-line"></div></a>
		<div class="main clearfix">
        
        <?php if(is_array($cat_list) || $cat_list instanceof \think\Collection): if( count($cat_list)==0 ) : echo "" ;else: foreach($cat_list as $k=>$cat): ?>
        
			<div class="news-industry <?php if($k==0): ?>fl<?php else: ?>fr<?php endif; ?>">
				<div class="news-title"><?php echo $cat['cat_name']; ?><a class="news-title-more" href="/index/article/news_list/cat_id/<?php echo $cat['cat_id']; ?>">更多>> </a></div>
				<div class="news-bd">
                		<?php foreach($article_list[$k] as $article): ?>	
				 						<a class="news-list" href="/index/article/news_article/article_id/<?php echo $article['article_id']; ?>">
						<div class="news-list-times"><?php echo date( "Y-m-d",$article['create_time']); ?></div>
						<div class="news-list-text"><span class="list-spot">·</span><?php echo $article['article_name']; ?></div>
					</a>
                    	<?php endforeach; ?>
                    				</div>
			</div>
			<!--<div class="news-business fr">
            
            
				<div class="news-title">企业资讯<a class="news-title-more" href="/index/article/news_list/cat_id/<?php echo $cat['cat_id']; ?>">更多>> </a></div>
				<div class="news-bd">
										<a class="news-list" href="/index/article/news_article/article_id/<?php echo $article['article_id']; ?>">
						<div class="news-list-times"><?php echo date( "Y-m-d",$article['create_time']); ?></div>
						<div class="news-list-text"><span class="list-spot">·</span><?php echo $article['article_name']; ?></div>
					</a>
                    				
                    	
                    				</div>
			</div>-->
            <?php endforeach; endif; else: echo "" ;endif; ?> 
		</div>
       
	</div>
    <!--资讯中心 end-->
</div>
<!--.container end -->

<!-- 页面js -->
<script src="<?php echo INDEX_JS_URL; ?>jquery.SuperSlide.2.1.1.js"></script>
<script>
	$(function(){
		$(".swiper-banner").slide({mainCell:".swiper-wrapper",effect:"leftLoop",autoPlay:true, prevCell:".swiper-button-prev", nextCell:".swiper-button-next",titCell:".pagination li", interTime:5000 });
	})
</script>

<!--通用尾部 start-->
<div class="qqico">
	&nbsp;<br /></div>
<div id="footer">
	<div class="footer-top">
		<div class="main flex flex-abw">
			<a href="/" title="猫神 —分享电商领导者！" class="footer-logo tac flex-none">
				<img src="<?php echo INDEX_IMAGE_URL; ?>logo2.png" alt="猫神 —分享电商领导者！"  />
				<div class="opacity56">让天下没有难做的电商</div>
			</a>
			<div class="footer-contact">
				<h3 class="footCont-title opacity98">联系我们</h3>
				<div class="footCont-info opacity8">
					<p>
	24小时业务咨询：4008873799
</p>					<p>电子邮箱：biezaoMT@163.com</p>
					<p>地　　址：广州市天河区黄埔大道中207号伟诚商务大厦6-7楼</p>	
				</div>
			</div>
			<div class="footer-ewm tac">
				<div class="footEwm-list">
					<p>
	<img src="upload/2016-07-22/3f95e63a85f9f970ce057e97913627e3.jpg" alt="" />
</p>
<p>
	官方订阅号
</p> 
				</div>
				<div class="footEwm-list">
					<img src="upload/2016-06-16/b3566b656f3402d31bf64098c216bdc3.jpg" alt="" /> 
<div class="opacity6">
	官方服务号
</div> 
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom tac">
		Copyright &copy;2013-2016 www.biezao.com.All Rights Reserved.广州别早网络科技有限公司 版权所有<br />
粤ICP备11035598号 &nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration:none;height:20px;line-height:20px;" href="sssss's" target="_blank"><img src="upload/2016-06-16/d0289dc0a46fc5b15b3363ffa78cf6c7.png" /> 粤公网安备 44010602000805号 </a>	</div>
</div>
<!--通用尾部 end-->

</body>
</html>