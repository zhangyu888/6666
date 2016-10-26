<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\img\add.html";i:1469783579;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery.min.js"></script>
 
    <title>新增图文回复</title>

<script>
$(function(){
	
	
	
	})
</script>
<style>
*{padding:0px;margin:0px;}
a{text-decoration:none;}
.red{color:red;}
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
.right {
    float: right;
}
.userinfoArea {
    margin: 20px 0;
}
table {
    empty-cells: show;
    border-collapse: collapse;
}
body, input, button, select, textarea {
    font: 12px/1.5 Microsoft YaHei,Helvitica,Verdana,Arial,san-serif;
    color: #444;
}
input, textarea {
    background: #fff;
}
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
.btnGreens:hover, .btnGreen:hover, .btnGrayS:hover, .a_upload:hover, .a_choose:hover {
    background-color: #5ba607 !important;
    color: #fff !important;
    text-decoration: none;
    text-shadow: none;
}
.btnGray:hover {
    background-color: #B6B8B4 !important;
    color: #050505 !important;
    text-decoration: none;
}
.btnGreens, .btnGreen,.a_upload, .a_choose {
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


</style>
</head>
<body>

<div class="content" style="float:center;">

          <div class="cLineB"><h4>编辑图文自定义内容</h4><a href="javascript:history.go(-1);"  class="right btnGrayS vm" style="margin-top:-27px" >返回</a></div>

         

          <form method="post"   action="/admin/Img/insert"  enctype="multipart/form-data" >

          <div class="msgWrap form">

            <TABLE class="userinfoArea" border="0" cellSpacing="0" cellPadding="0" width="100%">

              <THEAD>

                <TR>

                  <TH style="width:120px" valign="top"><label for="keyword">关键词：</label></TH>

                  <TD><input type="text" class="px" id="keyword" value=""  name="keyword" style="width:580px;"><br />

                  多个关键词请用空格格开：例如: 美丽&nbsp;漂亮&nbsp;好看 </TD>

                </TR>

                 <TR>

                  <TH valign="top">关键词类型：</TH>

                  <TD>

                    <label for="radio2"><input class="radio" id="radio2" type="radio" name="precisions" value="0" checked="checked" /> 包含匹配 （当此关键词包含粉丝输入关键词时有效）</label>

                    <br />

                    <label for="radio1"><input id="radio1" class="radio" type="radio" name="precisions" value="1" /> 完全匹配  （当此关键词和粉丝输入关键词完全相同时有效）</label>

                  </TD>

                </TR>

              </THEAD>

              <TBODY>

               <TR>

                  <TH><span class="red">*</span><label for="title">标题：</label></TH>

                  <TD><input type="text" class="px" id="title" value=""    name="title" style="width:580px;"> <span style="color:red;">必须填写</span></TD>

                </TR>

                


				

				

                <TR>

                </TR>



                <TR>                  <TH valign="top"><label for="text">简介：</label></TH>

                  <TD><textarea  class="px" id="Hfcontent"     name="text" style="width:580px;  height:100px"></textarea><br/>限制200字内

                   



</TD>

                </TR>

                <TR>


                </TR>

                <TR>

                  <TH valign="top"><label for="picurl">封面图片：</label></TH>

                  <TD>（尺寸：宽720像素，高400像素） 小于500k;<div><input name="upfile" type="file"  class="text textMiddle inputQ" value="请选择图片" /></div></TR>
            
                             
                    <TR>         
                                              
                  <TH valign="top"><label for="url">图文外链网址：</label></TH>
					 <TD><input type="text" class="px" id="url" value="" name="url" style="width:280px;"></TD>
                 
					
                

              
			
				</TR>

                <TR>

 				  

                  <TD><input type="submit" value="保存" name="sbmt" class="btnGreen left">　<a href="/admin/Img/index"  class="btnGray vm">取消</a></TD>

                </TR>

              </TBODY>

            </TABLE>

            

          </div>

          </form>

          

        </div>     

 

        <div class="clr"></div>

      </div>

    </div>

  </div> 

<!--底部-->

  	</div>

</body>
</html>