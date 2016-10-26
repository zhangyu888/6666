<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\main\showlist.html";i:1470276193;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>数据列表</title>

       <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>common.css">
<link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>main.css?11">
<script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>

    </head>
    <body>
          
          
        <div id='dialog-modal'></div>
        <div class="container">
<!--     <div id="button" class="mt10">
   <input type="button" id="btn1" class="btn btn82 btn_checked" value="全选"> 
   <input type="button" id="btn2" class="btn btn82 btn_nochecked" value="取消">
   <input type="button" id="btn3" class="btn btn82 btn_del" value="删除">
   <a href="index.php/admin/main/add"><input type="button" id="btn4" class="btn btn82 btn_add" value="添加"></a>
</div> -->
    <div id="search_bar" class="mt10">
       <div class="box">

          <div class="box_border">
 
            <div class="box_top"><b class="pl15">当前位置是：数据管理->数据列表</b></div>

            <div class="box_center pt10 pb10">

              <table class="form_table" border="0" cellpadding="0" cellspacing="0">

                <tr>
                      <form action="/index.php/admin/main/showlist" method="get">
                   
                
                 
                  <td>年</td>
                  <td><input type="text" name="year" class="input-text lh25" size="10"></td>
                  <td>日</td>
                  <td><select name="hour_id" class="input-text" class="input-text lh25">
                   <option value="0">选择时间段</option>
 
          <option value="1">23-1 子</option>
          <option value="2">1-3 丑</option>
          <option value="3">3-5 寅</option>
          <option value="4">5-7 卯</option>
          <option value="5">7-9 辰</option>
          <option value="6">9-11 巳</option>
          <option value="7">11-13 午</option>
          <option value="8">13-15 未</option>
          <option value="9">15-17 申</option>
          <option value="10">17-19 酉</option>
          <option value="11">19-21 戌</option>
          <option value="12">21-23 亥</option>
        </select></td>
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

       
                    <th width="30">选择</th>
                        <th width="30">年</th>
                    <th width="30">月</th>
                        <th width="30">日</th>
                         <th width="130">概况</th>
                         <th width="30">缺五行</th>
                         <th width="30">过五行</th>
             
  <th width="30">创建时间</th>
                  <th width="150">操作</th>
                   <!-- <th width="50"><a href="movie.php?weekdjs=desc" title="降序">上周点击</a></th>
                   <th width="50"><a href="movie.php?addweekdjs=desc" title="降序">本周点击</a></th>  -->

                    </tr>
                   
  <?php foreach($main_list as $v): ?>
               
                        <tr class="tr">
                   
                   <td class="td_center"><input type="checkbox" name="checkbox" value="<?php echo $v['main_id']; ?>"><?php echo $v['main_id']; ?></td>
                   <td><?php echo $v['year']; ?></td>
                  <td><?php echo $v['monthday']; ?></td>
                   <td><?php echo $hour_arr[$v['hour_id']]; ?></td>
                    <td><?php echo $v['result']; ?></td> 
              <td><?php echo $wuxing_arr[$v['que_wuxing_id']]; ?></td>
              <td><?php echo $wuxing_arr[$v['guo_wuxing_id']]; ?></td> 
            
               

<td><?php echo date("Y-m-d H:i",$v['create_time']); ?></td>
                    <td><a href="/admin/main/add/main_id/<?php echo $v['main_id']; ?>">编辑</a>&nbsp;|&nbsp;<a href="javascript:;" onclick="delete_product(<?php echo $v['main_id']; ?>)">删除</a></td>
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
                
                  
                    location.href="/admin/main/delete/main_id/"+id;
            
              }
               
            }
          
            </script>
        
  
   
    </body>
</html>