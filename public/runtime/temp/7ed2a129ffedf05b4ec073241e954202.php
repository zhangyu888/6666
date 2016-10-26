<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\img\index.html";i:1470363419;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery.min.js"></script>
 
    <title>图文回复</title>
    <style>
	*{padding:0px;margin:0px;}
	a{text-decoration:none;}
	ul li{list-style:none;}
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
.left {
    float: left;
}
.clr {
    display: block;
    clear: both;
    height: 1px;
    overflow: hidden;
}
cLine {
    overflow: hidden;
    padding: 5px 0;
    color: #000000;
    clear: both;
}
.pageNavigator {
    padding: 5px 0;
}
.left {
    float: left;
}
.vm01 {
    background: url(/static/admin/image/btn_font.gif) no-repeat 30px 30px #87cdf0;
}
.vm01, .vm02, .vm03 {
    width: 297px;
    height: 115px;
    float: left;
    margin-right: 1px;
    color: #FFF;
}
.vm01 a, .vm02 a {
    width: 197px;
    height: 115px;
    display: block;
    color: #FFF;
    font-size: 20px;
    padding-left: 100px;
    line-height: 115px;
}
.vm02 {
    background: url(/static/admin/image/btn_pic.gif) no-repeat 30px 30px #cec0f4;
}

.vm03 {
    background: url(/static/admin/image/btn_sear.gif) no-repeat;
}
.vm03 input {
    border: none;
    border-radius: 0px;
    height: 30px;
    margin: 38px 0 0 30px;
    font-size: 14px;
    width: 215px;
}
.vm03 button {
    width: 35px;
    height: 40px;
    background: none;
    cursor: pointer;
	outline:none;
	border:none;
}
TABLE.ListProduct {
    BORDER-TOP: #d3d3d3 1px solid;
    MARGIN-TOP: 5px;
    WIDTH: 100%;
    MARGIN-BOTTOM: 5px;
    _border-collapse: collapse;
}
table {
    empty-cells: show;
    border-collapse: collapse;
	text-align:left;
}
thead {
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
}
TABLE.ListProduct THEAD TH {
    BORDER-BOTTOM: #E7E9F3 1px solid;
    PADDING-BOTTOM: 5px;
    
    PADDING-LEFT: 5px;
    PADDING-RIGHT: 5px;
    COLOR: #666;
    FONT-SIZE: 14px;
    BORDER-TOP: #e3e3e3 1px solid;
    FONT-WEIGHT: normal;
    BORDER-RIGHT: #ddd 1px solid;
    PADDING-TOP: 5px;
    color: #222;
    font-weight: bold;
}
TABLE.ListProduct TBODY TR:hover {
    background-color:#F1FCEA;
}
.ListProduct td.norightborder a:hover {
    background-color: #E6E7EC !important;
    color: #222 !important;
    text-decoration: none;
    text-shadow: none;
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
    margin-left: 3px;
}
TABLE.ListProduct TBODY TD {
    BORDER-BOTTOM: #eee 1px solid;
    PADDING-BOTTOM: 10px;
    PADDING-LEFT: 5px;
    PADDING-RIGHT: 5px;
    BORDER-RIGHT: #eee 1px solid;
    PADDING-TOP: 10px;
    font-size: 12px;
    _empty-cells: show;
    word-break: break-all;
}
.pageNavigator {
    padding: 5px 0;
}
.right {
    float: right;
}
.pages a{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#036cb4;text-decoration:none;}

.pages a:hover{border:#999 1px solid;color:#666;}

.pages a:active{border:#999 1px solid;color:#666;}

.pages .current{border:#036cb4 1px solid;padding:2px 5px;font-weight:bold;margin:2px;color:#fff;background-color:#036cb4;}

.pages .disabled{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#ddd;}
.pages ul li{float:left;}
	</style>
</head>
<body>

<div class="content" style="float:center;">

         

          <div class="cLineB">

              <h4 class="left">自定义回复信息</h4>

              <div class="clr"></div>

          </div>

          <div class="cLine">

            

              <div class="pageNavigator left"  style="width: 100%;">

                <div class="vm01">

                    <a href="/admin/Text/add" title='新增文本自定义回复'>新增文本自定义回复</a>

                  </div>

                <div class="vm02">

                    <a href='/admin/img/add' title='新增图文自定义回复'>新增图文自定义回复</a>　

                </div>

                <div class="vm03">

                    <form action="#" method="post">

                     <input type="text" placeholder="请输入标题搜索词" value="<?php echo $_POST['search']; ?>" class="px" name="search" />

                    <button style="outline:none;"></button>

                    <div class="clr"></div>

                  </form>

            </div>



            <div class="clr"></div>

          </div>

       

          <div class="clr" style="height:20px;"></div>

      <div class="alert alert-success alert-dismissable">

		

			</div>

		

          </div>

          <div class="msgWrap">

            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">

              <THEAD>

                <TR valign="top">

					<TH width="300px" class="answer"  >标题</TH>

					<TH width="300px" class="keywords" >关键词</TH>

					

	                <TH width="300px" class="pic" >封面图片</TH> 

    

                   

                    <TH width="300px" class="time">浏览次数</TH>

					<TH class="time">时间</TH>

					<TH width="300px" class="edit norightborder">操作</TH>

                </TR>

              </THEAD>

              <TBODY>

                <TR></TR>

				

				<?php if(is_array($info) || $info instanceof \think\Collection): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "没有找到数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

				<tr>

                  <td><div class="answer_text"><?php echo $vo['title']; ?></div></td>

                  <td><?php echo $vo['keyword']; ?></td>
           
				  <td><img width="40px" height="40px" src="<?php echo $vo['pic']; ?>"></td>
                  <td><?php echo $vo['click']; ?></td>

                    <td><?php echo date("y-m-d",$vo['updatetime']); ?></td>

                   

                   <td class="norightborder">

				   <!--a target="ddd" href="{pigcms::U('Wap/Index/content',array('token'=>$_SESSION['token'],'id'=>$vo['id']))}">查看</a--> 

				   <a href="/admin/Img/edit/id/<?php echo $vo['id']; ?>" title="编辑图文自定义回复">编辑</a>

				   <a href="/admin/Img/del/id/<?php echo $vo['id']; ?>">删除</a></td>

          

                </tr>

				<?php endforeach; endif; else: echo "没有找到数据" ;endif; ?>

					

               

              </TBODY>

            </TABLE>

<style>

	.usort {

		width:45px;

		height:23px;

	}
	.time{width:300px;}
</style>

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

                 <div class="pages"><?php echo $page; ?>
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