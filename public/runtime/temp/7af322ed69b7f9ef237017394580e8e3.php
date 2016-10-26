<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\article\contact_us.html";i:1471427028;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\Public\header.html";i:1471254042;s:77:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\Public\footer.html";i:1470291091;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="祥元健康"/> 
<meta name="description" content="祥元健康"/>
<link rel="icon" href="/favicon.ico">

<title>联系我们</title>
<style>
*{padding:0;margin:0;}
/*div{border:1px solid #CCC;}*/
body{background:#f8f4d9;color:#000;font-size:14px;}
ul{list-style:none;}
a{text-decoration:none;color:#000;}
#main{width:1100px;;margin:0 auto;}

.location{background:#FFF;height:30px;padding-left:15px;line-height:30px;}
.m{background:#FFF;height:300px;margin:10px 0;}
.c{background:#FFF;height:310px;padding:20px;margin-bottom:50px;}
.right{background:#e6e7e2;height:310px;width:63%;float:right;}
.left{background:#e6e7e2;height:300px;width:34%;float:left;padding:10px 0px 0px 15px;}
.left ul li{margin:10px;}
.left ul li img{width:35px;height:43px;}
.right img{width:100%;height:100%;}


  .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}

</style>
</head>

<body>
<link rel="stylesheet" type="text/css" href="<?php echo INDEX_CSS_URL; ?>common.css"/>
<script src="<?php echo INDEX_JS_URL; ?>jquery.min.js"></script>
<script src="<?php echo INDEX_JS_URL; ?>common.js"></script>
<div class="top"></div>
<header>
	
	<div class="logo">
    	<img src="<?php echo INDEX_IMAGE_URL; ?>logo.png">
    	<div class="logo2"><img src="<?php echo INDEX_IMAGE_URL; ?>logo2.png"></div>
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
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>







<div id="main">
	<div class="location">
    	<?php echo $ur_here; ?> 当前位置:首页>联系我们
    </div>
	<div class="m"></div>
    <div class="c">
    	<div class="left">
        	<ul>
            	<li><img src="/static/index/image/logo.png"></li>
                <li style="font-weight:bold;color:#81100c;font-size:30px;">祥元健康</li>
                <li>电话：<?php echo $contact['shop_tel']; ?></li>
                <li>微信：<?php echo $contact['shop_wx']; ?></li>
                <li>Q&nbsp;Q：<?php echo $contact['shop_qq']; ?></li>
                <li>传真：<?php echo $contact['shop_tel']; ?></li>
                <li>邮编：<?php echo $contact['shop_postcode']; ?></li>
                <li>地址：<?php echo $contact['shop_address']; ?></li>
                <li>网址：<?php echo $contact['shop_site']; ?></li>
            </ul>
        </div>
        <div class="right" id="dituContent">
        	<!--<img src="/static/index/image/qq.png" alt="地图">-->
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
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(118.881473,28.948074);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"",content:"衢州市柯城区",point:"118.881338|28.947647",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("/static/index/image/bj.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
</html>
