<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\xampp\htdocs\maogod\public/../application/admin\view\config\pay_set.html";i:1468920262;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
      
   <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>bootstrap.min.css">
        <script src="<?php echo VENDOR_URL; ?>kindeditor/kindeditor.js" type="text/javascript" charset="utf-8" ></script>
<script type="text/javascript" charset="utf-8" src="<?php echo VENDOR_URL; ?>kindeditor/lang/zh_CN.js"></script>
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>bootstrap.min.js"></script>
<style type="text/css">
.input-group{
  margin-top:10px;
}
.input-group .w100{
  width:100px;
}
.input-group .w200{
  width:200px;
}
.btn-group{
 display:block;
  margin:0px auto;
  height:50px;
}
.btn-group>.btn:first-child{
  float:none;
    display:block;
  margin:0px auto;

}
</style>
    </head>

    <body>
<script type="text/javascript">
    KindEditor.ready(function(K) {
    window.editor = K.create('#editor_id');
    });
</script>
<div class="panel panel-info">
  <div class="panel-heading">当前位置是：系统设置</div>
  <div class="panel-body">
  <form action="/index.php/admin/config/pay_set" method="post">

 <ul class="nav nav-tabs" role="tablist" id="feature-tab">
        <li class="active"><a href="#tab-config" role="tab" data-toggle="tab">微信支付</a></li>
        <li><a href="#tab-wx" role="tab" data-toggle="tab">支付宝</a></li>
      
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab-config">
         <div class="input-group"><span class="input-group-addon " id="basic-addon1">支付名称</span><input name="wx_pay_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $wx_pay['pay_name']; ?>"></div>
         <div class="input-group"><span class="input-group-addon " id="basic-addon1">appid</span><input name="wx_appid" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $wx_pay['appid']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">appsecret</span><input name="wx_appsecret" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $wx_pay['appsecret']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">商户号</span><input name="wx_shop_id" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $wx_pay['shop_id']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">支付密钥</span><input name="wx_pay_key" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $wx_pay['pay_key']; ?>"></div>
      <div class="input-group w100"><span class="input-group-addon w100" >
        <input type="checkbox" aria-label="..." name="wx_is_show" value="1" <?php if($wx_pay['is_show']): ?>checked<?php endif; ?>>是否显示
      </span></div>
     <div class="alert alert-danger" role="alert" style="width:800px;height:30px;line-height: 0px">微信支付地址: &nbsp;<?php echo $domain; ?>/wap/wechatpay/</div>
    

        </div>
        <div class="tab-pane" id="tab-wx">
        <div class="input-group"><span class="input-group-addon " id="basic-addon1">支付名称</span><input name="ali_pay_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $ali_pay['pay_name']; ?>"></div>
             <div class="input-group"><span class="input-group-addon " id="basic-addon1">appid</span><input name="ali_appid" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $ali_pay['appid']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">appsecret</span><input name="ali_appsecret" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $ali_pay['appsecret']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">商户号</span><input name="ali_shop_id" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $ali_pay['shop_id']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">支付密钥</span><input name="ali_pay_key" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $ali_pay['pay_key']; ?>"></div>
  <div class="input-group w100"><span class="input-group-addon w100" >
        <input type="checkbox" aria-label="..." name="ali_is_show" value="1" <?php if($ali_pay['is_show']): ?>checked<?php endif; ?>>是否显示
      </span></div>
    

        </div>

    </div>
<br>
    

  <div class="btn-group" role="group"><input type="submit" class="btn btn-primary" value="确认保存"></div>
  </form>
   </div>
</div>

       

    </body>
</html>
