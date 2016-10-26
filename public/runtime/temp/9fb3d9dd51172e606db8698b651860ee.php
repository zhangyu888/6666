<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\xampp\htdocs\weixin\public/../application/admin\view\config\nav_set.html";i:1468832155;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>设置</title>
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
.input-group .w300{
  width:300px;
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
  <div class="panel-heading">当前位置是：导航设置设置</div>
  <div class="panel-body">
  <form action="/index.php/admin/config/nav_set" method="post">

 <ul class="nav nav-tabs" role="tablist" id="feature-tab">
        <li class="active"><a href="#tab-config" role="tab" data-toggle="tab">导航设置</a></li>

      
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab-config">

        <?php foreach($nav_list as $nav): ?>
           <div class="input-group"><span class="input-group-addon " id="basic-addon1">导航名</span><input name="nav_name<?php echo $nav['nav_id']; ?>" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $nav['nav_name']; ?>"><span class="input-group-addon " id="basic-addon1">跳转</span><select name="type<?php echo $nav['nav_id']; ?>"  class="form-control w100"  aria-describedby="basic-addon1" ><option value="1" <?php if($nav['type']=="1"): ?>selected<?php endif; ?>>新窗口</option><option value="0" <?php if($nav['type']=="0"): ?>selected<?php endif; ?>>当前窗口</option></select><span class="input-group-addon " id="basic-addon1">链接</span><input name="nav_url<?php echo $nav['nav_id']; ?>" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php echo $nav['nav_url']; ?>"><span class="input-group-addon " id="basic-addon1">排序</span><input name="sort<?php echo $nav['nav_id']; ?>" type="text" class="form-control w100" placeholder="" aria-describedby="basic-addon1" value="<?php echo $nav['sort']; ?>"><span class="input-group-addon " id="basic-addon1">是否显示</span><select name="is_show<?php echo $nav['nav_id']; ?>"  class="form-control w100"  aria-describedby="basic-addon1" ><option value="1" <?php if($nav['is_show']=="1"): ?>selected<?php endif; ?>>是</option><option value="0" <?php if($nav['is_show']=="0"): ?>selected<?php endif; ?>>否</option></select></div>
    <?php endforeach; ?>

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
