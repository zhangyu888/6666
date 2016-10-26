<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\goods\cart.html";i:1471594375;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\header.html";i:1471254042;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="Keywords" content=""/>
<meta name="Description" content=""/>
<title>我的购物车</title>
<style>
*{padding:0;margin:0;}
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
#main{width:1100px;;margin:10px auto;background:#fefdf8;border:1px solid #934946;}
.main_up{padding:30px 25px;}
.xysc{color:#81100c;font-size:50px;font-weight:bold;}
.gwc{font-size:20px;margin-left:10px;font-weight:bold;}
.sea{width:400px;height:25px;border:2px solid #a55651;padding:5px;}
.sub{background:#81100c;line-height:35px;text-align:center;width:70px;color:#FFF;font-size:20px;border:2px solid #8c2421;position:relative;right:1px;top:3px;}
.bb{display:inline-block;background:#a9a5a4;border:2px solid #8c2421;text-align:center;line-height:35px;width:70px;position:relative;left:10px;}
.sou{float:right;}
.xz{line-height:20px;padding:30px 0px 10px;border-bottom:1px solid #cdcec9;}
.yx{float:right;}
.qb,.kc{font-size:20px;font-weight:bold;}
.qb{margin-right:50px;color:#81100c;}

.js{display:inline-block;background:#c4bbbc;border:1px solid #4e4d4b;width:45px;line-height:22px;text-align:center;}

table{width:100%;padding:0px 20px 20px 20px;border-collapse:collapse;font-weight:bold;}
table a:hover{color:#F00;}

table td{width:155px;}

.tt{line-height:40px;text-align:center;}
.pro{line-height:100px;border:1px solid #999894;display:table-row;width:100%;text-align:center;}
.pro img{width:130px;height:130px;margin-top:30px;margin-right:100px;}
.db{line-height:40px;border:1px solid #999894;}
.db,.pro{background:#f8f4d9;}
.js2{font-size:20px;font-weight:bold;color:red;}
.space{height:40px;}
#total_desc{font-weight:bold;font-size:20px;color:#81100c;}



.dec,.add{width:20px;height:20px;color:#5994ee;cursor:pointer;}
.goodnum{width:35px;height:19px;line-height:20px;text-align:center;}
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
<script type="text/javascript" src="<?php echo INDEX_JS_URL; ?>jquery.min.js"></script>
  <script type="text/javascript">
            function changenum(cart_id, diff)
            {
                var goods_number =Number($('#goods_number_' + cart_id).val()) + Number(diff);    
                if(goods_number < 1)
                {
                    alert("购买数量不能少于1件");    
                }
                else
                {
                    change_goods_number(cart_id,goods_number);
                }
            }
            function change_goods_number(cart_id,goods_number)
            {     
               $.post('/index/goods/ajax_update_cart', {cart_id:cart_id ,goods_number:goods_number},change_goods_number_response);                
            }
            function change_goods_number_response(result)
            {               
                if (result)
                {
                    var cart_id = result.cart_id;
                    $('#goods_number_' +cart_id).val(result.goods_number);//更新数量
                    $('#goods_subtotal_' +cart_id).html(result.goods_subtotal);//更新小计
                   
                    $('#total_desc').html(result.total);//更新合计
					
                   
                }
			}
          /*function checkCart(){}   
		  	 
			 goods_list = "<?php echo $goods_list; ?>";	
				
		  	if(goods_list == false){
				
				alert('购物车没有商品');
				 
				//return false;
		  	}*/
  
        </script>

<script>
/*function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}*/
$(function(){
	$(".allcheck").click(function(){
		
		if($(this).attr("checked")){
		$(".check").attr("checked",false);
		}else{
			
		$(".check").attr("checked",true);	
			
			}
		
		
		
		
		
		
		
		
		
		})
	
	
	
	
	
	
	
	
	
	})




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
  <div class="main_up">
	<div class="main_title">
    	<span class="xysc">祥元商城</span><span class="gwc">购物车</span>
        <!--<div class="sou">
        	<span class="bb">宝贝</span>
        	<input class="sea" type="text"><input class="sub" type="submit" value="搜索"> 
        </div>  -->  
    </div>
	<div class="xz">
    	<span class="qb">全部商品 <?php echo $count; ?></span> <!--<span class="kc">库存紧张 0</span><span class="yx">已选商品（不含运费）<a href="/index/order/pay" class="js">结算</a> </span>-->
    </div>
	<table>
    	<tr class="tt">
    		<!--<td>&nbsp;&nbsp;<input class="allcheck" checked="checked" type="checkbox"> 全选</td>-->
            <td></td>
            <td>商品信息</td>
            <td>单价（元）</td>
            <td>数量</td>
            <td>金额</td>
            <td>操作</td>
    	</tr>
        <?php if(!(empty($goods_list) || ($goods_list instanceof \think\Collection && $goods_list->isEmpty()))): if(is_array($goods_list) || $goods_list instanceof \think\Collection): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $key=>$goods): ?>
        <tr class="pro" id="tr_goods_<?php echo $goods['cart_id']; ?>">
        	<!--<td>&nbsp;&nbsp;<input class="check" name="cart_id" checked="checked" type="checkbox" value="<?php echo $goods['cart_id']; ?>"> <img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>"></td>-->
           	<td><img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>"></td>
            <td><?php echo $goods['goods_name']; ?></td>
            <td><?php echo $goods['goods_price']; ?></td>
            <td><input class="dec" onclick="changenum(<?php echo $goods['cart_id']; ?>,-1)"  type="button" value="-" />
					<input class="goodnum" name="goods_number[<?php echo $goods['cart_id']; ?>]" id="goods_number_<?php echo $goods['cart_id']; ?>" autocomplete="off" type="text"  value="<?php echo $goods['goods_number']; ?>"/>
					<input class="add" onclick="changenum(<?php echo $goods['cart_id']; ?>,1)"  type="button" value="+" /></td>
            <td id="goods_subtotal_<?php echo $goods['cart_id']; ?>"><?php echo $goods['goods_number']*$goods['goods_price']; ?></td>
        	<td><a href="/index/goods/add_collect/goods_id/<?php echo $goods['goods_id']; ?>">加入收藏夹</a>  <a href="/index/goods/del_cart_goods/cart_id/<?php echo $goods['cart_id']; ?>">删除</a></td>
        </tr>
      	<tr class="space">
        
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        
        
        <tr class="db">
        <td colspan="3" ><!--<input class="allcheck" checked="checked" type="checkbox">全选删除-->&nbsp;<a href="/index/goods/del_cart_goods">清空购物车</a> <a href="/index/goods/">继续购物</a><!--分享--></td>
        
        <td colspan="3" align="center"><!--已选商品0件-->  合计（不含运费）：<span id="total_desc">￥<?php echo $total; ?></span>&nbsp;&nbsp;&nbsp; <a href="/index/order/pay" class="js2">结算</a></td>
        </tr >
        <tr class="space">
        	
        </tr>
        <?php else: ?>
         
        <tr><td colspan="6" align="center">购物车里还没有商品，<a  href="/index/goods/mall_center"><font color="#009900">点击购物</font></a></td></tr>
        
        <?php endif; ?>
    </table>	
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
