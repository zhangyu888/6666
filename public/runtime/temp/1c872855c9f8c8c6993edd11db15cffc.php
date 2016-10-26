<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\article\add_cat.html";i:1470208768;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加文章</title>
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
  <div class="panel-heading">当前位置是：文章管理->添加文章分类</div>
  <div class="panel-body">
  <form action="/index.php/admin/article/add_cat" method="post" enctype="multipart/form-data">
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">分类名称</span><input name="cat_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $category['cat_name']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">上级分类</span><select name="cat_pid" class="form-control w200">
<option value="0">顶级分类</option>
     <?php foreach($cat_list as $cat): ?>
     <option value="<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></option>
 
     <?php endforeach; ?>
    </select></div>
    
 <input type="hidden" name="cat_id" value="<?php echo $category['cat_id']; ?>">
 <br>
  <div class="btn-group" role="group"><input type="submit" class="btn btn-primary" value="确认保存"></div>
  </form>
   </div>
</div>

       

    </body>
</html>
