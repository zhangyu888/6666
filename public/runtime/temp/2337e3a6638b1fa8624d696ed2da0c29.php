<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\text\add.html";i:1469778086;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">

  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery.min.js"></script>
   <script type="text/javascript">



  $(document).ready(function(){

    $(".biaoqing").mouseover(function(){

      $(".biaoqing ul").show();

    }).mouseout(function(){

      $(".biaoqing ul").hide();

    })
    

  });



</script>


   
  <style>
  *{padding:0px;margin:0px;}
 a{text-decoration:none;}
 .content {
    border-left: 1px solid #D7DDE6 !important;
}
 .content {
    border-left: 1px solid #D3D3D3;
    float: right;
    margin-left: -2px;
    padding: 20px;
    width: 98%;
    background-color: #FFFFFF;
    min-height: 900px;
}	
.cLineB {
    overflow: hidden;
    padding: 8px 0;
    border-bottom: 1px solid #EEEEEE;
}
.content h4 {
    font-size: 16px;
}
.btnGrayS:hover {
    background-color: #E6E7EC !important;
    color: #222 !important;
    text-decoration: none;
    text-shadow: none;
}
.right {
    float: right;
}
.vm {
    vertical-align: middle;
}
.btnGrayS {
    background-image: none !important;
    border: 1px solid #E6E7EC !important;
    text-shadow: none !important;
    padding: 4px 12px !important;
    cursor: pointer !important;
    display: inline-block !important;
    overflow: visible !important;
    border-radius: 4px !important;
    -moz-border-radius: 4px !important;
    -webkit-border-radius: 4px !important;
    background-color: #F4F5F9 !important;
    color: #222 !important;
    font-size: 14px !important;
    /* line-height: 1.5 !important; */
}
table {
    empty-cells: show;
    border-collapse: collapse;}
	thead {
    display: table-header-group;
    vertical-align: middle;}
	tbody {
    display: table-row-group;
    vertical-align: middle;}
	.userinfoArea th {
    text-align: left;
    width: 160px;
    font-size: 14px;
    font-weight: bold;
    line-height: 1.5;
    padding: 8px 0;
}
.userinfoArea td {
    /* display: block; */
    margin-left: 10px;
    padding: 8px 0;
    color: #666;
    font-size: 12px;
}
.zdhuifu {
    margin: 5px 0;
    padding-bottom: 15px;
}
.red {
    color: #F00;
    background-color: transparent;
    border: 0;
}
.biaoqing {
    position: relative;
    display: block;
    height: 25px;
    width: 60px;
    background: url(/static/admin/image/biaoqing.png) no-repeat left center;
}
.biaoqing span {
    display: block;
    line-height: 25px;
    text-indent: 20px;
    cursor: pointer;
}
.biaoqing ul {
    display: none;
    background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    box-shadow: 0px 1px 3px #ccc;
    left: -50px;
    padding: 5px;
    position: absolute;
    top: -220px;
    width: 450px;
}
.biaoqing ul li {
    border: 1px solid #dfe6f6;
    height: 24px;
    width: 24px;
    display: block;
    padding: 2px;
    float: left;
    cursor: pointer;
}
.btnGreen{
    background-image: none !important;
    border: none !important;
    text-shadow: none !important;
    margin-left: 5px;
    padding: 2px 8px !important;
    cursor: pointer !important;
    display: inline-block !important;
    overflow: visible !important;
    border-radius: 2px !important;
    -moz-border-radius: 2px !important;
    -webkit-border-radius: 2px !important;
    background-color: #44b549 !important;
    color: #fff !important;
    font-size: 14px !important;
	line-height:20px;
    /* line-height: 1.5 !important; */
}
.btnGray {
    padding: 2px 8px !important;
    cursor: pointer !important;
    display: inline-block !important;
    overflow: visible !important;
    border-radius: 2px !important;
    -moz-border-radius: 2px !important;
    -webkit-border-radius: 2px !important;
    background-color: #D5D5D5 !important;
    color: #050505 !important;
    font-size: 14px !important;
    line-height: 1.5 !important;
}
input, textarea, keygen, select, button {
    text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    margin: 0em 0em 0em 0em;
    font: 13.3333px Arial;
}
.btnGray:hover {
    background-color: #B6B8B4 !important;
    color: #050505 !important;
    text-decoration: none;
}
  </style>
  <title>新增文本回复</title>
</head>
<body>
 <div class="content" style="float:center;">
          <div class="cLineB"><h4>编辑文本自定义内容</h4><a href="javascript:history.go(-1);"  class="right btnGrayS vm" style="margin-top:-27px" >返回</a></div> 
<div class="msgWrap">
  <form class="form" method="post" action="/admin/Text/insert" enctype="multipart/form-data" >
<TABLE class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
  <THEAD>
