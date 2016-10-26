<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\weixin\public/../application/admin\view\article\add.html";i:1465010819;}*/ ?>
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
  <div class="panel-heading">当前位置是：文章管理->添加文章</div>
  <div class="panel-body">
  <form action="/index.php/admin/article/add" method="post">
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">文章标题</span><input name="article_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $article['article_name']; ?>"></div>

    <div class="input-group w100"><span class="input-group-addon w100" >
        <input type="checkbox" aria-label="..." name="status" value="1" <?php if($article['status']): ?>checked<?php endif; ?>>是否显示
      </span></div>

   
 
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">详情</span>  <textarea name="article_content" class="form-control" placeholder="" aria-describedby="basic-addon1" style=" height:250px;" id="editor_id"><?php echo $article['article_content']; ?></textarea></div>
 <input type="hidden" name="article_id" value="<?php echo $article['article_id']; ?>">
  <div class="btn-group" role="group"><input type="submit" class="btn btn-primary" value="确认保存"></div>
  </form>
   </div>
</div>

       

    </body>
</html>
