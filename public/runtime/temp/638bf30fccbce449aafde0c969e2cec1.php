<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\xampp\htdocs\maogod\public/../application/admin\view\anli\showlist.html";i:1473148344;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>案例列表</title>

       <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>common.css">
<link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>main.css?11">
<script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>

    </head>
    <body>
          
          
        <div id='dialog-modal'></div>
        <div class="container">
    <div id="button" class="mt10">
       <input type="button" id="btn1" class="btn btn82 btn_checked" value="全选"> 
       <input type="button" id="btn2" class="btn btn82 btn_nochecked" value="取消">
   <input type="button" id="btn3" class="btn btn82 btn_del" value="删除">
       <a href="/index.php/admin/anli/add"><input type="button" id="btn4" class="btn btn82 btn_add" value="添加"></a>
    </div>
    <div id="search_bar" class="mt10">
       <div class="box">

          <div class="box_border">
 
            <div class="box_top"><b class="pl15">当前位置是：案例管理->案例列表</b></div>

            <div class="box_center pt10 pb10">

              <table class="form_table" border="0" cellpadding="0" cellspacing="0">

                <tr>
                      <form action="index.php/admin/anli/search" method="get">
                   
                
                 
                  <td>标题</td>
                  <td><input type="text" name="title" class="input-text lh25" size="50"></td>
                  <td><input name="sel" type="submit" value="查询" class="ext_btn ext_btn_submit"></td>
                </form>
          
                  
              
                </tr>
           </table>
            </div>
          </div>

        </div>

    </div>

     <div id="table" class="mt10">

        <div class="box span10 oh">

              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">

                <tr class="tr">

                    <th width="30">序号</th>
                    <th width="30">选择</th>
                        <th width="30">案例名称</th>
                        <th width="60">案例logo</th>
                        <th width="60">案例二维码</th>
                 
                        <th width="100">案例图</th>
                      
                     
                        <th width="70">案例内容</th>

                   
                  <th width="150">操作</th>
                   <!-- <th width="50"><a href="movie.php?weekdjs=desc" title="降序">上周点击</a></th>
                   <th width="50"><a href="movie.php?addweekdjs=desc" title="降序">本周点击</a></th>  -->

                    </tr>
                   
  <?php foreach($anli_list as $v): ?>
               
                        <tr class="tr">
                             <td><?php echo $v['anli_id']; ?></td>
                   <td class="td_center"><input type="checkbox" name="checkbox" value="<?php echo $v['anli_id']; ?>"></td>
                   <td><a href="/index.php/admin/anli/add/anli_id/<?php echo $v['anli_id']; ?>"><?php echo $v['anli_name']; ?></a></td>
                  
                   <td><img src="<?php echo $v['logo']; ?>" height="40" width="40"></td>
                    <td><img src="<?php echo $v['qrcode']; ?>" height="40" width="40"></td>
                    <td><img src="<?php echo $v['image']; ?>" height="40" width="40"></td>
                 	<td><?php echo $v['content']; ?></td>
        
                    <td><a href="/index.php/admin/anli/add/anli_id/<?php echo $v['anli_id']; ?>">修改</a>&nbsp;|&nbsp;<a href="javascript:;" onclick="delete_anli(<?php echo $v['anli_id']; ?>)">删除</a></td>
                 </tr>
                    <?php endforeach; ?>


                   
                  
                  
            </table>
              <div class="page mt10">
               <div class="pagination">
             
                </div> 

              </div>

        </div>

     </div>

   </div> 


         <script type="text/javascript">
           

        
            function delete_anli(id){
              if(confirm('是否删除')){
                 $.post('/index.php/admin/anli/delete_ajax',{'anli_id':id},function(data){
                  
                    location.href=location;
                },'json');
              }
               
            }
          
            </script>
        
  
   
    </body>
</html>