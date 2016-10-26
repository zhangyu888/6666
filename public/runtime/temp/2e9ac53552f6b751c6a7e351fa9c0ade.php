<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\main\add.html";i:1470276193;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加文章</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
      
   <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>bootstrap.min.css">
        <script src="<?php echo VENDOR_URL; ?>kindeditor/kindeditor.js" type="text/javascript" charset="utf-8" ></script>
<script type="text/javascript" charset="utf-8" src="<?php echo VENDOR_URL; ?>kindeditor/lang/zh_CN.js"></script>
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>bootstrap.min.js"></script>
<style type="text/css">

 .input-group{
        margin-top:10px;
        width:80%;
    }
</style>
    </head>

    <body>
<script type="text/javascript">
    KindEditor.ready(function(K) {
    window.editor = K.create('#editor_id');
    });
</script>
<div class="panel panel-info">
  <div class="panel-heading">祥元健康-添加数据</div>
  <div class="panel-body">
     <form  action="/admin/main/add" method="post" enctype="multipart/form-data" name="theForm" onsubmit="return validate();">
    <!-- Single button -->
    阳历：
      <div class="input-group" style="width:900px">
  <span class="input-group-addon" id="basic-addon1">年份</span>
  <input type="text" class="form-control"  aria-describedby="basic-addon1" style="width:80px;display:inline-block;float: left;"  name="year" id="year" value="<?php echo $main['year']; ?>">

<span class="input-group-addon" id="basic-addon1">系统默认</span>
 <select  class="form-control " name="default_monthday" id="monthday"> 
           <?php echo $option_monthday; ?>
           <option value="0">选择</option>
   <?php echo $month_options; ?>
      </select>
    <span class="input-group-addon" id="basic-addon1">起始月日</span>
  <input type="text" class="form-control"  aria-describedby="basic-addon1" style="width:80px;display:inline-block;float: left;"  name="start" id="start" value="<?php echo $main['start']; ?>">
  <span class="input-group-addon" id="basic-addon1" >结束月日</span>
  <input type="text" class="form-control"  aria-describedby="basic-addon1" style="width:80px;display:inline-block;float: left;"  name="end" id="end" value="<?php echo $main['end']; ?>">
  <span class="input-group-addon" id="basic-addon1">时辰</span>
    <select  class="form-control " name="hour_id"> 
          <?php echo $option_hour; ?>
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
      </select>
</div>
 


  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">概况</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:80px;" name="result" id="result"><?php echo $main['result']; ?></textarea>

</div>

  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">五行盈缺</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:80px;" name="wxyq" id="wxyq"><?php echo $main['wxyq']; ?></textarea>
 <span class="input-group-addon" id="basic-addon1">女</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:80px;" name="wxyq_2" id="wxyq_2"><?php echo $main['wxyq_2']; ?></textarea>
</div>
  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">五脏虚实</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:80px;" name="wzxs" id="wzxs"><?php echo $main['wzxs']; ?></textarea>
 <span class="input-group-addon" id="basic-addon1">女</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:80px;" name="wzxs_2" id="wzxs_2"><?php echo $main['wzxs_2']; ?></textarea>
</div>
  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">五脏情志</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:80px;" name="wzqz" id="wzqz"><?php echo $main['wzqz']; ?></textarea>
 <span class="input-group-addon" id="basic-addon1">女</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:80px;" name="wzqz_2" id="wzqz_2"><?php echo $main['wzqz_2']; ?></textarea>
</div>
 <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">出现毛病</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:80px;" name="problem" id="problem"><?php echo $main['problem']; ?></textarea>
 <span class="input-group-addon" id="basic-addon1">女</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:80px;" name="problem_2" id="problem_2"><?php echo $main['problem_2']; ?></textarea>
