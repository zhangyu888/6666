<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\user\address.html";i:1471066457;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人中心-收货地址</title>
<style>
*{padding:0;margin:0;}
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
textarea,select,input{border:1px solid #a9a8a6;background:#efebea;height:30px;resize:none;}
select{height:32px;width:100px;}
#main{width:100%;;margin:0 auto;background:#efebea;height:900px;font-weight:bold;}


#main h2{background:#d3ebef;color:#0b70ca;margin-bottom:20px;line-height:40px;padding-left:20px;}
.adda{color:#800f0b;padding-left:20px;}

form table{width:90%;height:500px;margin:20px auto;margin-bottom:0px;}


.address{width:96%;margin-top:40px;border:1px solid #a9a8a6;margin:40px auto;border-collapse:collapse;border:1px solid #abaaa8;}
.address tr{border-bottom:1px solid #7c7b79;line-height:40px;text-align:center;}
.address tr:hover{background:;}

.address a{color:#0b70ca;}
textarea{height:60px;}

.save{background:#800f0b;width:60px;height:30px;color:#fff;font-weight:bold;border-radius:5px;margin:20px 0 40px 0;}
.addressnum{color:#800f0b;padding-left:20px;}
.default{display:inline-block;text-align:center;width:80px;line-height:30px;background:#f2c4c7;color:#820f0c;border:1px solid #fa4645;border-radius:5px;}


</style>
<script type="text/javascript" src="<?php echo INDEX_JS_URL; ?>jquery.min.js"></script>

<script>
			
function changeCity(obj,id){
var pid=$(obj).val();
$.post("/index/user/get_city",{"pid":pid},function(data){
//console.log(data);
$("#"+id).html('');
$("#"+id).append(data);
})
}
			
	</script>

</head>

<body>

<div id="main">
	
    	<form method="post" action="">
        
    	<h2>收货地址</h2>
        <span class="adda">新增收货地址</span>&nbsp;&nbsp;邮政编码选填，其余均为必填
    	<table>
        	<tr>
            	<td>所在地区<font color="#FF0000">*</font></td>
                
                <td><select class="btn" onchange="changeCity(this,'city')" name="province" id="province">
        <option value="0">选择省</option>
        <?php foreach($provinces as $p): ?>
        <option  value="<?php echo $p['region_id']; ?>"><?php echo $p['region_name']; ?></option>
        <?php endforeach; ?>
    </select>
    <select class="btn" id="city" onchange="changeCity(this,'district')" name="city">
    
        <option value="0">选择市</option>
    
    </select>
    <select  class="btn" id="district" name="district" >
        <option value="0">选择区/县</option>
    
    </select>
  </td>
        	</tr>
            	
            <tr>
            	<td>详细地址<font color="#FF0000">*</font></td>
                <td><textarea name="address" cols="50" ><?php echo $address['address']; ?></textarea></td>
        	</tr>
            <tr>
            	<td>邮政编码</td>
                <td><input name="postcode" type="text"  value="<?php echo $address['postcode']; ?>"></td>
        	</tr>
            <tr>
            	<td>收货人姓名<font color="#FF0000">*</font></td>
                <td><input type="text" name="consignee" value="<?php echo $address['consignee']; ?>" ></td>
        	</tr>
            <tr>
            	<td>手机号码<font color="#FF0000">*</font></td>
                <td><input name="tel" type="tel" value="<?php echo $address['tel']; ?>" >	
  				</td>
        	</tr>
            <!--<tr>
            	<td>电话号码</td>
                <td><select>
  <option value =""></option>
  </select>&nbsp;<input name="" type="text">
  				<input name="" type="text" placeholder="区号">
                <input name="" type="text" placeholder="电话号码">
                <input name="" type="text" placeholder="分机">
  				</td>
        	</tr>-->
        	<tr>
            	<td></td>
                <td><input type="checkbox" <?php if($address['is_default'] == 1): ?>checked<?php endif; ?> name="default" value="1"> 设置为默认地址<br/>
                <input type="hidden" name="address_id" value="<?php echo $address_id; ?>">
    	<input class="save" name="save" type="submit" value="保存"></td>
            </tr>
        </table>
     	
      	
        </form>
     <div class="addressnum">已保存了<?php echo $count; ?>条地址，还能保存<?php echo $scount; ?>条地址。</div> 
     <table class="address">
     	<tr>
        	<td>收货人</td>
            <td width="120px">所在地区</td>
            <td width="200px">详细地址</td>
            <td width="100px">邮编</td>
            <td width="120px">电话/手机</td>
            <td align="left" width="200px">操作</td>
        </tr>
        <?php if(is_array($address_list) || $address_list instanceof \think\Collection): if( count($address_list)==0 ) : echo "" ;else: foreach($address_list as $key=>$address): ?>
        <tr>
        	<td><?php echo $address['consignee']; ?></td>
            <td width="120px"><?php echo $address['p']; ?><?php echo $address['c']; ?><?php echo $address['d']; ?></td>
            <td width="200px"><?php echo $address['address']; ?></td>
            <td width="100px"><?php echo $address['postcode']; ?></td>
            <td width="120px"><?php echo $address['tel']; ?></td>
            <td align="left" width="200px"><a href="/index/user/address/address_id/<?php echo $address['address_id']; ?>">修改</a>|<a href="/index/user/del_address/address_id/<?php echo $address['address_id']; ?>">删除</a>&nbsp;&nbsp;<?php if($address['is_default'] == 1): ?><div class="default">默认地址</div><?php endif; ?></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
     
     </table>  
	</div>
    
    
    

</div>

</body>
</html>
