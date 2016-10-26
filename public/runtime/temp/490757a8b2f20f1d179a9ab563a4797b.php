<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\user\user_info.html";i:1470907536;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人中心-个人资料</title>
<style>
*{padding:0;margin:0;}
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
select,input{border:1px solid #a1524e;background:#efebea;height:25px;}
#main{width:95%;;margin:0 auto;background:#efebea;height:900px;padding-left:40px;}

.head_img{border:none;position:relative;left:60px;bottom:40px;}


h2{padding:20px 0px 30px 0px;}


select{width:50px;}

table{width:420px;height:400px;font-weight:bold;}
table img{width:90px;height:90px;border:1px solid #a65753;}
.save{background:#f8f4d9;width:60px;height:30px;color:#7f1009;font-weight:bold;border-radius:5px;margin:15px 0 25px 0;margin-left:150px;}

.hr1{width:71%;margin:0 auto;}
.hr2{width:90%;margin:0 auto;}
</style>
</head>

<body>

<div id="main">
	
	
    	<form method="post" action="" enctype="multipart/form-data">
    	<h2>个人资料</h2>
    	<table>
        	<tr>
            	<td>当前头像：</td>
                <td><img src="<?php echo (isset($user_info['portrait']) && ($user_info['portrait'] !== '')?$user_info['portrait']:'/static/index/image/default.jpg'); ?>" alt="头像"><input class="head_img" type="file" name="head_img" value=""></td>
        	</tr>
            	
            <tr>
            	<td>昵称：</td>
                <td><input name="nickname" type="text" value="<?php echo $user_info['nickname']; ?>"></td>
        	</tr>
            <tr>
            	<td>真实姓名：</td>
                <td><input name="realname" type="text" value="<?php echo $user_info['realname']; ?>"></td>
        	</tr>
            <tr>
            	<td>性别：</td>
                <td><input type="radio" <?php if($user_info['sex'] == 1): ?> checked<?php endif; ?> name="sex" value="1"> 男   <input name="sex" <?php if($user_info['sex'] == 2): ?> checked <?php endif; ?> type="radio" value="2"> 女</td>
        	</tr>
            <tr>
            	<td>出生年月：</td>
                <td><input type="date" name="birthday" value="<?php echo $user_info['birthday']; ?>"></td>
        	</tr>
            <tr>
            	<td>地址：</td>
                <td><input name="address" type="text" value="<?php echo $user_info['address']; ?>"></td>
        	</tr>
        
        </table>
        <hr class="hr1"/>
        <input type="hidden" name="user_id" value="<?php echo $user_info['user_id']; ?>">
    	<input class="save" name="save" type="submit" value="保存">
        <hr class="hr2"/>
        </form>
	
    
    
    

</div>

</body>
</html>
