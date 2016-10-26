<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\xampp\htdocs\newxy\public/../application/admin\view\manager\showlist.html";i:1468913431;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>管理员列表</title>

       <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>common.css">
<link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>main.css?11">
<script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>

    </head>
    <body>
          
          
        <div id='dialog-modal'></div>
        <div class="container">
    <div id="button" class="mt10">
       
       <a href="/admin/manager/add"><input type="button" id="btn4" class="btn btn82 btn_add" value="添加"></a>
    </div>
    <div id="search_bar" class="mt10">
       <div class="box">

          <div class="box_border">
 
            <div class="box_top"><b class="pl15">当前位置是：系统设置->管理员列表</b></div>

            <div class="box_center pt10 pb10">

            </div>
          </div>

        </div>

    </div>

     <div id="table" class="mt10">

        <div class="box span10 oh">

              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">

                <tr class="tr">

                    <th width="30">序号</th>
           
                        <th width="140">管理员名称</th>
                    <th width="140">职位</th>
                        <th width="30">手机号</th>
                 
                      
             
  <th width="100">创建时间</th>
                  <th width="150">操作</th>
                   <!-- <th width="50"><a href="movie.php?weekdjs=desc" title="降序">上周点击</a></th>
                   <th width="50"><a href="movie.php?addweekdjs=desc" title="降序">本周点击</a></th>  -->

                    </tr>
                   
  <?php foreach($manager_list as $v): ?>
               
                        <tr class="tr">
                             <td><?php echo $v['admin_id']; ?></td>
                   <td><a href="/index.php/admin/manager/add/admin_id/<?php echo $v['admin_id']; ?>"><?php echo $v['admin_name']; ?></a></td>
                  
              <td><?php echo $v['position']; ?></td>
              <td><?php echo $v['tel']; ?></td> 
            
                 
                       
                   

<td><?php echo date("Y-m-d H:i",$v['create_time']); ?></td>
               <td><?php if($v['admin_id']>1): ?>    <a href="javascript:;" onclick="delete_product(<?php echo $v['admin_id']; ?>)">删除</a><?php endif; ?></td>
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
           

        
            function delete_product(id){
              if(confirm('是否删除')){
                
                  
                    location.href="/admin/manager/delete/admin_id/"+id;
              
              }
               
            }
          
            </script>
        
  
   
    </body>
</html>