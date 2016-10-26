<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Products extends Model
{


	public function get_list($cate_id='',$limit='12'){
	
	if($cate_id){
		
	$where = "cate_id=$cate_id";}
	
	$products_list = db('products')->where($where)->order('sort')->paginate($limit);
		
	return 	$products_list;
		
		
		
		
		
		}
  
  
    public function get_info($products_id){
		
        $products_info=db('products')->where('products_id',$products_id)->find();
        return $products_info;
    
	}

   public function get_cate_list(){
	   
	  $list = db('products_cate')->select(); 
	   
	   
	  return $list;
	  
	   }
   public function get_cate($id){
	   
	   $cate = db('products_cate')->where('cate_id',$id)->find(); 
	   
	   
	  return $cate; 
	   
	   }

  
  
}