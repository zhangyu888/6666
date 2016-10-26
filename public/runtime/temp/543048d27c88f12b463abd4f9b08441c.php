<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\xampp\htdocs\newxy\public/../application/admin\view\index\info.html";i:1468920688;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
 <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>bootstrap.min.css">
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>bootstrap.min.js"></script>
  <style type="text/css">
  .badge{
  	background:red;
  }
  </style>
</head>
<body>

<div class="panel panel-info">
  <div class="panel-heading">当前位置是：系统设置->首页</div>
  <div class="panel-body">
  <div class="list-group" style="width:200px;float:left;margin-left: 20px">
<a class="list-group-item">
    <span class="badge">今日：<?php echo $today_order['pay']; ?></span>
    付款订单，待发货
  </a>
  <a class="list-group-item">
    <span class="badge"><?php echo $today_order['send']; ?></span>
    已发货
  </a>
  <a class="list-group-item">
    <span class="badge"><?php echo $today_order['over']; ?></span>
   完成
  </a>
<!--     <a class="list-group-item">
<span class="badge"><?php echo $today_order['order_test']; ?></span>
   试用
  </a> -->
  <a class="list-group-item">
    <span class="badge"><?php echo $today_order['all_money']; ?></span>
    总金额
  </a>
</div>
  <div class="list-group" style="width:200px;float:left;margin-left: 20px">
<a class="list-group-item">
    <span class="badge">昨日：<?php echo $before_order['pay']; ?></span>
    付款订单，待发货
  </a>
  <a class="list-group-item">
    <span class="badge"><?php echo $before_order['send']; ?></span>
    已发货
  </a>
  <a class="list-group-item">
    <span class="badge"><?php echo $before_order['over']; ?></span>
   完成
  </a>
<!--      <a class="list-group-item">
    <span class="badge"><?php echo $before_order['order_test']; ?></span>
   试用
  </a> -->
  <a class="list-group-item">
    <span class="badge"><?php echo $before_order['all_money']; ?></span>
    总金额
  </a>
</div>
<div class="list-group" style="width:200px;float:left;margin-left: 20px">
<a class="list-group-item">
    <span class="badge">全部：<?php echo $now_order['pay']; ?></span>
    付款订单，待发货
  </a>
  <a class="list-group-item">
    <span class="badge"><?php echo $now_order['send']; ?></span>
    已发货
  </a>
  <a class="list-group-item">
    <span class="badge"><?php echo $now_order['over']; ?></span>
   完成
  </a>
<!--      <a class="list-group-item">
    <span class="badge"><?php echo $now_order['order_test']; ?></span>
   试用
  </a> -->
  <a class="list-group-item">
    <span class="badge"><?php echo $now_order['all_money']; ?></span>
    总金额
  </a>
</div>
<div class="list-group" style="width:200px;float:left;margin-left: 20px">

  <a class="list-group-item">
    <span class="badge"><?php echo $now_user['all']; ?></span>
    会员数
  </a>
  <a class="list-group-item">
    <span class="badge"><?php echo $now_user['level_1']; ?></span>
    <?php echo $user_status[1]; ?>
  </a>
  <a class="list-group-item">
    <span class="badge"><?php echo $now_user['level_2']; ?></span>
     <?php echo $user_status[2]; ?>
  </a>
  <a class="list-group-item">
    <span class="badge"><?php echo $now_user['level_3']; ?></span>
     <?php echo $user_status[3]; ?>
  </a>
  <a class="list-group-item">
    <span class="badge"><?php echo $now_user['tixian']; ?></span>
    申请提现
  </a>
</div>

  </div>
   <div class="panel-heading">系统信息</div>
     <div class="panel-body">
<div class="list-group" style="width:400px;margin-left: 20px">

  <a class="list-group-item">

    操作系统：<?php echo $info['os']; ?>
  </a>
  <a class="list-group-item">
    
    Apache版本：<?php echo $info['apache']; ?>
  </a>
  <a class="list-group-item">
    PHP版本：<?php echo $info['php']; ?>
  </a>
  <a class="list-group-item">
    运行方式：<?php echo $info['sapi']; ?>
  </a>
</div>
  </div>


</body>
</html>