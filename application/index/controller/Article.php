<?php
namespace app\index\controller;
use app\index\controller\Pc;
use think\Request;
class Article extends Pc
{
 
 		 public $Model;
    public function _initialize(){
      parent::_initialize();
        $this->Model=new \app\index\model\Article();
    }
   	 
  
  
  
   public function lists(){
	   
	   
	   $cate_id = input('cate_id/d');
	   
	   $cate_list = $this->Model->get_cate_list();
	   
	 
	   
	 
	   $article = $this->Model->get_list(15,$cate_id);
	   
		   
		
	   
	   //$article_list = $this->Model->get_cat_article_list($cat_id);
	   
	  
	   
	   $this->assign('article_list', $article['list']);
	   
	   $this->assign('html_page', $article['html_page']);
	   $this->assign('cate_list',$cate_list);
	    
	   $cate_info=$this->Model->get_cate_info($cate_id);
		 

	   $this->assign('cate_info',$cate_info); 
	   
	   return $this->fetch();
	   }
  
   public function content(){
	   
	   
	   
	  
	   
	   
	   $cate_list = $this->Model->get_cate_list();
		
	   $article_id = input('article_id/d');
	   
	  
	   
	   $this->Model->add_click($article_id);
	   
	   
	  	 $article = $this->Model->get_article_info($article_id);
		 
		 
		  $pre = $this->Model->get_pre($article['cate_id'],$article['create_time']);
	   
	   	  $next = $this->Model->get_next($article['cate_id'],$article['create_time']);
		 
	     $this->assign('article',$article);
	   
	     $cate_info=$this->Model->get_cate_info($article['cate_id']);
	  
	     $this->assign('cate_info',$cate_info); 
	  
	     $this->assign('pre',$pre); 
		
		 $this->assign('next',$next); 
		
	     $this->assign('cate_list',$cate_list);

		
	   return $this->fetch();
	   }	
	   
   /*public function about_us(){
	   
	   $article_id = input('article_id/d')?input('article_id/d'):1;
	   
	   
	   
	   $article = $this->Model->get_article_info($article_id);
	   
	   $article_list = $this->Model->get_cate_article_list(8);
	   
	   
	   $cate=$this->Model->get_cate_info(8);
	   $this->assign('cate',$cate); 
	   
	   $this->assign('article',$article);
	   $this->assign('article_list',$article_list);
	   
	   return $this->fetch();
	   }*/	

}
