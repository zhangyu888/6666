<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\main\wuxing.html";i:1470276193;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>系统默认时间设置</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
      
   <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>bootstrap.min.css">
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>bootstrap.min.js"></script>
<style type="text/css">
.input-group{
  margin-top:10px;
}
.input-group .w100{
  width:100px;
}
.input-group .w200{
  width:200px;
}
.btn-group{
 display:block;
  margin:0px auto;
  height:50px;
}
.btn-group>.btn:first-child{
  float:none;
    display:block;
  margin:0px auto;

}
    .input-group{
        margin-top:10px;
        width:50%;
    }
    li.active a{
        color:red;
    }
</style>
    </head>

    <body>

<div class="panel panel-info">
  <div class="panel-heading">祥元健康 - 五行数据</div>
  <div class="panel-body">

    <ul class="nav nav-tabs" role="tablist" id="feature-tab">
        <li class="active"><a href="#tab-chrome" role="tab" data-toggle="tab">缺金</a></li>
        <li><a href="#tab-firefox" role="tab" data-toggle="tab">缺木</a></li>
        <li><a href="#tab-safari" role="tab" data-toggle="tab">缺水</a></li>
        <li><a href="#tab-opera" role="tab" data-toggle="tab">缺火</a></li>
        <li><a href="#tab-ie" role="tab" data-toggle="tab">缺土</a></li>
        <li>...</li>
        <li>...</li>
        <li ><a href="#tab-jin" role="tab" data-toggle="tab">过金</a></li>
        <li><a href="#tab-mu" role="tab" data-toggle="tab">过木</a></li>
        <li><a href="#tab-shui" role="tab" data-toggle="tab">过水</a></li>
        <li><a href="#tab-huo" role="tab" data-toggle="tab">过火</a></li>
        <li><a href="#tab-tu" role="tab" data-toggle="tab">过土</a></li>
    </ul>
<form action="/admin/main/wuxing" method="post">
    <div class="tab-content">
        <div class="tab-pane active" id="tab-chrome">
              <div class="row feature">
                <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="jin_yiyao"><?php echo $wuxing_1['yiyao']; ?></textarea>

</div>
                   <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">情志调养</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="jin_qingzhi"><?php echo $wuxing_1['qingzhi']; ?></textarea>
  
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">锻炼养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="jin_duanlian"><?php echo $wuxing_1['duanlian']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">工作养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="jin_gongzuo"><?php echo $wuxing_1['gongzuo']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">食疗养生</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="jin_shiliao"><?php echo $wuxing_1['shiliao']; ?></textarea>
</div>   
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">穿衣住行</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="jin_zhuxing"><?php echo $wuxing_1['zhuxing']; ?></textarea>
</div>    
            </div>
        </div>
        <div class="tab-pane" id="tab-firefox">
              <div class="row feature">
                <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="mu_yiyao"><?php echo $wuxing_2['yiyao']; ?></textarea>

</div>
                   <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">情志调养</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="mu_qingzhi"><?php echo $wuxing_2['qingzhi']; ?></textarea>
  
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">锻炼养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="mu_duanlian"><?php echo $wuxing_2['duanlian']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">工作养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="mu_gongzuo"><?php echo $wuxing_2['gongzuo']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">食疗养生</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="mu_shiliao"><?php echo $wuxing_2['shiliao']; ?></textarea>
</div>  
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">穿衣住行</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="mu_zhuxing"><?php echo $wuxing_2['zhuxing']; ?></textarea>
</div>

            </div>
        </div>
        <div class="tab-pane" id="tab-safari">
               <div class="row feature">
                <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="shui_yiyao"><?php echo $wuxing_3['yiyao']; ?></textarea>

</div>
                   <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">情志调养</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="shui_qingzhi"><?php echo $wuxing_3['qingzhi']; ?></textarea>
  
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">锻炼养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="shui_duanlian"><?php echo $wuxing_3['duanlian']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">工作养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="shui_gongzuo"><?php echo $wuxing_3['gongzuo']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">食疗养生</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="shui_shiliao"><?php echo $wuxing_3['shiliao']; ?></textarea>
</div>   
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">穿衣住行</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="shui_zhuxing"><?php echo $wuxing_3['zhuxing']; ?></textarea>
</div>    
            </div>
        </div>
        <div class="tab-pane" id="tab-opera">
              <div class="row feature">
                <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="huo_yiyao"><?php echo $wuxing_4['yiyao']; ?></textarea>

</div>
                   <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">情志调养</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="huo_qingzhi"><?php echo $wuxing_4['qingzhi']; ?></textarea>
  
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">锻炼养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="huo_duanlian"><?php echo $wuxing_4['duanlian']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">工作养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="huo_gongzuo"><?php echo $wuxing_4['gongzuo']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">食疗养生</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="huo_shiliao"><?php echo $wuxing_4['shiliao']; ?></textarea>
</div>  
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">穿衣住行</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="huo_zhuxing"><?php echo $wuxing_4['zhuxing']; ?></textarea>
</div>   
            </div>
        </div>
        <div class="tab-pane" id="tab-ie">
             <div class="row feature">
                <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="tu_yiyao"><?php echo $wuxing_5['yiyao']; ?></textarea>

