<?php
namespace app\index\controller;
use app\index\controller\Pc;
use think\Request;
use app\index\controller\Article;
class Products extends Pc{
	
	
 		 public $Model;
    public function _initialize(){
      parent::_initialize();
        $this->Model=new \app\index\model\Products();
    }
   	 
	
  public function index(){
	  

	  $products_list = $this->Model->get_list();
	  
	  
	  $this->assign('products_list',$products_list);
	  
	
	  return $this->fetch();
	
	  }
	  
	  
  public function lists(){
	  
	  
	    $cate_id = input('cate_id/d');
 	  
	   $cate_info=$this->Model->get_cate($cate_id);
	  
	   $products_list = $this->Model->get_list($cate_id,12);
	   
	   $cate_list = $this->Model->get_cate_list();

	   $this->assign('cate_list',$cate_list);
	   
   	  $this->assign('cate_info',$cate_info);
	  
	  $this->assign('products_list',$products_list);
	  
	
	  return $this->fetch();
	
	  
	  }
	  
	  
	
  public function content(){
	  
	  	  
	  $products_id = input('products_id/d'); 
	  
	  $products_info = $this->Model->get_info($products_id);
	   $cate_info=$this->Model->get_cate($products_info['cate_id']);
	    $cate_list = $this->Model->get_cate_list();

	    $this->assign('cate_info',$cate_info);
	  $this->assign('products_info',$products_info);
	   $this->assign('cate_list',$cate_list);
 	  return $this->fetch();
	 }
	

	




}
