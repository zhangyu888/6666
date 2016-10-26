<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\order\edit.html";i:1466671454;}*/ ?>
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
.input-group .w500{
  width:500px;
}
.b
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
  <div class="panel-heading">当前位置是：商品管理->添加商品</div>
  <div class="panel-body">


  <ul class="nav nav-tabs" role="tablist" id="feature-tab">
        <li class="active"><a href="#tab-info" role="tab" data-toggle="tab">基本信息</a></li>
        <li><a href="#tab-address" role="tab" data-toggle="tab">收获人信息</a></li>
      
    </ul>
      <div class="tab-content">
          <div class="tab-pane active" id="tab-info">
            <div class="list-group" style="width:400px;">
  <a class="list-group-item">
   上上上级:<?php echo $parents_info['parent3']['user_name']; ?>&nbsp;&nbsp;<font style="color:#3eafe0"><?php echo $parents_info['parent3']['nickname']; ?></font>&nbsp;&nbsp;<font style="color:#f93;"><?php echo $user_status[$parents_info['parent3']['user_level']]; ?></font>&nbsp;&nbsp;<?php echo $order['fencheng3_price']; ?>
  </a>
  <a class="list-group-item">
    上上级:<?php echo $parents_info['parent2']['user_name']; ?>&nbsp;&nbsp;<font style="color:#3eafe0"><?php echo $parents_info['parent2']['nickname']; ?></font>&nbsp;&nbsp;<font style="color:#f93;"><?php echo $user_status[$parents_info['parent2']['user_level']]; ?></font>&nbsp;&nbsp;<?php echo $order['fencheng2_price']; ?>
  </a>
  <a class="list-group-item" href="#"  >
    上级:<?php echo $parents_info['parent']['user_name']; ?>&nbsp;&nbsp;<font style="color:#3eafe0"><?php echo $parents_info['parent']['nickname']; ?></font>&nbsp;&nbsp;<font style="color:#f93;"><?php echo $user_status[$parents_info['parent']['user_level']]; ?></font>&nbsp;&nbsp;<?php echo $order['fencheng1_price']; ?>
  </a>

</div>
            <div class="input-group"><span class="input-group-addon " id="basic-addon1">订单编号</span><input name="order_sn" disabled="disabled" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $order['order_sn']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">订单价格</span><input name="amount" type="text" disabled="disabled" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $order['amount']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">分成金额</span><input name="fencheng_price" disabled="disabled" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $order['fencheng_price']; ?>"></div>
    <?php foreach($order_goods as $goods): ?>
      <div class="input-group"><span class="input-group-addon " id="basic-addon1">订单商品</span><input disabled="disabled" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $goods['goods_name']; ?>"><span class="input-group-addon " id="basic-addon1">数量</span><input disabled="disabled" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $goods['buy_number']; ?>"><span class="input-group-addon " id="basic-addon1">价格</span><input disabled="disabled" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $goods['goods_price']; ?>"></div>
    <?php endforeach; ?>

      <div class="input-group"><span class="input-group-addon " id="basic-addon1">备注</span><input disabled="disabled" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $order['note']; ?>"> </div>
<div>

</div>

        </div>

      <div class="tab-pane" id="tab-address">
            <!--  <form action="add_submit" method="post" > -->
     
          <div class="input-group"><span class="input-group-addon " id="basic-addon1">收货人</span><input name="sales" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $order['consignee']; ?>"></div>
          <div class="input-group"><span class="input-group-addon " id="basic-addon1">联系电话</span><input name="sales" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $order['tel']; ?>"></div>
          <div class="input-group"><span class="input-group-addon " id="basic-addon1">地址</span><input name="sales" type="text" class="form-control w500" placeholder="" aria-describedby="basic-addon1" value="<?php echo $order['address']; ?>">  </div>
            <div class="btn-group" role="group"><input type="submit" class="btn btn-primary" value="确认保存"></div>
         <!--  </form> -->
       </div>


</div>


   </div>
</div>
<script type="text/javascript">
  function showUserInfo(userId){
    //$.post()
  }
</script>
       

    </body>
</html>
