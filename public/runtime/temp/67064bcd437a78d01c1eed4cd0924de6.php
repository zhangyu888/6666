<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\goods\mall_center.html";i:1471938797;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\header.html";i:1471854413;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="祥元健康"/> 
<meta name="description" content="祥元健康"/>
<title>商城中心</title>
<style>
*{padding:0;margin:0;}

body{background:#f8f4d9;color:#000;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}

input{border:none;}
.center_top{background:#fcfaec;height:90px;position:relative;line-height:90px;border-bottom:1px solid #5e5b52;}
.center_top h1{position:absolute;left:28%;}

.search{margin:10px 0px;;height:20px;background:#bb474d;line-height:20px;color:#FFF;padding:10px;position:absolute;width:250px;top:15%;right:28%;}
.sea{height:15px;background:#FFF;border-radius:3px;padding:5px;position:absolute;top:7px;width:150px;left:5px;}
.sub{height:30px ;width:30px;background:url(/static/index/image/search.png) no-repeat center center;position:absolute;bottom:6px;left:142px;background-size:30px 30px;}
.search span{display:inline-block;font-size:15px;position:absolute;bottom:10px;right:22px;}

#main{width:1100px;;margin:0 auto;padding-bottom:10px;height:3462px;}
#main a:hover{color:#F00;}
.main_banner{height:200px;background:#e8e8e4;position:relative;}
.main_banner ul li{width:10px;height:10px;border-radius:50%;border:1px solid #333;float:left;margin:7px;}
.main_banner ul{position:absolute;left:45%;bottom:20px;}
.main_banner ul .on{background:#000;}


.content{height:100%;}
article{width:70%;float:left;}
section{margin-top:10px;background:#fcfaec;height:460px;}
section h4{background:#912e2a;color:#FFF;height:40px;line-height:40px;padding-left:80px;position:relative;}
section h4 a{color:#FFF;position:absolute;right:20px;top:5px;}
.section1{height:420px;}
.section2 h4{text-align:center;}
.menu1,.menu2{width:210px;margin:10px 0px 10px 10px;background:#dfd7d7;height:400px;;float:left;position:relative;}

.menu1 .on,.menu2 .on{color:#F00;}

.menu1 ul{position:absolute;left:70px;top:70px;}
.menu1 ul li{line-height:60px;}

.menu2 ul{position:absolute;left:70px;top:70px;}
.menu2 ul li{line-height:60px;}
.menu1  a,.menu2  a{color:#912e2a;font-weight:bold;}


.g{padding:5px;}
.g img{width:100%;height:80%;}



.sec_r{width:540px;margin:10px 0px;;height:400px;float:right;}
.sec_r div{display:inline-block;width:30%;height:195px;margin-bottom:5px;background:#dfd7d7;border-radius:5px;}

.g0,.g4{width:210px;margin:10px 0px 10px 10px;;height:400px;height:48.5%;margin-bottom:9px;background:#dfd7d7;border-radius:5px;}


.sec_r0{margin:10px 0px;;height:400px;}


.sec_r0 .g{display:inline-block;width:21.5%;height:190px;margin-bottom:5px;background:#dfd7d7;border-radius:5px;}


.g0,.g4{width:200px !important;margin:0px 0px 10px 10px;;height:400px;height:48.5%;margin-bottom:9px;background:#dfd7d7;border-radius:5px;}


aside h4{background:#912e2a;color:#FFF;height:40px;line-height:40px;text-align:center;margin-top:10px;}

aside{width:29%;float:right;}
aside .right{margin-bottom:10px;height:317px;background:#fcfaec;border:1px solid #a45349;border-radius:2px;padding:5px;}
aside .right img{width:100%;height:80%;}

.like{background:#dfd7d7;height:70px;text-align:center;line-height:70px;font-weight:bold;border-radius:5px;border:none;}
</style>
<script type="text/javascript">
    
   
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
<script type="text/javascript">
    
   
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
   
   $(function(){
	   $(".menu1 a,.menu2 a").click(function(){
		   
		   $(this).addClass('on');
		   $(this).siblings().removeClass('on');
		   
		   })
	   
	   
	   
	   })
    </script>
<div class="center_top">
	<h1>祥元商城</h1>
    <form id="searchForm" name="searchForm" method="get" action="/index/goods/category" onSubmit="return checkSearchForm()">
    <div class="search">
        	<input class="sea" type="text" id="keyword" name="keywords"  value=""><input class="sub" type="submit"  value=""  style="cursor:pointer;"><span>站内搜索</span>
    </div>
    </form>
</div>
<div id="main">
	<div class="main_banner">
    	<img src="">
        <img src="">
        <img src="">
    	<ul>
        	<li class="on"></li>
            <li></li>
            <li></li>
        </ul>
    </div>
	<div class="content">
    	<article>
        	<section class="section1">
            	<div class="menu1">
                	<ul>
                    	<a href="/index/goods/love_goods_list" target="goods_0"><li>猜你喜欢</li></a>
                        <a href="/index/goods/love_goods_list/act/sb" target="goods_0"><li>食补</li></a>
                        <a href="/index/goods/love_goods_list/act/yb" target="goods_0"><li>药补</li></a>
                        <a href="/index/goods/love_goods_list/act/sg" target="goods_0"><li>水果</li></a>
                        <a href="/index/goods/love_goods_list/act/sc" target="goods_0"><li>蔬菜</li></a>
                    </ul>
                </div>
                 <iframe src="/index/goods/love_goods_list" name="goods_0" frameborder="0" class="sec_r">
                
                	
                    
                </iframe>
            </section>
            <section class="section2">
            	<h4>所有分类<a href="/index/goods/category/cate_id/">更多>></a></h4>
                	
                <div class="menu2">
                	<ul>
                    	<?php if(is_array($cate_list) || $cate_list instanceof \think\Collection): if( count($cate_list)==0 ) : echo "" ;else: foreach($cate_list as $key=>$cate): ?>
                        	<a href="/index/goods/cate_goods_list/cate_id/<?php echo $cate['cate_id']; ?>" target="goods"><li><?php echo $cate['cate_name']; ?></li></a>	
                        
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                
                <iframe src="/index/goods/cate_goods_list" name="goods" frameborder="0" class="sec_r">
                
                	
                    
                </iframe>
                
            </section>
            
            <?php if(is_array($cate_list) || $cate_list instanceof \think\Collection): if( count($cate_list)==0 ) : echo "" ;else: foreach($cate_list as $key=>$cate): ?>
            <section>
            	<h4><?php echo $cate['cate_name']; ?><a href="/index/goods/category/cate_id/<?php echo $cate['cate_id']; ?>">更多>></a></h4>
                
                 <div class="sec_r0">
                 	<?php if(is_array($cate_goods_list[$key]) || $cate_goods_list[$key] instanceof \think\Collection): if( count($cate_goods_list[$key])==0 ) : echo "" ;else: foreach($cate_goods_list[$key] as $key=>$goods): ?>
                    <a href="/index/goods/goods_info/goods_id/<?php echo $goods['goods_id']; ?>" title="<?php echo $goods['goods_name']; ?>">
                 	<div class="g g<?php echo $key; ?>"><img src="<?php echo $goods['goods_src']; ?>"><p><?php echo $goods['goods_name']; ?></p><p><?php if($goods['promote_price'] != "0"): ?> 
          <?php echo $goods['promote_price']; ?>/元
          <?php else: ?>
          <?php echo $goods['goods_price']; ?>/元
          <?php endif; ?></p></div>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                 </div>
                <!--<div class="l">
                	<div></div>
                    <div></div>
                </div>
                
                
                <div class="sec_r">
                	<div class=""></div>
                    <div class=""></div>
                    <div class=""></div>
                    <div class=""></div>
                    <div class=""></div>
                    <div class=""></div>
                </div>-->
                
            </section>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            
            
        </article>
                     
        <aside>
        	<h4>精品推荐</h4>
            <?php if(is_array($best_goods) || $best_goods instanceof \think\Collection): if( count($best_goods)==0 ) : echo "" ;else: foreach($best_goods as $key=>$goods): ?>
             <a href="/index/goods/goods_info/goods_id/<?php echo $goods['goods_id']; ?>" title="<?php echo $goods['goods_name']; ?>">
        	<div class="right">
             <img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>" class="goodsimg" /><br/>
           <p><?php echo $goods['goods_name']; ?></p>
           <font class="f1">
           <?php if($goods['promote_price'] != '0'): ?> 
          <?php echo $goods['promote_price']; ?>/元
          <?php else: ?>
          <?php echo $goods['goods_price']; ?>/元
          <?php endif; ?>
           </font>
            </div>
            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            
          
            <div class="like">买你所爱</div>
            <h4>促销商品</h4>
            <?php if(is_array($promote_goods) || $promote_goods instanceof \think\Collection): if( count($promote_goods)==0 ) : echo "" ;else: foreach($promote_goods as $key=>$goods): ?>
             <a href="/index/goods/goods_info/goods_id/<?php echo $goods['goods_id']; ?>" title="<?php echo $goods['goods_name']; ?>">
        	<div class="right">
             <img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>" class="goodsimg" /><br />
           <p><?php echo $goods['goods_name']; ?></p>
           <font class="f1">
           <?php if($goods['promote_price'] != "0"): ?> 
          <?php echo $goods['promote_price']; ?>/元
          <?php else: ?>
          <?php echo $goods['goods_price']; ?>/元
          <?php endif; ?>
           </font>
            </div>
            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          
            
        </aside>
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
