<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\weixin\public/../application/admin\view\config\set.html";i:1468997182;}*/ ?>
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
  <form action="/index.php/admin/config/set" method="post">

 <ul class="nav nav-tabs" role="tablist" id="feature-tab">
        <li class="active"><a href="#tab-config" role="tab" data-toggle="tab">基本设置</a></li>
        <li><a href="#tab-wx" role="tab" data-toggle="tab">微信设置</a></li>
        <li><a href="#tab-fx" role="tab" data-toggle="tab">分销设置</a></li>
      
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab-config">
           <div class="input-group"><span class="input-group-addon " id="basic-addon1">店铺名称</span><input name="shop_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['shop_name']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">店铺地址</span><input name="shop_address" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['shop_address']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">联系电话</span><input name="shop_tel" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['shop_tel']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">客服QQ</span><input name="shop_qq" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['shop_qq']; ?>"></div>
      <div class="input-group"><span class="input-group-addon " id="basic-addon1">会员号起始数</span><input name="user_start" type="text" class="form-control w100" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['user_start']; ?>"></div>
        <div class="input-group"><span class="input-group-addon " id="basic-addon1">默认物流</span><select class="form-control w100" name="kuaidi_name" >
        <?php foreach($kuaidi_list as $kuaidi): if($config['kuaidi_name'] == $kuaidi['name']): ?><option value="<?php echo $kuaidi['name']; ?>" selected><?php echo $kuaidi['name']; ?></option><?php endif; ?>
          <option value="<?php echo $kuaidi['name']; ?>"><?php echo $kuaidi['name']; ?></option>
          <?php endforeach; ?>
          
        </select></div>
         <div class="input-group"><span class="input-group-addon " id="basic-addon1">系统公告</span><input name="notice" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['notice']; ?>"></div>
        </div>
        <div class="tab-pane" id="tab-wx">
             <div class="input-group"><span class="input-group-addon " id="basic-addon1">appid</span><input name="appid" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['appid']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">appsecret</span><input name="appsecret" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['appsecret']; ?>"></div>
   
     <div class="input-group"><span class="input-group-addon " id="basic-addon1">token</span><input name="token" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['token']; ?>"></div>
  <div class="alert alert-danger" role="alert" style="width:800px;height:30px;line-height: 0px">微信服务器配置：url: &nbsp;<?php echo $domain; ?>/wap/weixin/</div>

     <div class="input-group"><span class="input-group-addon " id="basic-addon1">关注时回复</span><input name="subscribe_word" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['subscribe_word']; ?>"></div>
         <div class="input-group"><span class="input-group-addon " id="basic-addon1">分享内容</span><input name="share_word" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['share_word']; ?>"></div>
      <div class="panel-heading">模板设置</div>
<div class="input-group"><span class="input-group-addon " id="basic-addon1">新会员加入通知-模板编号OPENTM202967310-模板ID</span><input name="tpl_newuser" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['tpl_newuser']; ?>"></div>
<div class="input-group"><span class="input-group-addon " id="basic-addon1">订单支付成功-模板编号TM00015-模板ID</span><input name="tpl_orderpay" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['tpl_orderpay']; ?>"></div>
<div class="input-group"><span class="input-group-addon " id="basic-addon1">订单发货通知-模板编号OPENTM202243318-模板ID</span><input name="tpl_ordersend" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['tpl_ordersend']; ?>"></div>
<div class="input-group"><span class="input-group-addon " id="basic-addon1">会员等级变更通知-模板编号OPENTM400341556-模板ID</span><input name="tpl_gradechange" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="<?php echo $config['tpl_gradechange']; ?>"></div>
        </div>
   <div class="tab-pane" id="tab-fx">
              <div class="tab-pane" id="tab-wx">
             <div class="input-group" style="width:250px;"> <span class="input-group-addon">最小提现额</span>
  <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="min_money" value="<?php echo $config['min_money']; ?>"> <span class="input-group-addon">元</span></div>
   <div class="input-group" style="width:200px;"> <span class="input-group-addon">佣金单位</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="unit" value="<?php echo $config['unit']; ?>" placeholder="如 元"></div>
 <div class="input-group"  style="width:800px"> <span class="input-group-addon">没购买名称</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="default_name" value="<?php echo $config['default_name']; ?>" placeholder="如 普通会员">  <span class="input-group-addon">普通名称</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="level_name" value="<?php echo $config['level_name']; ?>" placeholder="如 分销商"> <span class="input-group-addon">城市名称</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="level2_name" value="<?php echo $config['level2_name']; ?>" placeholder="如 城市合伙人"> <span class="input-group-addon">全球名称</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="level3_name" value="<?php echo $config['level3_name']; ?>" placeholder="如 全球合伙人"> </div>
<div class="alert alert-danger" role="alert" style="width:800px;height:30px;line-height: 0px">设置的为前台显示等级名称</div>
 <div class="input-group"  style="width:800px"> <span class="input-group-addon">一级名称</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="level_name_1" value="<?php echo $config['level_name_1']; ?>" placeholder="如 一级会员">  <span class="input-group-addon">二级名称</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="level_name_2" value="<?php echo $config['level_name_2']; ?>" placeholder="如 二级会员"> <span class="input-group-addon">三级名称</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="level_name_3" value="<?php echo $config['level_name_3']; ?>" placeholder="如 三级会员">  </div>
  <div class="alert alert-danger" role="alert" style="width:800px;height:30px;line-height: 0px">设置的为前台显示下级的等级名称</div>
       <div class="input-group" style="width:800px;">
        <span class="input-group-addon">普通一级</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="level_1" value="<?php echo round($config['level_1']*100); ?>"> <span class="input-group-addon">%</span>
    <span class="input-group-addon">普通二级</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="level_2" value="<?php echo round($config['level_2']*100); ?>"> <span class="input-group-addon">%</span>
    <span class="input-group-addon">普通三级</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="level_3" value="<?php echo round($config['level_3']*100); ?>"> <span class="input-group-addon">%</span>
    </div>
    <div class="input-group" style="width:800px;">
       <span class="input-group-addon">城市一级</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="city_level_1" value="<?php echo round($config['city_level_1']*100); ?>"> <span class="input-group-addon">%</span>
    <span class="input-group-addon">城市二级</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="city_level_2" value="<?php echo round($config['city_level_2']*100); ?>"> <span class="input-group-addon">%</span>
    <span class="input-group-addon">城市三级</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="city_level_3" value="<?php echo round($config['city_level_3']*100); ?>"> <span class="input-group-addon">%</span>
</div>
<div class="input-group" style="width:800px;">
     <span class="input-group-addon">全球一级</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="global_level_1" value="<?php echo round($config['global_level_1']*100); ?>"> <span class="input-group-addon">%</span>
    <span class="input-group-addon">全球二级</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="global_level_2" value="<?php echo round($config['global_level_2']*100); ?>"> <span class="input-group-addon">%</span>
    <span class="input-group-addon">全球三级</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="global_level_3" value="<?php echo round($config['global_level_3']*100); ?>"> <span class="input-group-addon">%</span>
  </div>
          </div>
        </div>
    </div>

    
 
 <input type="hidden" name="id" value="<?php echo $config['id']; ?>">
 <br>
  <div class="btn-group" role="group"><input type="submit" class="btn btn-primary" value="确认保存"></div>
  </form>
   </div>
</div>

       

    </body>
</html>