</div>
                   <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">情志调养</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="tu_qingzhi"><?php echo $wuxing_5['qingzhi']; ?></textarea>
  
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">锻炼养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="tu_duanlian"><?php echo $wuxing_5['duanlian']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">工作养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="tu_gongzuo"><?php echo $wuxing_5['gongzuo']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">食疗养生</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="tu_shiliao"><?php echo $wuxing_5['shiliao']; ?></textarea>
</div>  
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">穿衣住行</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="tu_zhuxing"><?php echo $wuxing_5['zhuxing']; ?></textarea>
</div>

            </div>
        </div>
    <!--过的-->
       <div class="tab-pane" id="tab-jin">
             <div class="row feature">
                <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_jin_yiyao"><?php echo $wuxing_6['yiyao']; ?></textarea>

</div>
                   <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">情志调养</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_jin_qingzhi"><?php echo $wuxing_6['qingzhi']; ?></textarea>
  
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">锻炼养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_jin_duanlian"><?php echo $wuxing_6['duanlian']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">工作养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_jin_gongzuo"><?php echo $wuxing_6['gongzuo']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">食疗养生</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="g_jin_shiliao"><?php echo $wuxing_6['shiliao']; ?></textarea>
</div>  
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">穿衣住行</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="g_jin_zhuxing"><?php echo $wuxing_6['zhuxing']; ?></textarea>
</div>

            </div>
        </div>

   <div class="tab-pane" id="tab-mu">
             <div class="row feature">
                <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_mu_yiyao"><?php echo $wuxing_7['yiyao']; ?></textarea>

</div>
                   <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">情志调养</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_mu_qingzhi"><?php echo $wuxing_7['qingzhi']; ?></textarea>
  
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">锻炼养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_mu_duanlian"><?php echo $wuxing_7['duanlian']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">工作养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_mu_gongzuo"><?php echo $wuxing_7['gongzuo']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">食疗养生</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="g_mu_shiliao"><?php echo $wuxing_7['shiliao']; ?></textarea>
</div>  
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">穿衣住行</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="g_mu_zhuxing"><?php echo $wuxing_7['zhuxing']; ?></textarea>
</div>
            </div>
        </div>

   <div class="tab-pane" id="tab-shui">
             <div class="row feature">
                <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_shui_yiyao"><?php echo $wuxing_8['yiyao']; ?></textarea>

</div>
                   <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">情志调养</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_shui_qingzhi"><?php echo $wuxing_8['qingzhi']; ?></textarea>
  
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">锻炼养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_shui_duanlian"><?php echo $wuxing_8['duanlian']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">工作养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_shui_gongzuo"><?php echo $wuxing_8['gongzuo']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">食疗养生</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="g_shui_shiliao"><?php echo $wuxing_8['shiliao']; ?></textarea>
</div>  
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">穿衣住行</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="g_shui_zhuxing"><?php echo $wuxing_8['zhuxing']; ?></textarea>
</div>
            </div>
        </div>

   <div class="tab-pane" id="tab-huo">
             <div class="row feature">
                <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_huo_yiyao"><?php echo $wuxing_9['yiyao']; ?></textarea>

</div>
                   <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">情志调养</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_huo_qingzhi"><?php echo $wuxing_9['qingzhi']; ?></textarea>
  
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">锻炼养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_huo_duanlian"><?php echo $wuxing_9['duanlian']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">工作养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_huo_gongzuo"><?php echo $wuxing_9['gongzuo']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">食疗养生</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="g_huo_shiliao"><?php echo $wuxing_9['shiliao']; ?></textarea>
</div>  
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">穿衣住行</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="g_huo_zhuxing"><?php echo $wuxing_9['zhuxing']; ?></textarea>
</div>
            </div>
        </div>

   <div class="tab-pane" id="tab-tu">
             <div class="row feature">
                <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">医药咨询</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_tu_yiyao"><?php echo $wuxing_10['yiyao']; ?></textarea>

</div>
                   <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">情志调养</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_tu_qingzhi"><?php echo $wuxing_10['qingzhi']; ?></textarea>
  
</div>
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">锻炼养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_tu_duanlian"><?php echo $wuxing_10['duanlian']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">工作养生</span>
  <textarea type="text" class="form-control"  aria-describedby="basic-addon1" style=" height:100px;" name="g_tu_gongzuo"><?php echo $wuxing_10['gongzuo']; ?></textarea>
</div>  
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">食疗养生</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="g_tu_shiliao"><?php echo $wuxing_10['shiliao']; ?></textarea>
</div>  
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">穿衣住行</span>
  <textarea type="text" class="form-control" aria-describedby="basic-addon1" style=" height:100px;" name="g_tu_zhuxing"><?php echo $wuxing_10['zhuxing']; ?></textarea>
</div>
            </div>
        </div>

    </div>
    <div class="btn-group" role="group" aria-label="..." style="margin:10px 0px 0px 200px">
  
    <input type="submit" name="" value="确认修改"  class="btn btn-primary">
</div>
</form>
</div>
</div>


    </body>
</html>
