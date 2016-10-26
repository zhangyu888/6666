<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\wechatmenu\set.html";i:1465492270;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>微信菜单设置</title>
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
  <div class="panel-heading">当前位置是：微信菜单设置</div>
  <div class="panel-body">
  <form action="/index.php/admin/Wechatmenu/set" method="post">

 <ul class="nav nav-tabs" role="tablist" id="feature-tab">
        <li class="active"><a href="#tab-config" role="tab" data-toggle="tab">一级菜单</a></li>
        <li><a href="#tab-wx" role="tab" data-toggle="tab">二级菜单</a></li>
        <li><a href="#tab-fx" role="tab" data-toggle="tab">三级菜单</a></li>
      
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab-config">
           <div class="input-group"><span class="input-group-addon " id="basic-addon1">一级菜单名</span><input name="menu1_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu1['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu1_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu1['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu1['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu1_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu1['type']=='view'): ?><?php echo $menu1['url']; else: ?><?php echo $menu1['key']; endif; ?>"></div>
     <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu11_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu1['sub_button'][0]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu11_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu1['sub_button'][0]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu1['sub_button'][0]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu11_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu1['sub_button'][0]['type']=='view'): ?><?php echo $menu1['sub_button'][0]['url']; else: ?><?php echo $menu1['sub_button'][0]['key']; endif; ?>"></div>


    <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu12_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu1['sub_button'][1]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu12_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu1['sub_button'][1]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu1['sub_button'][1]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu12_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu1['sub_button'][1]['type']=='view'): ?><?php echo $menu1['sub_button'][1]['url']; else: ?><?php echo $menu1['sub_button'][1]['key']; endif; ?>"></div>


      <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu13_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu1['sub_button'][2]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu13_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu1['sub_button'][2]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu1['sub_button'][2]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu13_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu1['sub_button'][2]['type']=='view'): ?><?php echo $menu1['sub_button'][2]['url']; else: ?><?php echo $menu1['sub_button'][2]['key']; endif; ?>"></div>

      <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu14_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu1['sub_button'][3]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu14_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu1['sub_button'][3]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu1['sub_button'][3]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu14_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu1['sub_button'][3]['type']=='view'): ?><?php echo $menu1['sub_button'][3]['url']; else: ?><?php echo $menu1['sub_button'][3]['key']; endif; ?>"></div>

            <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu15_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu1['sub_button'][4]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu15_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu1['sub_button'][4]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu1['sub_button'][4]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu15_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu1['sub_button'][4]['type']=='view'): ?><?php echo $menu1['sub_button'][4]['url']; else: ?><?php echo $menu1['sub_button'][4]['key']; endif; ?>"></div>

        </div>
      <div class="tab-pane" id="tab-wx">
           
          <div class="input-group"><span class="input-group-addon " id="basic-addon1">二级菜单名</span><input name="menu2_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu2['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu2_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu2['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu2['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu2_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu2['type']=='view'): ?><?php echo $menu2['url']; else: ?><?php echo $menu2['key']; endif; ?>"></div>
     <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu21_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu2['sub_button'][0]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu21_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu2['sub_button'][0]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu2['sub_button'][0]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu21_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu2['sub_button'][0]['type']=='view'): ?><?php echo $menu2['sub_button'][0]['url']; else: ?><?php echo $menu2['sub_button'][0]['key']; endif; ?>"></div>


    <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu22_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu2['sub_button'][1]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu22_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu2['sub_button'][1]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu2['sub_button'][1]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu22_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu2['sub_button'][1]['type']=='view'): ?><?php echo $menu2['sub_button'][1]['url']; else: ?><?php echo $menu2['sub_button'][1]['key']; endif; ?>"></div>


      <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu23_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu2['sub_button'][2]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu23_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu2['sub_button'][2]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu2['sub_button'][2]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu23_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu2['sub_button'][2]['type']=='view'): ?><?php echo $menu2['sub_button'][2]['url']; else: ?><?php echo $menu2['sub_button'][2]['key']; endif; ?>"></div>

      <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu24_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu2['sub_button'][3]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu24_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu2['sub_button'][3]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu2['sub_button'][3]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu24_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu2['sub_button'][3]['type']=='view'): ?><?php echo $menu2['sub_button'][3]['url']; else: ?><?php echo $menu2['sub_button'][3]['key']; endif; ?>"></div>

            <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu25_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu2['sub_button'][4]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu25_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu2['sub_button'][4]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu2['sub_button'][4]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu25_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu2['sub_button'][4]['type']=='view'): ?><?php echo $menu2['sub_button'][4]['url']; else: ?><?php echo $menu2['sub_button'][4]['key']; endif; ?>"></div>


        </div>
   <div class="tab-pane" id="tab-fx">

          <div class="input-group"><span class="input-group-addon " id="basic-addon1">三级菜单名</span><input name="menu3_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu3['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu3_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu3['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu3['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu3_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu3['type']=='view'): ?><?php echo $menu3['url']; else: ?><?php echo $menu3['key']; endif; ?>"></div>
     <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu31_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu3['sub_button'][0]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu31_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu3['sub_button'][0]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu3['sub_button'][0]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu31_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu3['sub_button'][0]['type']=='view'): ?><?php echo $menu3['sub_button'][0]['url']; else: ?><?php echo $menu3['sub_button'][0]['key']; endif; ?>"></div>


    <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu32_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu3['sub_button'][1]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu32_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu3['sub_button'][1]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu3['sub_button'][1]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu32_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu3['sub_button'][1]['type']=='view'): ?><?php echo $menu3['sub_button'][1]['url']; else: ?><?php echo $menu3['sub_button'][1]['key']; endif; ?>"></div>


      <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu33_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu3['sub_button'][2]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu33_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu3['sub_button'][2]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu3['sub_button'][2]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu33_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu3['sub_button'][2]['type']=='view'): ?><?php echo $menu3['sub_button'][2]['url']; else: ?><?php echo $menu3['sub_button'][2]['key']; endif; ?>"></div>

      <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu34_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu3['sub_button'][3]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu34_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu3['sub_button'][3]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu3['sub_button'][3]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu34_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu3['sub_button'][3]['type']=='view'): ?><?php echo $menu3['sub_button'][3]['url']; else: ?><?php echo $menu3['sub_button'][3]['key']; endif; ?>"></div>

            <div class="input-group"><span class="input-group-addon " id="basic-addon1">子菜单名</span><input name="menu35_name" type="text" class="form-control w200" placeholder="" aria-describedby="basic-addon1" value="<?php echo $menu3['sub_button'][4]['name']; ?>"><span class="input-group-addon " id="basic-addon1">事件</span><select name="menu35_type"  class="form-control w200"  aria-describedby="basic-addon1" ><option value="click" <?php if($menu3['sub_button'][4]['type']=="click"): ?>selected<?php endif; ?>>click</option><option value="view" <?php if($menu3['sub_button'][4]['type']=="view"): ?>selected<?php endif; ?>>view</option></select><span class="input-group-addon " id="basic-addon1">属性</span><input name="menu35_value" type="text" class="form-control w300" placeholder="" aria-describedby="basic-addon1" value="<?php if($menu3['sub_button'][4]['type']=='view'): ?><?php echo $menu3['sub_button'][4]['url']; else: ?><?php echo $menu3['sub_button'][4]['key']; endif; ?>"></div>

        </div>
    </div>

    
 
 <input type="hidden" name="id" value="<?php echo $config['id']; ?>">
 <br>
  <div class="btn-group" role="group"><input type="submit" class="btn btn-primary" value="确认保存"></div>
  </form>
  <div class="btn-group" role="group"><a href="/index.php/admin/Wechatmenu/set_menu" class="btn btn-info" style="width:120px" >生成微信菜单</a></div>
   </div>
</div>

       

    </body>
</html>
