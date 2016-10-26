<?php
/**
 * @Author: anchen
 * @Date:   2016-06-03 18:57:55
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-10-11 14:49:54
 */
/*$my_route=new \think\Route();
$my_route->get('aa/:id','Order/makeorder');*/
/*
调试函数
 */
function pp($data){
    if(is_array($data)){
        echo '<pre>';
        var_dump($data);
    }else{
        echo $data;
    }
    exit;
}
/*
获得连接
model string 模型
is_html int 是否生成html
cate_id int 分类id
id  int 内容id
 */
    function real_url($model,$is_html=0,$cate_id=0,$id=0){
        if($is_html){
          if($cate_id){
            return "/{$model}/lists_".$cate_id.".html";
          }elseif($id){
            return "/{$model}/".$id.".html";
          }else{
            //return "/{$model}/index.html";
			return "/{$model}/lists.html";
          }
     
        }else{
          if($cate_id){
            return "/index/{$model}/lists/cate_id/".$cate_id.".html";
          }elseif($id){
            return "/index/{$model}/content/{$model}_id/".$id.".html";
			
          }else{
            //return "/index/{$model}/";
			return "/index/{$model}/lists.html";

          }
        }
    } 
     /**
     * 得到当前url
     */
   
   /*
   得到ip
    */
    function get_iP() { 
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        $realip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) { 
        $realip = $_SERVER['HTTP_CLIENT_IP']; 
    } else { 
        $realip = $_SERVER['REMOTE_ADDR']; 
        } 
        return $realip; 
    }

 /**
     * 获取access_token
     * @param array shop_config商城配置，包括微信配置
     * @return string
     */

 /**
     * 获取signPackage
     * @param array shop_config商城配置，包括微信配置
     * @return string
     */
 

   
    /*
     $nonceStr = create_rond_str();
     $timestamp = time();
  $string = "accesstoken=$accesstoken&appid=$appid&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

    $addrSignStr= sha1($string);

$addrSign = array(
      "appId"     => $appid,
      "nonceStr"  => $nonceStr,
      "timestamp" => $timestamp,
      "url"       => $url,
      "addrSign" => $addrSignStr,
      "rawString" => $string
    );
return $addrSign;*/


/*
获得随机字符串
length 字符串长度
 */
  
 /**
     * 获取jsapi_ticket
     * @param array shop_config商城配置，包括微信配置
     * @return string
     */
  
  /*
  从微信服务器上下载远程图片
  url 远程图片url地址
   */
   
 /**
     * 获取url返回信息
     * @param string url api地址
     * @param string data 传送的数据
     * @return string
     */
 
  function get_url(){
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        return $url;
    }
 
 
 
/*
生成多级目录
dir 路径
index 是否生成index.html文件
 */
 function make_dir($dir, $index = true) {
        $res = true;
        if(!is_dir($dir)) {
            $res = @mkdir($dir, 0777,true);
            $index && @touch($dir.'/index.html'); //表示在目录下生成index.html文件，防止别人目录形式访问
        }
        return $res;
    }
/*

 */

  /**
 * 生成翻页html代码
 * @param int $count总数
 * @param int $enum一页的数量
 * @param int $page 当前页数
 * @param string $url 当前的url
 * @param int $show_limit 除了头尾 中间显示的数量
 * @return string html代码
 */
function build_page($count,$enum,$page,$url,$show_limit=3){
  $fu=strstr($url,'?')?'&':'?';
  $pages=ceil($count/$enum);
  $page=$page>$pages?$pages:$page;
  $page=$page<1?1:$page;
  $html='';
if($pages<2)
        return $html;
  if($page==1){
   $html.='<span class="page_curr active-page">1</span>';
            if($pages>1){
                if($pages<=$show_limit){
                    for($i=2;$i<=$pages;$i++){
                        $html.='<a href="'.$url.$fu.'page='.$i.'">'.$i.'</a>';
                    }
                }else{
                    for($i=2;$i<=$show_limit;$i++){
                        $html.='<a href="'.$url.$fu.'page='.$i.'">'.$i.'</a>';
                    }
                     $html.='<span >...</span><a href="'.$url.$fu.'page='.$pages.'">'.$pages.'</a>';

                }
                $html.='<a href="'.$url.$fu.'page='.($page+1).'">下一页</a>';
            }
 
           
  }elseif ($page==$pages) {
            if($pages>1){
                 $html.='<a href="'.$url.$fu.'page='.($page-1).'">上一页</a>';
                $html.='<a href="'.$url.$fu.'page=1">1</a>';
               
                if($pages<=$show_limit){
                   
                    for($i=2;$i<$pages;$i++){
                        $html.='<a href="'.$url.$fu.'page='.$i.'">'.$i.'</a>';
                    }
                }else{
                    $start=$pages-$show_limit;
                     $html.='<span >...</span>';
                    for($i=$start;$i<$pages;$i++){

                        $html.='<a href="'.$url.$fu.'page='.$i.'">'.$i.'</a>';
                    }
                     

                }
            }

   $html.='<span class="page_curr active-page">'.$pages.'</span>';
  }else{
             $html.='<a href="'.$url.$fu.'page='.($page-1).'">上一页</a>';
   $html.='<a href="'.$url.$fu.'page=1">1</a>';
   if($show_limit>=($pages-2)){
    for($i=2;$i<$pages;$i++){
     if($i==$page){
      $html.='<span class="page_curr active-page ">'.$i.'</span>';
     }else{
      $html.='<a href="'.$url.$fu.'page='.$i.'">'.$i.'</a>';
     }
     
    }
   }else{
    $start=$page-floor($show_limit/2);
    $end=$show_limit+$start-1;
    if($start>2){
     $html.='<span >...</span>';
    }
    for($i=$start;$i<=$end;$i++){
     if($i==1) continue;
     if($i>=$pages) continue;
     if($i==$page){
      $html.='<span class="page_curr active-page ">'.$i.'</span>';
     }else{
      $html.='<a href="'.$url.$fu.'page='.$i.'">'.$i.'</a>';
     }
     
    }
   
    if($end<=($pages-2) ){
     $html.='<span >...</span>';
    }
   }
   $html.='<a href="'.$url.$fu.'page='.$pages.'">'.$pages.'</a>';
            $html.='<a href="'.$url.$fu.'page='.($page+1).'">下一页</a>';
  }
  return $html;
 }
