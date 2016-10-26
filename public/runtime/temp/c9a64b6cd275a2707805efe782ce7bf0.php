<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\main\month.html";i:1470276193;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>系统默认时间设置</title>
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
</style>
    </head>

    <body>
<div class="panel panel-info">
  <div class="panel-heading">祥元健康 - 系统默认时间</div>
  <div class="panel-body">

 
<form action="/admin/main/month" method="post">
   <div class="input-group">
<button class="btn btn-success" onclick="addLi();return false;">增加</button>
</div>
       <ul id="goodsUl" class="list-group">
 <?php if($month_list): foreach($month_list as  $month): ?>
  <li id="li<?php echo $key; ?>" class="list-group-item"> <input class="form-control" type="text" name="" value="<?php echo $month['form_month']; ?>" style="width:200px;display:inline-block"><a href="javascript:deleteLi('li<?php echo $key; ?>',<?php echo $month['id']; ?>)" class="btn btn-danger">删除</a></li>
 <?php endforeach; endif; ?>
 </ul>

                <script type="text/javascript">
 <?php if($active_goods_count): ?>
 var liIndex=<?php echo $active_goods_count; ?>;
 <?php else: ?>
 var liIndex=1;
 <?php endif; ?>
 function addLi(){
  liIndex++;
  var oLi='<li id="li'+liIndex+'" class="list-group-item">开始月日<input type="text" class="form-control" name="start[]" value="" style="width:100px;display:inline-block" >结束月日<input type="text" class="form-control" name="end[]" value="" style="width:100px;display:inline-block" >&nbsp;<a href="javascript:deleteLi(\'li'+liIndex+'\')" class="btn btn-danger">删除</a></li>';
  $("#goodsUl").append(oLi);
 }
 function deleteLi(id,mid){
  $("#"+id).remove();
  if(arguments[1]){
    $.post('/admin/main/del_month_ajax',{"mid": mid}, function(data, textStatus, xhr) {

    },'json');

  }
 }


 </script>
  <input type="submit" name="" value="确认修改"  class="btn btn-primary">
</form>
</div>
</div>
       

    </body>
</html>
