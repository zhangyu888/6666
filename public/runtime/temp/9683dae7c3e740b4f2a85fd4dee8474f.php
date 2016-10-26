<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"E:\xampp\htdocs\newxy\public/../application/index\view\index\login.html";i:1468652547;s:73:"E:\xampp\htdocs\newxy\public/../application/index\view\public\header.html";i:1468651388;s:73:"E:\xampp\htdocs\newxy\public/../application/index\view\public\footer.html";i:1468650365;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <link rel="stylesheet" href="http://www.zsly.com/themes/miqinew/css/base.css">
         <link rel="stylesheet" href="http://www.zsly.com/themes/miqinew/css/home_header.css">
        <link rel="stylesheet" href="http://www.zsly.com/themes/miqinew/css/home_login.css">
    </head>
    <body>
    <!--#登录界面 start-->
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
      <div class="avatar"><?php if($think['session']['headimgurl']): ?><img src="{$smarty.session.headimgurl}"><?php else: ?><img src="images/default_user_portrait.gif"><?php endif; ?></div>
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
                <img src="images/longyou.jpg" style="width:105px; height:105px; margin-top:20px;">
                  
                 </dd>
                    
                </dl>
   
          </div>
  </div>
</div>


<div class="content">
<div class="contentLogin">
<div class="content_login">

<div class="header-wrap">
  <header class="public-head-layout wrapper">
    <h1 class="site-logo"><a href="/"><img src="images/logo.png" class="pngFix"></a></h1>
     
    </div>
     
<div class="nch-breadcrumb-layout">
  </div>
<style type="text/css">

.public-head-layout {
    margin: 10px auto -10px auto;
}
.wrapper {
    width: 1000px;
}
#footer {
    border-top: none;
    padding-top: 30px;
}


.public-head-layout {
    margin: 10px auto -10px auto;
}
.wrapper {
    width: 1000px;
}
#footer {

    padding-top: 30px;
}
.nc-login-layout .left-pic img{
    height:390px;
    left:-70px;
}
.nc-login-layout .left-pic{
    height:390px;

}
.nc-login-content dd a{
    color:#fff;
    text-align:center;
}
.wxlogin{
    background-color: #090;
    border-color: #090;
        text-align: center;
    display: inline-block;
    height: 20px;
    padding: 8px 20px;
    border: solid 1px;
    font-size:14px;
    color:#fff;
     transition:all 1s;
     margin-top:5px;
     width:72%;
}
.wxlogin:hover{
    background-color:#093;
    border-color: #090 #093 #093 #090;
    text-decoration:none;
}
</style>
<div class="nc-login-layout">
  <div class="left-pic"><img src="images/reg.jpg" border="0"></div>
  <div class="nc-login">
    <div class="nc-login-title">
      <h3>用户登录</h3>
    </div>
    <div class="nc-login-content" id="demo-form-site">
      <form name="formLogin" method="post" action="/index/index/login" class="bg" onsubmit="return userLogin()">
      
        <dl>
          <dt>账&nbsp;&nbsp;&nbsp;号</dt>
          <dd style="min-height:54px;">
            <input type="text" class="text tip" autocomplete="off" name="username" id="user_name" autofocus placeholder="用户名">
            <label></label>
          </dd>
        </dl>
        <dl>
          <dt>密&nbsp;&nbsp;&nbsp;码 </dt>
          <dd style="min-height:54px;">
            <input type="password" class="text" name="password" autocomplete="off" id="password">
            <label></label>
          </dd>
        </dl>
                <dl>
          <dt>验证码</dt>
          <dd style="min-height:54px;">
            <input type="text" name="captcha" autocomplete="off" class="text w50 fl" id="captcha" maxlength="4" size="10">
            <img src="/admin/verify/" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='/admin/verify/index/a/'+Math.random()" name="codeimage" border="0" id="codeimage" class="fl ml5"> 
            <label></label>
          </dd>
        </dl>
                <dl>
          <dt>&nbsp;</dt>
          <dd>
            <input type="submit" class="submit" value="登   录">
            <a class="forget" href="user.php?act=get_password">忘记密码？</a>
            
          </dd>
        </dl>
      </form>
      <dl>
      <dl>
      </dl>
      <dd><a href="https://open.weixin.qq.com/connect/qrconnect?appid=wx884925991a9860ca&redirect_uri=http://i0570.com/wechat/oauth/wxpc_redirect.php&response_type=code&scope=snsapi_login#wechat_redirect" class="wxlogin">使用微信登陆</a></dd>
      </dl>
      <dl class="mt10 mb10">
        <dt>&nbsp;</dt>
        <dd>还不是本站会员？立即<a href="/index/index/register" class="register" rel="nofollow">注册</a></dd>
      </dl>
          </div>
    <div class="nc-login-bottom"></div>
  </div>
