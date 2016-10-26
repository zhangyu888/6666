<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Article extends Model
{
public $config=[];

  /*
  设置商城配置
   */
  public function set_config($config){
    $this->config=$config;
  }

   /*
   查询用户
   article_id int 文章id
    */
    public function get_article_info($article_id){
        $article_info=db('article')->where('article_id',$article_id)->find();
        return $article_info;
    }
	
	public function get_cate_article_list($cate_id,$limit=''){
		
	$article_list=db('article')->where('cate_id',$cate_id)->where('status',1)->order('create_time desc')->limit($limit)->select();
        
		return $article_list;
		
		}
	
	public function get_cate_list($cate_pid=0){
		
		
		 $cate_list=db('article_cate')->where('cate_pid',$cate_pid)->select();
        
		return $cate_list;
		
		
		}
	
	public function get_cate_info($cate_id=''){
		
		$cate = db('article_cate')->where('cate_id',$cate_id)->find();
		
		
		return $cate;
		}
	
	
	
	
	public function get_list($limit=15,$cate_id=''){
		
		if($cate_id){
			
		 $where = "cate_id=$cate_id and status=1";	
			
			}else{
				
		 $where = "status=1";			
				}	
		
		 $page=isset($_GET['page'])?intval($_GET['page']):1;
          //$url=$_SERVER['REQUEST_URI'];//获得当前url地址，最好去掉page参数
          $url=get_url(); 
          $url=preg_replace('/[&?]page=\d+/','',$url); 
          //echo $url;exit;
          $count=db('article')->where($where)->count();
           $enum=$limit;  //每页多少个
            $pages=ceil($count/$enum);  //总页数
            $page=$page>$pages?$pages:$page;   //修正页数
            $page=$page<1?1:$page; //修正页数
            $start_page=($page-1)*$enum; //起始数
            $limit=" {$start_page},{$enum}";  //sql语句
            $html_page=build_page($count,$enum,$page,$url);  //生成html代码

       $list=db('article')->where($where)->order('create_time desc')->limit($limit)->select();
	   
	  

        return ["list"=>$list,"html_page"=>$html_page];
    
		

		
		}	
	
	public function add_click($article_id){
		
		db('article')->where('article_id',$article_id)->setInc('click');

		
		}
	public function get_pre($cate_id,$create_time){
		
		$pre = db('article')->where('cate_id',$cate_id)->where('create_time', '>',$create_time)->order('create_time','desc')->find();
		
		return $pre;
		
		}
	
	public function get_next($cate_id,$create_time){

	   $next = db('article')->where('cate_id',$cate_id)->where('create_time','<',$create_time)->order('create_time','desc')->find();
	
	   return  $next;
	
	}
	
	
	
	
	
	
	
	
	
	
	
  
}