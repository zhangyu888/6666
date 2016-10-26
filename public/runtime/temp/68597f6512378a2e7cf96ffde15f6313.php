<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\maogod\public/../application/admin\view\anli\add.html";i:1473149412;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加案例</title>
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
  <div class="panel-heading">当前位置是：案例管理->添加案例</div>
  <div class="panel-body">
  <form action="/index.php/admin/anli/add" method="post" enctype="multipart/form-data">
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">案例名称</span><input name="goods_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $goods['goods_name']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">案例分类</span><select name="cate_id" class="form-control w200">
        
         <?php foreach($cate_list as $cate): ?>
     <option <?php if($cate['cate_id'] == $cate_id): ?>selected <?php endif; ?> value="<?php echo $cate['cate_id']; ?>"><?php echo $cate['cate_name']; ?></option>
 
     <?php endforeach; ?>
    </select></div>
    
    
     <div class="input-group"><span class="input-group-addon " id="basic-addon1">案例logo</span><input name="logo" type="file" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value=""><?php if($anli['logo']): ?>&nbsp;&nbsp;<img src="<?php echo $anli['logo']; ?>" style="height:40px;"><?php endif; ?></div>
     
      <div class="input-group"><span class="input-group-addon " id="basic-addon1">案例二维码</span><input name="qrcode" type="file" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value=""><?php if($anli['qrcode']): ?>&nbsp;&nbsp;<img src="<?php echo $anli['qrcode']; ?>" style="height:40px;"><?php endif; ?></div>
      
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">案例图</span><input name="image" type="file" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value=""><?php if($anli['image']): ?>&nbsp;&nbsp;<img src="<?php echo $anli['image']; ?>" style="height:40px;"><?php endif; ?></div>
    
    
  
  
  
    
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">详情</span>  <textarea name="content" class="form-control" placeholder="" aria-describedby="basic-addon1" style=" height:400px; width:800px" id="editor_id"><?php echo $anli['content']; ?></textarea></div>
       <div class="input-group"><span class="input-group-addon " id="basic-addon1">排序</span><input name="sort" type="number" class="form-control w100" placeholder="" aria-describedby="basic-addon1" value="<?php echo (isset($anli['sort']) && ($anli['sort'] !== '')?$anli['sort']:0); ?>"></div>
       
			
      
      
      </div>

 <input type="hidden" name="anli_id" value="<?php echo $anli['anli_id']; ?>">
 <br>
  <div class="btn-group" role="group"><input type="submit" class="btn btn-primary" value="确认保存"></div>
  </form>
   </div>
</div>

       

    </body>
</html>
