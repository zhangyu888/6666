<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\xampp\htdocs\maogod\public/../application/index\view\anli\index.html";i:1473220552;s:74:"D:\xampp\htdocs\maogod\public/../application/index\view\public\header.html";i:1473132651;s:74:"D:\xampp\htdocs\maogod\public/../application/index\view\public\footer.html";i:1473217556;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>猫神—分享电商领导者！ -  </title>
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
        <div class="banner" style=" background-image:url(<?php echo INDEX_IMAGE_URL; ?>2c43f53053eccfadee2cf2a62deb019b.jpg)">
    	<img class="banner-img" src="<?php echo INDEX_IMAGE_URL; ?>banner_blank.jpg" alt="">
    </div>
        <div class="blank30"></div>
    <div class="main clearfix">
		<div class="sideBox">
				<a class="sideBox-nav" href="pic-4.html">
			<div class="sideBox-title">案例中心</div>
			<div class="sideBox-subtitle opacity4">case</div>
		</a>
		<div class="sideBox-list">
        					
        		<?php foreach($cat_list as $cat): ?>
	      					<a class="sideBox-list-a" href="/index/anli/index/cate_id/<?php echo $cat['cate_id']; ?>"><?php echo $cat['cate_name']; ?></a>
	      					
                            
                      <?php endforeach; ?>      
                            
	      			</div>
    			</div>        <div class="rightBox">
        	<ul class="bzcase clf">
                        		<li class="bzcase-list">
        			<div class="bzcase-list-hd">
        				<div class="bzcase-list-logo">
                                                            <img alt="鑫威小家电" src="upload/2016-06-22/736d1a7933b470e051268d5868ab7d93.jpg">
                                    				</div>
        				<div class="bzcase-list-text">
        					<div class="bzcase-list-title">鑫威小家电</div>
        					<div class="bzcase-list-subtitle">九沐王旗下的家用小电器官方移动商城</div>
        				</div>
        			</div>
        			<div class="bzcase-list-bd">
        				<div class="bzcase-list-img">
        					<img src="upload/2016-06-22/8ef92b5353c93294bd3c66aa59fcdf75.jpg" alt="鑫威小家电" />
        				</div>
        				<div class="bzcase-list-ewm">
                                                            <img alt="鑫威小家电" src="upload/2016-06-22/49fa0614beba5ccef195181c8266bda4.jpg">
                                    				</div>
        			</div>
        		</li>
                        	
                            </ul>
            <div class="pgs xiaoyu_pgs clf">
                <div class="pg">
        <div class="dux-page">
          <a class="first-page" href="pic-38.html@page=1">首页</a>
          <a class="prev-page" href="pic-38.html@page=1">上一页</a> <a class="num-page active-page" href="pic-38.html@page=1">1</a><a class="next-page" href="pic-38.html@page=1">下一页</a>
          <a class="last-page" href="pic-38.html@page=1">末页</a>
        </div></div>
            </div>
        </div>
    </div>
    <div class="blank30"></div>
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

</body>
</html>