</div>
<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default" onclick="getC(1,0)">缺金</button>
  <button type="button" class="btn btn-default" onclick="getC(2,0)">缺木</button>
  <button type="button" class="btn btn-default" onclick="getC(3,0)">缺水</button>
  <button type="button" class="btn btn-default" onclick="getC(4,0)">缺火</button>
  <button type="button" class="btn btn-default" onclick="getC(5,0)">缺土</button>
<button type="button" class="btn btn-default" >...................</button>

 <button type="button" class="btn btn-default" onclick="getC(6,1)">过金</button>
  <button type="button" class="btn btn-default" onclick="getC(7,1)">过木</button>
  <button type="button" class="btn btn-default" onclick="getC(8,1)">过水</button>
  <button type="button" class="btn btn-default" onclick="getC(9,1)">过火</button>
  <button type="button" class="btn btn-default" onclick="getC(10,1)">过土</button>

</div>
 <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询(缺)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_yiyao" id="yiyao" style="height:80px;"><?php echo $main_info['wx_yiyao']; ?></textarea>
 <span class="input-group-addon" id="basic-addon1">医药咨询(过)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_g_yiyao" id="wx_g_yiyao" style="height:80px;"><?php echo $main_info['wx_g_yiyao']; ?></textarea>

</div>
 <div class="input-group">

 <span class="input-group-addon" id="basic-addon1">情志调养(缺)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_qingzhi" id="qingzhi" style="height:80px;"><?php echo $main_info['wx_qingzhi']; ?></textarea>
  <span class="input-group-addon" id="basic-addon1">情志调养(过)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_g_qingzhi" id="wx_g_qingzhi" style="height:80px;"><?php echo $main_info['wx_g_qingzhi']; ?></textarea>
</div>

 <div class="input-group">
 <span class="input-group-addon" id="basic-addon1">锻炼养生(缺)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_duanlian" id="duanlian" style="height:80px;"><?php echo $main_info['wx_duanlian']; ?></textarea>
  <span class="input-group-addon" id="basic-addon1">锻炼养生(过)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_g_duanlian" id="wx_g_duanlian" style="height:80px;"><?php echo $main_info['wx_g_duanlian']; ?></textarea>
</div>

 <div class="input-group">
 <span class="input-group-addon" id="basic-addon1">工作养生(缺)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_gongzuo" id="gongzuo" style="height:80px;"><?php echo $main_info['wx_gongzuo']; ?></textarea>
  <span class="input-group-addon" id="basic-addon1">工作养生(过)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_g_gongzuo" id="wx_g_gongzuo" style="height:80px;"><?php echo $main_info['wx_g_gongzuo']; ?></textarea>
</div>

 <div class="input-group">
 <span class="input-group-addon" id="basic-addon1">食疗养生(缺)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_shiliao" id="shiliao" style="height:80px;"><?php echo $main_info['wx_shiliao']; ?></textarea>
  <span class="input-group-addon" id="basic-addon1">食疗养生(过)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_g_shiliao" id="wx_g_shiliao" style="height:80px;"><?php echo $main_info['wx_g_shiliao']; ?></textarea>
</div>

 <div class="input-group">
 <span class="input-group-addon" id="basic-addon1">衣食住行(缺)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_zhuxing" id="zhuxing" style="height:80px;"><?php echo $main_info['wx_zhuxing']; ?></textarea>
  <span class="input-group-addon" id="basic-addon1">衣食住行(过)</span>
