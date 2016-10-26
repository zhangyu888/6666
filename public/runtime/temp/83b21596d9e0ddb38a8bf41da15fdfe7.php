<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\user\showlist.html";i:1468474666;}*/ ?>
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
    <div id="button" class="mt10">
       <input type="button" id="btn1" class="btn btn82 btn_checked" value="全选"> 
       <input type="button" id="btn2" class="btn btn82 btn_nochecked" value="取消">
  <input type="button" id="btn3" class="btn btn82 btn_checked" value="显示级别"> 

    </div>
    <div id="search_bar" class="mt10">
       <div class="box">

          <div class="box_buser">
 
            <div class="box_top"><b class="pl15">当前位置是：会员管理->会员列表</b></div>

            <div class="box_center pt10 pb10">

              <table class="form_table" buser="0" cellpadding="0" cellspacing="0">

                <tr>
                      <form action="/index.php/admin/user/showlist" method="get" id="search">
                   
                
                 
                  <td>会员号、微信昵称</td>
                  <td><input type="text" name="keyword" class="input-text lh25" size="30"></td>
                  <td><input name="sel" type="submit" value="查询" class="ext_btn ext_btn_submit"><input type="hidden" name="status" value="" id="user_status"><input type="hidden" name="field" value="" id="field"><input type="hidden" name="birthday" value="0" id="birthday"></td>
                  <td><input name="" type="button" value="<?php echo $user_status[0]; ?>" class="ext_btn ext_btn_success" onclick="showStatus(0)"></td>
                  <td><input name="" type="button" value="<?php echo $user_status[1]; ?>" class="ext_btn ext_btn_success" onclick="showStatus(1)"></td>
                  <td><input name="" type="button" value="<?php echo $user_status[2]; ?>" class="ext_btn ext_btn_success" onclick="showStatus(2)"></td>
                  <td><input name="" type="button" value="<?php echo $user_status[3]; ?>" class="ext_btn ext_btn_success" onclick="showStatus(3)"></td>
                  <td><input name="" type="button" value="团队金额" class="ext_btn ext_btn_error" onclick="showPaihang('tuan_money')"></td>
                  <td><input name="" type="button" value="推广费排行" class="ext_btn ext_btn_error" onclick="showPaihang('all_fencheng')"></td>
                  <td><input name="" type="button" value="生日" class="ext_btn ext_btn_error" onclick="search_birthday()"></td>
                </form>
          
                  
              
                </tr>
           </table>
           <script type="text/javascript">
           function showStatus(status){
             $("#user_status").val(status);
            $("#search").submit();
           }
           function showPaihang(field){
            $("#field").val(field);
            $("#search").submit();
           }
            function search_birthday(){
            $("#birthday").val(1);
            $("#search").submit();
           }
  function song(userId){
  var money=$("#money"+userId);
  var note=$("#note"+userId);
  var sureFencheng=$("#sure_fencheng"+userId);
money.show();
note.show();
if(money.val() && note.val())
    $.ajax({
        url:"/index.php/admin/money/get_ajax_by_admin",
        data:{"user_id":userId,"money":money.val(),"note":note.val()},
        type:"POST",
        success: function(){
           alert('成功');
           var sure_fencheng=parseInt(sureFencheng.html());
sureFencheng.html(sure_fencheng+parseInt(money.val()));
           money.css("color","red");
        
            //location.href=location;
        },
        error:function(){
            alert('error')}
    })
  }

function note(userId){
  var note=$("#usernote"+userId);
  var content=$.trim(note.val());
note.show();
if(content)
    $.ajax({
        url:"/admin/user/ajax_add_note",
        data:{"user_id":userId,"note":content},
        type:"POST",
        dataType:"json",
        success: function(data){
           alert(data.msg);
          location.href=location;
        
            //location.href=location;
        },
        error:function(){
            alert('error')}
    })
  }

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
                    alert("请选择内容");
                }else{
               
                        $.ajax({
                            type:"POST",
                            url:"/admin/user/check_all",
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
         });
      
      }); 

           </script>
            </div>
          </div>

        </div>

    </div>

     <div id="table" class="mt10">

        <div class="box span10 oh">

              <table width="100%" buser="0" cellpadding="0" cellspacing="0" class="list_table">

                <tr class="tr">

                    <th width="30">编号</th>
                    <th width="30">选择</th>
                        <th width="40">会员号</th>
                      <th width="100">微信昵称</th>
                       <th width="50">未确认分成</th>
                        <th width="50">确认分成</th>
                        <th width="50">全部分成</th>
                        <th width="50">团队收入</th>
                       <th width="50">生日</th>  
                        <th width="30">等级</th>          
                        <th width="70">加入时间</th>

                  <th width="150">操作</th>
                   <!-- <th width="50"><a href="movie.php?weekdjs=desc" title="降序">上周点击</a></th>
                   <th width="50"><a href="movie.php?addweekdjs=desc" title="降序">本周点击</a></th>  -->

                    </tr>
                   
  <?php foreach($user_list as $v): ?>
               
                        <tr class="tr">
                             <td><?php echo $v['user_id']; ?></td>
                   <td class="td_center"><input type="checkbox" name="checkbox" value="<?php echo $v['user_id']; ?>"></td>
                   <td><a href="/index.php/admin/user/edit/user_id/<?php echo $v['user_id']; ?>"><?php if($v['subscribe']<1): ?><font style="color:red">取关</font><?php endif; ?><?php echo $v['user_name']; ?></a></td>
                  <td><?php echo $v['nickname']; ?><font style="color:red">&nbsp;<?php echo $v['note']; ?></font></td>
                   <td><?php echo $v['nosure_fencheng']; ?></td>
                    <td id="sure_fencheng<?php echo $v['user_id']; ?>"><?php echo $v['sure_fencheng']; ?></td>
                       <td><?php echo $v['all_fencheng']; ?></td>
                    <td><?php echo $v['tuan_money']; ?></td>
                    <th><?php echo date("m-d",$v['birthday']); ?></th> 
                <td><?php echo $user_status[$v['user_level']]; ?></td>
                       
        <td><?php echo date("Y-m-d H:i:s",$v['create_time']); ?></td>                   


                    <td>
<input type="text" name="" value="" placeholder="填写备注" id="usernote<?php echo $v['user_id']; ?>" class="input-text" style="display:none">
  <a href="javascript:note(<?php echo $v['user_id']; ?>)">备注</a>&nbsp;|&nbsp;
<input type="text" name="" value="" placeholder="金额" id="money<?php echo $v['user_id']; ?>" class="input-text" style="width:50px;display:none"><input type="text" name="" value="系统赠送" placeholder="填写备注" id="note<?php echo $v['user_id']; ?>" class="input-text" style="display:none">
  <a href="javascript:song(<?php echo $v['user_id']; ?>)">送分成</a>
 <?php if($v['user_level']<2): ?>&nbsp;|&nbsp;<a href="/admin/user/up_level/level/2/user_id/<?php echo $v['user_id']; ?>">升<?php echo $user_status[2]; ?></a>&nbsp;|&nbsp;
  <a href="/admin/user/up_level/level/3/user_id/<?php echo $v['user_id']; ?>">升<?php echo $user_status[3]; ?></a><?php endif; ?>
</td>
                
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
           

        
      


            </script>
        
  
   
    </body>
</html>