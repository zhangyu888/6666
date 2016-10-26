<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\xampp\htdocs\xiangyuan\public/../application/admin\view\report\sale_report.html";i:1468915872;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>common.css">
<link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>main.css?11">
 <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL; ?>bootstrap.min.css">
        <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>highcharts/highcharts.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>highcharts/modules/exporting.js"></script>
 <script type="text/javascript" src="<?php echo ADMIN_JS_URL; ?>bootstrap.min.js"></script>
    </head>
    <body>
            
        <div class="panel panel-info">
  <div class="panel-heading">当前位置是：报表统计->销售报表</div>
  <div class="panel-body">           
            <table class="form_table" border="0" cellpadding="0" cellspacing="0">

                <tr><td></td>
                  <td><select onchange="$(this).val()==3?$('#month').show():''" id="show_type" class="input-text lh25"><option value="1">按季度</option><option value="2">按月份</option><option value="3">每月报表</option></select></td><td>
              
                  <select id="month" class="input-text lh25" style="display:none">
                  <option value="1">1月</option>
                  <option value="2">2月</option>
                  <option value="3">3月</option>
                  <option value="4">4月</option>
                  <option value="5">5月</option>
                  <option value="6">6月</option>
                  <option value="7">7月</option>
                  <option value="8">8月</option>
                  <option value="9">9月</option>
                  <option value="10">10月</option>
                  <option value="11">11月</option>
                  <option value="12">12月</option>
                  </select>
                  </td>
                      <td>
                  <input type="text" id="year" class="input-text lh25" size="20" value="<?php echo $year; ?>" placeholder="年份">&nbsp;&nbsp;</td>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;<input id="sel" type="button" onclick="showBB()" value="查询" class="ext_btn ext_btn_submit"></td>
                  </tr></table>   
                 
            
    <script type="text/javascript">
    showBB(2);

    function showBB(){

var month=0;
var showType=$("#show_type").val();
if(showType==3){
    month=$("#month").val();
}
var currYear=$("#year").val();
    $.ajax({ 
        type: 'POST', 
        url: '/admin/report/ajax_sale_report',
        dataType:'json',
        data:{"show_type":showType,"year":currYear,"month":month},
        success:function(data){
          console.log(data);
           var dataNum=[];
            var dataMoney=[];
                var xArr=data.x_arr;
                var dayArr=data.days;
                var lg=xArr.length;
                 console.log(dayArr[0]);
              
                for(var i=0;i<lg;i++){
                dataNum.push(dayArr[i].xsNum);
                dataMoney.push(dayArr[i].xsMoney);
            }
     
                $('#container').highcharts({                   //图表展示容器，与div的id保持一致
                chart: {
                    type: 'line'                         //指定图表的类型，默认是折线图（line）
                },
                title: {
                    text: currYear+'年销售额走势图'      //指定图表标题
                },
                xAxis: {
                    categories: xArr   //指定x轴分组
                },
                yAxis: {
                    title: {
                        text: '销售额'                  //指定y轴的标题
                    }
                },
                series: [{                                 //指定数据列
                    name: '销售额',                          //数据列名
                    data: dataMoney                        //数据
                }]
            });
                //订单报表
             /* $('#container2').highcharts({                   //图表展示容器，与div的id保持一致
                chart: {
                    type: 'line'                         //指定图表的类型，默认是折线图（line）
                },
                title: {
                    text: currYear+'年订单数量走势图'      //指定图表标题
                },
                xAxis: {
                    categories: xArr   //指定x轴分组
                },
                yAxis: {
                    title: {
                        text: '订单数量'                  //指定y轴的标题
                    }
                },
                series: [{                                 //指定数据列
                    name: '订单数量',                          //数据列名
                    data: dataNum                        //数据
                }]
            });*/
   
        },
        error:function(){
            alert('出错a');
        }
    });

}
</script>

<div id="container" style="min-width:800px;height:400px;">
</div>
</div>
    </body>
</html>