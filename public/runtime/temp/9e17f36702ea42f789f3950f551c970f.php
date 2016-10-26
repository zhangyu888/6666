<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\order\pay.html";i:1471659903;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\header.html";i:1471854413;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\Public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>支付页</title>
<style>
*{padding:0;margin:0;}

body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
input{background:#fbf6e0;border:1px solid #666;}
#main{width:1100px;;margin:0 auto;padding:10px;}
h4{margin:20px 0;border-bottom:2px solid #d2d1c7;padding-bottom:5px;}
h5{padding:5px 0;}
.orderinfo{padding:50px 35px 5px;background:#fcfaee;border:1px solid #be847d;margin-bottom:10px;}
.address_ul a{color:#5994ee;}

.address_ul ul li{line-height:62px;padding:0px 20px;}

.address_ul ul li label{display:inline-block;line-height:62px;width:900px;} 

.address_ul .on{background:#f9f5d2;min-height:20px;line-height:20px;border:1px solid #800f0c;}


.address_a{display:inline-block;min-height:50px;color:#5994ee;line-height:50px;padding-left:50px;}


.order1,.order2,.order5{background:#fbf6e0;position:relative;}
.order3,.order6{background:#d1cec9;min-height:40px;border:1px solid #807f79}

.goods{min-height:100px;padding:10px;position:relative;border:1px solid #807f79;font-weight:bold;margin-bottom:2px;}
.goods img{margin-top:8px;}

.goods_t{position:absolute;left:150px;bottom:15px;}

.goods_t span{display:inline-block;margin-bottom:10px;}
.goods_t input{width:250px;height:25px;}


.dec,.add{width:20px;height:20px;color:#5994ee;cursor:pointer;}
.dec:active,.add:active{background:#CCC;}

.goodnum{width:35px;height:19px;line-height:20px;text-align:center;}
.submit{display:inline-block;background:#fb9f8a;height:30px;width:250px;line-height:30px;text-align:center;float:right;clear:both;margin:10px 10px 0;border-radius:2px;border:1px solid #b77f75;font-size:1.5em;cursor:pointer;}
.order1{margin:20px 0 10px;min-height:30px;line-height:30px;border:1px solid #be847d;}
.order1 span{text-align:center;}
.order1_1{display:inline-block;width:360px;}
.order1_2{display:inline-block;width:160px;}
.order1_3{display:inline-block;width:160px;}
.order1_4{display:inline-block;width:160px;}
.order1_5{display:inline-block;width:150px;}

.order2_1{display:inline-block;width:360px;}
.order2_1 img{width:130px;height:130px;}

.order2_2{display:inline-block;width:110px;text-align:center;position:relative;bottom:40px;}
.order2_3{display:inline-block;width:240px;text-align:center;}
.order2_4{display:inline-block;width:80px;text-align:center;position:relative;bottom:40px;}
.order2_5{display:inline-block;width:184px;text-align:center;position:relative;bottom:40px;color:red;}


.order3{line-height:40px;padding-right:90px;}
.order3 span{float:right;}
.order2{min-height:80px;}
.order4{min-height:50px;line-height:50px;float:right;padding-right:50px;}
.order5{clear:both;min-height:80px;border:1px solid #be847d;}
.tprice{padding-right:90px;height:20px;float:right;line-height:20px;margin-top:10px;}

.taddress{position:absolute;bottom:20px;right:270px;font-size:10px;}
.consignee{position:absolute;bottom:2px;right:270px;font-size:10px;}
.order6{margin-top:10px;}


.reproduct{border:1px solid #be847d;background:#fcfaee;position:relative;}
.reproduct_top{background:#81100c;height:25px;color:#FFF;}
.reproduct_top a{color:#fff;font-size:14px;display:inline-block;background:#9c2a2a;width:60px;line-height:25px;text-align:center;border-radius:3px;}
.reproduct_top .more{position:absolute;right:20px;background:#c0575b;width:80px;}
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
<script>
$(function(){
	$(".address_ul ul li").click(function(){
		
		$(this).addClass("on");
		$(this).children("a").show();
		$(this).siblings("li").removeClass("on");
		
		$(this).siblings("li").children("a").hide();
		
		a=$(this).find('.a').text();
		
		c=$(this).find('.c').html(); 
		
		t=$(this).find('.t').html();
		
		
		
		$(".taddress").html("送达地址："+a);
		
		
		$(".consignee").html("收货人："+c+" "+t);
		
		
		})
	
	
	})	
		
 function changenum(cart_id,diff)
            {
                var goods_number =Number($('#goods_number_' + cart_id).val()) + Number(diff);    
                if(goods_number < 1)
                {
                    alert("购买数量不能少于1件");
					return false;    
                }
                else
                {
                    change_goods_number(cart_id,goods_number);
                }
            }
            function change_goods_number(cart_id, goods_number)
            {     
			
				
               $.post('/index/goods/ajax_update_cart', {cart_id:cart_id ,goods_number:goods_number}, change_goods_number_response);                
            }
            function change_goods_number_response(result)
            {               
                if (result)
                {
                    var cart_id = result.cart_id;

                    $('#goods_number_' +cart_id).val(result.goods_number);//更新数量
                    $('#goods_subtotal_' +cart_id).html(result.goods_subtotal);//更新小计
                   
					//total = ;
					
					
					
					if("<?php echo $goods_id; ?>" == true){
						
					result.total = 	result.goods_subtotal;
					 }
						
					
                    $('#total_desc span span').html(result.total);//更新合计
                  	  $('.tprice span').html(result.total);
					
									
					
                }
                          
            }
			
			


/*function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}
$(function(){
	$(".dec,.add").click(function(){
		number = $("#goods_number").val();
		price = $(".order2_2").html();
		
		
		//t_price = ;
		
		
		total_price = (number*price);
		
		$(".order2_5 font").html(total_price);
		
		})
	
	})*/





</script>
<div id="main">
	<div class="orderinfo">
    	<form action="/index/order/addorder" method="post">
    	<div class="address">
        	<h4>确认收货地址</h4>
            	<?php if($address_list): ?>
            <div class="address_ul">
            	<ul>
                	
                	<?php if(is_array($address_list) || $address_list instanceof \think\Collection): if( count($address_list)==0 ) : echo "" ;else: foreach($address_list as $key=>$address): ?>
                    
                     <li <?php if($address['is_default'] == 1): ?>class='on'<?php endif; ?>><label><input name="address_id" <?php if($address['is_default'] == 1): ?>checked<?php endif; ?> type="radio" value="<?php echo $address['address_id']; ?>">&nbsp;<span class="a"><?php echo $address['address']; ?>&nbsp;(<span class="c"><?php echo $address['consignee']; ?></span> 收)&nbsp;<span class="t"><?php echo $address['tel']; ?></span></span></label><a <?php if($address['is_default'] == 1): ?>style='display'<?php else: ?>style='display:none;'<?php endif; ?> href="/index/user/index/act/address/address_id/<?php echo $address['address_id']; ?>">修改本地址</a></li>
                     
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                
            </div>
            <?php else: ?>
            没有收货地址
            <?php endif; ?>
            <a class="address_a" href="/index/user/index/act/address/">使用其他地址</a>
        </div>
        <div class="order">
        	<h4>确认订单信息</h4>
            <div class="order1">
            	<span class="order1_1">产品名称</span>
                <span class="order1_2">单价（元）</span>
                <span class="order1_3">数量</span>
               <span class="order1_4">优惠</span>
                <span class="order1_5">小计（元）</span>
            </div>
            <div class="order2">
          		
            	<?php if(is_array($goods_list) || $goods_list instanceof \think\Collection): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $key=>$goods): ?>
            	<div class="goods">
            		<span class="order2_1">
                		<img src="<?php echo $goods['goods_src']; ?>">
                    	<div class="goods_t">
                        	<span><?php echo $goods['goods_name']; ?></span>
                        	<br><input type="text" name="message" placeholder="给卖家留言。。。。。">
                        </div>    
               		</span>
                	<span class="order2_2"><?php echo $goods['goods_price']; ?></span>
                	<span class="order2_3">
                	<input class="dec"  type="button" onclick="changenum(<?php echo $goods['cart_id']; ?>,-1)" value="-" />
					<input id="goods_number_<?php echo $goods['cart_id']; ?>" class="goodnum"  name="goods_number[<?php echo $goods['cart_id']; ?>]" type="text" value="<?php echo $goods['goods_number']; ?>"/>
					<input class="add"  type="button" onclick="changenum(<?php echo $goods['cart_id']; ?>,1)" value="+" />
                    <br>
                   
                    <br>运送方式：<select name="kuaidi" style="width:100px; background:#faf7df">
  									<option value="">顺丰</option>
  									<option value="">韵达</option>
  									<option value="">中通</option>
                    			</select>
                	</span>
               		<span class="order2_4">无</span>
                	<span class="order2_5" id="goods_subtotal_<?php echo $goods['cart_id']; ?>"><?php echo $goods['goods_number']*$goods['goods_price']; ?></span>
                 </div>
                 <?php endforeach; endif; else: echo "" ;endif; ?>
               
            </div>
            <div class="order3" id="total_desc"><span>合计价格（含运费）&nbsp;&nbsp;<span style="font-weight:bold;color:red;font-size:20px;"><?php echo $total; ?></span></span></div>
            <div class="order4"><label><input name="pay_type" type="radio" checked="checked" value="1">&nbsp;微信支付</label>&nbsp;<label><input name="pay_type" type="radio" value="2" >&nbsp;支付宝支付</label></div>
            <div class="order5">
            	<div class="tprice">实收价格：&nbsp;<span style="font-weight:bold;color:red;font-size:19px;"><?php echo $total; ?></span></div>
            		<div class="taddress">送达地址：<?php echo $address_d['address']; ?>(<?php echo $address_d['consignee']; ?> 收)<?php echo $address_d['tel']; ?></div>
            		<div class="consignee">收货人：<?php echo $address_d['consignee']; ?> <?php echo $address_d['tel']; ?></div>
                 
                 
                 <input name="goods_id" type="hidden" value="<?php echo $goods_id; ?>"> 
                 
                   
                    
                <input type="submit" name="submit" class="submit" onclick="javascript:this.disabled=-1;" value="确认付款"/>
            </div>
            <div class="order6"></div>
        </div>
        </form>
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
