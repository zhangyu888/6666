<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"E:\xampp\htdocs\newxy\public/../application/admin\view\manager\add.html";i:1468391226;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加管理员</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
      
   <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>bootstrap.min.css">
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
.auth ul{
  overflow: hidden;
}
.auth li{
  float:left;
  list-style: none;
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
  <div class="panel-heading">当前位置是：管理员管理->添加管理员</div>
  <div class="panel-body">
  <form action="/index.php/admin/manager/add" method="post">
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">姓名</span><input name="manager_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $manager['admin_name']; ?>"></div>
 <div class="input-group"><span class="input-group-addon " id="basic-addon1">职位</span><input name="position" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $manager['position']; ?>"></div>
 <div class="input-group"><span class="input-group-addon " id="basic-addon1">电话</span><input name="tel" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $manager['tel']; ?>"></div>
 <div class="input-group"><span class="input-group-addon " id="basic-addon1">设置密码</span><input name="password" type="password" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value=""><?php if($manager['password']): ?>密码为空则不修改<?php endif; ?></div>
  <div class="input-group"><span class="input-group-addon " id="basic-addon1">重复密码</span><input name="password2" type="password" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value=""></div>
   </div>
<div class="panel-heading">权限设置</div>
  <div class="panel-body">
  <div class="auth">
     <?php foreach($auth_list as  $val): ?>
          <h5><input type="checkbox" name="auth[]" value="<?php echo $val['auth_id']; ?>" id="<?php echo $val['auth_id']; ?>" <?php if(in_array(($val['auth_id']), is_array($manager['auth'])?$manager['auth']:explode(',',$manager['auth']))): ?>checked<?php endif; ?>><label for="<?php echo $val['auth_id']; ?>"><?php echo $val['auth_name']; ?></label> </h5>
          <ul>
          <?php foreach($val['child'] as  $child): ?>
 <li ><input type="checkbox" name="auth[]" value="<?php echo $child['auth_id']; ?>" id="<?php echo $child['auth_id']; ?>" <?php if(in_array(($child['auth_id']), is_array($manager['auth'])?$manager['auth']:explode(',',$manager['auth']))): ?>checked<?php endif; ?>><label for="<?php echo $child['auth_id']; ?>"><?php echo $child['auth_name']; ?></label>&nbsp;&nbsp;
 </li>
           <?php endforeach; ?>    
         </ul>
         
        <?php endforeach; ?>   
  </div>


  </div>
     <input type="hidden" name="manager_id" value="<?php echo $manager['admin_id']; ?>">
  <div class="btn-group" role="group"><input type="submit" class="btn btn-primary" value="确认保存"></div>
  </form> 
    
</div>

  

    </body>
</html>
