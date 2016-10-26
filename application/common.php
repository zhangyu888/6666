<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
//调试函数
function ss($data){
    if(is_array($data)){
        echo '<pre>';
        var_dump($data);
		echo '</pre>';
    }else{
        echo $data;
    }
    exit;
}



function test($par){
	
	var_dump($par);
	
	exit;
	
	
	}
    function createdir($path){
    if (is_dir($path)){  //判断目录存在否，存在不创建
    }else{ //不存在创建
       $re=mkdir($path,0755,true); //第三个参数为true即可以创建多极目录
      if ($re){
          
       }else{
               echo "目录创建失败";
      }
    }
}

//分页函数 
function page($page,$total,$phpfile,$pagesize,$pagelen,$id){
    $pagecode = "";             //定义变量，存放分页生成的HTML
    $page = intval($page);  //避免非数字页码
    $total = intval($total);    //保证总记录数值类型正确
    if(!$total) return array(); //总记录数为零返回空数组
    $pages = ceil($total/$pagesize);    //计算总分页
    //处理页码合法性
    if($page<1) $page = 1;
    if($page>$pages) $page = $pages;
    //计算查询偏移量
    $offset = $pagesize*($page-1);
    
    $init = 1;
    $max = $pages;
    $pagelen = ($pagelen%2)?$pagelen:$pagelen+1;
    $pageoffset = ($pagelen-1)/2;
    if($page!=1){
        $lastpage='_'.($page-1);
        if($lastpage=='_1')
            $lastpage='';
        $pagecode.="<a href=\"".$id.".html\">首页</a>";//首页   
        $pagecode.="<a href=\"".$id.$lastpage.".html\"><font>上一页</font></a>";//上一页
    }
    //分页数大于页码个数时可以偏移
    if($pages>$pagelen){
    //如果当前页小于等于左偏移
        if($page<=$pageoffset){
            $init=1;
            $max = $pagelen;
        }else{                    //如果当前页大于左偏移
                                  //如果当前页码右偏移超出最大分页数
            if($page+$pageoffset>=$pages+1){
                $init = $pages-$pagelen+1;
            }else{
           //左右偏移都存在时的计算
                $init = $page-$pageoffset;
                $max = $page+$pageoffset;
            }
         }
    }
    //生成html
    for($i=$init;$i<=$max;$i++){
        if($i==$page){
            $pagecode.='<a id="dif">'.$i.'</a>';
        } else {
            if($i==1){
                $pagecode.="<a href=\"".$id.".html\">".$i."</a>";     
            }else{
                $pagecode.="<a href=\"".$id."_".$i.".html\">".$i."</a>";       //显示的几页
            }
        }
    }

    if($page!=$pages){
        $pagecode.="<a href=\"".$id."_".($page+1).".html\">下一页</a>";//下一页
        $pagecode.="<a href=\"".$id."_".$pages.".html\">尾页</a>"; //最后一页
    }

        return array('pagecode'=>$pagecode,'sqllimit'=>' limit '.$offset.','.$pagesize); //以数组的形式输出
} 