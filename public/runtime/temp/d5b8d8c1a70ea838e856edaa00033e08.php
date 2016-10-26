<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\goods\collect.html";i:1471345571;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\header.html";i:1471254042;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="Keywords" content="{$keywords}"/>
<meta name="Description" content="{$description}"/>
<title>收藏夹</title>
<style>
*{padding:0;margin:0;}
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
#main{width:1100px;;margin:0 auto;background:#fefdf8;}
.xysc{color:#81100c;font-size:50px;font-weight:bold;}
.gwc{font-size:20px;margin-left:10px;font-weight:bold;}
.sea{width:400px;height:25px;border:2px solid #a55651;padding:5px;}
.sub{background:#81100c;line-height:35px;text-align:center;width:70px;color:#FFF;font-size:20px;border:2px solid #8c2421;position:relative;right:1px;top:3px;}
.bb{display:inline-block;background:#a9a5a4;border:2px solid #8c2421;text-align:center;line-height:35px;width:70px;position:relative;left:10px;}
.sou{float:right;}

.scj{padding:30px 25px;border:1px solid #934946;margin:10px 0px;}

.xz{line-height:50px;margin:30px 0px 10px;border-bottom:1px solid #cdcec9;background:#f8f4d9;min-height:50px;}

.xz ul li{float:left;width:180px;font-size:18px;text-align:center;font-weight:bold;color:#81100c;}
.pro{padding:80px 0 20px 0;position:relative;border-bottom:1px solid #cecdc9;font-weight:bold;}
.pro ul{position:absolute;left:300px;bottom:20px;}
.pro ul li{float:left;margin-right:40px;}
.pro ul li img{width:70px;height:70px;}
.pron{position:absolute;bottom:60px;left:160px;}
.pro img{width:140px;height:140px;}
.dp{display:inline-block; width:60px;line-height:25px;border:1px solid #999894;background:#f8f4d9;text-align:center;position:absolute;left:300px;bottom:110px;}
.more{float:right;}
.more:hover{color:#F00;}

.tname{position:absolute;bottom:2px;right:270px;font-size:10px;}
.order6{margin-top:10px;}
.reproduct{border:1px solid #be847d;background:#fcfaee;}
.reproduct_top{background:#81100c;height:25px;color:#FFF;position:relative;}
.reproduct_top a{color:#fff;font-size:14px;display:inline-block;background:#9c2a2a;width:60px;line-height:25px;text-align:center;border-radius:3px;}
.reproduct_top .more{position:absolute;right:25px;background:#c0575b;width:80px;}
.reproduct_c{padding:5px;max-width:200px;margin:10px 5px 10px 0px;border:1px solid #c7c5bc;display:inline-block;}
.reproduct_c img{width:200px;height:270px;}
.reproduct_ul ul li{margin:2px 0;font-size:10px;}
</style>
<script>



</script>

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
	
    <div class="scj">
	<div class="main_title">
    	<span class="xysc">祥元商城</span><span class="gwc">收藏夹</span>
        <!--<div class="sou">
        	<span class="bb">宝贝</span>
        	<input class="sea" type="text"><input class="sub" type="submit" value="搜索"> 
        </div>-->   
    </div>
	<div class="xz">
    		<ul>
            	<li>全部商品&nbsp;<?php echo $count; ?></li>
                <!--<li>金类12</li>
                <li>木类15</li>
                <li>水类23</li>
                <li>火类10</li>
                <li>土类19</li>-->
            </ul>
    </div>
    <?php if($c_list): if(is_array($c_list) || $c_list instanceof \think\Collection): if( count($c_list)==0 ) : echo "" ;else: foreach($c_list as $key=>$goods): ?>
        <a href="/index/goods/goods_id/<?php echo $goods['goods_id']; ?>">
	<div class="pro">
    	
    	<img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>">
        <div class="pron">
        	<?php echo $goods['goods_name']; ?><br/><br/>
            <span style="color:#81100c;font-weight:bold;">￥<?php if($goods['promote_price'] != 0): ?><?php echo $goods['promote_price']; else: ?><?php echo $goods['goods_price']; endif; ?></span>
        </div>
        <a class="more" href="/index/goods/mall_center">查看更多>>></a>
        <!--<a class="dp" href="">找搭配</a>
        
    	<!--<ul>
        	<li><img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>"></li>
            <li><img src=""></li>
            <li><img src=""></li>
            <li><img src=""></li>
        
        </ul>-->
    
    </div>
	</a>
	<?php endforeach; endif; else: echo "" ;endif; else: ?>
    
	<p align="center">收藏夹还没有商品!</p>

	<?php endif; ?>


		
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
