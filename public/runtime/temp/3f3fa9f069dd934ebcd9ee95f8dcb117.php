<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\money\show_send_list.html";i:1469605040;}*/ ?>
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
  <!--   <div id="button" class="mt10">
     <input type="button" id="btn1" class="btn btn82 btn_checked" value="全选"> 
     <input type="button" id="btn2" class="btn btn82 btn_nochecked" value="取消">
     <input type="button" id="btn3" class="btn btn82 btn_del" value="删除">
  
  </div> -->
    <div id="search_bar" class="mt10">
       <div class="box">

          <div class="box_bmoney">
 
            <div class="box_top"><b class="pl15">当前位置是：会员管理->提现列表</b></div>

            <div class="box_center pt10 pb10">

              <table class="form_table" bmoney="0" cellpadding="0" cellspacing="0">

                <tr>
                      <form action="/index.php/admin/money/show_send_list" method="get" id="search">
                   
                
                 
                  <td>会员号、微信昵称</td>
                  <td><input type="text" name="keyword" class="input-text lh25" size="30"></td>
                  <td><input name="sel" type="submit" value="查询" class="ext_btn ext_btn_submit"></td>
                  <td><input type="hidden" name="status" value="" id="money_status"><input name="" type="button" value="未提现" class="ext_btn ext_btn_success" onclick="showStatus(0)"></td>
                  <td><input name="" type="button" value="已提现" class="ext_btn ext_btn_success" onclick="showStatus(1)"></td>
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
                    <th width="30">支付方式</th>
                    <th width="30">状态</th>
                     <th width="130">创建时间</th>
<th width="150">备注</th>
                  <th width="150">操作</th>
                   <!-- <th width="50"><a href="movie.php?weekdjs=desc" title="降序">上周点击</a></th>
                   <th width="50"><a href="movie.php?addweekdjs=desc" title="降序">本周点击</a></th>  -->

                    </tr>
                   
  <?php foreach($money_list as $v): ?>
               
                        <tr class="tr">
                             <td><?php echo $v['money_send_id']; ?></td>
                   <td class="td_center"><input type="checkbox" name="checkbox" value="<?php echo $v['money_send_id']; ?>"></td>
                   <td><a href="/index.php/admin/user/edit/user_id/<?php echo $v['user_id']; ?>"><?php echo $v['user_name']; ?></a></td>
                   <td><?php echo $v['nickname']; ?></td>
              
                     <td><?php echo $v['money']; ?></td>
                      <td><?php if($v['pay_type'] == 0): ?>微信红包<?php else: ?>银行卡<?php endif; ?></td>
                    <td id="pay_status_<?php echo $v['money_send_id']; ?>"><?php if($v['status'] == 0): ?><font style="color:red"><?php else: ?><font style="color:green"><?php endif; ?><?php echo $money_status[$v['status']]; ?></font></td>
                 
                       
        <td><?php echo date("Y-m-d H:i:s",$v['create_time']); ?></td>                   
<th ><?php echo $v['note']; if($v['tixian_info']): ?><font style="color:red">(<?php echo $v['tixian_info']['bank_name']; ?>&nbsp;<?php echo $v['tixian_info']['bank_card']; ?>&nbsp;<?php echo $v['tixian_info']['bank_user']; ?>)</font><?php endif; ?></th>

                    <td>
<?php if($v['status'] == 0  and $v['pay_type'] == 0): ?>
  <a href="javascript:money_pay(<?php echo $v['money_send_id']; ?>)">红包付款</a>&nbsp;|&nbsp;<a href="javascript:money_pay_xianxia(<?php echo $v['money_send_id']; ?>)">线下付款</a>
<?php endif; if($v['pay_type']  > 0): ?>
<input type="text" name="" value="" placeholder="备注，可不填" id="remark_<?php echo $v['money_send_id']; ?>" class="input-text">
  <a href="javascript:money_pay(<?php echo $v['money_send_id']; ?>)">付款</a>&nbsp;|&nbsp;<a href="javascript:money_pay_xianxia(<?php echo $v['money_send_id']; ?>)">线下付款</a>
<?php endif; if($v['status'] == 1): ?>
 <a href="/wap/wechatpay/hongbao_view/mch_billno/<?php echo $v['mch_billno']; ?>">查看</a>
 <?php endif; ?>
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
           
function money_pay_xianxia(money_send_id){
  var o={};
   o.money_send_id=money_send_id;
   o.is_xianxia=1;
  $.post("/admin/money/xianxia_pay",o,function(data){
    if(data.error){
      alert(data.msg);
      return false;
    }
    location.href=location;
  });
}
        
            function delete_product(id){
              if(confirm('是否删除')){
                 $.post('/index.php/admin/money/delete_ajax',{'money_send_id':id},function(data){
                  
                    location.href=location;
                },'json');
              }
               
            }
  function money_pay(money_send_id){
   
if(confirm('是否付款')){
   var o={};
  o.money_send_id=money_send_id;
      o.remark="请继续努力！";
      o.nick_name='<?php echo $shop_name; ?>提现';
      o.send_name='<?php echo $shop_name; ?>提现';
      o.wishing='继续努力';
      o.act_name='<?php echo $shop_name; ?>提现';
      o.is_xianxia=0;
   $.post("/wap/wechatpay/hongbao_pay",o,function(data){
    if(data.error){
      alert(data.msg);
      return false;
    }

    if(data.result_code[0]=="SUCCESS"){

      alert('付款成功');
      $("#pay_status_"+money_send_id).html('已提现');
             $("#pay_status_"+money_send_id).css("color","red");
    }else{
      alert('付款失败，可能金额不够');
    }

   },"json")
}

 

  }

            </script>
        
  
   
    </body>
</html>