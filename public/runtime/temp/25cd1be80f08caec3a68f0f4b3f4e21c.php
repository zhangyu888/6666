<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\index\index.html";i:1472466957;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\header.html";i:1471854413;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content=""/> 
<meta name="description" content=""/>
<title>祥元健康</title>

<link rel="icon" href="/favicon.ico">

<style>
*{padding:0;margin:0;}
body{background:#f8f4d9;color:#000;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}


#banner{height:449px;background:url(/static/index/image/banner.jpg)}
#main{width:1100px;;margin:0 auto;padding:10px 0px 15px 0px;;}
#main p{text-align:center;background:#81100c;line-height:30px;color:#FFF;font-size:14px;font-weight:bold;}
.up{position:relative;}
.down{position:relative;margin:10px 0;}
.form{height:100%;text-align:center;font-weight:bold;}
.form a{display:inline-block;width:90px;height:40px;line-height:40px;background:#81100c;color:#FFF;border-radius:6px;position:absolute;top:210px;right:43%;}
.born{margin-top:30px;}
.form_ul{height:30px;width:448px;margin:15px auto}
.form_ul ul{width:100%;}
.form_ul ul li{float:left;border:1px solid #b2afa8;width:80px;line-height:30px;text-align:center;margin-left:30px;}
.form_ul1{width:480px;margin:20px auto;}
.form_ul1 ul li{float:left;width:120px;line-height:30px;text-align:center;}
.form_ul1 ul li select{background:#fcfaee;height:31px;width:90px;text-align:center;}


.form_img{margin:0 auto;position:relative;bottom:-140px;border-radius:50%;width:320px;height:320px;background:#f9f4bd;}
.form_img img{position:relative;top:-30px;}
.c0{margin:10px;height:440px;background:#c8696d;width:27%;border-radius:8px;float:left;padding:10px;}
.c1{height:440px;background:#c8696d;width:27%;border-radius:8px;margin:10px auto;padding:10px;}
.c2{margin:10px;height:440px;background:#c8696d;width:27%;border-radius:8px;position:absolute;top:30px;right:0px;padding:10px;}
.c_title{background:#be4d53;color:#FFF;border-radius:10px;height:25px;line-height:25px;padding:2px 5px;}

.c_title a{color:#FFF;float:right;font-size:10px;display:inline-block;position:relative;top:7px;}
.up .center{width:51%;min-height:640px;margin:0 auto;position:relative;background:#fcfaee;border:1px solid #b27e73;}
.up .right{width:23%;min-height:640px;position:absolute;right:0px;top:0px;}

.up .left{width:23%;min-height:510px;position:absolute;left:0px;top:0px;background:#fcfaee;border:1px solid #b27e73;}
.down .center{width:51%;min-height:510px;margin:0 auto;position:relative;background:#fcfaee;border:1px solid #b27e73;}
.down .left{width:23%;min-height:510px;position:absolute;left:0px;top:0px;background:#fcfaee;border:1px solid #b27e73;}
.down .center ul li{margin-top:10px;padding:5px;}
.down .center ul li a{color:#FFF;}

.right{width:23%;min-height:650px;position:absolute;right:0px;top:0px;}

.diaocha{margin:5px;width:95%;height:468px;border:1px solid #99968f;}
.about{margin:5px;height:588px;padding:5px;background:#fcfaee;border:1px solid #99968f;font-size:13px;line-height:20px;overflow:hidden;}

.login,.reg{display:block;background:#81100c;color:#FFF;margin:10px 0;height:50px;line-height:50px;font-size:25px;text-align:center;font-weight:bold;}

.kefu,.notice{background:#fcfaee;border:1px solid #b27e73;}
.notice_c{padding:0 10px 10px 10px;;margin:3px;font-size:9px;border:1px solid #97968e;height:196px;}
.notice_c ul li{margin-top:10px;}
.notice_c ul li span{float:right;}

.right a img{position:relative;top:6px;left:-20px;}
.kefu_c{width:150px;margin:0 auto;padding:2px;border-radius:10px;background:#8b2420;padding:15px;color:#FFF;height:200px;margin-top:2px;margin-bottom:1px;}
.sq,.sh{background:url(/static/index/image/qq.png) 0 center no-repeat;height:50px;text-align:center;line-height:50px;}
.gz{text-align:center;}
.gz img{margin:10px;}
.serve,.contact{background:#fcfaee;border:1px solid #b27e73;}
.serve_c,.contact_c{margin:5px;padding:10px 0px 0px 10px;border:1px solid #99968f;}
.doc{max-height:110px;}
.doc a{background:#c46668;display:inline-block;width:80px;height:25px;font-size:12px;line-height:25px;border:1px solid #97978f;color:#fff;}
.doc img{border-radius:50%;}
.doc_c{position:relative;font-size:12px;top:-60px;left:69px;line-height:20px;width:150px;}
.doc_n{font-size:15px;font-weight:bold;}
.doc_n span{font-size:12px}
.q{border-radius:50%;width:10px;height:10px;display:inline-block;background:#ffffff;margin:5px 0 0 5px;}

.contact{margin-top:10px;}
.contact_c{border:1px solid #99968f;}
.contact_c ul{list-style: square inside url('/static/index/image/ul.png')}
.contact_c ul li{margin:0px 0px 10px 10px;}

.shop{height:400px;position:relative;border:1px solid #b27e73;}
.product{height:330px;background:#d1cdaa;margin:25px 60px;position:relative;}
.product_img{position:absolute;top:15px;left:60px;width:258px;height:194px;overflow:hidden;}
.product_img img{width:100%;height:100%;}

.product_c1{position:absolute;top:20px;left:390px;}
.product_c2{position:absolute;top:225px;left:190px;}
.product_c1 ul li,.product_c2 ul li{margin:10px;}
.shop_top{background:#81100c;height:25px;color:#FFF;}
.shop_top a{color:#fff;font-size:14px;display:inline-block;background:#9c2a2a;width:60px;line-height:25px;text-align:center;border-radius:3px;}
.shop_top .more{position:absolute;right:15px;background:#c0575b;width:80px;}

footer{background:#e4d5b4;position:relative;height:420px;}

.footer1{height:72%;padding-top:110px;}
.footer1_1{clear:both;height:75px;border-bottom:2px solid #c6bdae;margin:0 auto;;width:1000px;position:relative;}
footer .footer1_1 ul{width:1150px;}
.footer1_1 ul li{float:left;padding:13px 0 0 55px;width:14%}



.footer1_2{clear:both;height:150px;margin-top:40px;}


.list1{background:url(/static/index/image/footer1.png) no-repeat}
.list2{background:url(/static/index/image/footer2.png) no-repeat}
.list3{background:url(/static/index/image/footer3.png) no-repeat}
.list4{background:url(/static/index/image/footer4.png) no-repeat}
.list5{background:url(/static/index/image/footer5.png) no-repeat}

footer .footer1_2 ul{width:1150px;margin:0 auto;clear:both;}
footer .footer1_2{width:1000px;margin:20px auto;}

footer .footer1_2 ul li{float:left;width:16%;}
.footer1_1 ul li p{font-size:12px;}
footer .footer1_1 ul li p{margin:3px 3px 15px 3px;;}
footer .footer1_2 ul li p{margin:5px;}
footer .footer1_2 ul li p a{font-size:12px;}
.footer1_2_title{font-size:16px;
    color: #262626;
    
	font-weight:bold;
	}
.footer1_1_title{font-size:16px !important;
    color: #262626;
    
	font-weight:bold;
	}
.footer2{background:#000;height:40px;}
</style>
<script type="text/javascript" src="<?php echo INDEX_JS_URL; ?>jquery.min.js"></script>

<script type="text/javascript" src="<?php echo INDEX_JS_URL; ?>calendar.js"></script>



<script type="text/javascript">

    function changeRili(obj){
        $(".rili").removeClass("label_checked");
        $(obj).addClass("label_checked");
    }

 function changeSex(obj){
    
        $(".sex").removeClass("label_checked");
        $(obj).addClass("label_checked");
    }
</script>
<script type="text/javascript">

        $(function(){
			
    window.requestAnimFrame = (function() {
        return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
        function(callback) {
            window.setTimeout(callback, 1000 / 60);
        }
    })();

    var totalDeg = 360 * 1 + 0;
    var steps = [];
    var lostDeg = [36, 96, 156, 216, 276,336];
    var prizeDeg = [6, 66, 126,186,246,306];
    var prize, sncode;
    var count = 0;
    var now = 0;
    var a = 0.01;
    var url='';
    var outter, inner, timer, running = false;
       function countSteps() {
        var t = Math.sqrt(2 * totalDeg / a);
        var v = a * t;
        for (var i = 0; i < t; i++) {
            steps.push((2 * v * i - a * i * i) / 2)
        }
        steps.push(totalDeg)
    }
     
    function step() {
         outter.style.webkitTransform = 'rotate(' + steps[now++] + 'deg)';
        outter.style.MozTransform = 'rotate(' + steps[now++] + 'deg)';
        if (now < steps.length) {
running = true;
            requestAnimFrame(step)
        } else {
            running = false;
            setTimeout(function() {
                if (prize != null) {
                   showResult();
                } else {
                    outter.style.webkitTransform = 'rotate(1000deg)';
                   location.href=url;
                }
            },
            200)
        }
    } //setps()
    
    function start(deg) {
        deg = deg || lostDeg[parseInt(lostDeg.length * Math.random())];
        running = true;
        clearInterval(timer);
        totalDeg = 360 * 1 + deg; //转多少角度
        steps = [];
        now = 0;
        countSteps();
        requestAnimFrame(step)
    }
    window.start = start;
	outter = document.getElementById('outter');
    inner = document.getElementById('chaxun');
    i = 10;
	
    $("#chaxun").click(function() {
		
      var sex=$("input[name='sex']:checked").val();
      var rili=$("input[name='rili']:checked").val();

      var year=parseInt($("#year").val());
      var month=parseInt($("#month").val());
      var day=parseInt($("#day").val());
      var hour=parseInt($("#hour").val());
        if (running) return;
        
		if(rili==0){

          var truerili=calendar.lunar2solar(year,month,day);
        year=truerili.cYearl;
        month=truerili.cMonth;
        day=truerili.cDay;
          console.log(truerili);
		  
		
		  
        }
		
	  
		
       $.ajax({
         url: "/index/index/chaxun",
		 
         data:{sex:sex,rili:rili,year:year,month:month,day:day,hour:hour},
         type:"get",
         dataType:"json",
         
         beforeSend : function(){
            running = true;
            timer = setInterval(function() {
                i += 5;
                outter.style.webkitTransform = 'rotate(' + i + 'deg)';
                outter.style.MozTransform = 'rotate(' + i + 'deg)'
            },1)
         },
		 
         success:function(data) {
          

            if (data.success) {
				
                url="/index/cesuan/result/s/"+sex+"/id/"+data.main_id;
                start(180);
             
              //$("#result1").html(URLdecode(data.result));
              //$("#fangfa").attr("href","result.php?s="+sex+"&main_id="+data.main_id);
               // prize = data.prizetype;
                //sncode = data.sn;
                 //最后的角度

           
            }
           // running = false;
            //count++
         },
         error:function(XMLHttpRequest, textStatus, errorThrown) {
			
            alert('请求失败，您的网络环境可能不佳!');
            return;
           // prize = null;
            //start();
           // running = false;
          //  count++
         },
         timeout : 10000       
        
       })//ajax
    })
});
</script>
<script>
//收藏本站
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(title,url);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}

function setHomePage(obj,url){ 
try{ 
obj.style.behavior='url(#default#homepage)';obj.setHomePage(url); 
} 
catch(e){ 
if(window.netscape) { 
try { 
netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
} 
catch (e) { 
alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。"); 
} 
var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch); 
prefs.setCharPref('browser.startup.homepage',url); 
}else{ 
alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入："+url+"点击确定。"); 
} 
} 
} 
</script>
<script>
	$(function(){
		
		i = 0;
		
		$(".product:eq("+i+")").show();
		
		
		function show(){
			
			i++;
			
		$(".product:not(:eq("+i+"))").fadeOut();	
			
		$(".product:eq("+i+")").animate({top:'0px'}).fadeIn();
		
		
			
			if(i>=(<?php echo $count; ?>-1)){
				
				i=-1;
				
				}
			
			
			
			}
		
			
	setInterval(show,3000);	
		
		
		
		
		
		
		})




 


</script>

  

 
 
</head>
<body>
<link rel="stylesheet" type="text/css" href="<?php echo INDEX_CSS_URL; ?>common.css?1"/>
<script src="<?php echo INDEX_JS_URL; ?>jquery.min.js"></script>
<script src="<?php echo INDEX_JS_URL; ?>common.js"></script>
<div class="top"></div>
<header>
	
	<div class="logo">
    	<img width="70px" height="90px" src="<?php echo INDEX_IMAGE_URL; ?>logo.png">
    	<div class="logo2"><img width="230px" height="35px"  src="<?php echo INDEX_IMAGE_URL; ?>logo2.png"></div>
    </div>
	<div class="btn">
		<div class="sy"><a href="javascript:void(0);" onclick="setHomePage(this,window.location)"><img src="<?php echo INDEX_IMAGE_URL; ?>menu1.jpg"></a></div>
        <div class="sc"><a href="javascript:void(0);" onclick="AddFavorite(document.title,window.location)"><img src="<?php echo INDEX_IMAGE_URL; ?>menu2.jpg"></a></div>
	</div>
    <nav>
		<ul>
        	<?php echo $ceshi; if(is_array($nav_list) || $nav_list instanceof \think\Collection): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
        	<li <?php if($key == 0): ?>class="home"<?php endif; ?>><a href="<?php echo $nav['nav_url']; ?>" <?php if($nav['type'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['nav_name']; ?></a></li>
    		<?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<li class="home"><a href="/">首页</a></li>
        	<li><a href="/index/article/about_us">公司简介</a></li>
        	<li><a href="/index/goods/mall_center">商城中心</a></li>
        	<li><a href="/index/order/pay">用户留言</a></li>
        	<li><a href="/index/user/">高级会员</a></li>
        	<li><a href="/index/article/contact_us">联系我们</a></li>-->
						
        </ul>
	</nav>
</header>
<div id="banner">
<!--<img src="<?php echo INDEX_IMAGE_URL; ?>banner.jpg" height="449px" width="100%"-->
</div>
<div id="main">
		<div class="up">
        	<div class="left">
            	<p>公司简介</p>
                <div class="about">
                	<?php echo $about_us['article_content']; ?>
                </div>
            </div>
            <div class="center">
            	<p>你想知道身体状况吗？</p>
                <div class="form">
                	<div class="born">输入出生时间</div>
                    	<div class="form_ul">
                    	<ul>	
							<li><label class="radio-inline label_checked rili" onclick="changeRili(this)"><input type="radio" name="rili"  value="1" checked >&nbsp;阳历</label> </li>
							<li><label class="radio-inline rili" onclick="changeRili(this)"/> <input type="radio" name="rili"  value="0" >&nbsp;阴历</label> </li>
							<li><label class="radio-inline label_checked sex" onclick="changeSex(this)"/><input type="radio" name="sex"  value="1" checked >&nbsp;男</label> </li>
							<li><label class="radio-inline sex" onclick="changeSex(this)"><input type="radio" name="sex"  value="0">&nbsp;女</label> </li>
						</ul>
                        </div>
                        <div class="form_ul1">
                    	<ul>
                        	<li>
                            	<select class="form-control" name="year" id="year">
 									 <?php echo $year_options; ?>
  									 
 								</select>
                                年
 							</li>
                            <li>
                            	<select class="form-control" name="month" id="month">
  									 <?php echo $month_options; ?>
  									 
								</select>
                                月
                            </li>
                            <li>
                            	<select class="form-control" name="day" id="day">
 									   <?php echo $day_options; ?>
  									 
 								</select>
                                日
                            </li>
                            <li>
                            	<select class="form-control" name="hour" id="hour">
 									  <?php echo $hour_options; ?>
  									 
 								</select>
                                时
                            </li>
                    	</ul>
                     </div>  
                     <a href="javascript:void(0)" class="btn btn-danger" id="chaxun">查询</a>
                     <div class="form_img" id="outter"><img src="<?php echo INDEX_IMAGE_URL; ?>bagua.png" alt="八卦图"></div>      
                </div>
                
            </div>
            <div class="right">
                <div class="notice">
                	<a href="/index/article/notice_list/cat_id/1"><p>通知公告</p></a>
                    <div class="notice_c">
                    	<ul>
                        	<?php if(is_array($notice_list) || $notice_list instanceof \think\Collection): if( count($notice_list)==0 ) : echo "" ;else: foreach($notice_list as $key=>$notice): ?>
							<li><a href="/index/article/notice/article_id/<?php echo $notice['article_id']; ?>" title="<?php echo $notice['article_name']; ?>"><?php echo $notice['article_name']; ?></a><span><?php echo date('m-d',$notice['create_time']); ?></span></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                          
                        </ul>
                    </div>
                </div>
                <a class="login" href="/index/user/login"><img src="<?php echo INDEX_IMAGE_URL; ?>login.png">我要登陆</a>
                <a class="reg" href="/index/user/register"><img src="<?php echo INDEX_IMAGE_URL; ?>re.png">我要注册</a>
                <div class="kefu">
                	<a href="/index/service/csc"><p>客服中心</p></a>
                    <div class="kefu_c">
                    	<div class="sq">售前咨询</div>
                        <div class="sh">售后咨询</div>
                        <div class="gz">手机关注:
                        	<img src="<?php echo INDEX_IMAGE_URL; ?>er.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="down">
        	<div class="left">
            	<a href="/index/article/dc_list"><p>在线调查</p></a>
                <div class="diaocha">
                </div>
                
            </div>
        	<div class="center">
            
            	<p>疾病小知识</p>
                               
                <div class="c0">
                	<div class="c_title">疾病查询<a href="/index/article/blzs_list/cat_id/2">更多 > ></a></div>				
                    	<ul>
                    	   <?php if(is_array($jbcx_list) || $jbcx_list instanceof \think\Collection): if( count($jbcx_list)==0 ) : echo "" ;else: foreach($jbcx_list as $key=>$jbcx): ?>
                    		<li><a href="/index/article/blzs/article_id/<?php echo $jbcx['article_id']; ?>" title="$jbcx.article_name}"><?php echo $jbcx['article_name']; ?></a></li>
                           <?php endforeach; endif; else: echo "" ;endif; ?>
                   		</ul>
                </div>
             	<div class="c1">
                	<div class="c_title">疾病养生<a href="/index/article/blzs_list/cat_id/3">更多 > ></a></div>				
                    	<ul>
                    		 <?php if(is_array($jbys_list) || $jbys_list instanceof \think\Collection): if( count($jbys_list)==0 ) : echo "" ;else: foreach($jbys_list as $key=>$jbys): ?>
                    		<li><a href="/index/article/blzs/article_id/<?php echo $jbys['article_id']; ?>" title="<?php echo $jbys['article_name']; ?>"><?php echo $jbys['article_name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                   		</ul>
                </div>
                <div class="c2">
                	<div class="c_title">疾病食疗<a href="/index/article/blzs_list/cat_id/4">更多 > ></a></div>				
                    	<ul>
                    		 <?php if(is_array($jbsl_list) || $jbsl_list instanceof \think\Collection): if( count($jbsl_list)==0 ) : echo "" ;else: foreach($jbsl_list as $key=>$jbsl): ?>
                    		<li><a href="/index/article/blzs/article_id/<?php echo $jbsl['article_id']; ?>" title="<?php echo $jbsl['article_name']; ?>"><?php echo $jbsl['article_name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                   		</ul>
                </div>
              
            </div>
            <div class="right">
            	<div class="serve">
            		<a href="/index/service/otos"><p>一对一服务</p></a>
                    <div class="serve_c">
                    	<div class="doc">
                        	<img src="<?php echo INDEX_IMAGE_URL; ?>doc1.jpg">
                            <div class="doc_c">
                            	<div class="doc_n">李成涛&nbsp;<span>主治医师</span></div>
                            	<div >擅长：各种传染性皮肤,过敏性皮肤病</div>
                            	<a href=""><span class="q"></span>&nbsp;可以咨询</a>
                            </div>
                        </div>
                        <div class="doc">
                        	<img src="<?php echo INDEX_IMAGE_URL; ?>doc1.jpg">
                            <div class="doc_c">
                           		<div class="doc_n">付晓婷&nbsp;<span>主治医师</span></div>
                            	<div >擅长：各种传染性皮肤,过敏性皮肤病。</div>
                            	<a href=""><span class="q"></span>&nbsp;可以咨询</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact">
                	<a href="/index/article/contact_us"><p>联系我们</p></a>
                    <div class="contact_c">
                    	<ul>
                        	<li>电话：<?php echo $contact['shop_tel']; ?></li>
                            <li>微信：<?php echo $contact['shop_wx']; ?></li>
                            <li>Q&nbsp;Q：<?php echo $contact['shop_qq']; ?></li>
                            <li>传真：<?php echo $contact['shop_fax']; ?></li>
                            <li>邮编：<?php echo $contact['shop_postcode']; ?></li>
                            <li>地址：<?php echo $contact['shop_address']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        
   	    <div class="shop">
        	<div class="shop_top">
             	<a href="javascript:void(0);">商城</a>
                <a class="more" href="/index/goods/mall_center">更多>>></a>
            </div>
            
 			
           
             	<?php if(is_array($best_goods_list) || $best_goods_list instanceof \think\Collection): if( count($best_goods_list)==0 ) : echo "" ;else: foreach($best_goods_list as $key=>$goods): ?>
                <div class="product" style="display:none;">
				<a  class="product_a" style="display:non" href="/index/goods/goods_info/goods_id/<?php echo $goods['goods_id']; ?>" title="<?php echo $goods['goods_name']; ?>">
            	<div class="product_img"><img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>"></div>
                <div id="slider" class="product_c1">
                	<ul>
                    	<li>五行分类：<?php echo $goods['cate_name']; ?></li>
                        <li>金：<?php echo $goods['jin']; ?></li>
                        <li>木：<?php echo $goods['mu']; ?></li>
                        <li>水：<?php echo $goods['shui']; ?></li>
                        <li>火：<?php echo $goods['huo']; ?></li>
                        <li>土：<?php echo $goods['tu']; ?></li>
                    </ul>
                </div>
                <div class="product_c2">
                	<ul>
                    	<li>功效：<?php echo $goods['gx']; ?></li>
                        <li>用量：<?php echo $goods['yl']; ?></li>
                        <li>禁忌：<?php echo $goods['jj']; ?></li>
                    </ul>
                </div>
                </a>
            
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>  
        </div>
    </div>   
</div>

    

<footer>
	<div class="footer1">
    	<div class="footer1_1">
        	<ul>
        		<li class="list1">
                	<p class="footer1_1_title">正品保障</p>
                    <p>正品保障，提供发票</p>
                </li>
            	<li class="list2">
                	<p class="footer1_1_title">急速物流</p>
                    <p>急速物流，急速到达</p>
                </li>               
            	<li class="list3">
                	<p class="footer1_1_title">无忧售后</p>
                    <p>7天无理由退换货</p>
                </li>
            	<li class="list4">
                	<p class="footer1_1_title">特色服务</p>
                    <p>私人订制套餐</p>
                </li>
            	<li class="list5">
                	<p class="footer1_1_title">帮助中心</p>
                    <p>您的购物指南</p>
                </li>
        	</ul>
        </div>
        <div class="footer1_2">    
        	<ul>
        		<li>
                	<p class="footer1_2_title">购物指南</p>
                	
                    <p><a href="">导购指示</a></p>
                    <p><a href="">免费注册</a></p>
                    <p><a href="">会员等级</a></p>
                    <p><a href="">常见问题</a></p>
                    
                </li>
            	<li>
                	<p class="footer1_2_title">支付方式</p>
                	
                    	<p><a href="">网银支付</a></p>
                       	<p><a href="">快捷支付</a></p>
                        <p><a href="">分期付款</a></p>
                        <p><a href="">货到付款</a></p>
                   
                </li>
            	<li>
                	<p class="footer1_2_title">物流配送</p>
                	
                    	<p><a href="">免运费政策</a></p>
                       	<p><a href="">配送服务承诺</a></p>
                        <p><a href="">签收验货</a></p>
                        <p><a href="">物流园查询</a></p>
                    
                </li>
            	<li>
                	<p class="footer1_2_title">售后服务</p>
                	
                    	<p><a href="">退换货政策</a></p>
                       	<p><a href="">退换货服务</a></p>
                        <p><a href="">退款说明</a></p>
                        <p><a href="">维修/保养</a></p>
                    
                </li>
            	<li>
                	<p class="footer1_2_title">商家服务</p>
                	
                    	<p><a href="">信息公告</a></p>
                       	<p><a href="">广告服务</a></p>
                        <p><a href="">服务市场</a></p>
                        <p><a href="">培训中心</a></p>
                    
                </li>
            	<li>
                	<p class="footer1_2_title">客户端</p>
                	<img src="/static/index/image/er.jpg">
                </li>
        	</ul>
        </div>   
    </div>
    
	<div class="footer2">
    
    </div>
    
</footer>
</body>
</html>