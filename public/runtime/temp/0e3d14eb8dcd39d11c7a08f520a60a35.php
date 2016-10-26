<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\xampp\htdocs\weixin\public/../application/admin\view\money\show_get_list.html";i:1469244599;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>订单列表</title>

       <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>common.css">
<link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>main.css?55">
<script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>

    </head>
    <body>
          
          
        <div id='dialog-modal'></div>
        <div class="container">
<!--     <div id="button" class="mt10">
   <input type="button" id="btn1" class="btn btn82 btn_checked" value="全选"> 
   <input type="button" id="btn2" class="btn btn82 btn_nochecked" value="取消">
   <input type="button" id="btn3" class="btn btn82 btn_del" value="删除">

</div> -->
    <div id="search_bar" class="mt10">
       <div class="box">

          <div class="box_bmoney">
 
            <div class="box_top"><b class="pl15">当前位置是：会员管理->充值列表</b></div>

            <div class="box_center pt10 pb10">

              <table class="form_table" bmoney="0" cellpadding="0" cellspacing="0">

                <tr>
                      <form action="/index.php/admin/money/show_get_list" method="get" id="search">
                   
                
                 
                  <td>会员号、微信昵称</td>
                  <td><input type="text" name="keyword" class="input-text lh25" size="30"></td>
                  <td><input name="sel" type="submit" value="查询" class="ext_btn ext_btn_submit"></td>
                  <td><input type="hidden" name="status" value="" id="money_status"><input name="" type="button" value="未充值" class="ext_btn ext_btn_success" onclick="showStatus(0)"></td>
                  <td><input name="" type="button" value="已充值" class="ext_btn ext_btn_success" onclick="showStatus(1)"></td>
                </form>
          
                  
              
                </tr>
           </table>
           <script type="text/javascript">
        function showStatus(status){
             $("#money_status").val(status);
            $("#search").submit();
           }
           </script>
            </div>
          </div>

        </div>

    </div>

     <div id="table" class="mt10">

        <div class="box span10 oh">

              <table width="100%" bmoney="0" cellpadding="0" cellspacing="0" class="list_table">

                <tr class="tr">

                    <th width="30">编号</th>
                    <th width="30">选择</th>
                    <th width="60">用户名</th>
                     <th width="60">微信昵称</th>
                    <th width="30">金额</th>
                    
                    <th width="30">状态</th>
                     <th width="70">创建时间</th>
              <th width="130">备注</th>
                  <th width="150">操作</th>
                   <!-- <th width="50"><a href="movie.php?weekdjs=desc" title="降序">上周点击</a></th>
                   <th width="50"><a href="movie.php?addweekdjs=desc" title="降序">本周点击</a></th>  -->

                    </tr>
                   
  <?php foreach($money_list as $v): ?>
               
                        <tr class="tr">
                             <td><?php echo $v['money_get_id']; ?></td>
                   <td class="td_center"><input type="checkbox" name="checkbox" value="<?php echo $v['money_send_id']; ?>"></td>
                   <td><?php echo $v['user_name']; ?></td>
                   <td><?php echo $v['nickname']; ?></td>
              
                     <td><?php echo $v['money']; ?></td>
                   
                    <td><?php echo $money_status[$v['status']]; ?></td>
                 
                       
        <td><?php echo date("Y-m-d H:i:s",$v['get_time']); ?></td>                   
   <td><?php echo $v['note']; ?></td>

                    <td>
<?php if($v['status'] == 0 and $v['money_type'] == -1 and $pay_type_id == 0): ?>
  <a href="/index.php/admin/money/pay/money_send_id/<?php echo $v['money_send_id']; ?>">红包付款</a>&nbsp;|&nbsp;
<?php endif; if($v['pay_type_id']  > 0): ?>
<input type="text" name="" value="" placeholder="填写支付宝订单号" id="kuaidi_sn_<?php echo $v['money_send_id']; ?>" class="input-text">
  <a href="javascript:fahuo(<?php echo $v['money_send_id']; ?>)">付款</a>&nbsp;|&nbsp;
<?php endif; ?>

<!--  <a href="/index.php/admin/money/view/money_send_id/<?php echo $v['money_send_id']; ?>">查看</a> -->
<!-- <a href="javascript:;" onclick="delete_product(<?php echo $v['money_send_id']; ?>)">作废</a> --></td>
                
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
                 $.post('/index.php/admin/money/delete_ajax',{'money_send_id':id},function(data){
                  
                    location.href=location;
                },'json');
              }
               
            }
  function fahuo(money_send_id){
    var kuaidi_name='yunda'; //默认韵达

    var kuaidi_sn=$("#kuaidi_sn_"+money_send_id).val();

    if(!kuaidi_sn){
        
        return false;
    }
    $.ajax({
        url:"/index.php/admin/money/send",
        data:{"act":"send","kuaidi_sn":kuaidi_sn,"kuaidi_name":kuaidi_name,"money_send_id":money_send_id},
        type:"POST",
        success: function(){
           alert('发货成功');
           $("#kuaidi_sn_"+money_send_id).css("color","red");
            //location.href=location;
        },
        error:function(){
            alert('error')}
    })
  }

            </script>
        
  
   
    </body>
</html>