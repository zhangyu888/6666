<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\goods\goods_info.html";i:1471597968;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\Public\header.html";i:1471254042;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\Public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content=""/> 
<meta name="description" content=""/>
<title><?php echo $goods['goods_name']; ?></title>

<link rel="icon" href="/favicon.ico">

<style>
*{padding:0;margin:0;}
input{border:none;}
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
input{background:#fff;border:1px solid #666;}
#main{width:1100px;;margin:0 auto;padding:10px;}
#main aside p{text-align:center;background:#81100c;line-height:30px;color:#FFF;font-size:14px;border:1px solid #5a5855;font-weight:bold;}
h4{margin:20px 0;border-bottom:2px solid #d2d1c7;padding-bottom:5px;}
h1{padding-top:20px;}
article{height:460px;width:74%;float:left;}
section{background:#fff;border:1px solid #979585;margin-bottom:10px;position:relative;}
.detail{padding:10px 15px;box-shadow:0px 2px #ccc9b3;height:430px;}
.detail_left{width:41%;float:left;}
.detail_img1{width:315px;height:315px;overflow:hidden;}
.detail_img1 img{width:100%;height:100%;}

.detail_img2 ul li{float:left;margin:25px 10px 10px 0px;width:70px;height:70px;overflow:hidden;}
.detail_img2 ul li img{width:100%;height:100%;cursor:pointer}
 

.detail_right{width:56%;height:300px;float:right;}
.detail_right1{height:150px;background:#ebebeb;margin:10px 0px;padding:10px;}
.detail_right1 ul li{margin-bottom:10px;line-height:30px;height:30px;}
.promote{color:red;font-size:22px;font-weight:bold;display:inline-block;margin-left:5px;}

.detail_right2{height:50px;background:#ebebeb;padding:10px;line-height:25px;}
.detail_right2 p{text-indent:2em;}
.detail_right3{padding:10px;}
.yunfei{padding-bottom:10px;border-bottom:1px dashed #333;}
.shu{margin-top:10px}
.num{height:25px;width:50px;}
.add,.dec{width:25px;height:12px;position:relative;cursor:pointer;}
.add:active,.dec:active{background:#CCC;}

.add{left:-4px;top:-6px;background:url(/static/index/image/add.png) center center no-repeat;}
.dec{left:-36px;top:8px;background:url(/static/index/image/dec.png) center center no-repeat;}

button{width:200px;height:35px;line-height:35px;text-align:center;border:1px solid #ff0101;font-weight:bold;cursor:pointer;}

.buy{background:#fde0e0;margin-right:15px;}
.cart{background:#7e0f0c;color:#FFF;}

.parameter{padding:10px 30px;box-shadow:0px 2px #ccc9b3;position:relative;}
.parameter ul li{line-height:25px;}
.parameter_ul1{}
.parameter_ul2{position:absolute;left:50%;top:10px;}
.title{background:#81100c;height:25px;color:#FFF;border-bottom:1px solid #5a5856;line-height:25px;}
.title span{color:#fff;font-size:14px;display:inline-block;background:#9c2a2a;width:60px;height:25px;line-height:25px;text-align:center;}
.pdetails{min-height:751px;background:#fcf7f3;border:1px solid #b58177;}
.pdetails .content{padding:30px;}





aside{width:25%;float:right;}
.login,.reg{display:block;background:#81100c;color:#FFF;margin:10px 0;height:50px;line-height:50px;font-size:25px;text-align:center;border:1px solid #5a5855;font-weight:bold;}
.kefu,.fcfaee,.notice{background:#fcfaee;border:1px solid #b27d73;}
.notice{margin-bottom:10px;}
.notice_c{padding:10px;margin:3px;font-size:9px;border:1px solid #97968e;}
.notice_c ul li{margin-bottom:5px;}
.notice_c ul li span{float:right;}
aside a img{position:relative;top:6px;left:-20px;}
.kefu_c{width:150px;margin:0 auto;padding:2px;border-radius:10px;background:#8b2420;padding:15px;color:#FFF;height:200px;margin-top:2px;}
.sq,.sh{background:url(/static/index/image/qq.png) 0 center no-repeat;height:50px;text-align:center;line-height:50px;}
.gz{text-align:center;}
.gz img{margin:10px;}
.search{margin-top:10px;height:30px;background:#8c2622;line-height:30px;color:#FFF;padding:10px;}
.sea{height:20px;background:#FFF;border-radius:5px;padding:5px;position:relative;bottom:11px;}
.sub{height:32px ;width:32px;background:url(/static/index/image/search.png) no-repeat center center;position:relative;bottom:1px;left:-4px;background-size:40px 40px;}
.search span{display:inline-block;font-size:15px;position:relative;bottom:10px;}

.userinfo{border:1px solid #b27d73;background:#fcfaee;padding:78px 5px 5px;position:relative;margin-top:2px}
.userinfo img{display:block;position:absolute;top:16px;left:26%;border-radius:50%;width:138px;height:141px;}
.userinfo_c{padding:75px 30px 10px;;background:#f8f4d9;border:1px solid #d8b5ac;}
.userinfo_c h4{border:none;text-align:center;}
.userinfo_c ul li{margin:10px;}
.userinfo_c span{}
.userinfo_c a{display:block;width:80px;height:25px;background:#c46668;text-align:center;line-height:25px;font-size:12px;margin:15px auto 0px;}
.userinfo_c span{display:inline-block;position:relative;left:20px;}

.serve,.contact{background:#fcfaee;border:1px solid #b27d73;}
.serve_c,.contact_c{margin:5px;padding:10px;border:1px solid #97968e;}
.doc{max-height:120px;}
.doc a{background:#c46668;display:inline-block;width:80px;height:25px;font-size:12px;line-height:25px;border:1px solid #97978f;color:#fff;}
.doc img{border-radius:50%;}
.doc_c{position:relative;font-size:12px;top:-60px;left:69px;line-height:23px;width:150px;}
.doc_n{font-size:15px;font-weight:bold;}
.doc_n span{font-size:12px}
.q{border-radius:50%;width:10px;height:10px;display:inline-block;background:#fff;margin:5px 0 0 5px;}
.contact{margin:10px 0;}
.contact_c {border:1px solid #97968e;}
.contact_c ul{list-style: square inside url('/static/index/image/ul.png')}
.contact_c ul li{margin:10px;}

.tip{font-size:20px;font-weight:bold;width:200px;line-height:50px;margin:0 auto;position:absolute;top:220px;background:#CCC;text-align:center;opacity:0.8;display:none;}


.ncs-cart-popup{display:none;position:fixed;top:250px;left:200px;background:url(/static/index/image/cart.gif) no-repeat center center;width:200px;line-height:40px;text-align:center;}

.reproduct{border:1px solid #be847d;background:#fcfaee;clear:both;position:relative;}
.reproduct_top{background:#81100c;height:25px;color:#FFF;}
.reproduct_top a{color:#fff;font-size:14px;display:inline-block;background:#9c2a2a;width:60px;height:25px;line-height:25px;text-align:center;border-radius:3px;}
.reproduct_top .more{position:absolute;right:20px;background:#c0575b;width:80px;}
.reproduct_c{padding:5px;max-width:200px;margin:10px 5px 10px 0px;border:1px solid #c7c5bc;display:inline-block;}
.reproduct_c img{width:200px;height:270px;}

.reproduct_ul ul li{margin:2px 0;font-size:10px;}
</style>
<script type="text/javascript" src="<?php echo INDEX_JS_URL; ?>jquery.min.js"></script>
<script type="text/javascript">
// 筛选商品属性
$(function($) {
	$(".detail_img2 ul li img").click(function(){
		
		
		src = $(this).attr('src');
		
		
		
		$(".detail_img1 img").attr('src',src);
		
		
		
	});
})

function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		//changePrice();
	}

}


 







</script>
<script type="text/javascript">

function addToCart(goodsId){
	
  var goodsNumber = Number($("#goods_number").val());
  $.post('/index/goods/add_cart',{goods_id:goodsId,goods_number:goodsNumber},function(data){
		
		if(data){
		
		$("#bold_num").html(data);	
	
	  $(".ncs-cart-popup").show();
	
	 $(".tip").fadeIn() ;
	  
	   $(".tip").fadeOut(3000) ;}else{
		   
		    $(".tip").html('请先登录');
		   	
		    $(".tip").fadeIn();
	  
	   $(".tip").fadeOut(3000);
	   
	   location.href='/index/user/login';
	   
		   }
	  
	  })
  
}

function buyNow(goodsId){
	
	var goodsNumber = Number($("#goods_number").val());
	
	location.href='/index/order/pay/goods_id/'+goodsId+'/goods_number/'+goodsNumber;
	
	
	
	
	}

function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入关键词");
            return false;
        }
    }



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
	<article>
		<section class="detail">
        	<div class="detail_left">
            	<div class="detail_img1"><img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>"></div>
                <div class="detail_img2">
                	<ul>
                		<li><img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>"></li>
                    	<li><img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>"></li>
                        <li><img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>"></li>
                        <li><img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>"></li>
                    </ul>
                </div>
            </div>
            <div class="detail_right">
            	<h1><?php echo $goods['goods_name']; ?></h1>
                <div class="detail_right1">
                	<ul>
                    	<li>价&nbsp;格：<span <?php if($goods['promote_price'] != 0): ?>style="text-decoration:line-through;"<?php endif; ?>><?php echo $goods['goods_price']; ?>/元</span></li>
                        <li>促销价:<span class="promote"><?php if($goods['promote_price'] != 0): ?>
          				<?php echo $goods['promote_price']; ?>/元
           					<?php else: ?>
         				无
          				<?php endif; ?></span></li>
                        <!--<li>本期活动：<?php echo $goods['promotion']; ?></li>-->
                        <li>五行分类：<?php echo $goods['cate_name']; ?></li>
                    </ul>
                </div>
                <div class="detail_right2">
                	产品功能介绍：
                    	<p><?php echo $goods['gx']; ?></p>
                </div>
                <div class="detail_right3">
                	<!--<div class="yunfei">运费：浙江 至 广东 ^ 8.00元</div>-->
                    <div class="tip">成功添加到购物车</div>
                    <div class="shu">
                    数量：<input class="num" id="goods_number" type="number" autocomplete="off" value="1" min="1" max="<?php echo $goods['goods_number']; ?>">
                    	 <input class="add" onclick="changenum(1)" type="button">
                         <input class="dec" onclick="changenum(-1)" type="button">
                         件
                    </div>      
                </div>
                <div class="buttons">
                	<button class="buy" onClick="buyNow(<?php echo $goods['goods_id']; ?>)">立即购买</button>
                    <button class="cart" onclick="addToCart(<?php echo $goods['goods_id']; ?>)">加入购物车</button>
                </div>
                
                <div class="ncs-cart-popup">
                
            		<dl>
              			<dd id="ncs-cart-info">购物车共有<strong id="bold_num"><?php echo $count; ?></strong>种商品</dd>
						<dd class="btns">
						<a href="/index/goods/cart" class="ncs-btn-mini ncs-btn-green" >查看购物车</a> 
						
            		</dl>
         		</div>
                
            </div>
        </section>
		<section class="parameter">
        	<div class="parameter_ul1">
            	<ul>
                	<li>厂名：</li>
                    <li>厂址：</li>
                    <li>厂家联系方式：</li>
                    <li>配料表：</li>
                    <li>储藏方法：</li>
                    <li>保质期：</li>
                    <li>食品添加剂：</li>
                    <li>包装方式：</li>
                    <li>包装商品条形码：</li>
                    <li>品牌：</li>
                </ul>
            </div>
            <div class="parameter_ul2">
            	<ul>
                	<li>系列：</li>
                    <li>规格：</li>
                    <li>燕窝品质：</li>
                    <li>燕窝形状：</li>
                    <li>采摘地点：</li>
                    <li>产地：</li>
                    <li>适用对象：</li>
                    <li>是否含糖：</li>
                    <li>是否为有机食品：</li>
                    <li>燕窝颜色：</li>
                </ul>
            </div>
        </section>
        <section class="pdetails">
        	<div class="title"><span>产品详情</span></div>
            <div class="content">
            	<?php echo htmlspecialchars_decode($goods['goods_content']); ?>
            </div>
        </section>
	</article>
    <aside>
    	<div class="notice">
             <a href="/index/article/notice_list/cat_id/1"><p>通知公告</p></a>
             <div class="notice_c">
                  <ul>
                  	   <?php if(is_array($notice_list) || $notice_list instanceof \think\Collection): if( count($notice_list)==0 ) : echo "" ;else: foreach($notice_list as $key=>$notice): ?>
							<li><a href="/index/article/notice/article_id/<?php echo $notice['article_id']; ?>" title="<?php echo $notice['article_name']; ?>"><?php echo $notice['article_name']; ?></a><span><?php echo date('m-d',$notice['create_time']); ?></span></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        	
                          
                  </ul>
             </div>
        </div>
        
        <div class="kefu">
                	<a href="/index/service/csc"><p>客服中心</p></a>
                    <div class="kefu_c">
                    	<div class="sq">售前咨询</div>
                        <div class="sh">售后咨询</div>
                        <div class="gz">手机关注:
                        	<img src="/static/index/image/er.jpg">
                        </div>
                    </div>
        </div>
            <form id="searchForm" name="searchForm" method="get" action="/index/goods/category" onSubmit="return checkSearchForm()">

        <div class="search"><input class="sea" type="text" id="keyword" name="keywords"><input class="sub" type="submit"  value="" style="cursor:pointer;"><span>站内搜索</span></div>
        
        	 </form>
        <div class="userinfo">
        	<img src="/static/index/image/portrait.jpg">
        	<div class="userinfo_c">
            	<h4><?php echo $user_info['nickname']; ?></h4>
                <ul>
                	<li>会员等级： ☆ ☆ ☆ ☆ ☆</li>
                    <li>服务医生：    李成套</li>
                    <li>上次登录：<?php echo date( 'y-m-d H:s',$user_info['last_login_time']); ?></li>
                    <li>五行简批：</li>
                </ul>
               <span>五行缺木，以绿色食物为主。</span>
                
            <a href="/index/user/">管理</a>    
                
            </div>
        </div>
        	 
        
        <a class="login" href="/index/user/login"><img src="/static/index/image/login.png">我要登陆</a>
        <a class="reg" href="/index/user/register"><img src="/static/index/image/re.png">我要注册</a>
                
        <div class="serve">
            		<a href="/index/service/otos"><p>一对一服务</p></a>
                    <div class="serve_c">
                    	<div class="doc">
                        	<img src="/static/index/image/doc1.jpg">
                            <div class="doc_c">
                            	<div class="doc_n">李成涛&nbsp;<span>主治医师</span></div>
                            	<div >擅长：各种传染性皮肤,过敏性皮肤病</div>
                            	<a href=""><span class="q"></span>&nbsp;可以咨询</a>
                            </div>
                        </div>
                        <div class="doc">
                        	<img src="/static/index/image/doc1.jpg">
                            <div class="doc_c">
                           		<div class="doc_n">付晓婷&nbsp;<span>主治医师</span></div>
                            	<div >擅长：各种传染性皮肤,过敏性皮肤病。</div>
                            	<a href=""><span class="q"></span>&nbsp;可以咨询</a>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="contact">
                	<a href="/index/article/contact_us"><p>联系我们</p></a>
                    <div class="contact_c">
                    	<ul>
                        	<li>电话：<?php echo $contact['shop_tel']; ?></li>
                            <li>微信：<?php echo $contact['shop_wx']; ?></li>
                            <li>Q&nbsp;Q：<?php echo $contact['shop_qq']; ?></li>
                            <li>传真：<?php echo $contact['shop_fax']; ?></li>
                            <li>邮编：<?php echo $contact['shop_postcode']; ?></li>
                            <li>地址：<?php echo $contact['shop_address']; ?></li>
                        </ul>
                    </div>
        </div>
         
    
 
    </aside>
    
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
