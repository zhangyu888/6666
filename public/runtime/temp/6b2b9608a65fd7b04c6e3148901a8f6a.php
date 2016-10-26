<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\service\otos.html";i:1471080770;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\Public\header.html";i:1471254042;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\Public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="{$keywords}"/> 
<meta name="description" content="{$description}"/>
<title>一对一服务</title>
<style>
*{padding:0;margin:0;}
input{border:none;}
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
input{background:#fff;border:1px solid #666;}
#main{width:1100px;;margin:0 auto;}
.one_s{margin:10px 0px;background:#fcfaee;border:1px solid #b58176;padding:20px 150px;height:965px;text-align:center;position:relative;}
h1{color:#7f0f0d;text-align:center;padding:20px 0px;width:50%;margin:0 auto;border-top:1px solid #a55852;border-bottom:1px solid #a55852;}


.one_s ul li{float:left;width:389px;height:180px;margin-top:40px;}
.li2,.li4,.li6,.li8{position:relative;left:180px;}
.one_s ul li img{border-radius:50%;width:100px;height:100px;float:left;margin-right:10px;}

.one_s ul li h4{margin-right:160px;}

.one_s ul li a{display:inline-block;background:#c46667;color:#FFF;font-size:22px;line-height:40px;width:150px;box-shadow:1px 1px 1px #96968e;border:1px solid #96968e;}
.one_s ul li p{width:50%;margin:20px auto;line-height:2em;text-align:left;}
.one_s ul li a span{display:inline-block;background:#fffeff;border-radius:50%;width:15px;height:15px;margin-right:10px;}


.reproduct{border:1px solid #be847d;background:#fcfaee;clear:both;position:relative;margin-bottom:20px;}
.reproduct_top{background:#81100c;height:25px;color:#FFF;}
.reproduct_top a{color:#fff;font-size:14px;display:inline-block;background:#9c2a2a;width:60px;height:25px;line-height:25px;text-align:center;border-radius:3px;}
.reproduct_top .more{position:absolute;right:20px;background:#c0575b;width:80px;}
.reproduct_c{padding:5px;max-width:200px;margin:10px 5px 10px 0px;border:1px solid #c7c5bc;display:inline-block;}
.reproduct_c img{width:200px;height:270px;}

.reproduct_ul ul li{margin:2px 0;font-size:10px;}
</style>

</head>

<body>
<link rel="stylesheet" type="text/css" href="<?php echo INDEX_CSS_URL; ?>common.css"/>
<script src="<?php echo INDEX_JS_URL; ?>jquery.min.js"></script>
<script src="<?php echo INDEX_JS_URL; ?>common.js"></script>
<div class="top"></div>
<header>
	
	<div class="logo">
    	<img src="<?php echo INDEX_IMAGE_URL; ?>logo.png">
    	<div class="logo2"><img src="<?php echo INDEX_IMAGE_URL; ?>logo2.png"></div>
    </div>
	<div class="btn">
		<div class="sy"><a href="javascript:void(0);" onclick="setHomePage(this,window.location)"><img src="<?php echo INDEX_IMAGE_URL; ?>menu1.jpg"></a></div>
        <div class="sc"><a href="javascript:void(0);" onclick="AddFavorite(document.title,window.location)"><img src="<?php echo INDEX_IMAGE_URL; ?>menu2.jpg"></a></div>
	</div>
    <nav>
		<ul>
        	<?php echo $ceshi; if(is_array($nav_list) || $nav_list instanceof \think\Collection): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
        	<li <?php if($key == 0): ?>class="home"<?php endif; ?>><a href="<?php echo $nav['nav_url']; ?>" <?php if($nav['type'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['nav_name']; ?></a></li>
    		<?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<li class="home"><a href="/">首页</a></li>
        	<li><a href="/index/article/about_us">公司简介</a></li>
        	<li><a href="/index/goods/mall_center">商城中心</a></li>
        	<li><a href="/index/order/pay">用户留言</a></li>
        	<li><a href="/index/user/">高级会员</a></li>
        	<li><a href="/index/article/contact_us">联系我们</a></li>-->
						
        </ul>
	</nav>
</header>
<div id="main">
	<div class="one_s">
	<h1>一对一服务</h1>
    <ul>
    	<li>
        	<img src="<?php echo INDEX_IMAGE_URL; ?>/doc1.jpg">
            <h4>李成涛  主治医师</h4>
            <p>擅长：各种传染性皮肤,过敏性皮肤病阿斯顿阿三请问去啊额我</p>
        	<a href=""><span></span>可以咨询</a>
        </li>
        <li class="li2">
        	<img src="">
            <h4>李成涛  主治医师</h4>
            <p>擅长：各种传染性皮肤,过敏性皮肤病阿斯顿阿三请问去啊额我</p>
            <a href=""><span></span>可以咨询</a>
        </li>
        <li>
        	<img src="">
            <h4>李成涛  主治医师</h4>
            <p>擅长：各种传染性皮肤,过敏性皮肤病阿斯顿阿三请问去啊额我</p>
        	<a href=""><span></span>可以咨询</a>
        </li>
        <li class="li4">
        	<img src="">
            <h4>李成涛  主治医师</h4>
            <p>擅长：各种传染性皮肤,过敏性皮肤病阿斯顿阿三请问去啊额我</p>
            <a href=""><span></span>可以咨询</a>
        </li>
        <li>
        	<img src="">
            <h4>李成涛  主治医师</h4>
            <p>擅长：各种传染性皮肤,过敏性皮肤病阿斯顿阿三请问去啊额我</p>
        	<a href=""><span></span>可以咨询</a>
        </li>
        <li class="li6">
        	<img src="">
            <h4>李成涛  主治医师</h4>
            <p>擅长：各种传染性皮肤,过敏性皮肤病阿斯顿阿三请问去啊额我</p>
        	<a href=""><span></span>可以咨询</a>
        </li>
        <li>
        	<img src="">
            <h4>李成涛  主治医师</h4>
            <p>擅长：各种传染性皮肤,过敏性皮肤病阿斯顿阿三请问去啊额我</p>
        	<a href=""><span></span>可以咨询</a>
        </li>
        <li class="li8">
        	<img src="">
            <h4>李成涛  主治医师</h4>
            <p>擅长：各种传染性皮肤,过敏性皮肤病阿斯顿阿三请问去啊额我</p>
        	<a href=""><span></span>可以咨询</a>
        </li>
    	
    
    
    </ul>
    </div>
	<div class="reproduct">
    	<div class="reproduct_top">
             	<a href="">向您推荐</a>
                <a class="more" href="/index/goods/mall_center">更多>>></a>
        </div>
        
      <?php if(is_array($best_goods) || $best_goods instanceof \think\Collection): if( count($best_goods)==0 ) : echo "" ;else: foreach($best_goods as $key=>$goods): ?>
        <a href="/index/goods/goods_info/goods_id/<?php echo $goods['goods_id']; ?>" title="<?php echo $goods['goods_name']; ?>">
    	<div class="reproduct_c">
        	<img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>">
            <div class="reproduct_ul">
            	<h5><?php echo $goods['name']; ?></h5>
            	<ul>
                	<li>价 格：<span <?php if($goods['promote_price'] != 0): ?>style="text-decoration:line-through;"<?php endif; ?>><?php echo $goods['goods_price']; ?>/元</span></li>
                    <li style="color:red;">促销价：<?php if($goods['promote_price'] != 0): ?>
          <?php echo $goods['promote_price']; ?>/元
          <?php else: ?>
         无
          <?php endif; ?></li>
                    <li>五行分类：<?php echo $goods['cate_name']; ?></li>
                </ul>
            </div>
        </div>
        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>	
</div>

<footer>
	<div class="footer1">
    	<div class="footer1_1">
        	<ul>
        		<li class="list1">
                	<p class="footer1_1_title">正品保障</p>
                    <p>正品保障，提供发票</p>
                </li>
            	<li class="list2">
                	<p class="footer1_1_title">急速物流</p>
                    <p>急速物流，急速到达</p>
                </li>               
            	<li class="list3">
                	<p class="footer1_1_title">无忧售后</p>
                    <p>7天无理由退换货</p>
                </li>
            	<li class="list4">
                	<p class="footer1_1_title">特色服务</p>
                    <p>私人订制套餐</p>
                </li>
            	<li class="list5">
                	<p class="footer1_1_title">帮助中心</p>
                    <p>您的购物指南</p>
                </li>
        	</ul>
        </div>
        <div class="footer1_2">    
        	<ul>
        		<li>
                	<p class="footer1_2_title">购物指南</p>
                	
                    <p><a href="">导购指示</a></p>
                    <p><a href="">免费注册</a></p>
                    <p><a href="">会员等级</a></p>
                    <p><a href="">常见问题</a></p>
                    
                </li>
            	<li>
                	<p class="footer1_2_title">支付方式</p>
                	
                    	<p><a href="">网银支付</a></p>
                       	<p><a href="">快捷支付</a></p>
                        <p><a href="">分期付款</a></p>
                        <p><a href="">货到付款</a></p>
                   
                </li>
            	<li>
                	<p class="footer1_2_title">物流配送</p>
                	
                    	<p><a href="">免运费政策</a></p>
                       	<p><a href="">配送服务承诺</a></p>
                        <p><a href="">签收验货</a></p>
                        <p><a href="">物流园查询</a></p>
                    
                </li>
            	<li>
                	<p class="footer1_2_title">售后服务</p>
                	
                    	<p><a href="">退换货政策</a></p>
                       	<p><a href="">退换货服务</a></p>
                        <p><a href="">退款说明</a></p>
                        <p><a href="">维修/保养</a></p>
                    
                </li>
            	<li>
                	<p class="footer1_2_title">商家服务</p>
                	
                    	<p><a href="">信息公告</a></p>
                       	<p><a href="">广告服务</a></p>
                        <p><a href="">服务市场</a></p>
                        <p><a href="">培训中心</a></p>
                    
                </li>
            	<li>
                	<p class="footer1_2_title">客户端</p>
                	<img src="/static/index/image/er.jpg">
                </li>
        	</ul>
        </div>   
    </div>
    
	<div class="footer2">
    
    </div>
    
</footer>
</body>
</html>