<TR>
  <TH valign="top"><label for="keyword">关键词：</label></TH>
  <TD><input type="text" class="px" id="keyword" value="" name="keyword" style="width:500px" ><br />
                  多个关键词请用空格格开：例如: 美丽&nbsp;漂亮&nbsp;好看   </TD>
  <TD>&nbsp;</TD>
</TR>
        <TR>
          <TH valign="top">关键词类型：</TH>
          <TD> 
              <label for="radio2"><input class="radio" id="radio2" type="radio" name="precisions" value="0" checked="checked" /> 包含匹配 （当此关键词包含粉丝输入关键词时有效）</label>
              <br />
              <label for="radio1"><input id="radio1" class="radio" type="radio" name="precisions" value="1"  /> 完全匹配 （当此关键词和粉丝输入关键词完全相同时有效）</label>
          </TD>
        </TR>
                            </THEAD>
  <TBODY>
<TR>
  <TH valign="top"><label for="text">内容或简介：</label></TH>
  <TD><textarea  class="px" id="Hfcontent" name="text" style="width:500px; height:150px"></textarea><br />请不要多于1000字否则无法发送!
 

</TD>
  <TD rowspan="2" valign="top"><div style="margin-left:20px" class="zdhuifu">
  	<h4 class="red">文字加超链接范例：</h4>
  
<div> &lt;a&nbsp;href=&quot;http://baidu.com/index.php?ac=cate1&amp;tid=9379&amp;c=fromUsername&quot;&gt;3G首页&lt;/a&gt; </div>
<br>
效果如下：<br>
<img src="<?php echo ADMIN_IMAGE_URL; ?>/chaolianjie.jpg" alt="文字超链接效果">	
</div></TD>
   
