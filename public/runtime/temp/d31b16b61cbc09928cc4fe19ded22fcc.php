<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\xampp\htdocs\maogod\public/../application/index\view\daili\index.html";i:1473058748;s:74:"D:\xampp\htdocs\maogod\public/../application/index\view\public\header.html";i:1473132651;s:74:"D:\xampp\htdocs\maogod\public/../application/index\view\public\footer.html";i:1473132728;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>渠道代理 - 猫神 —分享电商领导者！ -  </title>
  <meta name="format-detection" content="telephone=no, address=no">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-touch-fullscreen" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="keywords" content="分享电商,微信公众号,微商,互联网+,分销系统,微店通" />
  <meta name="description" content="以分享经济的模式帮助传统零售企业进行互联网+转型。实现O2O营销、供应链管理、链接消费者等经营需求。" />

  <link rel="stylesheet" href="<?php echo INDEX_CSS_URL; ?>style.css" />
  <script src="<?php echo INDEX_JS_URL; ?>jquery.min.js" type="text/javascript"></script>
  <!--[if lte IE 9]>
      <link rel="stylesheet" href="themes/m002/css/ieCss.css" />
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
<style>
	body{ background-color: #f2f2f2; }
</style>
<!--.container start -->
<div class="container">
	    <div class="banner" style=" background-image:url(upload/2016-06-16/8010cb6ffc9479e3364c632fcd235471.jpg)">
	    <div class="pos-r">
	    	<img class="banner-img" src="themes/m002/images/banner_blank400.jpg" alt="">
	    	<a class="banner-link" href="page-22.html" title="加入我们"></a>
	    </div>
    </div>
        <div class="main ovh les1">
    	<!--我们的优势 start-->
    	<div class="bzpeoxy-title">我们的优势</div>
    	<div class="bzpeoxy-subtitle">
    	邀您加入全国渠道合作伙伴体系，拥抱移动互联网带来的财富和机遇，您还等什么！
		别早科技 橙动中国<br>
		别早微店通正在走进每个城市，每家企业，帮助更多企业管理者解决销售渠道问题，
		别早科技携手合作伙伴，让销售简单起来。
		</div>
		<div style="margin: 0 -20px;" class="pos-r">
			<ul class="bzpeoxy-list">
				<li class="bzpeoxy-listbd">
					<div class="bzpeoxy-list-title">品牌实力筑就独特优势，产品快速迭代</div>
					<div class="bzpeoxy-list-text">
						我们2015获得A股上市公司松发股份（603208）的投资<br>
						我们将得到多家机构的巨额股权投资<br>
						我们保持每两周一个新版本的迭代<br>
						我们为超过30个行业3000家企业提供销售管理支持<br>
						我们将是红动中国的企业级分享电商领导者
					</div>
				</li>
				<li class="bzpeoxy-listbd">
					<div class="bzpeoxy-list-title">全方位支持护航渠道发展</div>
					<div class="bzpeoxy-list-text">
						我们有完整的渠道支持体系<br>
						专业人士指导培训、销售、团队<br>
						我们有完善的别早渠道培训体系<br>
						将会帮助您加深和用户之间的沟通和认识
					</div>
				</li>
			</ul>
			<ul class="bzpeoxy-list">
				<li class="bzpeoxy-listbd">
					<div class="bzpeoxy-list-title">全新商业模式和营销支持</div>
					<div class="bzpeoxy-list-text">
						我们有全新商业模式，渠道专享股份激励<br>
						坐享互联网财富<br>
						我们有完善成熟的市场营销方案，助力快速签单
					</div>
				</li>
				<li class="bzpeoxy-listbd">
					<div class="bzpeoxy-list-title">专业支持服务</div>
					<div class="bzpeoxy-list-text">
						快速的渠道售后服务响应，耐心解决用户的每一个问题<br>
						6*10小时的服务支持团队，一对一的专属客服售后<br>
						专属渠道经理支持
					</div>
				</li>
			</ul>
		</div>
		<!--我们的优势 end-->

		<!--合作优势 start-->
    	<div class="bzpeoxy-title">合作优势</div>
    	<div class="bzpeoxy-subtitle tac">成熟渠道运营经验，强大的品牌技术支持，完善的技术保障</div>
    	<div style="margin: 0 -20px;" class="pos-r">
        	<ul class="bzpeoxy-list">
				<li class="bzpeoxy-listbd2">
					<div class="bzpeoxy-list-title2"><i class="icon icon-rocket"></i>成熟的运营经验</div>
					<div class="bzpeoxy-list-text">
						具备成熟的渠道运营经验，给予渠道更多的指导和建议；<br>
						灵活多样的促销活动，给代理最大回报；<br>
						雄厚的资金背景，强大的市场投入，寻求与合作伙伴共同发展
					</div>
				</li>
				<li class="bzpeoxy-listbd2">
					<div class="bzpeoxy-list-title2"><i class="icon icon-safe"></i>完善的技术保障</div>
					<div class="bzpeoxy-list-text">
						完善的售后服务；<br>
						移动终端全国联保，没有后顾之忧；<br>
						优秀服务经理，随时解决商务问题；<br>
						强大技术支持，保证网路畅通；<br>
						物料支持、市场宣传支持、常规培训支持、法务支持等协助您开拓市场；专属渠道经理支持
					</div>
				</li>
			</ul>
		</div>
    	<!--合作优势 end-->

    	<!--代理商所获权益 start-->
    	<div class="bzpeoxy-title pt40">代理商所获权益</div>
    	<div class="bzpeoxy-subtitle tac">别早微店通能提供最好的服务，最大的支持，最完善的保障</div>
    	<ul class="bzpeoxy-agent">
    		<li class="bzpeoxy-agentlist">
    			<div class="bzpeoxy-agentlist-hd"><i class="icon icon-list"></i>推广材料支持</div>
    			<div class="bzpeoxy-agentlist-bd">
    				合作伙伴在合作期间，将会定期免费收到别早科技介绍文档、宣传彩页和单页等资料。
    			</div>
    		</li>
    		<li class="bzpeoxy-agentlist">
    			<div class="bzpeoxy-agentlist-hd"><i class="icon icon-bag"></i>商务价格支持</div>
    			<div class="bzpeoxy-agentlist-bd">
    				合作伙伴在签订正式代理协议之后，将会获得价格优惠以及销售奖励。
    			</div>
			</li>
    		<li class="bzpeoxy-agentlist">
    			<div class="bzpeoxy-agentlist-hd"><i class="icon icon-chart"></i>项目帮扶支持</div>
    			<div class="bzpeoxy-agentlist-bd">
    				合作伙伴在签订正式代理协议后，别早科技将会提供5个项目商机的跟踪支持。
    			</div>
			</li>
    		<li class="bzpeoxy-agentlist">
    			<div class="bzpeoxy-agentlist-hd"><i class="icon icon-email"></i>电话邮件支持</div>
    			<div class="bzpeoxy-agentlist-bd">
    				合作伙伴将获得6*10小时电话支持和7*24小时邮件支持。
    			</div>
			</li>
    		<li class="bzpeoxy-agentlist">
    			<div class="bzpeoxy-agentlist-hd"><i class="icon icon-camera"></i>媒体宣传支持</div>
    			<div class="bzpeoxy-agentlist-bd">
    				别早科技将会持续在各大媒体投放广告宣传和推广软文。
    			</div>
			</li>
    		<li class="bzpeoxy-agentlist">
    			<div class="bzpeoxy-agentlist-hd"><i class="icon icon-tream"></i>会议营销支持</div>
    			<div class="bzpeoxy-agentlist-bd">
    				别早科技合作伙伴将会在重点地域联合代理商开展产品推介会和营销会议。
    			</div>
			</li>
    	</ul>
    	<!--代理商所获权益 end-->
		<div class="bzpeoxy-title2 tac">
			<a href="page-22.html" class="btn btn-warming btn-lg">马上申请成为合作代理</a>
		</div>
		<div class="bzpeoxy-jion">
			<h3 class="bzpeoxy-jion-title">加盟首付款签约礼包</h3>
			<ul class="bzpeoxy-jion-list">
				<li class="bzpeoxy-jion-li">
					<div>&nbsp;</div>
					<div class="bzpeoxy-jion-li-hd">加盟首付款20万</div>
					<div class="bzpeoxy-jion-li-bd">别早区域服务中心授权<br>30套销售套装包（T恤+名片夹+别早工牌）<br>官网推荐</div>
				</li>
				<li class="bzpeoxy-jion-li">
					<div>&nbsp;</div>
					<div class="bzpeoxy-jion-li-hd">加盟首付款5万</div>
					<div class="bzpeoxy-jion-li-bd">15套销售套装包（T恤+名片夹+别早工牌）</div>
				</li>
				<li class="bzpeoxy-jion-li">
					<div>&nbsp;</div>
					<div class="bzpeoxy-jion-li-hd">加盟首付款3万</div>
					<div class="bzpeoxy-jion-li-bd">10套销售套装包（T恤+名片夹）</div>
				</li>
				<li class="bzpeoxy-jion-li">
					<div>&nbsp;</div>
					<div class="bzpeoxy-jion-li-hd">加盟首付款2万</div>
					<div class="bzpeoxy-jion-li-bd">5套销售套装包（T恤+名片夹）</div>
				</li>
			</ul>
		</div>

    </div>
</div>
<!--.container end -->
<script type='text/javascript' src='../tb.53kf.com/kf.php@arg=10132804&style=2'></script>

<!--通用尾部 start-->
 <div class="qqico">
	&amp;nbsp;<br /></div>
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