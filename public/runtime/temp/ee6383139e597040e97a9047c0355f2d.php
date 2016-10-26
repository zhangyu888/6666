<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\xampp\htdocs\newxy\public/../application/admin\view\order\showlist.html";i:1468917523;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>订单列表</title>

       <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>common.css">
<link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>main.css?55">
<script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo VENDOR_URL; ?>laydate/laydate.js"></script>
    </head>
    <body>
          
          
        <div id='dialog-modal'></div>
        <div class="container">
    <div id="button" class="mt10">
       <input type="button" id="btn1" class="btn btn82 btn_checked" value="全选"> 
       <input type="button" id="btn2" class="btn btn82 btn_nochecked" value="取消">
   <input type="button" id="btn3" class="btn btn82 btn_del" value="删除">
      <input type="button" id="btn4" class="btn btn82 btn_checked" value="收货">

    </div>
    <div id="search_bar" class="mt10">
       <div class="box">

          <div class="box_border">
 
            <div class="box_top"><b class="pl15">当前位置是：订单管理->订单列表</b></div>

            <div class="box_center pt10 pb10">
  <form action="/index.php/admin/order/showlist" method="get" id="search">
              <table class="form_table" border="0" cellpadding="0" cellspacing="0">
            <tr><td>时间查找： <input class="laydate-icon" onclick="laydate()" name="stime"></td><td><input class="laydate-icon" onclick="laydate()" name="etime"></td></tr>
                <tr>
                    
                   
                
                 
                  <td>订单编号、会员号、收货人</td>
                  <td><input type="text" name="keyword" class="input-text lh25" size="30"></td>
                  <td><input name="sel" type="submit" value="查询" class="ext_btn ext_btn_submit"></td>
                       <td><input name="" type="button" value="未付款" class="ext_btn ext_btn_success" id="nopay"></td>
                     <td><input name="" type="button" value="待发货" class="ext_btn ext_btn_success" id="dfh"></td>
                  <td><input type="hidden" name="status" value="" id="order_status"><input name="" type="button" value="已发货" class="ext_btn ext_btn_success" id="send"></td>
               
                  <td><input name="" type="button" value="已完成" class="ext_btn ext_btn_success" id="over"></td>
                  <td><input type="hidden" name="day" value="" id="day"><input name="" type="button" value="7天未收货" class="ext_btn ext_btn_error" id="wsh7"></td>
                  <td><input name="" type="button" value="10天未收货" class="ext_btn ext_btn_error" id="wsh10"></td>
                   <td><input name="" type="button" value="下载未发货订单" class="ext_btn ext_btn_submit" id="down" onclick="location.href='/admin/order/export'"></td>
                      <td><input name="" type="button" value="下载已付款订单" class="ext_btn ext_btn_submit"  onclick="location.href='/admin/order/export1/status/0'"></td>
       
          
                  
              
                </tr>

           </table>
                    </form>
           <script type="text/javascript">
 $("#nopay").click(function(){
  var order_status=0;
  $("#order_status").val(order_status);
  $("#search").submit();
});          
$("#dfh").click(function(){
  var order_status=1;
  $("#order_status").val(order_status);
  $("#search").submit();
});
$("#send").click(function(){
  var order_status=2;
  $("#order_status").val(order_status);
  $("#search").submit();
});
$("#over").click(function(){
  var order_status=3;
  $("#order_status").val(order_status);
  $("#search").submit();
});
$("#wsh7").click(function(){
  var day=7;
  var order_status=2;
  $("#day").val(day);
  $("#order_status").val(order_status);
  $("#search").submit();
});
$("#wsh10").click(function(){
  var day=10;
  var order_status=2;
  $("#day").val(day);
  $("#order_status").val(order_status);
  $("#search").submit();
});

           </script>
            </div>
          </div>

        </div>

    </div>

     <div id="table" class="mt10">

        <div class="box span10 oh">

              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">

                <tr class="tr">

                    <th width="30">编号</th>
                    <th width="30">选择</th>
                        <th width="40">订单编号</th>

                   <th width="50">下单用户</th>
                        <th width="200">收货人信息</th>
                        <th width="40">订单金额</th>
                 
                        <th width="30">状态</th>
                      
                     
                        <th width="80">下单/付款时间</th>

                  <th width="150">操作</th>
                   <!-- <th width="50"><a href="movie.php?weekdjs=desc" title="降序">上周点击</a></th>
                   <th width="50"><a href="movie.php?addweekdjs=desc" title="降序">本周点击</a></th>  -->

                    </tr>
                   
  <?php foreach($order_list as $v): ?>
               
                        <tr class="tr">
                             <td><?php echo $v['order_id']; ?></td>
                   <td class="td_center"><input type="checkbox" name="checkbox" value="<?php echo $v['order_id']; ?>"></td>
                   <td><a href="/index.php/admin/order/edit/order_id/<?php echo $v['order_id']; ?>"><?php echo $v['order_sn']; ?></a></td>
                  <td><?php echo $v['user_name']; ?></td>
                   <td><?php echo $v['consignee']; ?>|<?php echo $v['address']; ?>&nbsp;<?php echo $v['tel']; if($v['note']): ?><font style="color:red">(备注：<?php echo $v['note']; ?>)</font><?php endif; ?></td>
                    <td><?php echo $v['amount']; ?></td>
                   