</div>
<script>
function userLogin(){
    
}
</script>
</div>
<div>
<div>
<div style="height:50px;"></div>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<div id="faq">
  <div class="faq-wrapper">
    <ul>
           <li> <dl class="s1">
      <dt><img src="images/01.png">
        新手上路      </dt>
                 <dd><i></i><a href="/user.php?act=register" title="免费注册"> 免费注册 </a></dd>
           <dd><i></i><a href="" title="购物流程"> 购物流程 </a></dd>
         
                </dl></li>
               <li> <dl class="s2">
      <dt><img src="images/02.png">
        消费保障     </dt>
           <dd><i></i><a href="" title="退货退款流程"> 退货退款流程 </a></dd>
           <dd><i></i><a href="" title="售后保障"> 售后保障 </a></dd>
          
    
                </dl></li>
               <li> <dl class="s3">
      <dt><img src="images/03.png">
        配送方式      </dt>
                 <dd><i></i><a href="" title="上门自取"> 上门自取 </a></dd>
           <dd><i></i><a href="" title="快递"> 快递 </a></dd>
     
       
                </dl></li>
               <li> <dl class="s4">
       <dt><img src="images/04.png">
        付钱方式     </dt>
            <dd><i></i><a href="javascript:void(0)" title="支付宝"> 支付宝 </a></dd>
           <dd><i></i><a href="javascript:void(0)" title="微信支付"> 微信支付 </a></dd>
                </dl></li>
               <li> <dl class="s5">
       <dt><img src="images/05.png">
        常见问题      </dt>
                 <dd><i></i><a href="user.php?act=profile" title="会员修改个人资料"> 会员修改个人资料 </a></dd>
           <dd><i></i><a href="user.php?act=address_list" title="修改收货地址"> 修改收货地址 </a></dd>
                </dl></li>
               
                    
    </ul>   
<div class="help">
        <div class="w1190 clearfix">
            <div class="contact f-l">
                <div class="contact-border clearfix">
                    <span class="ic tel t20">{$service_phone}</span>
                    <?php if($service_email): ?><span class="ic mail">{$service_email}</span><?php endif; ?>
                    <div class="attention cleafix">
                        <div class="weixin f-l">                        
    <img src="images/longyou.jpg" class="f-l jImg img-error">
                        <p class="f-l">
                                <span>扫一扫</span>
                                <span>关注我们</span>
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>          
      </div>
</div>
<div id="footer" class="wrapper">
  <p><a href="/">首页</a>
   
                | <a href="javascript:void(0)">招聘英才</a>
                | <a href="javascript:void(0)">合作及洽谈</a>
                | <a href="javascript:void(0)">联系我们</a>
                | <a href="javascript:void(0)">关于我们</a>
                | <a href="javascript:void(0)">友情链接</a>
                              </p>
  掌上龙游交易平台 <a href="http://www.miibeian.gov.cn/" target="_blank">{$icp_number}</a>
   </div>
<!-- 对比 -->

<center>
<!--可信网站图片LOGO安装开始-->
<span style="display:inline-block;position:relative;width:auto;"><a href="" id="kx_verify" tabindex="-1" target="_blank" kx_type="图标式" style="display:inline-block;"><img src="images/cnnic.png" style="border:none;" oncontextmenu="return false;" alt="可信网站"></a></span>
<!--可信网站图片LOGO安装结束-->
</center>
          -->         
<!--#登录界面 end-->
    </body>
</html>