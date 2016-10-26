<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"E:\xampp\htdocs\newxy\public/../application/index\view\order\makeorder.html";i:1468671471;s:73:"E:\xampp\htdocs\newxy\public/../application/index\view\public\header.html";i:1468655862;}*/ ?>
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
.buytab_a {
    margin: 0px auto;
    padding: 0 0 6px 0;
    background: url(images/buytab_bg.gif) 0 bottom no-repeat;
    width:1090px;
}
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
      <li class=""><i class="step1"></i>
        <p>我的购物车</p>
        <sub></sub>
        <div class="hr"></div>
      </li>
      <li class="current"><i class="step2"></i>
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
        <div class="buytab_a">
              <div class="ncc-title">
    <h3 style="text-align:left;height:40px;">填写核对购物信息</h3>
    <h5>请仔细核对填写收货、发票等信息，以确保物流快递及时准确投递。</h5>
  </div>
  <div class="ncc-receipt-info current_box">
  <div class="ncc-receipt-info-title">
    <h3>收货人信息</h3>
    <a href="javascript:void(0)" nc_type="buy_edit" id="edit_reciver" style="display: none;">[修改]</a></div>
  <div id="addr_list" class="ncc-candidate-items">
<ul>

  <div id="add_addr_box"><div class="ncc-form-default">
  

    <dl>
      <dt><i class="required">*</i>收货人姓名：</dt>
      <dd>
        <?php echo $address_info['consignee']; ?>
      </dd>
    </dl>

    <dl>
      <dt><i class="required">*</i>详细地址：</dt>
      <dd>
       <?php echo $address_info['address']; ?>
      </dd>
    </dl>
    <dl>
      <dt> <i class="required">*</i>手机号码：</dt>
      <dd>
        <?php echo $address_info['tel']; ?>
      </dd>
    </dl>
  
</div>

</div>
</ul>
<div class="hr16"> <a id="hide_addr_list" class="ncc-btn ncc-btn-red" href="flow.php?step=consignee">选择其他收货地址</a></div>
</div>
</div>
          <style>
label
     {
       display: inline-block;
  border: 2px solid #eee;
  background-color: #fff;
  min-width: 2rem;
  padding: 0.5rem 1.2rem;
  font-size:0.8rem;

  max-width: 100%;
  text-align: center;
  box-sizing: border-box;
  width:500px;
  text-align:left;

     }
     label img{
      vertical-align:middle;
     }
     .label_checked{
   /*    background:url('1on1.png') no-repeat;
     background-size:contain; */
     border-color: #FFAA01;
    border-width:2px;
       position: relative;
       background:#FFF9ED;
     }
  #zf_label_radio label img{
    height:50px;
  }
     #label_radio,#zf_label_radio{background:#fff; padding:5px 0px;}

  </style>
   <script>
window.onload = function()
    {
      //var checkId='';
      var oCurrent={};
       var labels =
    document.getElementById("label_radio").getElementsByTagName("label");
       var radios =
    document.getElementById("label_radio").getElementsByTagName("input");
       for(var i=0;i<labels.length;i++)
       {
      
       
       if(radios[i].checked){
      
          labels[i].className = "label_checked";
         // checkId=radios[i].id;
          oCurrent=labels[i];
       }
           labels[i].onclick=function()
           {
               if(this.className=="")
               {
                    for(var j=0;j<labels.length;j++)
                    {
                       labels[j].className = "";
                       radios[j].checked = false;
                    }
                         this.className='label_checked';
                         //checkId=this.id;
                         oCurrent=this;
                        
                    try{
                          document.getElementById(this.name).checked = true;
                   } catch (e) {}
               }
           }
           
       }
  
     //支付方式单选
          var zf_labels =
    document.getElementById("zf_label_radio").getElementsByTagName("label");
     
       var zf_radios =
    document.getElementById("zf_label_radio").getElementsByTagName("input");
       for(var i=0;i<zf_labels.length;i++)
       {
  
       
       if(zf_radios[i].checked){
    
          zf_labels[i].className = "label_checked";
            if(zf_labels[i].id=="t_7"){

                          document.getElementById("pd_password").style.display="block";
                         }else{
                           document.getElementById("pd_password").style.display="none";
                         }
       }
           zf_labels[i].onclick=function()
           {
            
                       
/* var zf_radios_id="paymen"+this.id;
                    
           if(document.getElementById(zf_radios_id).disabled){
              alert('配送方式不支持货到付款，请重新选择');
              return false;
           }
            */
                  
            
               if(this.className=="")
               {
                    for(var j=0;j<zf_labels.length;j++)
                    {
                       zf_labels[j].className = "";
                       zf_radios[j].checked = false;
                    }
                         this.className='label_checked';
                          
                         if(this.id=="t_7"){

                          document.getElementById("pd_password").style.display="block";
                         }else{
                           document.getElementById("pd_password").style.display="none";
                         }
                    try{
                          document.getElementById(this.name).checked = true;
                   } catch (e) {}
               }
           }
       }
     
    }
  
  