<textarea  class="form-control " placeholder="" aria-describedby="basic-addon1" name="wx_g_zhuxing" id="wx_g_zhuxing" style="height:80px;"><?php echo $main_info['wx_g_zhuxing']; ?></textarea>
</div>


  <script type="text/javascript">
  function validate(){
    var year=$("#year").val();
    var start=$("#start").val();
    var end=$("#end").val();
  }
  $("#monthday").change(function(event) {
   var monthday=$(this).val();
   var year=$("#year").val();
    $.post("main.php",{"monthday":monthday,"year":year,"default_monthday":1,"act":"get_monthday_info"},function(data){
        console.log(data);
      if(data.error){
     $("#result").html("");
      $("#wxyq").html("");
      $("#wxyq_2").html("");
      $("#wzxs").html("");
      $("#wzxs_2").html("");
      $("#wzqz").html("");
      $("#wzqz_2").html("");
      $("#problem").html("");
      $("#problem_2").html("");
    
      }else{
         $("#result").html(data.result);
      $("#wxyq").html(data.wxyq);
      $("#wxyq_2").html(data.wxyq_2);
      $("#wzxs").html(data.wzxs);
      $("#wzxs_2").html(data.wzxs_2);
      $("#wzqz").html(data.wzqz);
      $("#wzqz_2").html(data.wzqz_2);

      $("#problem").html(data.problem);
      $("#problem_2").html(data.problem_2);
       getC(data.que_wuxing_id,0);
      getC(data.guo_wuxing_id,1);
      }
   
     
  },'json');
  });
    $("#end").change(function(event) {
   var start=$("#start").val();
   var end=$("#end").val();
   var year=$("#year").val();
    $.post("main.php",{"year":year,"start":start,"end":end,"act":"get_monthday_info"},function(data){
        console.log(data);
      if(data.error){
     $("#result").html("");
      $("#wxyq").html("");
      $("#wxyq_2").html("");
      $("#wzxs").html("");
      $("#wzxs_2").html("");
      $("#wzqz").html("");
      $("#wzqz_2").html("");
      $("#problem").html("");
      $("#problem_2").html("");
    
      }else{
         $("#result").html(data.result);
      $("#wxyq").html(data.wxyq);
      $("#wxyq_2").html(data.wxyq_2);
      $("#wzxs").html(data.wzxs);
      $("#wzxs_2").html(data.wzxs_2);
      $("#wzqz").html(data.wzqz);
      $("#wzqz_2").html(data.wzqz_2);
      $("#problem").html(data.problem);
      $("#problem_2").html(data.problem_2);
      getC(data.que_wuxing_id,0);
      getC(data.guo_wuxing_id,1);
      }
   
     
  },'json');
  });
function getC(id,s){

  $.post("/admin/main/get_wuxing_ajax",{"id":id},function(data){
   
     if(s==0){
      
      $("#que_wuxing_id").val(id);
        $("#yiyao").html(data.yiyao);
        $("#qingzhi").html(data.qingzhi);
        $("#duanlian").html(data.duanlian);
        $("#shiliao").html(data.shiliao);
        $("#gongzuo").html(data.gongzuo);
        $("#zhuxing").html(data.zhuxing);
     }else{
    
      $("#guo_wuxing_id").val(id);
        $("#wx_g_yiyao").html(data.yiyao);
        $("#wx_g_qingzhi").html(data.qingzhi);
        $("#wx_g_duanlian").html(data.duanlian);
        $("#wx_g_shiliao").html(data.shiliao);
        $("#wx_g_gongzuo").html(data.gongzuo);
        $("#wx_g_zhuxing").html(data.zhuxing);
     }
      
  },'json');
 } 
  </script>


  <input type="hidden" name="nianli"  >
  <input type="hidden" name="que_wuxing_id" value="<?php echo $main['que_wuxing_id']; ?>" id="que_wuxing_id"/>
  <input type="hidden" name="guo_wuxing_id" value="<?php echo $main['guo_wuxing_id']; ?>" id="guo_wuxing_id"/>
   <input type="hidden" name="monthday_id" value="<?php echo $main['monthday_id']; ?>" id="monthday_id"/>
    <input type="hidden" name="info_id" value="<?php echo $main['info_id']; ?>" id="info_id"/>

      <input type="hidden" name="id" value="<?php echo $main['main_id']; ?>" />
    <div class="btn-group" role="group" aria-label="..." style="margin:10px 0px 0px 200px">
    <input type="submit" name="" value="确认保存"  class="btn btn-primary">
</div>

 </form>
  </div>

</div>
       

    </body>
</html>
