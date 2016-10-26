<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\goods\add.html";i:1470983947;}*/ ?>
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
  <div class="panel-heading">当前位置是：商品管理->添加商品</div>
  <div class="panel-body">
  <form action="/index.php/admin/goods/add" method="post" enctype="multipart/form-data">
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">商品名称</span><input name="goods_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $goods['goods_name']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">商品分类</span><select name="cate_id" class="form-control w200">
        
         <?php foreach($cate_list as $cate): ?>
     <option <?php if($cate['cate_id'] == $cate_id): ?>selected <?php endif; ?> value="<?php echo $cate['cate_id']; ?>"><?php echo $cate['cate_name']; ?></option>
 
     <?php endforeach; ?>
    </select></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">商品价格</span><input name="goods_price" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $goods['goods_price']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">促销价格</span><input name="promote_price" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $goods['promote_price']; ?>"></div>
<!--     <div class="input-group"><span class="input-group-addon">
    <input type="checkbox" aria-label="..." name="is_exchange" value="1" <?php if($goods['is_exchange']): ?>checked<?php endif; ?>>是否可以兑换
  </span><input name="exchange_money" type="text" class="form-control w200" placeholder="兑换金额" aria-describedby="basic-addon1" value="<?php echo $goods['exchange_money']; ?>"></div> -->
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">库存</span><input name="goods_number" type="number" class="form-control w100" placeholder="" aria-describedby="basic-addon1" value="<?php echo $goods['goods_number']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">虚拟销量</span><input name="sales" type="number" class="form-control w100" placeholder="" aria-describedby="basic-addon1" value="<?php echo $goods['sales']; ?>"></div>
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">商品图</span><input name="image" type="file" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value=""><?php if($goods['goods_src']): ?>&nbsp;&nbsp;<img src="<?php echo $goods['goods_src']; ?>" style="height:40px;"><?php endif; ?></div>
    
     <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">金</span>
  <input type="number" class="form-control"  aria-describedby="basic-addon1"  name="jin" value="<?php echo $goods['jin']; ?>">
<span class="input-group-addon" id="basic-addon1">木</span>
  <input type="number" class="form-control"  aria-describedby="basic-addon1"  name="mu" value="<?php echo $goods['mu']; ?>">
  <span class="input-group-addon" id="basic-addon1">水</span>
  <input type="number" class="form-control"  aria-describedby="basic-addon1"  name="shui" value="<?php echo $goods['shui']; ?>">
  <span class="input-group-addon" id="basic-addon1">火</span>
  <input type="number" class="form-control"  aria-describedby="basic-addon1"  name="huo" value="<?php echo $goods['huo']; ?>">
  <span class="input-group-addon" id="basic-addon1">土</span>
  <input type="number" class="form-control"  aria-describedby="basic-addon1"  name="tu" value="<?php echo $goods['tu']; ?>">
</div>  
  
  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">用量</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="yl" ><?php echo $goods['yl']; ?></textarea>

</div>
 <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">功效</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="gx" ><?php echo $goods['gx']; ?></textarea>
 
</div>
  

 <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">禁忌</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="jj" ><?php echo $goods['jj']; ?></textarea>
 
</div>
  
  
    
    <div class="input-group"><span class="input-group-addon " id="basic-addon1">详情</span>  <textarea name="goods_content" class="form-control" placeholder="" aria-describedby="basic-addon1" style=" height:400px; width:800px" id="editor_id"><?php echo $goods['goods_content']; ?></textarea></div>
       <div class="input-group"><span class="input-group-addon " id="basic-addon1">排序</span><input name="sort" type="number" class="form-control w100" placeholder="" aria-describedby="basic-addon1" value="<?php echo (isset($goods['sort']) && ($goods['sort'] !== '')?$goods['sort']:0); ?>"></div>
           <div class="input-group w100"><span class="input-group-addon w100" >
        <input type="checkbox" aria-label="..." name="is_best" value="1" <?php if($goods['is_best']): ?>checked<?php endif; ?>>精品
      </span>&nbsp;&nbsp;<span class="input-group-addon w100" >
        <input type="checkbox" aria-label="..." name="is_new" value="1" <?php if($goods['is_new']): ?>checked<?php endif; ?>>新品
      </span>&nbsp;&nbsp;
      <span class="input-group-addon w100" >
        <input type="checkbox" aria-label="..." name="is_sb" value="1" <?php if($goods['is_sb']): ?>checked<?php endif; ?>>食补
      </span>&nbsp;&nbsp;
	 <span class="input-group-addon w100" >
        <input type="checkbox" aria-label="..." name="is_yb" value="1" <?php if($goods['is_yb']): ?>checked<?php endif; ?>>药补
      </span>&nbsp;&nbsp;
	  <span class="input-group-addon w100" >
        <input type="checkbox" aria-label="..." name="is_sg" value="1" <?php if($goods['is_sg']): ?>checked<?php endif; ?>>水果
      </span>&nbsp;&nbsp;
	  <span class="input-group-addon w100" >
        <input type="checkbox" aria-label="..." name="is_sc" value="1" <?php if($goods['is_sc']): ?>checked<?php endif; ?>>蔬菜
      </span>
			
      
      
      </div>

 <input type="hidden" name="goods_id" value="<?php echo $goods['goods_id']; ?>">
 <br>
  <div class="btn-group" role="group"><input type="submit" class="btn btn-primary" value="确认保存"></div>
  </form>
   </div>
</div>

       

    </body>
</html>