<?php if($v['status'] == 0): ?> <td ><?php endif; if($v['status'] == 1): ?><td style="color:#f29307"><?php endif; if($v['status'] == 2): ?><td style="color:#1b75b6"><?php endif; if($v['status'] == 3): ?><td style="color:#89bf00"><?php endif; if($v['status'] == 4): ?><td style="color:red"><?php endif; ?>
                    <?php echo $order_status[$v['status']]; ?></td>
                 
                       
        <td> <?php echo date("Y-m-d H:i:s",$v['create_time']); ?> <br/>
        <?php if($v['pay_time']): ?><font style="color:#3c6"><?php echo date("Y-m-d H:i:s",$v['pay_time']); ?></font><?php endif; ?></td>                   


                    <td>
<?php if($v['status'] == 0): ?>
  <a href="/index.php/admin/order/pay/order_id/<?php echo $v['order_id']; ?>" >付款</a>
<?php endif; if($v['status'] == 1): ?>
<select name="kuaidi_name">
   <?php foreach($kuaidi_list as $kuaidi): if($shop_config['kuaidi_name'] == $kuaidi['name']): ?><option value="<?php echo $kuaidi['code']; ?>" selected><?php echo $kuaidi['name']; ?></option><?php endif; ?>
          <option value="<?php echo $kuaidi['code']; ?>"><?php echo $kuaidi['name']; ?></option>
          <?php endforeach; ?>
</select><input type="text" name="" value="" placeholder="填写运单号" id="kuaidi_sn_<?php echo $v['order_id']; ?>" class="input-text">
  <a href="javascript:fahuo(<?php echo $v['order_id']; ?>)">发货</a>&nbsp;|&nbsp;  <a href="javascript:tuihuo(<?php echo $v['order_id']; ?>)">退款</a>
<?php endif; if($v['status'] == 2): ?>

 <a href="http://m.kuaidi100.com/index_all.html?type=<?php echo $v['kuaidi_name']; ?>&postid=<?php echo $v['kuaidi_sn']; ?>"><?php echo $v['kuaidi_name']; ?>：<?php echo $v['kuaidi_sn']; ?> </a><a href="/index.php/admin/order/over/order_id/<?php echo $v['order_id']; ?>">收货确认</a>&nbsp;|&nbsp;
   <a href="javascript:tuihuo(<?php echo $v['order_id']; ?>)">退货</a>
<?php endif; if($v['status'] == 3): ?>
 <a href="http://m.kuaidi100.com/index_all.html?type=<?php echo $v['kuaidi_name']; ?>&postid=<?php echo $v['kuaidi_sn']; ?>"><?php echo $v['kuaidi_name']; ?>：<?php echo $v['kuaidi_sn']; ?> </a>
 <?php endif; ?>
<!-- <a href="javascript:;" onclick="delete_product(<?php echo $v['order_id']; ?>)">作废</a> --></td>
                
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
                 $.post('/index.php/admin/order/delete_ajax',{'order_id':id},function(data){
                  
                    location.href=location;
                },'json');
              }
               
            }

            function tuihuo(order_id){
              if(confirm('是否退款退货？')){
                location.href='/admin/order/back/order_id/'+order_id;
              }
            }
  function fahuo(order_id){
    var kuaidi_name='ems'; //默认ems

    var kuaidi_sn=$("#kuaidi_sn_"+order_id).val();

    if(!kuaidi_sn){
        
        return false;
    }
    $.ajax({
        url:"/index.php/admin/order/send",
        data:{"act":"send","kuaidi_sn":kuaidi_sn,"kuaidi_name":kuaidi_name,"order_id":order_id},
        type:"POST",
        success: function(data){
           alert(data);
           $("#kuaidi_sn_"+order_id).css("color","red");
            //location.href=location;
        },
        error:function(){
            alert('error')}
    })
  }

            </script>
        
   <script type="text/javascript">

      $(document).ready(function(e) {
         $("#btn1").click(function(){
            $("[name='checkbox']").prop("checked", function( i, val ) {
          return !val;
           //即true变false。flase变true
        });
         });

         $("#btn2").click(function(){

                 $("[name='checkbox']").prop("checked", function( i, val ) {
                      return !val;
                      
                    });
         });

         $("#btn3").click(function(){       
                var s="";
                $("[name='checkbox']").each(function(){
                    var cr=$(this)[0];
                    if(cr.checked){
                        s+=$(this).val()+"|";           
                    };
                });
                if(s==""){
                    alert("请选择要删除的内容");
                }else{
                    if(confirm('确认要删除?')){
                        $.ajax({
                            type:"POST",
                            url:"/admin/order/delete_all",
                            data:{"s":s},
                            success: function(data){
                              if(typeof data=="object"){
                                alert('操作失败，没有权限');
                              }else{
                                alert(data);
                              }
                                
                                location=location;
                            },
                            error: function(){
                                alert(error);
                            }
                        });
                    }
              }
         });
         /*--------收货---*/
        $("#btn4").click(function(){       
                var s="";
                $("[name='checkbox']").each(function(){
                    var cr=$(this)[0];
                    if(cr.checked){
                        s+=$(this).val()+"|";           
                    };
                });
                if(s==""){
                    alert("请选择要处理的内容");
                }else{
                    if(confirm('确认要收货?')){
                        $.ajax({
                            type:"POST",
                            url:"/admin/order/over_all",
                            data:{"s":s},
                            success: function(data){
                             if(typeof data=="object"){
                                alert('操作失败，没有权限');
                              }else{
                                alert(data);
                              }
                                location=location;
                            },
                            error: function(){
                                alert(error);
                            }
                        });
                    }
              }
         });
      }); 
   </script>

   
    </body>
</html>