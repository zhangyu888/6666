<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Imgtext extends Model
{

   /*
   查询用户
   article_id int 文章id
    */
    /*public function get_anli_info($anli_id){
        $anli_info=Db::name('anli')->find($anli_id);
        return $anli_info;
    }*/
	
	
	public function get_list($cate_id='',$limit='12'){
	
	if($cate_id){
		
	$where = "cate_id=$cate_id";}
	
	$list = db('imgtext')->where($where)->order('sort')->paginate($limit);
		
	return 	$list;
		
		
		
		
		
		}
  
  
    public function get_info($id){
		
        $info=db('imgtext')->where('imgtext_id',$id)->find();
        return $info;
    
	}

   public function get_cate_list(){
	   
	  $list = db('imgtext_cate')->select(); 
	   
	   
	  return $list;
	  
	   }
   public function get_cate($id){
	   
	   $cate = db('imgtext_cate')->where('cate_id',$id)->find(); 
	   
	   
	  return $cate; 
	   
	   }

	
	
	


  
}