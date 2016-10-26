<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"E:\xampp\htdocs\newxy\public/../application/index\view\goods\cart.html";i:1468661460;s:73:"E:\xampp\htdocs\newxy\public/../application/index\view\public\header.html";i:1468655862;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>购物车-<?php echo $shop_config['shop_name']; ?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<link href="http://www.zsly.com/themes/miqinew/css/base.css" rel="stylesheet" type="text/css">
<link href="http://www.zsly.com/themes/miqinew/css/home_header.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="http://www.zsly.com/themes/miqinew/css/home_cart.css?aa">
<script type="text/javascript" src="<?php echo INDEX_JS_URL; ?>jquery-1.9.1.min.js"></script>
</head>
<body>
<style type="text/css">
    /* ====================
     购物流程
==================== */
.nstep_tit { margin-bottom:15px; height:35px }
/*购物车9之购物车步骤图*/
.nstep_tit img{ width:980px; height:31px; overflow:hidden; }

.nstep_products  { width:980px; padding:0 0 6px 0; margin:0px auto; }
.nstep_products table {font-size: 14px;}
.flowBox{border:1px #e5e5e5 solid;}
.nstep_products table th {height: 33px;font-size: 14px;text-align: center;border-bottom: 1px solid #e5e5e5;font-weight: normal;background: url("images/shop_top_bg.gif") repeat-x left 0; color: #333;}
.nstep_products table tr.cartList { border-top:1px #e5e5e5 dashed; height:80px; }
.nstep_pbox img {border: 1px solid #e7e7e7;display: block; margin:15px; float:left}
.nstep_products table .nstep_name { text-align:left;padding:0 0 0 10px; width:180px; margin-top:35px; font-size:14px; float:left;}
.nstep_name  a{color: #333; font-family: "宋体",arial,Arial Narrow,serif;}
.chkprice {color: #c30000;}
.sub{margin-left:10px;}
.sub, .add{ width:23px; height:25px; display:block; float:left;cursor: pointer; }
.shuliang{ width: 30px; float:left;height: 21px;line-height: 21px;text-align: center;border:1px solid #e5e5e5;background: 0;}
.nstep_products table td {text-align: center;}
td.nstep1_count div {padding: 10px 20px 0 20px;height: 29px;line-height: 29px;text-align: left;border-top: 1px #e5e5e5 solid; font-size:14px; color:#333; font-weight:bold;}
td.nstep1_count div span,td.nstep1_count div b {color: #c30000;font-size: 18px;}
.bnt_blue_q{ width:80px; height:23px; background:url(images/qk.gif) no-repeat; border:none; padding:0; margin-top:5px; cursor:pointer;}
.nstep_products table td.nstep1_btn {padding:0px 10px 20px 0;text-align: right;}


</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!--<script src="{$themes}/js/common.js" charset="utf-8"></script> -->
<script type="text/javascript">
var PRICE_FORMAT = '&yen;%s';
$(function(){
    //首页左侧分类菜单
    $(".category ul.menu").find("li").each(
        function() {
            $(this).hover(
                function() {
                    var cat_id = $(this).attr("cat_id");
                    var menu = $(this).find("div[cat_menu_id='"+cat_id+"']");
                    menu.show();
                    $(this).addClass("hover");
                    if(menu.attr("hover")>0) return;
                    menu.masonry({itemSelector: 'dl'});
                    var menu_height = menu.height();
                    if (menu_height < 60) menu.height(80);
                    menu_height = menu.height();
                    var li_top = $(this).position().top;
                    if ((li_top > 60) && (menu_height >= li_top)) $(menu).css("top",-li_top+50);
                    if ((li_top > 150) && (menu_height >= li_top)) $(menu).css("top",-li_top+90);
                    if ((li_top > 240) && (li_top > menu_height)) $(menu).css("top",menu_height-li_top+90);
                    if (li_top > 300 && (li_top > menu_height)) $(menu).css("top",60-menu_height);
                    if ((li_top > 40) && (menu_height <= 120)) $(menu).css("top",-5);
                    menu.attr("hover",1);
                },
                function() {
                    $(this).removeClass("hover");
                    var cat_id = $(this).attr("cat_id");
                    $(this).find("div[cat_menu_id='"+cat_id+"']").hide();
                }
            );
        }
    );
/*  $(".head-user-menu dl").hover(function() {
        $(this).addClass("hover");
    },
    function() {
        $(this).removeClass("hover");
    }); */
    $('.head-user-menu .my-mall').mouseover(function(){// 最近浏览的商品
        load_history_information();
        $(this).unbind('mouseover');
    });
/*  $('.head-user-menu .my-cart').mouseover(function(){// 运行加载购物车
        load_cart_information();
        $(this).unbind('mouseover');
    }); */
    $('#button').click(function(){
        if ($('#keyword').val() == '') {
            return false;
        }
    });
    });

$(function(){
    //search
    var act = "index";
    if (act == "store_list"){
        $("#search").children('ul').children('li:eq(1)').addClass("current");
        $("#search").children('ul').children('li:eq(0)').removeClass("current");
        }
    $("#search").children('ul').children('li').click(function(){
        $(this).parent().children('li').removeClass("current");
        $(this).addClass("current");
        $('#search_act').attr("value",$(this).attr("act"));
        $('#keyword').attr("placeholder",$(this).attr("title"));
    });
    $("#keyword").blur();
    
});
</script>

<!-- PublicTopLayout Begin -->
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<center></center>
<div id="ncToolbar" class="nc-appbar">
  <div class="nc-appbar-tabs" id="appBarTabs">
        <div class="user" nctype="a-barLoginBox">
      <div class="avatar"><?php if($think['session']['headimgurl']): ?><img src="{$smarty.session.headimgurl}"><?php else: ?><img src="<?php echo INDEX_IMAGE_URL; ?>default_user_portrait.gif"><?php endif; ?></div>
      <p><a href="user.php" style="color:#fff;"><?php if($think['session']['user_id']): ?>{$think.session.user_name}<?php else: ?>未登录<?php endif; ?></a></p>
    </div>
    
    
        <ul class="tools">
    
           <li><a href="flow.php?act=cart" id="rtoolbar_cart" class="cart">
     <span class="name">购物车</span>
      
      <i id="rtoobar_cart_count" class="new_msg" style="display:none;"></i>
      </a>
      </li>
            
      <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2762211515&amp;site=qq&amp;menu=yes" id="bizyxqq" class="chat" target="_blank">客服<i id="new_msg" class="new_msg" style="display:none;"></i></a></li>
     
            
            <li><a href="javascript:void(0)" id="gotop" class="gotop" style="opacity: 0.5;">顶部</a></li>
    </ul>

    <a id="activator" href="javascript:void(0);" class="nc-appbar-hide"></a> </div>
  <div class="nc-hidebar" id="ncHideBar">
    <div class="nc-hidebar-bg">
            <div class="user-avatar"><img src="images/default_user_portrait.gif"></div>
            <div class="frame"></div>
      <div class="show"></div>
    </div>
  </div>
</div>

<script type="text/javascript">
//返回顶部
backTop=function (btnId){
    var btn=document.getElementById(btnId);
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    window.onscroll=set;
    btn.onclick=function (){
        btn.style.opacity="0.5";
        window.onscroll=null;
        this.timer=setInterval(function(){
            scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            scrollTop-=Math.ceil(scrollTop*0.1);
            if(scrollTop==0) clearInterval(btn.timer,window.onscroll=set);
            if (document.documentElement.scrollTop > 0) document.documentElement.scrollTop=scrollTop;
            if (document.body.scrollTop > 0) document.body.scrollTop=scrollTop;
        },10);
    };
    function set(){
        scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        btn.style.opacity=scrollTop?'1':"0.5";
    }
};
backTop('gotop');
</script>
<div class="public-top-layout w">
  <div class="topbar wrapper" style="width: 1200px;">
    <div class="user-entry">
        <dl class="mobieapp">
                <dt>手机版<i></i></dt>
                <dd>
                  <h4>扫描二维码<br>
                    关注掌上龙游官方微信</h4>
                  <img src="images/longyou.jpg"> 
                 </dd>
                </dl>       
litao 
          </div>
    <div class="quick-menu">
      <dl style="width: 96px;">
        <dt><a href="user.php">我的掌上龙游</a><i></i></dt>
        <dd style="left: 5px;">
          <ul>
            <li><a href="user.php?act=profile">账户信息</a></li>
            <li><a href="user.php?act=yue">账户余额</a></li>
            
          </ul>
        </dd>
      </dl>
     <dl>
        <dt><a href="user.php?act=order_list">我的订单</a></dt>
        <dd>
        
        </dd>
      </dl>
     
      <dl>
        <dt><a href="javascript:void(0)">客户服务</a><i></i></dt>
        <dd>
          <ul>
            <li><a href="article_cat.php?id=3">帮助中心</a></li>
            <li><a href="article.php?id=22">退换货原则</a></li>
            <li><a href="article.php?id=40">客服中心</a></li>
            
          </ul>
        </dd>
      </dl>
     <dl class="mobieapp">
                <dt>关注我们<i></i></dt>
                <dd>
                <img src="<?php echo INDEX_IMAGE_URL; ?>qrcode.jpg" style="width:105px; height:105px; margin-top:20px;">
                  
                 </dd>
                    
                </dl>
   
          </div>
  </div>
</div>


<header class="ncc-head-layout">
    <div class="site-logo"><a href=""><img src="images/logo.png" class="pngFix"></a></div>
        <ul class="ncc-flow">
      <li class="current"><i class="step1"></i>
        <p>我的购物车</p>
        <sub></sub>
        <div class="hr"></div>
      </li>
      <li class=""><i class="step2"></i>
        <p>填写核对购物信息</p>
        <sub></sub>
        <div class="hr"></div>
      </li>
      <li class=""><i class="step3"></i>
        <p>支付提交</p>
        <sub></sub>
        <div class="hr"></div>
      </li>
      <li class=""><i class="step4"></i>
        <p>订单完成</p>
        <sub></sub>
        <div class="hr"></div>
      </li>
    </ul>
      </header>
  <!-- 购物车内容 -->


  
<Div class="nstep_products ">
  <div class="flowBox">
        <form id="formCart" name="formCart" method="post" action="flow.php">
           <table width="100%" >
            <tr>
              <th bgcolor="#ffffff" colspan="2" style="font-weight:bold;" >商品名称</th>
      <!-- <?php if($show_goods_attribute == 1): ?> 显示商品属性 -->
              <th bgcolor="#ffffff" style="text-align: center;font-weight:bold;" width="110">商品属性</th>
              <!-- <?php endif; ?> -->
 
              <th bgcolor="#ffffff" style="text-align: center;font-weight:bold;" width="110">本店价</th>
              <th bgcolor="#ffffff" style="text-align: center;font-weight:bold;" width="110">购买数量</th>
              <th bgcolor="#ffffff" style="text-align: center;font-weight:bold;" width="110">小计</th>
              <th bgcolor="#ffffff" style="font-weight:bold;" width="80">操作</th>
            </tr>
            <!-- <?php foreach($goods_list as $goods): ?> -->
            <tr id="tr_goods_{$goods.rec_id}" class="cartList">
              <td bgcolor="#ffffff"  colspan="2"  class="nstep_pbox"  >
                <!-- <?php if($goods['goods_id'] > 0 && $goods['extension_code'] != 'package_buy'): ?> 商品 -->
                  <!-- <?php if($show_goods_thumb == 1): ?> -->
                   <p class="nstep_name"> <a href="goods.php?id={$goods.goods_id}" target="_blank" class="f6"><?php echo $goods['goods_name']; ?></a></p>
                  <!-- <?php elseif($show_goods_thumb == 2): ?> -->
    <p class="f_l"><a href="goods.php?id={$goods.goods_id}" target="_blank"><img src="<?php echo $goods['goods_src']; ?>" border="0" title="{$goods.goods_name|escape:html}" width="78" height="78" /></a></p>
                  <!-- <?php else: ?> -->
      <p class="f_l"><a href="goods.php?id={$goods.goods_id}" target="_blank"><img src="<?php echo $goods['goods_src']; ?>" border="0" title="{$goods.goods_name|escape:html}" width="78" height="78"/></a></p>
                   <p class="nstep_name"> <a href="goods.php?id={$goods.goods_id}" target="_blank" class="f6"><?php echo $goods['goods_name']; ?></a></p>
                  <!-- <?php endif; ?> -->
       
                
        
                <!-- <?php endif; ?> -->
              </td>
              <!-- <?php if($show_goods_attribute == 1): ?> 显示商品属性 -->
              <td align="center" bgcolor="#ffffff">{$goods.goods_attr|nl2br}</td>
              <!-- <?php endif; ?> -->
      
              <td align="center" bgcolor="#ffffff"><?php echo $goods['goods_price']; ?></td>
              <td align="center" bgcolor="#ffffff">
              
                <!-- <?php if($goods['goods_id'] > 0 && $goods['is_gift'] == 0 && $goods['parent_id'] == 0): ?> 普通商品可修改数量 -->
      <a href="javascript:void(0)" onclick="changenum({$goods.rec_id},-1)" class="sub"><img src="<?php echo INDEX_IMAGE_URL; ?>sub.png" style="vertical-align:middle;margin-bottom: 7px;" /></a>
                 <input type="text" name="goods_number[{$goods.rec_id}]" id="goods_number_{$goods.rec_id}" value="<?php echo $goods['goods_number']; ?>" size="1"class="shuliang" style="text-align:center "    onchange="change_goods_number({$goods.rec_id},this.value)"/>
      <a  href="javascript:void(0)" onclick="changenum({$goods.rec_id},1)" class="add"><img src="<?php echo INDEX_IMAGE_URL; ?>add.png" style="vertical-align:middle;margin-bottom: 7px;"/></a>
                <!-- <?php else: ?> -->
                {$goods.goods_number}
                <!-- <?php endif; ?> -->
               
              </td>
              <td align="center" bgcolor="#ffffff" id="goods_subtotal_{$goods.rec_id}" class="chkprice "><?php echo round($goods['goods_number']*$goods['goods_price']); ?></td>
              <td align="center" bgcolor="#ffffff" >
                <a href="javascript:if (confirm('是否删除')) location.href='/index/goods/del_cart_goods/cart_id/<?php echo $goods['cart_id']; ?>'; " class="chkprice ">删除</a>
                       </td>
            </tr>
            <!-- <?php endforeach; ?> -->
          </table>
          <table width="100%" >
            <tr>
              <td bgcolor="#ffffff" id="total_desc" class="nstep1_count">
              <div>
             <span style="text-align:left;font-size:12px;float:left;">  <input type="button" value="x清空购物车" style="color:#c30000;background:#fff;padding:3px 10px;border:none;cursor:pointer;"  onclick="location.href='flow.php?step=clear'" /></span>
             <div  style="padding:0;border:none;float:right;">
       
           商品总价
            </div>
              </div>
               
              </td>
            </tr>
          </table>
          <input type="hidden" name="step" value="update_cart" />
        </form>
        <table width="100%" >
          <tr>
            <td colspan="3" width="60%"></td>
            <td bgcolor="#ffffff" align="right" class="nstep1_btn" >
            <div class="ncc-bottom">
<?php if($goods_list): ?>
            <a id="next_submit" href="/index/order/makeorder" class="ncc-btn ncc-btn-acidblue fr"><i class="icon-pencil"></i>下一步，填写核对购物信息</a>
<?php else: ?>
  <a id="next_submit" href="index.php" class="ncc-btn ncc-btn-acidblue fr"><i class="icon-pencil"></i>购物车没商品，去逛逛</a>
<?php endif; ?>
            </div>
     
            
            </td>
          </tr>
        </table>
        <script type="text/javascript">
            function changenum(rec_id, diff)
            {
                var goods_number =Number($('#goods_number_' + rec_id).val()) + Number(diff);    
                if(goods_number < 1)
                {
                    alert("购买数量不能少于1件");    
                }
                else
                {
                    change_goods_number(rec_id,goods_number);
                }
            }
            function change_goods_number(rec_id, goods_number)
            {     
               Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number, change_goods_number_response, 'POST','JSON');                
            }
            function change_goods_number_response(result)
            {               
                if (result.error == 0)
                {
                    var rec_id = result.rec_id;
                    $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
                    $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
                    if (result.goods_number <= 0)
                    {// 数量为零则隐藏所在行
                        $('#tr_goods_' +rec_id).style.display = 'none';
                        $('#tr_goods_' +rec_id).innerHTML = '';
                    }
                    $('#total_desc').html(result.flow_info);//更新合计
                    if ($('ECS_CARTINFO'))
                    {//更新购物车数量
                       $('#ECS_CARTINFO').html(result.cart_info);
                    }
                }
                else if (result.message != '')
                {
                    alert(result.message);
                }                
            }
        </script>


</body>
</html>