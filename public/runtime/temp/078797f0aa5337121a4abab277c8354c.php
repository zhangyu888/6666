<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\index\index.html";i:1468670408;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>common.css">
  <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>style.css">
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery.SuperSlide.js"></script>
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>common.js">
  </script>
  <title>后台首页</title>
</head>
<body>

    <div class="top">

      <div id="top_t">

        <div id="logo" class="fl"></div>

        <div id="photo_info" class="fr">

          <div id="photo" class="fl">
            <a href="#"><img src="<?php echo ADMIN_IMAGE_URL; ?>/a.png" alt="" width="60" height="60"></a>
          </div>

          <div id="base_info" class="fr">

            <div class="help_info">

              <a href="/" id="hp" target="_blank">首页</a>

              <a href="/wap/index" id="gy" target="_blank">手机版</a>

              <a href="/admin/index/logout" id="out">退出</a>

            </div>

            <div class="info_center"><?php echo \think\Cookie::get('admin_name'); ?>
            </div>

          </div>

        </div>

      </div>

 
    </div>
    <div class="side" style="top:81px;">
        <div class="sideMenu" style="margin:0 auto">  
        <?php foreach($auth_list as  $val): ?>
          <h3> <?php echo $val['auth_name']; ?></h3>
          <ul>
          <?php foreach($val['child'] as  $child): ?>
 <li ><a href="/admin/<?php echo $child['auth_c']; ?>/<?php echo $child['auth_a']; ?>" target="right"><?php echo $child['auth_name']; ?></a></li>
           <?php endforeach; ?>    
         </ul>
         
        <?php endforeach; ?>    
       
       </div>

    </div>

    <div class="main" style="top:81px;">

       <iframe name="right" id="rightMain" src="/admin/index/info" ></iframe>
    </div>

    <div class="bottom">

      <div id="bottom_bg">衢州猫神网络科技有限公司版权所有</div>

    </div>

    <div class="scroll">

          <a href="javascript:;" class="per" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(1);"></a>

          <a href="javascript:;" class="next" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(2);"></a>

    </div>

</body>
</html>
