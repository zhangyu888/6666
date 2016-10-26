<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"E:\xampp\htdocs\newxy\public/../application/index\view\goods\goods_info.html";i:1468656616;s:73:"E:\xampp\htdocs\newxy\public/../application/index\view\public\header.html";i:1468655862;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $goods['goods_name']; ?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<link href="http://www.zsly.com/themes/miqinew/css/base.css" rel="stylesheet" type="text/css">
<link href="http://www.zsly.com/themes/miqinew/css/home_header.css" rel="stylesheet" type="text/css">
<link href="http://www.zsly.com/themes/miqinew/css/home_goods.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="http://www.zsly.com/themes/miqinew/css/css.css">
<script type="text/javascript" src="<?php echo INDEX_JS_URL; ?>jquery-1.9.1.min.js"></script>
</head>
<body>

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


<div class="nch-breadcrumb-layout" style="margin-top:10px;text-align:left;">
 
            首页->商品分类-><?php echo $goods['goods_name']; ?>
         
  </div>

 
<style type="text/css">
.gallery{position: absolute; overflow: hidden; display:none; height: 320px; width: 320px; left: 20px; top: 20px;text-align:center;}
/*商品单选属性*/
.catt{width:100%;height:auto;overflow:hidden;padding-bottom:5px;}
.catt a{border: #e0e0e0 1px solid;text-align: center; background-color: #f4f4f4; margin-left:5px;margin-top:6px; padding:3px 15px;display: block; white-space: nowrap; color: #999; text-decoration: none;float:left;}
.catt a:hover {border:#D93600 2px solid; margin: -1px; margin-left:4px;margin-top:5px;}
.catt a:focus {outline-style:none;}
.catt .cattsel {border:#D93600 2px solid; margin: -1px;margin-left:4px;margin-top:5px;}
.catt .cattsel a:hover {border: #D93600 2px solid;margin:-1px;}
.comments{
        margin-top:20px;
    }
    .comments  li img{
        width:50px;
        height:50px;
        border-radius:50px;
    }
        .comments li{
            padding:5px 10px;
            font-size:12px;
            height:40px;
            line-height:40px;
        }
        .comments li p{
            
            line-height:5px;
        }
    

        .comments>div{
            padding:5px 10px;
        }
        .comments  li font{
            color:#093;
        }
        .comments li img{
            float:left;
        }
</style>

<div id="content" class="wrapper pr">
    <input type="hidden" id="lockcompare" value="unlock">
  <div class="ncs-detail">
    <!-- S 商品图片 -->
      <div id="ncs-goods-picture" class="ncs-goods-picture image_zoom"><div class="gallery_wrap" style="height: 360px; width: 360px; position: relative; overflow: hidden;">
         <!-- <?php if($pictures): ?>-->
       <?php foreach($pictures as $picture): ?>
          <div class="gallery gallery_{$key}" <?php if($key == 0): ?> style="display:block"<?php endif; ?>>
    <img src="{$picture.img_url}" alt="" style="height: 320px; width: 320px;">
    </div>
  <?php endforeach; ?>

         <!-- <?php else: ?> -->
         <img src="<?php echo $goods['goods_src']; ?>" alt="{$goods.goods_name|escape:html}"/>
         <!-- <?php endif; ?>-->
         
   
    </div>
    <div class="controller_wrap"><div class="controller">
    
    <ul>
     <!-- <?php foreach($pictures as $picture): ?>-->
    
    <li><a href="javascript:;"  <?php if($key == 0): ?>class="controller_{$key} current"<?php else: ?>class="controller_{$key}" <?php endif; ?>><img src="{$picture.thumb_url}" height="60" width="60" alt=""></a></li>
       <!--<?php endforeach; ?>--> 
    </ul>
    </div>
   
    <a href="javascript:void(0);" class="prev"><span>«</span></a><a href="javascript:void(0);" class="next"><span>»</span></a></div><div class="close_wrap"><a href="javascript:;" class="close" style="display: none;">×</a></div></div>
     <script type="text/javascript">
     var curr=0;
     var picLen=$(".controller ul li").length;
     
        $(".controller ul li").each(function(index, element) {
        $(this).click(function(){
            $(".controller li a").removeClass("current");
            $(".controller_"+index).addClass("current");
            $(".gallery").fadeOut();
            $(".gallery_"+index).fadeIn();
        });
    });
        $(".next").click(function(event) {
            curr++;
            if(curr==picLen)
                curr=0;
            show_pic(curr);
        });
        $(".prev").click(function(event) {
            curr--;
            if(curr<0)
                curr=picLen-1;
            show_pic(curr);
        });
        function show_pic(index){
             $(".controller li a").removeClass("current");
            $(".controller_"+index).addClass("current");
            $(".gallery").fadeOut();
            $(".gallery_"+index).fadeIn();
           
        }
  
        </script>
    <!-- S 商品基本信息 -->
     <form action="" method="post" name="ECS_FORMBUY"  >
    <div class="ncs-goods-summary">
      <div class="name">
        <h1><?php echo $goods['goods_name']; ?></h1>
        <strong></strong> </div>
      <div class="ncs-meta">
<!--         <div class="rate"> <a href="">商品评分</a>
  <div class="raty" data-score="5" title="很满意" style="width: 100px;"><img src="images/star-on.png" alt="1" title="很满意">&nbsp;<img src="images/star-on.png" alt="2" title="很满意">&nbsp;<img src="images/star-on.png" alt="3" title="很满意">&nbsp;<img src="images/star-on.png" alt="4" title="很满意">&nbsp;<img src="images/star-on.png" alt="5" title="很满意"><input type="hidden" name="score" value="5" readonly></div>
</div> -->

        <!-- S 商品参考价格 -->
        <!--  <dl>
          <dt>市&nbsp;场&nbsp;价：</dt>
          <dd class="cost-price"><strong>{$goods.market_price}</strong></dd>
        </dl>-->
        <!-- E 商品参考价格 -->
        <!-- S 商品发布价格 -->
        <dl id="goods_price">
         <!--<?php if($goods['is_promote'] and $goods['gmt_end_time']): ?> 促销--> 
               <dt>促&nbsp;销&nbsp;价：</dt>
          <dd class="price">
                        <strong>￥<?php echo $goods['goods_price']; ?></strong>
                      </dd>
       
         <!--<?php else: ?>-->
             <dt>市&nbsp;场&nbsp;价：</dt>
          <dd class="price">
  <?php echo $goods['goods_price']; ?>
            
                      </dd>
         <!--<?php endif; ?>-->

        </dl>
        <dl>
        <dt>当&nbsp;前&nbsp;价：</dt>
          <dd class="price">
  
              <strong  class="shop"><?php echo $goods['goods_price']; ?></strong> 
                      </dd>
    
        </dl>
   <dl>
          <dt>数&nbsp;&nbsp;&nbsp;&nbsp;量：</dt>
          <dd ><a onclick="buyNumber.minus()" href="javascript:;"><img src="<?php echo INDEX_IMAGE_URL; ?>jian.gif" ></a>
                    <input name="number" type="text" value="1" defaultnumber="1"  id="goods_number" size="5" style="text-align:center">
          <a onclick="buyNumber.plus()" href="javascript:;"><img src="<?php echo INDEX_IMAGE_URL; ?>jia.gif" /></a></dd>
        </dl>

         <dl>
          <dt>已&nbsp;&nbsp;&nbsp;&nbsp;售：</dt>
          <dd ><?php echo $goods['sales']; ?></dd>
        </dl>
      <dl>
          <dt>库&nbsp;&nbsp;&nbsp;&nbsp;存：</dt>
          <dd ><?php echo $goods['goods_number']; ?></dd>
        </dl>
          <!-- <?php if($cfg['use_integral']): ?> 购买此商品可使用积分-->
          <!-- <dl>
          <dt>用&nbsp;积&nbsp;分：</dt>
          <dd ><strong><strong>{$lang.goods_integral}</strong><font class="f4">{$goods.integral} {$points_name}</font></strong></dd>
        </dl> --> 
           <!-- <?php endif; ?> --> 
      </div>
         
           
             
                
 <!-- <?php if($goods['is_shipping']): ?> 为免运费商品则显示-->
                <p> {$lang.goods_free_shipping} </p>
                <!-- <?php endif; ?> --> 
      <div class="ncs-plus">
      
      
   <!-- {* 开始循环所有可选属性 *} --> 
                
                <!-- <?php foreach($specification as $spec): ?> -->
                
                <p class="catt" >
                <strong style="float:left; width:60px; font-size: 13px;font-weight:normal; padding-top:10px;  margin-left: 35px;">{$spec.name}：</strong>
              
                    <!-- {* 判断属性是复选还是单选 *} --> 
                    <!-- <?php if($spec['attr_type'] == 1): ?> --> 
                    <!-- <?php if($cfg['goodsattr_style'] == 1): ?> -->
                    
                      <!-- <?php foreach($spec['values'] as $value): ?> --> 
                       
                      <a style=" text-decoration:none" <?php if($key == 0): ?>class="cattsel"<?php endif; ?> onclick="changeAtt(this)" href="javascript:;" name="{$value.id}" title="[<?php if($value['price'] > 0): ?>{$lang.plus}<?php elseif($value['price'] < 0): ?>{$lang.minus}<?php endif; ?> {$value.format_price|abs}]">{$value.label}
                      <input style="display:none" id="spec_value_{$value.id}" type="radio" name="spec_{$spec_key}" value="{$value.id}" <?php if($key == 0): ?>checked<?php endif; ?> /></a> 
                      
                      <!-- <?php endforeach; ?> --> 
                   
                    <input type="hidden" name="spec_list" value="{$key}" />
                    <!-- <?php else: ?> -->
                    <select name="spec_{$spec_key}" onchange="changePrice()">
                      <!-- <?php foreach($spec['values'] as $value): ?> -->
                      <option label="{$value.label}" value="{$value.id}">{$value.label} <?php if($value['price'] > 0): ?>{$lang.plus}<?php elseif($value['price'] < 0): ?>{$lang.minus}<?php endif; if($value['price'] != 0): ?>{$value.format_price}<?php endif; ?></option>
                      <!-- <?php endforeach; ?> -->
                    </select>
                    <input type="hidden" name="spec_list" value="{$key}" />
                    <!-- <?php endif; ?> --> 
                    <!-- <?php else: ?> --> 
                    <!-- <?php foreach($spec['values'] as $value): ?> -->
                    <label for="spec_value_{$value.id}">
                      <input type="checkbox" name="spec_{$spec_key}" value="{$value.id}" id="spec_value_{$value.id}" onclick="changePrice()" />
                      {$value.label} [<?php if($value['price'] > 0): ?>{$lang.plus}<?php elseif($value['price'] < 0): ?>{$lang.minus}<?php endif; ?> {$value.format_price|abs}] </label>
                    <!-- <?php endforeach; ?> -->
                    <input type="hidden" name="spec_list" value="{$key}" />
                    <!-- <?php endif; ?> --> 
                 
                
                 </p>
                <!-- <?php endforeach; ?> --> 
               
                <!-- {* 结束循环可选属性 *} -->
      </div>
            <div class="ncs-key">
        <!-- S 商品规格值-->
                <!-- E 商品规格值-->
                                <!-- S 购买数量及库存 -->
   
                  <script>
                       
                                // add by liuguichun 2011-7-19
                                var buyNumber = {
                                    maxNumber : 100,
                                    minNumber : 1,
                                    defaultNumber : function(){
                                        var defaultnumber = $('#product_num').attr('defaultnumber');
                                        defaultnumber = parseInt(defaultnumber)
                                        if(defaultnumber < 1){
                                            defaultnumber = 1;
                                        }
                                        return defaultnumber;
                                    },
                                                                                                                                    
                                    goodNumber : function(num){
                                        if(typeof(num) == 'number'){

                                            return $('#product_num').val(num);

                                        }else{
                                            return parseInt($('#product_num').val());
                                        }
                                                                                                                                        
                                    },
                                    plus : function(){
                                        var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
                                        if(num <= buyNumber.maxNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                        changePrice();
                                    },
                                    minus : function(){
                                        var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
                                        if(num >= buyNumber.minNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                        changePrice();
                                    }
                                                                                                                                    
                                }
                            </script>
                <!-- E 购买数量及库存 -->
      </div>
      <!-- S 购买按钮 -->
        <div class="ncs-btn"><!-- S 提示已选规格及库存不足无法购买 -->
          <div nctype="goods_prompt" class="ncs-point">
                                  </div>
          <!-- E 提示已选规格及库存不足无法购买 -->
          <!-- S到货通知 -->
                    <!-- E到货通知 -->
          <div class="clear"></div>
          
          <!-- 预约 -->
                    <!-- 立即购买-->
          <a href="javascript:addToCart(<?php echo $goods['goods_id']; ?>)" nctype="buynow_submit" class="buynow " title="立即购买">立即购买</a>
                    <!-- 加入购物车-->
          <a href="javascript:addToCartShowDiv(<?php echo $goods['goods_id']; ?>)" nctype="addcart_submit" class="addcart " title="添加购物车">&nbsp;&nbsp;<i class="icon-shopping-cart"></i>加入购物车</a>
       
          <!-- S 加入购物车弹出提示框 -->
          <div class="ncs-cart-popup">
            <dl>
              <dt>成功添加到购物车<a title="关闭" onclick="$(&#39;.ncs-cart-popup&#39;).css({&#39;display&#39;:&#39;none&#39;});">X</a></dt>
              <dd id="ncs-cart-info">购物车共有 <strong id="bold_num"></strong> 种商品 总金额为：<em id="bold_mly" class="saleP"></em></dd>
<dd class="btns">
<a href="flow.php?act=cart" class="ncs-btn-mini ncs-btn-green" >查看购物车</a> 
<a href="" class="ncs-btn-mini" value="" onclick="$(&#39;.ncs-cart-popup&#39;).css({&#39;display&#39;:&#39;none&#39;});">继续购物</a></dd>
            </dl>
          </div>
          <!-- E 加入购物车弹出提示框 -->

        </div>
        
        <div style="margin-left:10px;margin-top:20px; width:90%;">

                 <div class="baozhang">
                      <span class="baozhangname">保障</span>
          </div>
                          
      <div class="baozhang">
        <span id="certMatershiti" class="text-hidden fl ml5" title=""></span>&nbsp;<span class="baozhangname">实体认证</span>
          </div>
                          
        
              
                         <div class="baozhang">
        <span id="certMaterqtian" class="text-hidden fl ml5"></span>&nbsp;<span class="baozhangname">实物拍摄</span>
        </div>
                   
           
           
  <div class="baozhang">
        <span id="certMaterzhping" class="text-hidden fl ml5" title=""></span>&nbsp;<span class="baozhangname">正品保障</span>
       </div>
                  
          
           
          
          
   <div class="baozhang">
        <span id="certMatertuihuo" class="text-hidden fl ml5" title=""></span>&nbsp;<span class="baozhangname">退货承诺</span>
      </div>
                    
            
          
             
<div class="baozhang">
        <span id="certMaterxiaoxie" class="text-hidden fl ml5" title=""></span>&nbsp;<span class="baozhangname">消费者保障</span>
        </div>
                  
          
              
        </div>
        <!-- E 购买按钮 -->
            <!--E 商品信息 -->


    </div>
    </form>
    <!-- E 商品图片及收藏分享 -->
    <div class="ncs-handle">
      <!-- S 分享 -->
      <a href="" class="share" nc_type="sharegoods" data-param="{&quot;gid&quot;:&quot;100004&quot;}"><i></i>分享<span>(<em nc_type="sharecount_100004">0)</em></span></a>
      <!-- S 收藏 -->
    
     
       
            <!-- End --> </div>

    <!--S 店铺信息-->
    <div style=" position: absolute; z-index: 1; top: -1px; right: -1px;">
      <!--店铺基本信息 S-->



    </div>
    <!--E 店铺信息 -->
    <div class="clear"></div>
  </div>
  <div class="ncs-goods-layout expanded">
    <div class="ncs-goods-main" id="main-nav-holder">
      <!-- S 优惠套装 -->
      <div class="ncs-promotion" id="nc-bundling" style="display:none;"></div>
      <!-- E 优惠套装 -->
      <div class="tabbar" id="main-nav">
        <div class="ncs-goods-title-nav">
          <ul id="categorymenu" >
            <li class="current" onclick="show_content('spxq',this)"><a id="tabGoodsIntro" href="javascript:void(0)">商品详情</a></li>
           <li onclick="show_content('sppj',this)"><a id="tabGoodsRate" href="javascript:void(0)">商品评价<em>(<?php echo $comment_num; ?>)</em></a></li>
           <!--  <li><a id="tabGoodsTraded" href="">销售记录<em>(9155)</em></a></li>
            <li><a id="tabGuestbook" href="">购买咨询</a></li> -->
          </ul>
          <div class="switch-bar"><a href="" id="fold">&nbsp;</a></div>
        </div>
      </div>
      <div class="ncs-intro">
        <div class="content bd" id="ncGoodsIntro">

  
 <div class="ncs-goods-info-content" id="spxq">
<div class="default">
 <?php echo htmlspecialchars_decode($goods['goods_content']); ?>

</div>
                      </div>
       <div class="ncs-goods-info-content" id="sppj" style="display:none">
<div class="default">
    <ul class="comments">
       <?php foreach($comment_list as $comment): ?>
        <li><?php if($comment['headimgurl']): ?>微信用户<img height="30" src="<?php echo $comment['headimgurl']; ?>" /><font><?php echo $comment['nickname']; ?></font><?php else: ?><?php echo $comment['uname']; endif; ?>:<?php echo $comment['content']; ?></li>
   
        <?php endforeach; ?>

        </ul>
</div>
                      </div>                
        </div>
      </div>
      
      <script type="text/javascript">
      function show_content(id,obj){
          $(".ncs-goods-info-content").fadeOut();
          $("#"+id).fadeIn();
          $(".current").removeClass("current");
          $(obj).addClass("current");
          
      }
      </script>
      
      
      
            <div class="ncs-recommend">
        <div class="title">
          <h4>推荐商品</h4>
        </div>
        <div class="content">
          <ul>
          <?php foreach($best_goods as $goods): ?>
 <li>
              <dl>
                <dt class="goods-name"><a href="{$goods.url}" target="_blank" title="">{$goods.goods_style_name}<em></em></a></dt>
                <dd class="goods-pic"><a href="{$goods.url}" target="_blank" title=""><img src="{$goods.thumb}" alt="{$goods.name}"></a></dd>
                <dd class="goods-price">{$goods.shop_price}</dd>
              </dl>
            </li>
<?php endforeach; ?>

                                   
                          
                                  </ul>
          <div class="clear"></div>
        </div>
      </div>
          </div>
    <div class="ncs-sidebar">
      <div class="ncs-sidebar-container">
        <div class="title" align="center">
          <h4><?php echo $shop_config['shop_name']; ?>二维码</h4>
        </div>
        <div class="content">
          <div class="ncs-goods-code">
            <p><img src="<?php echo INDEX_IMAGE_URL; ?>qrcode.jpg" title=""></p>
            <span class="ncs-goods-code-note"><i></i>扫描二维码，关注<?php echo $shop_config['shop_name']; ?>官方微信</span> </div>
        </div>
      </div>
      <div class="ncs-message-bar">
  <div class="default" align="center">
    <h5> <?php echo $shop_config['shop_name']; ?></h5>
    <span member_id="5"></span>
          </div>
    <div class="service-list" store_id="3" store_name="<?php echo $shop_config['shop_name']; ?>">
        <dl>
      <dt>客服：</dt>
            <dd><span>客服1</span><span>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2762211515&amp;site=qq&amp;menu=yes" title="" id="bizyxqq0"><img border="0" src="<?php echo INDEX_IMAGE_URL; ?>pa.gif" style=" vertical-align: middle;"></a>
                </span></dd>
                <dd><span>客服2</span><span>
                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1661611855&amp;site=qq&amp;menu=yes" title="" target="_blank" id="bizyxqq1"><img border="0" src="images/pa.gif" alt="点击这里给我发消息" style=" vertical-align: middle;"></a>
                </span></dd>
          </dl>
 
            <dl class="workingtime">
      <dt>工作时间：</dt>
      <dd>
        <p>工作时间   早上  8:00-  下午  17:00</p>
      </dd>
    </dl>
      </div>
  </div>


<div class="ncs-sidebar-container ncs-top-bar">
  <div class="title" align="center">
    <h4>商品排行</h4>
  </div>
  <div class="content">
    <ul class="ncs-top-tab pngFix">
      <li id="hot_sales_tab" class="current"><a href="">热销商品排行</a></li>
    <!--  <li id="hot_collect_tab"><a href="">热门收藏排行</a></li> -->
    </ul>
    <!--- 热销商品排行 -->
    <div id="hot_sales_list" class="ncs-top-panel">
            <ol>
            <?php foreach($top_goods as $goods): ?>

                <li>
          <dl>
            <dt><a href="{$goods.url}">{$goods.goods_name}</a></dt>
            <dd class="goods-pic"><a href="{$goods.url}"><span class="thumb size40"><i></i><img src="{$goods.goods_thumb}"  width="40" height="40"></span></a>
              <p><span class="thumb size100"><i></i><img src="images/33.jpg" onload="javascript:DrawImage(this,100,100);" title="{$goods.goods_name}" height="100"><big></big><small></small></span></p>
            </dd>
            <dd class="price pngFix">{$goods.shop_price}元</dd>
            <dd class="selled pngFix">售出：<strong>{$goods.goods_number}</strong>笔</dd>
          </dl>
        </li>
<?php endforeach; ?>

                
              </ol>
          </div>

  </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        //热销排行切换
        $('#hot_sales_tab').on('mouseenter', function() {
            $(this).addClass('current');
            $('#hot_collect_tab').removeClass('current');
            $('#hot_sales_list').removeClass('hide');
            $('#hot_collect_list').addClass('hide');
        });
        $('#hot_collect_tab').on('mouseenter', function() {
            $(this).addClass('current');
            $('#hot_sales_tab').removeClass('current');
            $('#hot_sales_list').addClass('hide');
            $('#hot_collect_list').removeClass('hide');
        });
    });
    /** left.php **/
    // 商品分类
    function class_list(obj){
      var stc_id=$(obj).attr('span_id');
      var span_class=$(obj).attr('class');
      if(span_class=='ico-block') {
        $("#stc_"+stc_id).show();
        $(obj).html('<em>-</em>');
        $(obj).attr('class','ico-none');
      }else{
        $("#stc_"+stc_id).hide();
        $(obj).html('<em>+</em>');
        $(obj).attr('class','ico-block');
      }
    }
</script> 
    </div>
  </div>
</div>
<form id="buynow_form" method="post" action="http://www.htnm.com/shop/index.php">
  <input id="act" name="act" type="hidden" value="buy">
  <input id="op" name="op" type="hidden" value="buy_step1">
  <input id="cart_id" name="cart_id[]" type="hidden">
</form>

<!-- #BeginLibraryItem "/library/page_footer.lbi" --><!-- #EndLibraryItem -->

<script type="text/javascript">

function addToCart(goodsId){
  var goodsNumber=$("#goods_number").val();
  location.href='/index/goods/add_cart/goods_id/'+goodsId+'/goods_number/'+goodsNumber;
}
</script>

</body></html>