</script>   
 <form action="flow.php" method="post" name="theForm"  class="validator" id="theForm" onsubmit="return checkOrderForm(this)">  
<div class="ncc-receipt-info" id="paymentCon">
  <div class="ncc-receipt-info-title">
    <h3>支付方式</h3>
      </div>

  <div id="payment_list" class="ncc-candidate-items">
    <ul id="zf_label_radio">
   
             <!-- <?php foreach($pay_list as $payment): ?> -->
            <!-- 循环支付方式 -->
          
                 <li>
    
           <input type="radio" name="payment" value="{$payment.pay_id}"checked  onclick="selectPayment(this)" id="payment_{$payment.pay_id}" style="display:none"/>
          <label for="payment_{$payment.pay_id}" name="payment_{$payment.pay_id}"><?php echo $payment['pay_name']; ?></label>

        
      </li>
       
          <!-- <?php endforeach; ?> 循环支付方式 -->
    
    </ul>
  </div>
</div>
<div class="ncc-receipt-info" id="paymentCon">
  <div class="ncc-receipt-info-title">
    <h3>配送方式</h3>
      </div>

  <div id="payment_list" class="ncc-candidate-items">
    <ul id="label_radio">
    <!-- <?php foreach($shipping_list as $shipping): ?> 循环配送方式 -->

                
            <li>
             <input name="shipping" type="radio" value="{$shipping.shipping_id}" <?php if($order['shipping_id'] == $shipping['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="{$shipping.support_cod}" insure="{$shipping.insure}" onclick="selectShipping(this)" style="display:none" id="shipping_{$shipping.shipping_id}" />
           
            <label for="shipping_{$shipping.shipping_id}" name="shipping_{$shipping.shipping_id}" >{$shipping.shipping_name}  {$shipping.shipping_desc}
             <font style="color:#f60">配送费：</font>  <font style="color:red">{$shipping.format_shipping_fee}</font>
              <font style="color:#f60">&nbsp;满</font>  <font style="color:red">{$shipping.free_money}</font>  <font style="color:#f60">免费</font></label>
         

            </li>
       
            <!-- <?php endforeach; ?> 循环配送方式 -->
    
    </ul>
  </div>
</div>
<style>
.ncc-table-style tbody tr.item_disabled td {
    background: none repeat scroll 0 0 #F9F9F9;
    height: 30px;
    padding: 10px 0;
    text-align: center;
}

h3{
    height:20px;
}
</style>
<div class="ncc-receipt-info">
  <div class="ncc-receipt-info-title">
    <h3>商品清单</h3>
        <a href="/index/goods/cart">返回购物车</a>
      </div>
  <table class="ncc-table-style">
    <thead>
      <tr>
        <th class="w20"></th>
        <th></th>
        <th>商品</th>
        <th class="w120">单价(元)</th>
        <th class="w120">数量</th>
        <th class="w120">小计(元)</th>
         <th class="w120">说明</th>
      </tr>
    </thead>
        <tbody>
      <!-- <?php foreach($goods_list as $goods): ?> -->
            <tr name="tr_3_100004" id="cart_item_4892" class="shop-list " newprice="2">
        <td>         
          </td>
                <td class="w60"><a href="/index/goods/goods_info/goods_id/<?php echo $goods['goods_id']; ?>" target="_blank" class="ncc-goods-thumb"><img src="<?php echo $goods['goods_src']; ?>"></a></td>
                <td class="tl"><dl class="ncc-goods-info">
            <dt><a href="/index/goods/goods_info/goods_id/<?php echo $goods['goods_id']; ?>" target="_blank"><?php echo $goods['goods_name']; ?></a></dt>
                                                          </dl></td>
        <td class="w120"><em name="goods_price_3_100004"><?php echo $goods['goods_price']; ?></em></td>
        <td class="w60" name="goods_num_3_100004"><?php echo $goods['goods_number']; ?></td>
        <td class="w120">          <em id="item4892_subtotal" nc_type="eachGoodsTotal" name="goods_subtotal_3_100004"><?php echo round($goods['goods_number']*$goods['goods_price']); ?></em>
          </td>
        <td class="w60" id="goods_freight_100004" name="remarktd">无</td>
      </tr>
 <!-- <?php endforeach; ?> -->
      <!-- S bundling goods list -->
            <!-- E bundling goods list -->

            <tr>
        <td class="w10"></td>
        <td class="tl" colspan="2">买家留言：
          <textarea name="note" class="ncc-msg-textarea" placeholder="选填：对本次交易的说明（建议填写已经和商家达成一致的说明）" title="选填：对本次交易的说明（建议填写已经和商家达成一致的说明）" maxlength="150"></textarea></td>
        <td class="tl" colspan="10"><div class="ncc-form-default"> </div></td>
      </tr>
      
      


    </tbody>

  </table>
     <input type="hidden" name="step" value="done" />
  <div class="ncc-bottom"> <input type="submit" class="ncc-btn ncc-btn-acidblue fr" value="提交订单"> </div>
</div>
</form>
<script>
function submitNext(){
    if (!SUBMIT_FORM) return;

    if ($('input[name="cart_id[]"]').size() == 0) {
        showDialog('所购商品无效', 'error','','','','','','','','',2);
        return;
    }
    if ($('#address_id').val() == ''){
        showDialog('请先设置收货地址', 'error','','','','','','','','',2);
        return;
    }
    if ($('#buy_city_id').val() == '') {
        showDialog('正在计算运费,请稍后', 'error','','','','','','','','',2);
        return;
    }
    if (($('input[name="pd_pay"]').attr('checked') || $('input[name="rcb_pay"]').attr('checked')) && $('#password_callback').val() != '1') {
        showDialog('使用充值卡/预存款支付，需输入支付密码并使用  ', 'error','','','','','','','','',2);
        return;
    }
    if ($('input[name="fcode"]').size() == 1 && $('#fcode_callback').val() != '1') {
        showDialog('请输入并使用F码', 'error','','','','','','','','',2);
        return;
    }
    SUBMIT_FORM = false;

    $('#order_form').submit();
}
$(function(){
    $(document).keydown(function(e) {
        if (e.keyCode == 13) {
            submitNext();
            return false;
        }
    });
    $('#submitOrder').on('click',function(){submitNext()});
    calcOrder();
});
</script> 
<script type="text/javascript">
function hideInvList(content) {
    $('#edit_invoice').show();
    $("#invoice_list").html('<ul><li>'+content+'</li></ul>');
    $('.current_box').removeClass('current_box');
    ableOtherEdit();
    //重新定位到顶部
    $("html, body").animate({ scrollTop: 0 }, 0);
}
//加载发票列表
$('#edit_invoice').on('click',function(){
    $(this).hide();
    disableOtherEdit('如需修改，请先保存发票信息');
    $(this).parent().parent().addClass('current_box');
    $('#invoice_list').load(SITEURL+'/index.php?act=buy&op=load_inv&vat_hash=flPBMPiwzOoUALVNZd.3YIrUl3YzlZppjC9');
});
</script>
<script type="text/javascript">
var SUBMIT_FORM = true;

function calcStoreOrder(store_id){
    storetotal  = 0;
    $("tr[name^='tr_"+store_id+"']").each(function(){

                oldprice = $(this).attr("oldprice");
                oldtotal = $(this).attr("oldtotal");
                if($(this).attr("newprice")=="2" && oldprice && oldprice!=""){
                      $(this).find("em[name^='goods_price_"+store_id+"']").html(oldprice);
                      $(this).find("em[nc_type='eachGoodsTotal']").html(oldtotal);
                    }
                
                eachGoodsTotal = $(this).find("em[nc_type='eachGoodsTotal']").html();
               storetotal += parseFloat(eachGoodsTotal);
        });
    $("#eachStoreGoodsTotal_"+store_id).html(storetotal);
    
}

//计算总运费和每个店铺小计
function calcOrder() {
    var allTotal = 0;
    $('em[nc_type="eachStoreTotal"]').each(function(){
        store_id = $(this).attr('store_id');
        var eachTotal = 0;
        if ($('#eachStoreFreight_'+store_id).length > 0) {
            eachTotal += parseFloat($('#eachStoreFreight_'+store_id).html());
        }
        if ($('#eachStoreGoodsTotal_'+store_id).length > 0) {
            eachTotal += parseFloat($('#eachStoreGoodsTotal_'+store_id).html());
        }
        if ($('#eachStoreManSong_'+store_id).length > 0) {
            eachTotal += parseFloat($('#eachStoreManSong_'+store_id).html());
        }
        if ($('#eachStoreVoucher_'+store_id).length > 0) {
            eachTotal += parseFloat($('#eachStoreVoucher_'+store_id).html());
        }
        $(this).html(number_format(eachTotal,2));
        allTotal += eachTotal;
    });
    $('#orderTotal').html(number_format(allTotal,2));
}
$(function(){
    $.ajaxSetup({
        async : false
    });
    $('select[nctype="voucher"]').on('change',function(){
        if ($(this).val() == '') {
            $('#eachStoreVoucher_'+items[1]).html('-0.00');
        } else {
            var items = $(this).val().split('|');
            $('#eachStoreVoucher_'+items[1]).html('-'+number_format(items[2],2));
        }
        calcOrder();
    });

        function showPaySubmit() {
        if ($('input[name="pd_pay"]').attr('checked') || $('input[name="rcb_pay"]').attr('checked')) {
            $('#pay-password').val('');
            $('#password_callback').val('');
            $('#pd_password').show();
        } else {
            $('#pd_password').hide();
        }
    }

    $('#pd_pay_submit').on('click',function(){
        if ($('#pay-password').val() == '') {
            showDialog('请输入支付密码', 'error','','','','','','','','',2);return false;
        }
        $('#password_callback').val('');
        $.get("index.php?act=buy&op=check_pd_pwd", {'password':$('#pay-password').val()}, function(data){
            if (data == '1') {
                $('#password_callback').val('1');
                $('#pd_password').hide();
            } else {
                $('#pay-password').val('');
                showDialog('支付密码码错误', 'error','','','','','','','','',2);
            }
        });
    });
    
    
        $('input[name="pd_pay"]').on('change',function(){
        showPaySubmit();
        if ($(this).attr('checked') && !$('input[name="rcb_pay"]').attr('checked')) {
            if (10.00 >= parseFloat($('#orderTotal').html())) {
                $('input[name="rcb_pay"]').attr('checked',false).attr('disabled',true);
            }
        } else {
            $('input[name="rcb_pay"]').attr('disabled',false);
        }       
    });
    
});
function disableOtherEdit(showText){
    $('a[nc_type="buy_edit"]').each(function(){
        if ($(this).css('display') != 'none'){
            $(this).after('<font color="#B0B0B0">' + showText + '</font>');
            $(this).hide();
        }
    });
    disableSubmitOrder();
}
function ableOtherEdit(){
    $('a[nc_type="buy_edit"]').show().next('font').remove();
    ableSubmitOrder();

}
function ableSubmitOrder(){
    $('#submitOrder').on('click',function(){submitNext()}).css('cursor','').addClass('ncc-btn-acidblue');
}
function disableSubmitOrder(){
    $('#submitOrder').unbind('click').css('cursor','not-allowed').removeClass('ncc-btn-acidblue');
}
</script> 


         <div class="nstep2_con">
        
        <!-- {/if} -->
        </div>
        </div>
        </DIV>

</body>
</html>