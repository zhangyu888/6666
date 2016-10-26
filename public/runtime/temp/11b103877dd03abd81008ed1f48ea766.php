<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\maogod\public/../application/admin\view\index\login.html";i:1468912651;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>login.css">
    <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery.min.js"></script>
    <script type="text/javascript">

	function checkcd(){

		if($(".username").val()=='' || $(".pwd").val()==''){
			alert('账号或密码为空');
			return false ;
		}
	}
	</script>
	<title>后台登陆</title>
</head>
<body>
	<div id="login_top">

		<div id="back">
			<a href="/">返回首页</a>&nbsp;&nbsp; | &nbsp;&nbsp;
		</div>
	</div>
	<div id="login_center">
		<div id="login_area">
			<div id="login_form">
				<form action="" method="post">
					<div id="login_tip">
						用户登录&nbsp;&nbsp;UserLogin
					</div>
					<div><input type="text" class="username" name="name" required></div>
					<div><input type="password" class="pwd" name="password" required></div>
					<div id="btn_area">
						
						<input type="text" class="verify"  name="verify" required>
                        <img src="/admin/verify/" onclick="document.getElementById('image').src = '/admin/verify/index/a/'+Math.random();return false;"  alt="" id="image" />&nbsp;&nbsp;
                        <input onclick="return checkcd()" type="submit" name="submit" id="sub_btn" value="登&nbsp;&nbsp;录">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="login_bottom">
		版权所有
	</div>
</body>
</html>