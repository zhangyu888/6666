<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\xampp\htdocs\maogod\public/../application/index\view\goods\index.html";i:1473144503;s:74:"D:\xampp\htdocs\maogod\public/../application/index\view\public\header.html";i:1473132651;s:74:"D:\xampp\htdocs\maogod\public/../application/index\view\public\footer.html";i:1473217556;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>产品中心 - 猫神 —分享电商领导者！ -  </title>
  <meta name="format-detection" content="telephone=no, address=no">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-touch-fullscreen" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="keywords" content="分享电商,微信公众号,微商,互联网+,分销系统,微店通" />
  <meta name="description" content="以分享经济的模式帮助传统零售企业进行互联网+转型。实现O2O营销、供应链管理、链接消费者等经营需求。" />
   <link rel="stylesheet" href="<?php echo INDEX_CSS_URL; ?>style.css" />
  <script src="<?php echo INDEX_JS_URL; ?>jquery.min.js" type="text/javascript"></script>
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
 <script src="<?php echo INDEX_JS_URL; ?>common.js" type="text/javascript"></script>
<div id="header">
    <div class="header-top">
      <div class="main tar">
        <i class="icon icon-tel"></i><span class="opacity5 mr20">24小时业务咨询：<?php echo $shop_config['shop_tel']; ?></span>
        <!--<a class="btn btn-warming" style="margin-right:8px;" href="" target="_blank">后台登录</a>
        <a class="btn btn-warming" href="" target="_blank">申请开店</a>-->
      </div>
    </div>
    <div class="header-main main flex flex-abw">
      <a class="header-logo" href="default.htm" title="猫神—分享电商领导者！"><img width="60px" src="<?php echo INDEX_IMAGE_URL; ?>logo.png" alt="猫神—分享电商领导者！"></a>
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
	    <div class="banner" style=" background-image:url(<?php echo INDEX_IMAGE_URL; ?>f919a7c038edd82aaf7653c5664920a1.jpg)">
    	<img class="banner-img" src="<?php echo INDEX_IMAGE_URL; ?>banner_blank400.jpg" alt="">
    </div>
        <ul class="bzproduct">
        
        
        
        
    		    	<li class="bzproduct-list">
	    		<div id="bzproduct1" class="bzproduct-anchor"></div>
	    		<div class="bzproduct-main">
		    		<dl class="bzproduct-table">
		    			<dt class="bzproduct-icon"><img src="<?php echo INDEX_IMAGE_URL; ?>02012df24987818e6a899cb08047b17a.png" alt="产品中心"></dt>
		        		<dd class="bzproduct-bd">
		        			<div class="bzproduct-title">移动商城</div>
		        			<div class="bzproduct-text"><p>
	在企业自身微信公众号的基础上建立线上商城，线上线下同时营销，为打通互通渠道做准备。
</p>
<p>
	<br />
</p></div>
		        		</dd>
		        	</dl>
		        </div>
	    	</li>
        	    	
                    
                    
                    
            </ul>
</div>
<!--.container end -->
	
<!--通用尾部 start-->
 <div class="qqico">
	&nbsp;<br /></div>
<div id="footer">
	<div class="footer-top">
		<div class="main flex flex-abw">
			<a href="/" title=" 猫神—分享电商领导者！" class="footer-logo tac flex-none">
				<img src="<?php echo INDEX_IMAGE_URL; ?>logo2.png" alt="猫神 —分享电商领导者！"  />
				<div class="opacity56">让天下没有难做的电商</div>
			</a>
			<div class="footer-contact">
				<h3 class="footCont-title opacity98">联系我们</h3>
				<div class="footCont-info opacity8">
					<p>
	24小时业务咨询：<?php echo $shop_config['shop_tel']; ?>
</p>					<p>电子邮箱：<?php echo $shop_config['shop_email']; ?></p>
					<p>地　　址：<?php echo $shop_config['shop_address']; ?></p>	
				</div>
			</div>
			<div class="footer-ewm tac">
				<div class="footEwm-list">
					<p>
	<img src="" alt="衢州猫神官方订阅号" />
</p>
<p>
	官方订阅号
</p> 
				</div>
				<div class="footEwm-list">
					<img src="" alt="衢州猫神官方服务号" /> 
<div class="opacity6">
	官方服务号
</div> 
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom tac">
		Copyright &copy;2013-2016 www.biezao.com.All Rights Reserved.衢州猫神网络科技有限公司 版权所有<br />
浙ICP备11035598号 &nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration:none;height:20px;line-height:20px;" href="" target="_blank"><img src="" /> 浙公网安备 44010602000805号 </a>	</div>
</div> 

<!--通用尾部 end-->
<script>
(function() {
  var _53code = document.createElement("script");
  _53code.src = "//tb.53kf.com/code/code/10132804/1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(_53code, s);
})();
</script>
</body>
</html>