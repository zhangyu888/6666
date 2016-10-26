<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\text\index.html";i:1470108131;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery.min.js"></script>
 
 <style type="text/css">
 .clr {
    display: block;
    clear: both;
    height: 1px;
    overflow: hidden;
}
* {
    word-wrap: break-word;
}
* {
    padding: 0;
    margin: 0;
    border: none;
}
a{text-decoration:none;color:#000;}
ul li{list-style:none;}

.content {

border-left: 1px solid #D7DDE6 !important;

}

.pageNavigator a:hover {
	text-decoration: none;
}

.ListProduct td.norightborder a {
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
	margin-bottom: 5px;
	margin-left:3px;
}

.ListProduct td.norightborder a:hover {
	background-color: #E6E7EC !important;
	color: #222 !important;
	text-decoration: none;
	text-shadow: none;
}
.content {
    border-left: 1px solid #D3D3D3;
    float: right;
    margin-left: -2px;
    padding: 20px;
    width: 98%;
	background-color: #FFFFFF;
	min-height:800px;
}
.content h4{
	font-size:16px;
}
.cLine {
    overflow: hidden;
    padding: 5px 0;
	color:#000000;
	clear:both
}
TABLE.ListProduct {
	BORDER-TOP: #d3d3d3 1px solid;
	MARGIN-TOP: 5px;
	WIDTH: 100%;
	MARGIN-BOTTOM: 5px;_border-collapse: collapse;
	text-align:left;
}
TABLE.ListProduct THEAD TH {
	BORDER-BOTTOM: #E7E9F3 1px solid; PADDING-BOTTOM: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px;  FONT-SIZE: 14px; BORDER-TOP: #e3e3e3 1px solid; FONT-WEIGHT: normal; BORDER-RIGHT: #ddd 1px solid; PADDING-TOP: 5px; color:#222; font-weight:bold
}
TABLE.ListProduct TBODY TD {
	BORDER-BOTTOM: #eee 1px solid; PADDING-BOTTOM: 10px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; BORDER-RIGHT: #eee 1px solid; PADDING-TOP: 10px;
	font-size:12px;_empty-cells:show;word-break: break-all;
}
TABLE.ListProduct TBODY TR:nth-child(2n+1) {
    background-color:#FCFCFC;
}
TABLE.ListProduct TBODY TR:hover {
    background-color:#F1FCEA;
}
TABLE.ListProduct TBODY TD p{
	PADDING: 0;font-size:12px;_empty-cells:show;word-break: break-all;
}
TABLE.ListProduct Tfoot TD {
	BORDER-BOTTOM: #eee 1px solid; PADDING-BOTTOM: 10px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; BORDER-RIGHT: #eee 1px solid; PADDING-TOP: 10px; background-color:#f9f9f9;
	font-size:12px;_empty-cells:show;word-break: break-all;
}
TABLE.ListProduct THEAD TH.norightborder {
	BORDER-RIGHT: 0;
}
TABLE.ListProduct TBODY TD.norightborder {
	BORDER-RIGHT: 0;
}
TABLE.ListProduct .select{
	width: 30px;
}
TABLE.ListProduct .keywords{width: 150px;
}
TABLE.ListProduct .answer{
	width: 375px;
}
TABLE.ListProduct .answer_text{
	 width: 360px; overflow:hidden;white-space:nowrap;text-overflow:ellipsis; height:16px
}
.answer_text img{
	 margin-right: 5px; float:left;
}
TABLE.ListProduct .category{
	width: 70px;
}
TABLE.ListProduct .time{
	width: 70px;
}


TABLE.ListProduct .edit{
	width: 120px;
}
.pageNavigator {
    padding: 5px 0;
}
.right {
    float: right;
}
.pages {
    padding: 3px;
    margin: 3px;
    text-align: center;
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
.bigbtn {
    height: 30px;
    line-height: 28px;
}
.pages a{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#036cb4;text-decoration:none;}

.pages a:hover{border:#999 1px solid;color:#666;}

.pages a:active{border:#999 1px solid;color:#666;}

.pages .current{border:#036cb4 1px solid;padding:2px 5px;font-weight:bold;margin:2px;color:#fff;background-color:#036cb4;}

.pages .disabled{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#ddd;}
.pages ul li{float:left;}

</style>
<script type="text/javascript">



  $(document).ready(function(){

    $(".nav-header").mouseover(function(){

      $(this).addClass('navHover');

    }).mouseout(function(){

      $(this).removeClass('navHover');

    }).click(function(){

      $(this).toggleClass('nav-header-current');

      $(this).next('.ckit').slideToggle();

    })

  });



</script>
  

    <title>文本回复</title>
</head>
<body>
<div class="content" style="float:center;">
         
          <div class="cLine">
            <div class="pageNavigator left">
  <a href="/admin/text/add" title='新增文本自定义回复' class='btnGrayS vm bigbtn'><i class="fa fa-hand-o-right"></i><else /><img src="<?php echo ADMIN_IMAGE_URL; ?>/text.png" class="vm" /> 新增文本自定义回复</a>　
  <a href="/admin/img/add" title='新增图文自定义回复' class='btnGrayS vm bigbtn'><i class="fa fa-hand-o-right"></i><else /><img src="<?php echo ADMIN_IMAGE_URL; ?>/text.png" class="vm" /> 新增图文自定义回复</a>　
  
            </div>
          
            <div class="clr"></div>
          </div>
          <div class="msgWrap">
          <form method="post"  action="index.php?ac=importtxt&amp;id=9379&amp;wxid=gh_858dwjkeww5" id="info" >
          <input name="delall"  type="hidden" value="del" />
           <input name="wxid"  type="hidden" value="gh_858dwjkeww5" />
            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
<TH width="100px">编号</TH>
<TH class="keywords">关键词</TH>
<TH class="answer">回答</TH>
                    <TH  class="category" >匹配类型</TH>
                    <!-- <TH class="time">浏览次数</TH> -->
<TH class="time">时间</TH>
                     
<TH class="edit norightborder">操作</TH>
                </TR>
              </THEAD>
              <TBODY>
                <TR>
				</TR>
				<?php if(is_array($info) || $info instanceof \think\Collection): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $vo['keyword']; ?></td>
                  <td><div class="answer_text"><?php echo $vo['text']; ?></div></td>
                  <td><?php if($vo['precisions'] == '1'): ?>完全匹配<?php else: ?>模糊匹配<?php endif; ?></td>
                  <!-- <td>{pigcms:$vo.click}</td> -->
                    <td><?php echo date("y-m-d",$vo['updatetime']); ?></td>
                   <td class="norightborder"> <a href="/admin/text/edit/id/<?php echo $vo['id']; ?>" title="编辑文本">编辑</a> <a href="/admin/text/del/id/<?php echo $vo['id']; ?>">删除</a></td>
          
                </tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
                             
              </TBODY>
            </TABLE>
           </form> 
           <script>
   function checkvotethis() {
var aa=document.getElementsByName('del_id[]');
var mnum = aa.length;
j=0;
for(i=0;i<mnum;i++){
if(aa[i].checked){
j++;
}
}
if(j>0) {
document.getElementById('info').submit();
} else {
alert('未选中任何文章或回复！')
}
}

   </script>
          </div>
          <div class="cLine">
            <div class="pageNavigator right">
                 <div class="pages">
              		<?php echo $page; ?>   
			</div>

             </div>
            <div class="clr"></div>
          </div>
        </div>

        <div class="clr"></div>
      </div>
    </div>
  </div>
  <script>

function checkAll(form, name) {
for(var i = 0; i < form.elements.length; i++) {
var e = form.elements[i];
if(e.name.match(name)) {
e.checked = form.elements['chkall'].checked;
}
}
}


  </script>
  <!--底部-->
  	</div>

</body>
</html>