<TR>
  <TH></TH>
  <TD><button type="submit"  name="button"  class="btnGreen left" >保存</button>　<a href="/admin/Img/add"  class="btnGray vm"  >切换到图文模式</a>　<a href="javascript:history.go(-1);"  class="btnGray vm">取消</a>
  	<div class="right" style="margin-right:10px"  >
  		<ul>
  			<li class="biaoqing"><span>表情</span>
  				<ul>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/0.gif" alt="微笑" onclick="jsbq('微笑')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/1.gif" alt="撇嘴" onclick="jsbq('撇嘴')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/2.gif" alt="色" onclick="jsbq('色')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/3.gif" alt="发呆" onclick="jsbq('发呆')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/4.gif" alt="得意" onclick="jsbq('得意')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/5.gif" alt="流泪" onclick="jsbq('流泪')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/6.gif" alt="害羞" onclick="jsbq('害羞')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/7.gif" alt="闭嘴" onclick="jsbq('闭嘴')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/8.gif" alt="睡" onclick="jsbq('睡')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/9.gif" alt="大哭" onclick="jsbq('大哭')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/10.gif" alt="尴尬" onclick="jsbq('尴尬')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/11.gif" alt="发怒" onclick="jsbq('发怒')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/12.gif" alt="调皮" onclick="jsbq('调皮')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/13.gif" alt="呲牙" onclick="jsbq('呲牙')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/14.gif" alt="惊讶" onclick="jsbq('惊讶')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/15.gif" alt="难过" onclick="jsbq('难过')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/16.gif" alt="酷" onclick="jsbq('酷')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/17.gif" alt="冷汗" onclick="jsbq('冷汗')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/18.gif" alt="抓狂" onclick="jsbq('抓狂')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/19.gif" alt="吐" onclick="jsbq('吐')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/20.gif" alt="偷笑" onclick="jsbq('偷笑')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/21.gif" alt="可爱" onclick="jsbq('可爱')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/22.gif" alt="白眼" onclick="jsbq('白眼')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/23.gif" alt="傲慢" onclick="jsbq('傲慢')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/24.gif" alt="饥饿" onclick="jsbq('饥饿')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/25.gif" alt="困" onclick="jsbq('困')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/26.gif" alt="惊恐" onclick="jsbq('惊恐')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/27.gif" alt="流汗" onclick="jsbq('流汗')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/28.gif" alt="憨笑" onclick="jsbq('憨笑')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/29.gif" alt="大兵" onclick="jsbq('大兵')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/30.gif" alt="奋斗" onclick="jsbq('奋斗')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/31.gif" alt="咒骂" onclick="jsbq('咒骂')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/32.gif" alt="疑问" onclick="jsbq('疑问')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/33.gif" alt="嘘" onclick="jsbq('嘘')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/34.gif" alt="晕" onclick="jsbq('晕')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/35.gif" alt="折磨" onclick="jsbq('折磨')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/36.gif" alt="衰" onclick="jsbq('衰')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/37.gif" alt="骷髅" onclick="jsbq('骷髅')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/38.gif" alt="敲打" onclick="jsbq('敲打')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/39.gif" alt="再见" onclick="jsbq('再见')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/40.gif" alt="擦汗" onclick="jsbq('擦汗')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/41.gif" alt="抠鼻" onclick="jsbq('抠鼻')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/42.gif" alt="鼓掌" onclick="jsbq('鼓掌')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/43.gif" alt="糗大了" onclick="jsbq('糗大了')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/44.gif" alt="坏笑" onclick="jsbq('坏笑')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/45.gif" alt="左哼哼" onclick="jsbq('左哼哼')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/46.gif" alt="右哼哼" onclick="jsbq('右哼哼')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/47.gif" alt="哈欠" onclick="jsbq('哈欠')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/48.gif" alt="鄙视" onclick="jsbq('鄙视')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/49.gif" alt="委屈" onclick="jsbq('委屈')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/50.gif" alt="快哭了" onclick="jsbq('快哭了')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/51.gif" alt="阴险" onclick="jsbq('阴险')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/52.gif" alt="亲亲" onclick="jsbq('亲亲')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/53.gif" alt="吓" onclick="jsbq('吓')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/54.gif" alt="可怜" onclick="jsbq('可怜')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/55.gif" alt="菜刀" onclick="jsbq('菜刀')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/56.gif" alt="西瓜" onclick="jsbq('西瓜')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/57.gif" alt="啤酒" onclick="jsbq('啤酒')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/58.gif" alt="篮球" onclick="jsbq('篮球')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/59.gif" alt="乒乓" onclick="jsbq('乒乓')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/60.gif" alt="咖啡" onclick="jsbq('咖啡')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/61.gif" alt="饭" onclick="jsbq('饭')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/62.gif" alt="猪头" onclick="jsbq('猪头')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/63.gif" alt="玫瑰" onclick="jsbq('玫瑰')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/64.gif" alt="凋谢" onclick="jsbq('凋谢')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/65.gif" alt="示爱" onclick="jsbq('示爱')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/66.gif" alt="爱心" onclick="jsbq('爱心')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/67.gif" alt="心碎" onclick="jsbq('心碎')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/68.gif" alt="蛋糕" onclick="jsbq('蛋糕')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/69.gif" alt="闪电" onclick="jsbq('闪电')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/70.gif" alt="炸弹" onclick="jsbq('炸弹')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/71.gif" alt="刀" onclick="jsbq('刀')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/72.gif" alt="足球" onclick="jsbq('足球')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/73.gif" alt="瓢虫" onclick="jsbq('瓢虫')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/74.gif" alt="便便" onclick="jsbq('便便')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/75.gif" alt="月亮" onclick="jsbq('月亮')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/76.gif" alt="太阳" onclick="jsbq('太阳')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/77.gif" alt="礼物" onclick="jsbq('礼物')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/78.gif" alt="拥抱" onclick="jsbq('拥抱')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/79.gif" alt="强" onclick="jsbq('强')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/80.gif" alt="弱" onclick="jsbq('弱')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/81.gif" alt="握手" onclick="jsbq('握手')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/82.gif" alt="胜利" onclick="jsbq('胜利')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/83.gif" alt="抱拳" onclick="jsbq('抱拳')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/84.gif" alt="勾引" onclick="jsbq('勾引')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/85.gif" alt="拳头" onclick="jsbq('拳头')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/86.gif" alt="差劲" onclick="jsbq('差劲')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/87.gif" alt="爱你" onclick="jsbq('爱你')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/88.gif" alt="NO" onclick="jsbq('NO')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/89.gif" alt="OK" onclick="jsbq('OK')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/90.gif" alt="爱情" onclick="jsbq('爱情')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/91.gif" alt="飞吻" onclick="jsbq('飞吻')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/92.gif" alt="跳跳" onclick="jsbq('跳跳')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/93.gif" alt="发抖" onclick="jsbq('发抖')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/94.gif" alt="怄火" onclick="jsbq('怄火')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/95.gif" alt="转圈" onclick="jsbq('转圈')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/96.gif" alt="磕头" onclick="jsbq('磕头')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/97.gif" alt="回头" onclick="jsbq('回头')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/98.gif" alt="跳绳" onclick="jsbq('跳绳')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/99.gif" alt="挥手" onclick="jsbq('挥手')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/100.gif" alt="激动" onclick="jsbq('激动')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/101.gif" alt="街舞" onclick="jsbq('街舞')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/102.gif" alt="献吻" onclick="jsbq('献吻')"></li>
  					<li><img src="<?php echo ADMIN_IMAGE_URL; ?>/face/103.gif" alt="左太极" onclick="jsbq('左太极')"></li>
  					</ul>
  				</li>
  			</ul>
  		</div><div class="clr"></div>
  	<script type="text/javascript">
function jsbq(srt){
document.getElementById("Hfcontent").value=document.getElementById("Hfcontent").value+"/"+srt;
}
</script></TD>
  </TR>
  </TBODY>
</TABLE>
  </form>



  </div> 

        </div>
        
        <div class="clr"></div>
      </div>
    </div>
  </div> 

<!--底部-->
  	</div>
</body>
</html>
