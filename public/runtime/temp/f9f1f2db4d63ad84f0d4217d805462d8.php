<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\xampp\htdocs\newxy\public/../application/admin\view\message\showlist.html";i:1467041484;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>列表</title>

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
    </div>
    <div id="search_bar" class="mt10">
       <div class="box">

          <div class="box_border">
 
            <div class="box_top"><b class="pl15">当前位置是：会员管理->会员私信列表</b></div>

            <div class="box_center pt10 pb10">

              <table class="form_table" border="0" cellpadding="0" cellspacing="0">

                <tr>
                      <form action="index.php/admin/message/search" method="get">
                   
                
                 
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
                    <th width="40">发送用户</th>

                        <th width="160">评论内容</th>
                          <th width="30">接收用户</th>
                 
                    <th width="30">创建时间</th>
                      
       
                  <th width="150">操作</th>
                   <!-- <th width="50"><a href="movie.php?weekdjs=desc" title="降序">上周点击</a></th>
                   <th width="50"><a href="movie.php?addweekdjs=desc" title="降序">本周点击</a></th>  -->

                    </tr>
                   
  <?php foreach($message_list as $v): ?>
               
                        <tr class="tr">
                             <td><?php echo $v['message_id']; ?></td>
                   <td class="td_center"><input type="checkbox" name="checkbox" value="<?php echo $v['message_id']; ?>"></td>
                   <td><a href="/index.php/admin/message/add/message_id/<?php echo $v['message_id']; ?>"><?php echo $v['send_id']; ?></a></td>
                  
                    <td><?php echo $v['content']; ?></td>
              <td><?php echo $v['get_id']; ?></td> 
<td><?php echo date("Y-m-d H:i",$v['create_time']); ?></td>
                    <td><a href="javascript:;" onclick="delete_product(<?php echo $v['message_id']; ?>)">删除</a></td>
                 </tr>
                    <?php endforeach; ?>


                   
                  
                  
            </table>
              <div class="page mt10">
               <div class="pagination">
             <?php echo $html_page; ?>
                </div> 
             

              </div>

        </div>

     </div>

   </div> 


         <script type="text/javascript">
           

        
            function delete_product(id){
              if(confirm('是否删除')){
                 $.post('/admin/message/delete_ajax',{'message_id':id},function(data){
                  
                    location.href=location;
                },'json');
              }
               
            }
          
            </script>
        
  
   
    </body>
</html>