<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\goods\category.html";i:1471419161;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\header.html";i:1471854413;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="祥元健康"/> 
<meta name="description" content="祥元健康"/>
<title>产品类别</title>
<style>
*{padding:0;margin:0;}
body{background:#f8f4d9;color:#000;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
.location{padding:10px 0px;}
input{border:none;}
#main{width:1100px;;margin:0 auto;padding-bottom:10px;height:1450px;}
.main_top{height:150px;border:1px solid #525249;background:#fcfaec;}
aside{float:left;width:15%;height:1000px;}
.classify{background:#fcfaec;border:1px solid #57574e;}
.classify ul li{line-height:40px;padding-left:40px;border-bottom:1px solid #57574e;font-weight:bold;}
.classify ul li:hover{background:#FF9;}
.classify .on{display:block;background:#FF9;}

.search{margin:10px 0px;;height:15px;background:#bb474d;line-height:15px;color:#FFF;padding:10px;position:relative;}
.sea{height:15px;background:#FFF;border-radius:3px;padding:5px;position:absolute;top:5px;width:93px;left:2px;}
.sub{height:25px ;width:25px;background:url(/static/index/image/search.png) no-repeat center center;position:absolute;bottom:5px;left:80px;background-size:30px 30px;border-radius:3px;cursor:pointer;}
.search span{display:inline-block;font-size:15px;position:absolute;bottom:10px;right:14px;}
.ads{min-height:939px;background:#fcfaec;border:1px solid #525249;padding:3px;}
.ads h4{text-align:center;line-height:25px;}

.content{float:right;width:84%;height:1000px;}
.content_ul{background:#fcfaec;border:1px solid #57574e;}
.content_ul ul li{line-height:61px;padding-left:60px;border-bottom:1px solid #57574e;}

.menu{background:#bb474d;padding-left:20px;height:35px;line-height:35px;color:#FFF;margin:10px 0px;}
.menu ul{height:35px;}
.menu ul li{float:left;width:100px;text-align:center;font-weight:bold;}
.menu ul li a{color:#FFF;display:inline-block;width:100%;height:100%;}
.menu ul li:hover{background:#B90000;}
.menu .on{background:#B90000;}

.prolist{height:937px;}
.center{width:82%;height:100%;float:left;}


.product{width:181px;height:305px;display:inline-block;margin-bottom:5px;border:1px solid #c7c4ae;background:#fcfaec;position:relative;}
.product_img{width:180px;height:180px;border:1px solid #57574e;}
.product_ul ul{position:absolute;top:187px;}

.product_ul ul li{padding:5px 0px 5px 15px;}

.right{width:16.6%;height:100%;float:right;background:#fcfaec;border:1px solid #525249;padding:3px;}

.right img{width:100%;height:100%;}

.right a{display:block;height:150px;}

.right h4{text-align:center;line-height:25px;}

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
	
	$(".classify ul a").click(function(){
		
		href = $(this).attr("href");
		 
		$(this).addClass('on');
		
		$(this).siblings().removeClass('on');
		  
		$(".menu ul li a:eq(0)").attr("href",href+"/act/click");
		$(".menu ul li a:eq(1)").attr("href",href+"/act/sales");
		$(".menu ul li a:eq(2)").attr("href",href+"/act/goods_price");
		
		here = $(this).children('li').text();
		
		$(".location").text('当前位置:首页>'+here);
		
		})
	
	
	
	
	
	
	$(".menu ul li").click(function(){
		
		
		$(this).addClass('on');
		
		$(this).siblings().removeClass('on');
		
		
		})
	
	
	})

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



<div id="main">
	<div class="main_top">
	</div>
    <p class="location"><?php echo $ur_here; ?>当前位置:首页><?php if($cate_name): ?><?php echo $cate_name; else: ?>所有分类<?php endif; ?></p>
	<aside>
    	<div class="classify">
        	<ul>
            	<a href="/index/goods/goods_list" <?php if(!$cate_id): ?>class='on'<?php endif; ?> target="goods"><li>所有分类</li></a>
                <?php if(is_array($cate_list) || $cate_list instanceof \think\Collection): if( count($cate_list)==0 ) : echo "" ;else: foreach($cate_list as $key=>$cate): ?>
                <a <?php if($cate_id == $cate['cate_id']): ?>class='on'<?php endif; ?> href="/index/goods/goods_list/cate_id/<?php echo $cate['cate_id']; ?>" target="goods"><li><?php echo $cate['cate_name']; ?></li></a>
               
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
         <form id="searchForm" name="searchForm" method="get" action="/index/goods/category" onSubmit="return checkSearchForm()">
        <div class="search">
        	<input class="sea" type="text" id="keyword" name="keywords" value=""><input class="sub" type="submit"  value=""><span>搜索</span>
        </div>
         </form>
         
        <div class="ads">
        <h4>广告位</h4>	
        </div>
    </aside>
    <div class="content">
    	<div class="content_ul">
        	<ul>
            	
	
    <li>
      <strong>品牌</strong>
      &nbsp;&nbsp;1 2 3 4 5 6 7 8
           
           
    </li>
  
    <li>
    <strong>价格</strong>
    	  &nbsp;&nbsp;<a href="">100-500</a> <a href="">500-1000</a> <a href="">1000-2000</a> <a href="">2000-5000</a> <a href="">5000-10000</a>
        
    </li>
   
	<li>
    <strong>功能</strong>
   
          &nbsp;&nbsp;食补 药补 
      
    </li>

	<li><strong>种类</strong>
    
    	   &nbsp;&nbsp;中药  
    </li>
		
       
            	
            </ul>
        </div>
        <div class="menu">
        	<ul>
            	<li><a href="/index/goods/goods_list/act/click/cate_id/<?php echo $cate_id; ?>" target="goods">综合人气</a></li>
                <!--<li><a href="" target="goods">排序</a></li>-->
                <li><a href="/index/goods/goods_list/act/sales/cate_id/<?php echo $cate_id; ?>" target="goods">销量</a></li>
                <li><a href="/index/goods/goods_list/act/goods_price/cate_id/<?php echo $cate_id; ?>" target="goods">价格</a></li>
            </ul>
        </div>
        <div class="prolist">
        	<iframe class="center" src="/index/goods/goods_list<?php if($keywords): ?>/keywords/<?php echo $keywords; endif; ?>/cate_id/<?php echo $cate_id; ?>" name="goods" frameborder="0">
            	
            </iframe>
           
               
        	<div class="right">
             <h4>产品推荐</h4>
             
             
              <?php if(is_array($new_goods) || $new_goods instanceof \think\Collection): if( count($new_goods)==0 ) : echo "" ;else: foreach($new_goods as $key=>$goods): ?>
              
             <a href="/index/goods/goods_info/goods_id/<?php echo $goods['goods_id']; ?>" title="<?php echo $goods['goods_name']; ?>">
             <img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>" class="goodsimg" /><br/>
           <p><?php echo $goods['goods_name']; ?></p>
           <font class="f1">
           <?php if($goods['promote_price'] != 0): ?> 
          <?php echo $goods['promote_price']; ?>/元
          <?php else: ?>
          <?php echo $goods['goods_price']; ?>/元
          <?php endif; ?>
           </font>
             </a>
             
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
          
          
        </div>
        
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
