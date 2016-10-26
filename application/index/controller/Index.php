<?php
namespace app\index\controller;
use app\index\controller\Pc;
use think\Request;

class Index extends Pc
{
	public $Model;
    public function _initialize(){
      parent::_initialize();
        
		$this->Model=new \app\index\model\Index();
		
		
    }
	
	
  public function index(){
    	
	$article = new \app\index\model\Article();
      

	  $cases_list =  $this->Model->get_anli_list(8);
	  
	  $products_list =  $this->Model->get_pro_list(6);
	  
	  $slide_list =   $this->Model->get_slide_list(3);
	  
	  
      $cate_list = $article->get_cate_list();
	 
	 foreach($cate_list as $value){
		 
		 $article_list[] = $article->get_cate_article_list($value['cate_id'],5);
		 
		 }	
	 
	  //$article_list = $this->Model->get_cat_article_list($cat_id,5);
	 
	  $this->assign('slide_list',$slide_list);
	 	
	 	 $this->assign('products_list',$products_list);
	 
	   $this->assign('article_list',$article_list);
	   
	   $this->assign('cate_list',$cate_list);
	 
	  $this->assign('cases_list',$cases_list);
	 
	
	 return $this->fetch();
	 
	 
	 
  	}
   
}
