<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\user\safe.html";i:1471403501;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人中心</title>
<style>
*{padding:0;margin:0;}
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
select,input{border:1px solid #a1524e;background:#efebea;height:25px;}
#main{background:#efebea;font-weight:bold;width:93%;;margin:0 auto;background:#efebea;height:900px;padding-left:60px;}
h4{padding-top:30px;}


h4 a{display:inline-block;position:relative;left:80%;color:#902d28;}


hr{width:100%;margin:0 auto;position:relative;left:-30px;}

table{padding-left:40px;}
table a{color:#902d28;}
.jichu{height:100px;width:330px;margin:10px 0 20px 0}
.anquan{margin-top:10px;width:100%;height:400px;}
.shuo{width:500px;}

</style>

<script src="/static/index/js/jquery.min.js"></script>
<script>
	$(function(){
		$(".left ul li").click(function(){
			$(this).addClass("on");
				
			$(this).siblings("li").removeClass("on");
			
			
			
			
			})
		
		
		
		
		
		})




</script>
</head>

<body>

<div id="main">
	

    
    	<h4>您的基础信息</h4>
    	<table class="jichu">
        	
        	<tr>
            	<td>会员名:</td>
                <td><?php echo $user_info['nickname']; ?></td>
        	</tr>
            	
            <tr>
            	<td>注册邮箱:</td>
                <td><?php echo $user_info['email']; ?></td>
        	</tr>
            <tr>
            	<td>注册手机:</td>
                <td><?php echo substr_replace($user_info['tel'],'****',3,4); ?></td>
                <!--<td><a href="">修改手机</a></td>-->
        	</tr>
           
        
        </table>
        <hr/>
        <h4>您的安全服务</h4>
        <table class="anquan">
        	<tr>
            	<td>安全等级:</td>
              	<td>高</td>
            </tr>
            <!--<tr>
            	<td></td>
                <td>身份认证</td>
                <td class="shuo">用于提高账户的安全性和信任级别。</td>
                <td><a href="">查看</a></td>
            </tr>-->
            <tr>
            	<td><img src="/static/index/image/aq.png">已设置</td>
                <td>登录密码</td>
                <td class="shuo">安全性高的密码可以使账号更安全。建议您定期更换密码，且设置一个包含数字和字母，并长度超过6位以上密码。</td>
                <!--<td><a href="">修改</a></td>-->
            </tr>
            <!--<tr>
            	<td></td>
                <td>密保问题</td>
                <td class="shuo">是您找回登录密码的方式之一。建议您设置一个容易记住，且最不容易被他人获取的问题及答案，更有效保障您的密码安全。</td>
                <td><a href="">修改</a></td>
            </tr>-->
            <tr>
            	<td><img src="/static/index/image/aq.png">已设置</td>
                <td>注册手机</td>
                <td class="shuo">通过手机号码修改密码。</td>
                <!--<td><a href="">修改</a></td>-->
            </tr>
             <tr>
            	<td><img src="/static/index/image/aq.png">已设置</td>
                <td>注册邮箱</td>
                <td class="shuo">通过邮箱修改密码。</td>
                <!--<td><a href="">修改</a></td>-->
            </tr>
        </table>
        
	</div>
    
</div>    
    




















</body>
</html>
