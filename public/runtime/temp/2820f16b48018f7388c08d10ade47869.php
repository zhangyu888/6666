<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\cesuan\result.html";i:1471312339;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\Public\header.html";i:1471254042;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\Public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="祥元健康"/> 
<meta name="description" content="祥元健康"/>
<title>测算详情页</title>
<link rel="icon" href="/favicon.ico">

<style>
*{padding:0;margin:0;}
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
input{background:#fbf6e0;border:1px solid #666;}
#main{width:1100px;;margin:0 auto;padding:10px;}
#main aside p{text-align:center;background:#81100c;line-height:25px;color:#FFF;font-size:16px;border:1px solid #5a5855;font-weight:bold;}
h4{margin:20px 0;border-bottom:2px solid #d2d1c7;padding-bottom:5px;}

article{height:460px;width:74%;float:left;}
section{background:#fcfaee;height:150px;border:1px solid #b9877c;margin-bottom:10px;padding:0px 30px;}
.solution{height:300px;}
.noresult{padding:10px;font-size:20px;text-align:center;}


aside{width:25%;float:right;}
.login,.reg{display:block;background:#81100c;color:#FFF;margin:10px 0;height:50px;line-height:50px;font-size:25px;text-align:center;border:1px solid #5a5855;font-weight:bold;}
.kefu,.notice{background:#fcfaee;border:1px solid #b27d73;}
.notice{margin-bottom:10px;}
.notice_c{padding:10px;margin:3px;font-size:9px;border:1px solid #97968e;min-height:50px;}
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
.userinfo img{display:block;position:absolute;top:16px;left:26%;border-radius:50%;}
.userinfo_c{padding:75px 30px 10px;;background:#f8f4d9;border:1px solid #d8b5ac;}
.userinfo_c h4{border:none;text-align:center;}
.userinfo_c ul li{margin:10px;}
.userinfo_c span{}
.userinfo_c a{display:block;width:80px;height:25px;background:#c46668;text-align:center;line-height:25px;font-size:12px;margin:15px auto 0px;}
.userinfo_c span{display:inline-block;position:relative;left:20px;}

.serve,.contact{background:#fcfaee;border:1px solid #b27d73;}
.serve_c,.contact_c{margin:5px;padding:10px;border:1px solid #97968e;}
.doc{max-height:120px;}
.doc a{background:#c46668;display:inline-block;width:80px;height:25px;font-size:12px;line-height:25px;}
.doc img{border-radius:50%;}
.doc_c{position:relative;font-size:12px;top:-60px;left:69px;line-height:23px;width:150px;}
.doc_n{font-size:15px;font-weight:bold;}
.doc_n span{font-size:12px}
.q{border-radius:50%;width:10px;height:10px;display:inline-block;background:#ffffff;margin:-1px;}
.contact{margin:10px 0;}
.contact_c {border:1px solid #97968e;}
.contact_c ul{list-style: square inside url('/static/index/image/ul.png')}
.contact_c ul li{margin:10px;}


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
	<article> 
    	
         <?php if($act): ?> 
         	<section>
            
           	 		<h4><?php echo $item_name; ?></h4>
            		<p><?php echo $que_cotnent; ?></p></br></br>
                    <p><?php echo $guo_cotnent; ?></p></br>
                    <?php if(is_array($goods_list) || $goods_list instanceof \think\Collection): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $key=>$goods): endforeach; endif; else: echo "" ;endif; ?>
            </section>
         <?php else: ?>
		<section>
               
         <?php if($info['result']): ?>
        	<h4>概况</h4>
            
            <p><?php echo $info['result']; ?></p>
        </section>
        <section>
        	<h4>五行盈缺</h4>
            <p><?php echo $info['wxyq']; ?></p>
        </section>
        <section>
        	<h4>五行虚实</h4>
            <p><?php echo $info['wzxs']; ?></p>
        </section>
        <section>
        	<h4>出现毛病</h4>
            <p><?php echo $info['problem']; ?></p>
        </section>
        <section class="solution">
        	<h4>解决方案</h4>
            <p> 
              <a href="/index/cesuan/result/act/content/r/<?php echo $info['info_id']; ?>/a/yiyao" class="btn btn-danger" target="_blank">医药咨询</a>
              <a href="/index/cesuan/result/act/content/r/<?php echo $info['info_id']; ?>/a/shiliao" class="btn btn-danger" target="_blank">食疗养生</a>
              <a href="/index/cesuan/result/act/content/r/<?php echo $info['info_id']; ?>/a/duanlian" class="btn btn-danger" target="_blank">锻炼养生</a>
              <a href="/index/cesuan/result/act/content/r/<?php echo $info['info_id']; ?>/a/qingzhi" class="btn btn-danger" target="_blank">情志调养</a> 
              <a href="/index/cesuan/result/act/content/r/<?php echo $info['info_id']; ?>/a/gongzuo" class="btn btn-danger" target="_blank">工作养生</a> 
              <a href="/index/cesuan/result/act/content/r/<?php echo $info['info_id']; ?>/a/zhuxing" class="btn btn-danger" target="_blank">衣食住行</a>  
            </p>
        </section>
		  <?php else: ?>
		<p class="noresult">没有查询到结果</p>
		<?php endif; endif; ?>
	</article>
    <aside>
    	<div class="notice">
             <a href="/index/article/notice_list/cat_id/1"><p>通知公告</p></a>
             <div class="notice_c">
                  <ul>
                  	   <?php if(is_array($notice_list) || $notice_list instanceof \think\Collection): if( count($notice_list)==0 ) : echo "" ;else: foreach($notice_list as $key=>$notice): ?>
							<li><a href="/index/article/notice/article_id/<?php echo $notice['article_id']; ?>" title="<?php echo $notice['article_name']; ?>"><?php echo $notice['article_name']; ?></a><span><?php echo date('m-d',$notice['create_time']); ?></span></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        	<li>关于举办阿斯达岁的比赛<span>05-12</span></li>
                          
                  </ul>
             </div>
        </div>
        
        <div class="kefu">
                	 <a href="/index/service/csc"><p>客服中心</p></a>
                    <div class="kefu_c">
                    	<div class="sq">售前咨询</div>
                        <div class="sh">售后咨询</div>
                        <div class="gz">手机关注:
                        	<img src="<?php echo INDEX_IMAGE_URL; ?>er.jpg">
                        </div>
                    </div>
        </div>
        
        <div class="search"><input class="sea" type="text" name="search"><input class="sub" type="submit" name="submit" value=""><span>站内搜索</span></div>
        <div class="userinfo">
        	<img src="<?php echo (isset($user_info['portrait']) && ($user_info['portrait'] !== '')?$user_info['portrait']:'/static/index/image/portrait.jpg'); ?>">
        	<div class="userinfo_c">
            	<h4><?php echo $user_info['nickname']; ?></h4>
                <ul>
                	<li>会员等级： ☆ ☆ ☆ ☆ ☆</li>
                    <li>服务医生：    李成套</li>
                    <li>上次登录：<?php echo date( 'y-m-d H:s',$user_info['last_login_time']); ?></li>
                    <li>五行简批：</li>
                </ul>
               <span>五行缺木，以绿色食物为主。</span>
                
            <a href="/index/user/index">管理</a>    
                
            </div>
        </div>
        	 
        
        <a class="login" href="/index/user/login"><img src="<?php echo INDEX_IMAGE_URL; ?>login.png">我要登陆</a>
        <a class="reg" href="/index/user/register"><img src="<?php echo INDEX_IMAGE_URL; ?>re.png">我要注册</a>
                
        <div class="serve">
            		<a href="/index/service/otos"><p>一对一服务</p></a>
                    <div class="serve_c">
                    	<div class="doc">
                        	<img src="<?php echo INDEX_IMAGE_URL; ?>doc1.jpg">
                            <div class="doc_c">
                            	<div class="doc_n">李成涛&nbsp;<span>主治医师</span></div>
                            	<div >擅长：各种传染性皮肤,过敏性皮肤病</div>
                            	<a href=""><span class="q"></span>&nbsp;可以咨询</a>
                            </div>
                        </div>
                        <div class="doc">
                        	<img src="<?php echo INDEX_IMAGE_URL; ?>doc1.jpg">
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
