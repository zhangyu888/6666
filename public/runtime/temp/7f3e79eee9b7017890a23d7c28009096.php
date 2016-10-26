<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\user\register.html";i:1472540624;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\header.html";i:1471854413;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="Keywords" content="{$keywords}"/>
<meta name="Description" content="{$description}"/>
<title>注册</title>
<style>
*{padding:0;margin:0;}
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
#main{width:1100px;;margin:0 auto;}
.reg{background:#f3f0eb;margin:10px 0px;text-align:center;border:1px solid #934948;height:1000px;position:relative;box-shadow:2px 2px 2px #a19a88;}

table{border:1px solid #b77a75;margin:0 auto;background:#f8f4d9;height:650px;width:600px;font-weight:bold;margin-top:170px;padding:60px;box-shadow:2px 2px 2px #a19a88;}
label{font-size:30px;font-weight:bold;}

input{box-shadow:2px 2px 2px #a19a88;}
.uname,.pwd,.rpwd,.email,.tel{background:#f8f4d9;height:35px;width:200px;border:1px solid #cba08d;}
.btn{background:#e0dab6;color:#fff;width:100px;height:40px;font-size:30px;font-weight:bold;}
.code{background:#f8f4d9;height:35px;width:100px;border:1px solid #cba08d;}
.t2{text-align:left;}
.t1{text-align:center;}

.reproduct{border:1px solid #be847d;background:#fcfaee;}
.reproduct_top{background:#81100c;height:25px;color:#FFF;position:relative;}
.reproduct_top a{color:#fff;font-size:14px;display:inline-block;background:#9c2a2a;width:60px;line-height:25px;text-align:center;border-radius:3px;}
.reproduct_top .more{position:absolute;right:25px;background:#c0575b;width:80px;}
.reproduct_c{padding:5px;max-width:200px;margin:10px 5px 10px 0px;border:1px solid #c7c5bc;display:inline-block;}
.reproduct_c img{width:200px;height:270px;}
.reproduct_ul ul li{margin:2px 0;font-size:10px;}
</style>
<script src="/static/index/js/jquery.min.js"></script>
<script>

function chkstr(str)
{
  for (var i = 0; i < str.length; i++)
  {
    if (str.charCodeAt(i) < 127 && !str.substr(i,1).match(/^\w+$/ig))
    {
      return false;
    }
  }
  return true;
}


function check_password( password )
{
    if ( password.length < 6 )
    {
        $('#password_notice').html("密码太短");
		
		 return false;
		
    }else
    {
       $('#password_notice').html('');
		 
    }
  
}

function check_conform_password( conform_password )
{
    password = $('#password').val();
    
    
    if ( conform_password != password )
    {
       $('#conform_password_notice').html('两次密码不一样');
		
		
		 return false;
    }
    else
    {
       $('#conform_password_notice').html('');
		
    }
}

function is_registered(username)
{
    
	
	var unlen = username.replace(/[^\x00-\xff]/g, "**").length;

    if ( username == '' )
    {
       $('#username_notice').html("用户名不能为空");
		
		return false;
    }
	
	if ( !chkstr( username ) )
    {
        $('#username_notice').html("格式不正确");
		
		return false;
    }
	
    if ( unlen < 3 )
    { 
       $('#username_notice').html("用户名太短");
		 
    $('.btn').attr('disabled',true);
	
		return false;
    }
    if ( unlen > 20 )
    {
        $('#username_notice').html("太长");
		
		return false;
    }
     
	
	$.post("/index/user/is_registered", {username:username},
   function(data){
	 
		$('#username_notice').html(data); 
		     
   }, "text");
   	
   
}



function checkEmail(email)
{

	$.post("/index/user/checkEmail", {email: email},
   function(data){
     
			 
			$('#email_notice').html(data); 	 
			 
			
   }, "text");
	
	
	
	
	}


function checkTel(tel){
	
	
	   if(!(/^1[3|4|5|7|8]\d{9}$/.test(tel))){ 
	

		$('#tel_notice').html("格式不正确");
     
		return false;
	
		}
	
	
	$.post("/index/user/checkTel", { tel:tel },
   function(data){
    
		$('#tel_notice').html(data); 
		
   }, "text");
	
}

$(function(){
$('.btn').click(function(){
	
	msg = $('.t2 span').text();
	
	if(!msg){
		
		
		
		return true;
		
		
		}else{
			
			alert('请正确填写信息');
			
			return false;
			
			
			
			}
	
	
	
	})
})
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
<div id="main">
	<div class="reg">
    	<form method="post" name="formUser" action="">
        	<table>
            	<tr>
                	<td><label for="">用户账号：</label></td>
                    <td class="t2"><input class="uname" name="username" onblur="is_registered(this.value);" type="text"><span id="username_notice" style="color:#FF0000"></span></td>
            	</tr>               	
            	<tr>
                	<td><label for="">用户密码：</label></td>
                    <td class="t2"><input class="pwd" id="password" name="password" onblur="check_password(this.value);"  type="password"><span style="color:#FF0000" id="password_notice"></span></td>
            	</tr>
                <tr>
                	<td><label for="">确认密码：</label></td>
                    <td class="t2"><input class="rpwd" id="confirm_password" name="confirm_password" onblur="check_conform_password(this.value);" type="password"><span style="color:#FF0000" id="conform_password_notice"></span></td>
            	</tr>
                <tr>
                	<td><label for="">电子邮箱：</label></td>
                    <td class="t2"><input class="email" onblur="checkEmail(this.value);" name="email" type="email" required><span style="color:#FF0000" id="email_notice"></span></td>
            	</tr>
                <tr>
                	<td><label for="">手机号码：</label></td>
                    <td class="t2"><input class="tel" onblur="checkTel(this.value);" name="mobile" type="tel" required><span style="color:#FF0000" id="tel_notice"></span></td>
            	</tr>
                <!--<tr>
                	<td><label for="">验证码：</label></td>
                    <td class="t2"><input class="code" name="code" type="text">（发送至手机）</td>
            	</tr>-->
            
            	<tr>
                	<td class="t1" colspan="2"> <input class="btn" name="submit" type="submit" value="注 册"></td>
                    
            	</tr>
      			
            </table>
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
