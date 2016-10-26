<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\article\dc_list.html";i:1471421693;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\header.html";i:1471254042;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="{$keywords}"/> 
<meta name="description" content="{$description}"/>
<title>在线调查</title>
<style>
*{padding:0;margin:0;}
input{border:none;}
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
input{background:#fff;border:1px solid #666;}
#main{width:1100px;;margin:0 auto;}
.diaocha{margin:10px 0px;background:#fefdf8;border:1px solid #b58176;padding:60px 40px;height:965px;position:relative;}
.diaocha h2{padding-bottom:5px;border-bottom:1px solid #949293;}
.diaocha h2 img{margin-right:15px;}
.diaocha table{width:100%;margin-top:20px;border-bottom:2px solid #949391; border-collapse: collapse;}
.diaocha table th{font-size:20px;line-height:50px;background:#e6eaeb;border-top:1px solid #949293;}
.diaocha table td{line-height:50px;font-size:18px;text-align:center;border-top:1px solid #949293;border-bottom:1px solid #949293;}
tr:nth-child(odd) {background:#e6eaeb;} 

.page{line-height:120px;padding-left:50px;}
.page form{display:inline-block;}

.reproduct{border:1px solid #be847d;background:#fcfaee;clear:both;position:relative;}
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
	<div class="diaocha">
		<h2><img  src="/static/index/image/quan.jpg">在线调查</h2>
        <table>
        	<tr>
            	<th>标题</th>
                <th>创建时间</th>
                <th>发布人</th>
                <th>参加</th>
        	</tr>
             <?php if(is_array($artciles_list) || $artciles_list instanceof \think\Collection): if( count($artciles_list)==0 ) : echo "" ;else: foreach($artciles_list as $key=>$article): ?> 
            <tr>
            	<td><a href="" title="<?php echo $article['article_name']; ?>" class="f6"><?php echo $article['article_name']; ?></a></td>
                <td><?php echo $article['add_time']; ?></td>
                <td><?php echo $article['author']; ?></td>
                <td></td>
        	</tr>
           
              <?php endforeach; endif; else: echo "" ;endif; ?> 
        </table>
        <div class="page">
        	共  记录&nbsp;&nbsp; <a href="">[首页]</a>   <a href="">[尾页]</a> <form method="post" action="">跳转至 <select><option value="">1</option></select> 页</form>
         
         
         
         					       
         
         
         
         
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
