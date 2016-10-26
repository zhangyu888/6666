<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\order\order_list.html";i:1471937049;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\header.html";i:1471854413;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="祥元健康"/> 
<meta name="description" content="祥元健康"/>
<title>我的订单</title>
<style>
*{padding:0;margin:0;}
body{background:#f8f4d9;color:#000;font-size:14px;}
/*div{border:1px solid #b58177;}*/
ul{list-style:none;}
a{text-decoration:none;color:#000;}
#main{width:1100px;;margin:0 auto;}
h5{padding:5px 0;}
.order_list{height:400px;background:#fcfaee;margin:10px 0px;padding:80px 60px 40px;position:relative;border:1px solid #b37e75;}
.order_list ul li{float:left;}

.list_title{height:35px;border-bottom:#d2d1c7 2px solid;}

.list_title ul{height:35px;}
.order_title ul{height:30px;}

.list_title ul li{width:100px;height:35px;line-height:40px;}
.order_title ul li{width:130px;text-align:center;height:30px;line-height:30px;}

.order_title{height:30px;line-height:2px;margin:15px 0;background:#f9f4d1;border:1px solid #800f0c}
.list_title .on{color:red;}

.product_list{height:100px;margin-bottom:10px;background:#f7f5ed;padding:20px 10px;border:1px solid #807f79;}
.product_list ul{height:100px;}
.product_list ul li{width:129px;height:100px;line-height:100px;text-align:center;}

.pro_name{width:300px !important;}
.pro_name span{display:inline-block;position:relative;top:-44px;left:-30px;}
.pro_name img{position:relative;top:0px;right:37px;width:100px;height:100px;}
.pro_price{width:100px !important;}

.page{height:30px;position:absolute;bottom:40px;right:55px;line-height:30px;}
.page a{margin:0px 5px;}
.previous{display:inline-block;width:100px;height:30px;text-align:center;border:1px solid #b0afa6;}
.next{display:inline-block;width:100px;height:30px;text-align:center;border:1px solid #b0afa6;}

.reproduct{border:1px solid #be847d;background:#fcfaee;}
.reproduct_top{background:#81100c;height:25px;color:#FFF;position:relative;}
.reproduct_top a{color:#fff;font-size:14px;display:inline-block;background:#9c2a2a;width:60px;line-height:25px;text-align:center;border-radius:3px;}
.reproduct_top .more{position:absolute;right:25px;background:#c0575b;width:80px;}
.reproduct_c{padding:5px;max-width:200px;margin:10px 5px 10px 0px;border:1px solid #c7c5bc;display:inline-block;}
.reproduct_c img{width:200px;height:270px;}
.reproduct_ul ul li{margin:2px 0;font-size:10px;}
</style>
</head>

<body>
<link rel="stylesheet" type="text/css" href="<?php echo INDEX_CSS_URL; ?>common.css?1"/>
<script src="<?php echo INDEX_JS_URL; ?>jquery.min.js"></script>
<script src="<?php echo INDEX_JS_URL; ?>common.js"></script>
<div class="top"></div>
<header>
	
	<div class="logo">
    	<img width="70px" height="90px" src="<?php echo INDEX_IMAGE_URL; ?>logo.png">
    	<div class="logo2"><img width="230px" height="35px"  src="<?php echo INDEX_IMAGE_URL; ?>logo2.png"></div>
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
	<div class="order_list">
    	<div class="list_title">
        	<ul>
            	<a href="/index/order/order_list"><li class="on">所有订单</li></a>
                <a href="/index/order/order_list/s/0"><li>待付款</li></a>
                <a href="/index/order/order_list/s/1"><li>待发货</li></a>
                <a href="/index/order/order_list/s/2"><li>待收货</li></a>
                <!--<a href="/index/order/order_list/s/"><li>待评价</li></a>-->
            </ul>
        </div>
        <div class="order_title">
        	<ul>
            	<li>订单编号</li>
            	<li class="pro_name">产品名称</li>
                <li>单价（元）</li>
                <li>数量</li>
                <li>合计（元）</li>
                <li>日期</li>
            </ul>
        </div>
        <?php if($order_list): foreach($order_list as $order): foreach($order['goods_list'] as $goods): ?>
        <div class="product_list">
            	
                	<ul>
                    	<li><?php echo $order['order_sn']; ?></li>
                    	<li class="pro_name"><img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>"><span><?php echo $goods['goods_name']; ?></span></li>
                        <li class="pro_price"><?php echo $goods['goods_price']; ?></li>
                        <li><?php echo $goods['buy_number']; ?></li>
                       
                        <li style="color:red;"><?php echo $goods['buy_number']*$goods['goods_price']; ?></li>
                        <li><?php echo date( 'Y-m-d H:i:s',$goods['create_time']); ?></li>
                	</ul>                              
           
        </div>
          <?php endforeach; endforeach; else: ?>
                    <div style="text-align:center;padding:10px 0;">暂时没有订单!</div>
                    <?php endif; ?>    
    	
    	
         <div class="page">
            	<!--<a class="previous" href="">上一页</a>
                <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
				<a class="next" href="next ">下一页</a> -->
                <?php echo $html_page; ?>      
         </div>
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
